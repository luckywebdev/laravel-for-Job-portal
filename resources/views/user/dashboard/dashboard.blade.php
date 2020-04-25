@extends('user.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="margin-bottom-10">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 margin-bottom-20">
                <h3>Dashboard</h3>
                <div class="crate-note margin-top-5">Welcome, {{ $user->first_name }}</div>
            </div>
            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12">
                <div class="row center-field">
                    <div class="col-md-6 col-sm-6 no-padding">
                        <div>Rating</div>
                        <div class="star-rating" data-rating="{{ $user->userRating() }}"></div>
                    </div>
                    <div class="col-md-3 col-sm-3 no-padding">
                        <div class="headline-sub">Total Paid</div>
                        <div class="headline-sub-">$1,520,450</div>
                    </div>
                    <div class="col-md-3 col-sm-3 no-padding">
                        <div class="headline-sub">Total Earned</div>
                        <div class="headline-sub-">$500,650</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-sm-12 hide-under-1221px">
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark fixed-breadcrumbs pull-right">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Dashboard</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="margin-bottom-30">
        <div class="crate">
            <div class="crate-inner crate-padding add-white add-radius add-shadow">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-12 col-sm-12 d-flex justify-content-center align-items-center margin-bottom-20">
                        <div class="ctitle">Let's see what you have going on</div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-12 col-sm-12 d-flex justify-content-center align-items-center margin-bottom-30">
                        <div>
                            <div id="custom-cells"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="events-title">View Selected Events</div>
                        <div id="custom-cells-events" class="row">
                            <div class="col-8">
                                <p class="crate-calendar-title"></p>
                            </div>
                            <div class="col-4">
                                <strong class="pull-right"></strong>
                            </div>
                            <!-- <div>Select a day to get started</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 margin-bottom-40">
            <div class="crate">
                <div class="crate-inner crate-padding add-white add-radius add-shadow">
                    <div class="row">
                        <div class="col-3 center-vertical blue-icon">
                            <i class="icon-feather-tag crate-icon-centered"></i>
                        </div>
                        <div class="col-9">
                            <div class="crate-header ellipsis">Paid This Week</div>
                            <div class="crate-header-">$50,080</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 margin-bottom-40">
            <div class="crate">
                <div class="crate-inner crate-padding add-white add-radius add-shadow">
                    <div class="row">
                        <div class="col-3 center-vertical blue-icon">
                            <i class="icon-feather-truck crate-icon-centered"></i>
                        </div>
                        <div class="col-9">
                            <div class="crate-header ellipsis">Earned This Week</div>
                            <div class="crate-header-">$50,080</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 margin-bottom-40">
            <div class="crate">
                <div class="crate-inner crate-padding add-white add-radius add-shadow">
                    <div class="row">
                        <div class="col-3 center-vertical blue-icon">
                            <i class="icon-feather-navigation crate-icon-centered"></i>
                        </div>
                        <div class="col-9">
                            <div class="crate-header ellipsis">Weekly Cashback</div>
                            <div class="crate-header-">$500.80</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 margin-bottom-40">
            <div class="crate">
                <div class="crate-inner crate-padding add-white add-radius add-shadow">
                    <div class="row">
                        <div class="col-3 center-vertical blue-icon">
                            <i class="icon-feather-shopping-bag crate-icon-centered"></i>
                        </div>
                        <div class="col-9">
                            <div class="crate-header">Bookmarked</div>
                            <div class="crate-header-">{{ $user->bookmarks->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-sm-6 margin-bottom-20">
            <div class="crate add-radius add-shadow add-white">
                <div class="crate-head crate-custom">
                    <div class="row">
                        <div class="col">Jobs Assigned</div>
                        <div class="col"><a href="{{ route('user.listing.index') }}" class="button gray ripple-effect button-sliding-icon btn-addon">View All <i class="icon-feather-arrow-right"></i></a></div>
                    </div>
                </div>
                <div class="crate-inner">
                    <div class="row">
                        <div class="chart center">
                            <canvas class="liveupdate" width="150" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <div class="crate-foot crate-custom">
                    <div class="row">
                        <div class="col crate-blue"><i class="icon-feather-circle"></i> Assigned</div>
                        <div class="col crate-orange"><i class="icon-feather-circle"></i> Cancelled</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 margin-bottom-20">
            <div class="crate add-radius add-shadow add-white">
                <div class="crate-head crate-custom">
                    <div class="row">
                        <div class="col">Jobs Earned</div>
                        <div class="col"><a href="{{ route('user.listing.index') }}" class="button gray ripple-effect button-sliding-icon btn-addon">View All <i class="icon-feather-arrow-right"></i></a></div>
                    </div>
                </div>
                <div class="crate-inner">
                    <div class="row">
                        <div class="chart center">
                            <canvas class="liveupdate1" width="150" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <div class="crate-foot crate-custom">
                    <div class="row">
                        <div class="col crate-blue"><i class="icon-feather-circle"></i> Earned</div>
                        <div class="col crate-orange"><i class="icon-feather-circle"></i> Cancelled</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="crate">
                <div class="crate-inner crate-padding add-radius add-shadow add-white crate- margin-bottom-20">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 center-vertical white-text">
                            <i class="icon-feather-shopping-bag crate-icon-centered margin-right-10"></i>
                            <div class="crate-header crate-border-right- padding-right-20">Awaiting Payment</div>
                        </div>
                        <div class="col-md-4 col-sm-4 no-padding">
                            <div class="crate-header- white-text center">5</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crate">
                <div class="crate-inner crate-padding add-white add-radius add-shadow margin-bottom-20">
                    <div class="row">
                        <div class="col-8 center-vertical blue-icon">
                            <i class="icon-feather-shopping-bag crate-icon-centered margin-right-10"></i>
                            <div class="crate-header">Disputes</div>
                        </div>
                        <div class="col-4">
                            <div class="crate-header- center">{{ $user->disputes()->where('status', 'pending')->get()->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crate">
                <div class="crate-inner crate-padding add-white add-radius add-shadow margin-bottom-20">
                    <div class="row">
                        <div class="col-8 center-vertical blue-icon">
                            <i class="icon-feather-shopping-bag crate-icon-centered margin-right-10"></i>
                            <div class="crate-header">Cancellations</div>
                        </div>
                        <div class="col-4">
                            <div class="crate-header- center">{{ $user->disputes()->where('status', 'accepted')->get()->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="crate">
                <div class="crate-inner crate-padding add-white add-radius add-shadow margin-bottom-20">
                    <div class="row">
                        <div class="col-8 center-vertical blue-icon">
                            <i class="icon-feather-shopping-bag crate-icon-centered margin-right-10"></i>
                            <div class="crate-header">Reviews</div>
                        </div>
                        <div class="col-4">
                            <div class="crate-header- center">{{ $user->recievedFeedbacks->count() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('models')
    <!-- Apply for a job popup
================================================== -->
    <div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

        <!--Tabs -->
        <div class="sign-in-form">

            <ul class="popup-tabs-nav">
                <li><a href="#tab">Add Note</a></li>
            </ul>

            <div class="popup-tabs-container">

                <!-- Tab -->
                <div class="popup-tab-content" id="tab">

                    <!-- Welcome Text -->
                    <div class="welcome-text">
                        <h3>Do Not Forget 😎</h3>
                    </div>

                    <!-- Form -->
                    <form method="post" id="add-note">

                        <select class="selectpicker with-border default margin-bottom-20" data-size="7" title="Priority">
                            <option>Low Priority</option>
                            <option>Medium Priority</option>
                            <option>High Priority</option>
                        </select>

                        <textarea name="textarea" cols="10" placeholder="Note" class="with-border"></textarea>

                    </form>

                    <!-- Button -->
                    <button class="button full-width button-sliding-icon ripple-effect" type="submit" form="add-note">Add Note <i class="icon-material-outline-arrow-right-alt"></i></button>

                </div>

            </div>
        </div>
    </div>
    <!-- Apply for a job popup / End -->
@endsection

@section('footerjs')
    <!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
    <script>
        // Snackbar for user status switcher
        $('#snackbar-user-status label').click(function() {
            Snackbar.show({
                text: 'Your status has been changed!',
                pos: 'bottom-center',
                showAction: false,
                actionText: "Dismiss",
                duration: 3000,
                textColor: '#fff',
                backgroundColor: '#383838'
            });
        });

        $('.profilepicker').datepicker({
            language: 'en',
            inline: true,
        })

        $(function () {
            let dateArr = myDateArr = finalDateArr = [];
            let postedListings = {!! $postedListings !!}
            let myListings = {!! $myListings !!}
            function getListings(month, year) {
                $.easyAjax({
                    url: '{{ route('listings.byMonth') }}',
                    type: 'GET',
                    data: {month, year},
                    success: function (response) {
                        postedListings = response.postedListings;
                        myListings = response.myListings;

                        dateArr = response.postedListings.map(listing => {
                            return (new Date(listing.created_at)).toLocaleDateString();
                        });
                        myDateArr = response.myListings.map(listing => {
                            return (new Date(listing.created_at)).toLocaleDateString();
                        })
                        finalDateArr = dateArr.concat(myDateArr.filter((date, pos) => dateArr.indexOf(date) !== pos))
                        eventDates = finalDateArr;

                        $picker.data('datepicker').update();
                    }
                })
            }

            dateArr = postedListings.map(listing => {
                return (new Date(listing.created_at)).toLocaleDateString();
            });
            myDateArr = myListings.map(listing => {
                return (new Date(listing.created_at)).toLocaleDateString();
            })
            finalDateArr = dateArr.concat(myDateArr.filter((date, pos) => dateArr.indexOf(date) !== pos))
            var eventDates = finalDateArr,
                $picker = $('#custom-cells'),
                $content = $('#custom-cells-events')
            console.log(finalDateArr);
            $picker.datepicker({
                language: 'en',
                showOtherMonths: false,
                toggleSelected: false,
                onChangeMonth: function (month, year) {
                    getListings(month, year);
                },
                onChangeView: function (view) {
                    if (view == 'days') {
                        var currentDate = new Date($picker.data('datepicker').currentDate)
                        var month = currentDate.getMonth();
                        var year = currentDate.getFullYear();
                        getListings(month, year);
                    }
                },
                onRenderCell: function (date, cellType) {
                    var currentDate = date.toLocaleDateString();

                    if (cellType == 'day' && eventDates.indexOf(currentDate) != -1) {
                        return {
                            html: date.getDate() + '<span class="dp-note"></span>'
                        }
                    }
                },
                onSelect: function (fd, date) {
                    var title = '', html = ''
                    if (date && eventDates.indexOf(date.toLocaleDateString()) != -1) {
                        var filtered = postedListings.filter(listing => {
                            return (new Date(listing.created_at)).getDate() == date.getDate();
                        });
                        var myListingsFiltered = myListings.filter(listing => {
                            return (new Date(listing.created_at)).getDate() == date.getDate();
                        });

                        if (filtered.length > 0) {
                            filtered.forEach(listing => {
                                let profileUrl = '';

                                if (listing.offer.length > 0) {
                                    profileUrl = '{{ route('user.profile.show', ':id') }}';
                                    profileUrl = profileUrl.replace(':id', listing.offer[0].user.id);
                                }

                                html += `
                                <div class="margin-bottom-10">
                                    <strong>${listing.job_title}</strong>
                                </div>
                                <div class="row margin-bottom-30">
                                    <div class="col-12 margin-bottom-5">
                                        Freelancer:
                                        ${listing.offer.length > 0 ?
                                            `<a href="${profileUrl !== '' ? profileUrl : 'javascript:;'}" target="_blank" class="pull-right">
                                                ${listing.offer[0].user.full_name}
                                            </a>`
                                            :
                                            `<span class="pull-right">N/A</span>`
                                        }
                                    </div>
                                    <div class="col-12 margin-bottom-5">
                                        Type:
                                        <span class="pull-right">
                                            ${listing.budget_details.length > 1 ? 'On-Going' : 'Temporary'}
                                        </span>
                                    </div>
                                </div>
                                <h5>Milestones</h5>
                                `
                                listing.budget_details.forEach(milestone => {
                                    html += `<div class="row margin-bottom-30">
                                        <div class="col-12 margin-bottom-5">
                                            Estimated arrival time:
                                            <span class="pull-right">
                                                ${(moment(milestone.date_time)).format('Do MMM, YYYY h:mma')}
                                            </span>
                                        </div>
                                        <div class="col-12 margin-bottom-5">
                                            Arrival time:
                                            <span class="pull-right">
                                                ${milestone.shift !== null ? moment(milestone.shift.start_date).format('Do MMM, YYYY h:mma') : 'Not Arrived Yet'}
                                            </span>
                                        </div>
                                        <div class="col-12 margin-bottom-5">
                                            Departure time:
                                            <span class="pull-right">
                                                ${milestone.shift !== null && milestone.shift.end_date !== null ? moment(milestone.shift.end_date).format('Do MMM, YYYY h:mma') : 'Not Departed Yet'}
                                            </span>
                                        </div>
                                        <div class="col-12 margin-bottom-5">
                                            Budget:
                                            <span class="pull-right">
                                                ${listing.offer.length > 0 ? '$'+milestone.budget : 'N/A'}
                                            </span>
                                        </div>
                                    </div>
                                    `;
                                });
                            });
                        }

                        if (myListingsFiltered.length > 0) {
                            myListingsFiltered.forEach(listing => {
                                let profileUrl = '';

                                if (listing.offer.length > 0) {
                                    profileUrl = '{{ route('user.profile.show', ':id') }}';
                                    profileUrl = profileUrl.replace(':id', listing.offer[0].user.id);
                                }

                                html +=`
                                <div class="margin-bottom-10">
                                    <strong>${listing.job_title}</strong>
                                </div>
                                <div class="row margin-bottom-30">
                                    <div class="col-12 margin-bottom-5">
                                        Freelancer:
                                        ${ listing.offer.length > 0 ?
                                            `<a href="${profileUrl !== '' ? profileUrl : '#'}" target="_blank" class="pull-right">
                                                ${listing.offer[0].user.full_name}
                                            </a>`
                                            :
                                            `<span class="pull-right">N/A</span>`
                                        }
                                    </div>
                                    <div class="col-12 margin-bottom-5">
                                        Type:
                                        <span class="pull-right">
                                            ${listing.budget_details.length > 1 ? 'On-Going' : 'Temporary'}
                                        </span>
                                    </div>
                                </div>
                                <h5>Milestones</h5>
                                `

                                listing.budget_details.map(milestone => {
                                    html += `
                                        <div class="row margin-bottom-30">
                                            <div class="col-12 margin-bottom-5">
                                                Estimated arrival time:
                                                <span class="pull-right">
                                                    ${(moment(milestone.date_time)).format('Do MMM, YYYY h:mma')}
                                                </span>
                                            </div>
                                            <div class="col-12 margin-bottom-5">
                                                Arrival time:
                                                <span class="pull-right">
                                                    ${milestone.shift !== null ? moment(milestone.shift.start_date).format('Do MMM, YYYY h:mma') : 'Not Arrived Yet'}
                                                </span>
                                            </div>
                                            <div class="col-12 margin-bottom-5">
                                                Departure time:
                                                <span class="pull-right">
                                                    ${milestone.shift !== null && milestone.shift.end_date !== null  ? moment(milestone.shift.end_date).format('Do MMM, YYYY h:mma') : 'Not Departed Yet'}
                                                </span>
                                            </div>
                                            <div class="col-12 margin-bottom-5">
                                                Budget:
                                                <span class="pull-right">
                                                    ${listing.offer.length > 0 ? '$'+milestone.budget : 'N/A'}
                                                </span>
                                            </div>
                                        </div>
                                        `
                                })
                            })
                        }
                        title = fd
                    }
                    else {
                        html += `
                            <p>No Jobs to Display.</p>
                        `;
                    }
                    $('strong', $content).html(title)
                    $('p', $content).html(html)
                }
            })
            var currentDate = new Date();
            $picker.data('datepicker').selectDate(new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate()))
        })

    </script>

    <script>
        Chart.defaults.global.defaultFontFamily = "Nunito";
        Chart.defaults.global.defaultFontColor = '#888';
        Chart.defaults.global.defaultFontSize = '14';

        new Chart(document.getElementsByClassName("liveupdate"), {
            type: 'doughnut',
            // The data for our dataset
            data: {
                labels: ["Assigned", "Cancelled"],
                // Information about the dataset
                datasets: [{
                    label: "Views",
                    backgroundColor: ["#2a41e8", "#FF9A19"],
                    data: [{{ $user->assignedListings()->count() }},{{ $user->cancelledListings()->count() }}],
                    pointRadius: 5,
                    pointHoverRadius:5,
                    pointHitRadius: 10,
                    pointBackgroundColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointBorderWidth: "2",
                }]
            },

            // Configuration options
            options: {
                elements: {
                    center: {
                        text: '{{ $user->assignedListings()->count() + $user->cancelledListings()->count() }}',
                        color: '#666', //Default black
                        fontStyle: 'Helvetica', //Default Arial
                        sidePadding: 15 //Default 20 (as a percentage)
                    }
                },
                layout: {
                    padding: 10,
                },

                legend: { display: false },
                title:  { display: false },

                scales: { display: false },

                tooltips: {
                    backgroundColor: '#333',
                    titleFontSize: 13,
                    titleFontColor: '#fff',
                    bodyFontColor: '#fff',
                    bodyFontSize: 13,
                    displayColors: false,
                    xPadding: 10,
                    yPadding: 10,
                    intersect: false
                }
            },
        });

        new Chart(document.getElementsByClassName("liveupdate1"), {
            type: 'doughnut',
            // The data for our dataset
            data: {
                labels: ["Earned", "Cancelled"],
                // Information about the dataset
                datasets: [{
                    label: "Views",
                    backgroundColor: ["#2a41e8", "#FF9A19"],
                    data: [{{ $user->acceptedOffers()->count() }},{{ $user->rejectedOffers()->count() }}],
                    pointRadius: 5,
                    pointHoverRadius:5,
                    pointHitRadius: 10,
                    pointBackgroundColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointBorderWidth: "2",
                }]
            },

            // Configuration options
            options: {

                elements: {
                    center: {
                        text: '{{ $user->acceptedOffers()->count() + $user->rejectedOffers()->count() }}',
                        color: '#666', //Default black
                        fontStyle: 'Helvetica', //Default Arial
                        sidePadding: 15 //Default 20 (as a percentage)
                    }
                },
                layout: {
                    padding: 10,
                },

                legend: { display: false },
                title:  { display: false },

                scales: { display: false },

                tooltips: {
                    backgroundColor: '#333',
                    titleFontSize: 13,
                    titleFontColor: '#fff',
                    bodyFontColor: '#fff',
                    bodyFontSize: 13,
                    displayColors: false,
                    xPadding: 10,
                    yPadding: 10,
                    intersect: false
                }
            },
        });

        Chart.pluginService.register({
            beforeDraw: function (chart) {
                if (chart.config.options.elements.center) {
                    //Get ctx from string
                    var ctx = chart.chart.ctx;

                    //Get options from the center object in options
                    var centerConfig = chart.config.options.elements.center;
                    var fontStyle = centerConfig.fontStyle || 'Arial';
                    var txt = centerConfig.text;
                    var color = centerConfig.color || '#000';
                    var sidePadding = centerConfig.sidePadding || 20;
                    var sidePaddingCalculated = (sidePadding/100) * (chart.innerRadius * 2)
                    //Start with a base font of 30px
                    ctx.font = "30px " + fontStyle;

                    //Get the width of the string and also the width of the element minus 10 to give it 5px side padding
                    var stringWidth = ctx.measureText(txt).width;
                    var elementWidth = (chart.innerRadius * 2) - sidePaddingCalculated;

                    // Find out how much the font can grow in width.
                    var widthRatio = elementWidth / stringWidth;
                    var newFontSize = Math.floor(20 * widthRatio);
                    var elementHeight = (chart.innerRadius * 2);

                    // Pick a new font size so it will not be larger than the height of label.
                    var fontSizeToUse = Math.min(newFontSize, elementHeight);

                    //Set font settings to draw it correctly.
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    var centerX = ((chart.chartArea.left + chart.chartArea.right) / 2);
                    var centerY = ((chart.chartArea.top + chart.chartArea.bottom) / 2);
                    ctx.font = fontSizeToUse+"px " + fontStyle;
                    ctx.fillStyle = color;

                    //Draw text in center
                    ctx.fillText(txt, centerX, centerY);
                }
            }
        });
    </script>
@endsection
