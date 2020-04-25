<?php

namespace App\Http\Controllers\User;

use App\Classes\Reply;
use App\Http\Controllers\BaseController;
use App\Models\Listing;
use App\Models\ListingBudget;
use Carbon\Carbon;

class DashBoardController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->pageTitle = 'Dashboard';
        $this->postedListings = Listing::with([
                'budgetDetails' => function ($q) {
                    $q->orderBy('date_time')->with('shift');
                },
                'offer' => function ($q) {
                    $q->where('status', 'accepted')->with('user');
                }
            ])->whereMonth('created_at', '=', Carbon::now()->month)
            ->where('user_id', $this->user->id)
        // ->where('status', 'accepted')
        ->get();

        $this->myOffers = $this->user->acceptedOffers()->where('user_id', $this->user->id)
        ->get();

        $myListingsArr = [];
        foreach ($this->myOffers as $offer) {
            $listing = $offer->listing()->with(
                [
                    'budgetDetails' => function ($query) {
                        $query->orderBy('date_time')->with('shift');
                    }, 'offer' => function ($q) {
                        $q->where('status', 'accepted')->with('user');
                    }
                ]
            )->whereMonth('created_at', '=', Carbon::now()->month)->first();
            if ($listing !== null) {
                array_push($myListingsArr, $listing);
            }
        }
        $this->myListings = collect(array_values($myListingsArr));

        return view('user/dashboard/dashboard', $this->data);
    }

    public function listingsByMonth()
    {
        $this->postedListings = Listing::with([
            'budgetDetails' => function ($q) {
                $q->orderBy('date_time')->with('shift');
            },
            'offer' => function ($q) {
                $q->where('status', 'accepted')->with('user');
            }
        ])
        ->whereMonth('created_at', '=', request()->month+1)
        ->whereYear('created_at', '=', request()->year)
        ->where('user_id', $this->user->id)
        // ->where('status', 'accepted')
        ->get();

        $this->myOffers = $this->user->acceptedOffers()->where('user_id', $this->user->id)
        ->get();

        $myListingsArr = [];
        foreach ($this->myOffers as $offer) {
            $listing = $offer->listing()->with(
                [
                    'budgetDetails' => function ($query) {
                        $query->orderBy('date_time')->with('shift');
                    }, 'offer' => function ($q) {
                        $q->where('status', 'accepted')->with('user');
                    }
                ]
            )
            ->whereMonth('created_at', request()->month+1)
            ->whereYear('created_at', request()->year)
            ->first();
            if ($listing !== null) {
                array_push($myListingsArr, $listing);
            }
        }
        $this->myListings = collect(array_values($myListingsArr));

        return Reply::dataOnly(['postedListings' => $this->postedListings, 'myListings' => $this->myListings]);
    }
}
