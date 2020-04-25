<div class="popup-tab-content" id="tab">
    <!-- Welcome Text -->
    <div class="padding-bottom-0">

        <div class="row">
            <div class="col-12">
                <div class="modal-main">View All Offers</div>
            </div>
        </div>
        <div class="row margin-top-10">
            <div class="col-12">
                <div class="modal-description">All offers are managed here.</div>
            </div>
        </div>
        <div class="row margin-top-20">
            <div class="col-6">
                <div class="modal-head">Start Date</div>
                <div class="modal-head-">{{ $offerDetail->created_at->format('d.m.Y') }}</div>
            </div>
            <div class="col-6">
                <div class="modal-head">Order NO.</div>
                <div class="modal-head-">{{ $offerDetail->order_no }}</div>
            </div>
        </div>
        <div class="margin-top-10">
            <div class="js-accordion">
                <div class="js-accordion-item">
                    <div class="accordion-custom-btn js-accordion-header"><i class="icon-feather-users"></i> View Freelancers & Offers <span class="badge-count">{{ count($offerDetail->offer) }}</span></div>
                    <div class="row-group accordion-body js-accordion-body">
                        <div class="margin-top-10 user-group-border">
                            <div class="user-group-border-">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="modal-head">Freelancer</div>
                                    </div>
                                    <div class="col-4">
                                        <div class="modal-head">Details</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="modal-head">Bid</div>
                                    </div>
                                </div>
                                @forelse($offerDetail->offer as $offer)
                                    <div class="row">
                                    <div class="col-6">
                                        <a href="" class="modal-note">
                                            <span class="user-avatar status-online"><img src="{{ $offer->user->image() }}" alt=""></span>
                                            <span class="ellipsis">{{ ucwords($offer->user->full_name) }}
															<i class="icon-feather-bookmark"></i>
														</span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <div class="modal-note"><a href="javascript:;" onclick="openOfferModal('{{ $offer->listing_id }}', '{{ $offer->user_id }}'); return false;" class="popup-with-zoom-anim">View Offer</a></div>
                                    </div>
                                    <div class="col-2">
                                        <div class="modal-note green">${{ $offer->amount }}</div>
                                    </div>
                                </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="margin-top-20">
            <div class="row">
                <div class="col-6">
                    <div class="modal-head">Task</div>
                </div>
                <div class="col-3">
                    <div class="modal-head">Budget</div>
                </div>
                <div class="col-3">
                    <div class="modal-head">Date</div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="modal-head- ellipsis">{{ ucwords($offerDetail->job_title) }}</div>
                </div>
                <div class="col-3">
                    <div class="modal-head- green">${{ $totalBudget }}</div>
                </div>
                <div class="col-3">
                    <div class="modal-head-">{{ $offerDetail->created_at->format('d.m.Y') }}</div>
                </div>
            </div>
        </div>

        <div class="margin-top-0">

            <div class="js-accordion">
                <div class="js-accordion-item">
                    <div class="accordion-custom-btn js-accordion-header">View Milestones <i class="icon-feather-plus"></i></div>

                    <div class="row-group accordion-body js-accordion-body">
                        <div class="margin-top-10">
                            <div class="row">
                                <div class="col-6">
                                    <div class="modal-head">Milestones</div>
                                </div>
                                <div class="col-2">
                                    <div class="modal-head">Pay</div>
                                </div>
                                <div class="col-2">
                                    <div class="modal-head">In</div>
                                </div>
                                <div class="col-2">
                                    <div class="modal-head">Out</div>
                                </div>
                            </div>
                            @forelse($offerDetail->budgetDetails as $budgetDetail)
                                <div class="row">
                                    <div class="col-6">
                                        <div class="modal-sub">{{ $budgetDetail->date_time->format('D, F dS, Y') }}</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="modal-sub-">${{ $budgetDetail->budget }}</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="modal-sub-">5:16pm</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="modal-sub-">6:16pm</div>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row margin-top-10">
            <div class="col-12">
                <div class="modal-head">Location</div>
                <div class="modal-head- ellipsis">{{$offerDetail->address}}, {{$offerDetail->city}}, {{$offerDetail->state}} {{$offerDetail->zip_code}}</div>
            </div>
        </div>
        <div class="padding-bottom-0 add-border-top">
            <div class="add-border-top-">
                <div class="row">
                    <div class="col-4">
                        <div class="modal-head">Offers</div>
                        <div class="modal-head- green">{{ count($offerDetail->offer) }}</div>
                    </div>
                    <div class="col-4">
                        <div class="modal-head">Cashback</div>
                        <div class="modal-head- green cashback">${{ $totalBudget*1/100 }}</div>
                    </div>
                    <div class="col-4">
                        <div class="modal-head">Total Budget <i class="icon-feather-info" title="Includes budget plus budget increase" data-tippy-placement="top"></i></div>
                        <div class="modal-head- green total">${{ $totalBudget }}</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function openOfferModal(listing, user){

        var url = "{{ route('listing.offer-detail',[':listing', ':user_id']) }}";
        url = url.replace(':listing', listing);
        url = url.replace(':user_id', user);
        $.easyAjax({
            url: url,
            type: "GET",
            container: "#small-dialog-10",
            success: function (response) {
                $('#modalData').html(response.view)
            }
        });
    }

    var accordion = (function(){

        var $accordion = $('.js-accordion');
        var $accordion_header = $accordion.find('.js-accordion-header');

        // default settings
        var settings = {
            // animation speed
            speed: 400,

            // close all other accordion items if true
            oneOpen: false
        };

        return {
            // pass configurable object literal
            init: function($settings) {
                $accordion_header.on('click', function() {
                    accordion.toggle($(this));
                });

                $.extend(settings, $settings);

                // ensure only one accordion is active if oneOpen is true
                if(settings.oneOpen && $('.js-accordion-item.active').length > 1) {
                    $('.js-accordion-item.active:not(:first)').removeClass('active');
                }

                // reveal the active accordion bodies
                $('.js-accordion-item.active').find('> .js-accordion-body').show();
            },
            toggle: function($this) {

                if(settings.oneOpen && $this[0] != $this.closest('.js-accordion').find('> .js-accordion-item.active > .js-accordion-header')[0]) {
                    $this.closest('.js-accordion')
                        .find('> .js-accordion-item')
                        .removeClass('active')
                        .find('.js-accordion-body')
                        .slideUp();
                }

                // show/hide the clicked accordion item
                $this.closest('.js-accordion-item').toggleClass('active');
                $this.next().stop().slideToggle(settings.speed);
            }
        };
    })();
    $(document).ready(function(){
        accordion.init({ speed: 300, oneOpen: true });
        });

</script>
