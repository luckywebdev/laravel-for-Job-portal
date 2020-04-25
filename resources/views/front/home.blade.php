@extends('front.layout.front-app')

@section('content')
    <!-- Intro Banner
    ================================================== -->
    <div class="intro-banner dark-overlay big-padding" data-background-image="images/396r68vr65wq45q8w9.jpg">

        <div class="container">

            <!-- Intro Headline -->
            <div class="row padding-top-21 padding-bottom-61">
                <div class="col-md-12">
                    <div class="row banner-headline-alt">
                        <div class="col-8">
                            <h3>Hire Freelancers for Anything, Anytime</h3>
                            <span>Sit back and relax. We'll do the hard work for you.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-banner-search-form margin-top-95">

                        <!-- Search Field -->
                        <div class="intro-search-field">
                            <label for ="intro-keywords" class="field-title ripple-effect">Tell us what you need done</label>
                            <input id="intro-keywords" type="text" placeholder="Job Title">
                        </div>

                        <!-- Search Field -->
                        <div class="intro-search-field">
                            <select class="selectpicker default margin-bottom-0" id="categoryID" multiple data-max-options="2" data-size="7" title="Select at least 1 Category" data-live-search="true">
                                @forelse($categories as $category)
                                    <option value="{{ $category->slug }}"> {{ $category->name }}</option>
                                @empty
                                    <option value=""> @lang('messages.noCategoryFound')</option>
                                @endforelse
                            </select>
                        </div>

                        <!-- Button -->
                        <div class="intro-search-button">
                            <button class="button ripple-effect" onclick="search()">Post Job</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="row icongroup">
                <div class="col lineup">
                    <div class="clearfix iconset">
                        <span class="material-icons-new outline-local_gas_station icon-white"></span>
                        <span class="mls"> We Can Fill Your Tank</span>
                    </div>
                </div>
                <div class="col lineup">
                    <div class="clearfix iconset">
                        <span class="icon-line-awesome-filter"></span>
                        <span class="mls"> Get an Oil Change</span>
                    </div>
                </div>
                <div class="col lineup">
                    <div class="clearfix iconset">
                        <span class="icon-line-awesome-shopping-cart"></span>
                        <span class="mls"> Pick up Groceries Every Week</span>
                    </div>
                </div>
                <div class="col lineup">
                    <div class="clearfix iconset">
                        <span class="icon-line-awesome-paint-brush"></span>
                        <span class="mls"> Paint a Room</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Video Container -->
        <div class="video-container" data-background-image="images/home-video-background-poster.jpg">
            <video loop autoplay muted>
                <source src="images/home-video-background.mp4" type="video/mp4">
            </video>
        </div>

    </div>

    <!-- Content
    ================================================== -->
    <!-- Category Boxes -->
    <div class="section margin-top-65 margin-bottom-65">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <div class="section-headline centered margin-bottom-15">
                        <h3>Popular Job Categories</h3>
                    </div>

                    <!-- Category Boxes Container -->
                    <div class="categories-container">

                        <!-- Category Box -->
                        <a href="{{ route('front.search',['roadside-assistance']) }}" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-road"></i>
                            </div>
                            <div class="category-box-content">
                                <h3>Roadside Assistance</h3>
                                <p>Gas Delivery Anywhere, Tire Change, Towing, Lockouts & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="{{ route('front.search',['auto-care-maintenence']) }}" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-bus"></i>
                            </div>
                            <div class="category-box-content">
                                <h3>Auto Care & Maintenence</h3>
                                <p>Car Wash, Detailing, Repairs, Modifications & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="{{ route('front.search',['removalist']) }}" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-truck"></i>
                            </div>
                            <div class="category-box-content">
                                <h3>Removalists</h3>
                                <p>Movers, Shovel Snow, Rake Leaves & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="{{ route('front.search',['gardening-landscaping']) }}" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-leaf"></i>
                            </div>
                            <div class="category-box-content">
                                <h3>Gardening & Landscaping</h3>
                                <p>Shovel Snow, Rake Leaves, Mow Lawn, Weed Garden, Water Plants & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="{{ route('front.search',['personal-shopper']) }}" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-feather-shopping-bag"></i>
                            </div>
                            <div class="category-box-content">
                                <h3>Personal Shopper</h3>
                                <p>Weekly Grocery & Shopping Runs, Return Purchases & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="{{ route('front.search',['handyman-services']) }}" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-wrench"></i>
                            </div>
                            <div class="category-box-content">
                                <h3>Handyman</h3>
                                <p>Installations, Repairs, Assembly & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="{{ route('front.search',['photographer']) }}" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-image"></i>
                            </div>
                            <div class="category-box-content">
                                <h3>Photographer</h3>
                                <p>Darketing Analyst, Social Profile Admin & More</p>
                            </div>
                        </a>

                        <!-- Category Box -->
                        <a href="{{ route('front.search',['photographer']) }}" class="category-box">
                            <div class="category-box-icon">
                                <i class="icon-line-awesome-tree"></i>
                            </div>
                            <div class="category-box-content">
                                <h3>Decorating & Event Planning</h3>
                                <p>Event Coordinator, Decorators & More</p>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Category Boxes / End -->

    <!-- Features Jobs -->
    <div class="section gray padding-top- padding-bottom-">
        <!-- Infobox -->
        <div class="text-content">
            <div class="container">
                <!-- Section Headline -->
                <div class="row margin-bottom-35">
                    <div class="col-12">
                        <!-- Section Headline -->
                        <div class="section-headline margin-top-0 margin-bottom-35">
                            <h3 class="serve-head">Need a <span class="theme">freelancer</span> for your industry? Look no further.</h3>
                        </div>
                    </div>
                </div>
                <div class="row margin-bottom-20">
                    <div class="col-md-3 col-sm-6 margin-bottom-20">
                        <img src="images/buildings/328yrc.png" class="buildings margin-bottom-15" />
                        <div class="benefits-head">Home Owners</div>
                        <div class="benefits-head-">who need contractors and service providers for renovations, property maintenance and cleaning.</div>
                    </div>
                    <div class="col-md-3 col-sm-6 margin-bottom-20">
                        <img src="images/buildings/0j3yd8ehaui.png" class="buildings margin-bottom-15" />
                        <div class="benefits-head">Renters</div>
                        <div class="benefits-head-">who are looking for the best deals on end of lease cleaners and furniture movers.</div>
                    </div>
                    <div class="col-md-3 col-sm-6 margin-bottom-20">
                        <img src="images/buildings/ashpens23.png" class="buildings margin-bottom-15" />
                        <div class="benefits-head">Small Business Owners</div>
                        <div class="benefits-head-">who compare prices on tax, accounting, graphic design, photography and more.</div>
                    </div>
                    <div class="col-md-3 col-sm-6 margin-bottom-20">
                        <img src="images/buildings/309823yrnc93.png" class="buildings margin-bottom-15" />
                        <div class="benefits-head">Agents & Builders</div>
                        <div class="benefits-head-">who are in search of the most competitive quotes from trusted licensed contractors.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Infobox / End -->
    </div>
    <!-- Featured Jobs / End -->

    <!-- Photo Section -->
    <div class="photo-section" data-background-image="images/home/m4-2pt4kw.jpg">

        <!-- Infobox -->
        <div class="text-content white-font">
            <div class="container">
                <!-- Section Headline -->
                <div class="row margin-bottom-20">
                    <div class="col-12">
                        <!-- Section Headline -->
                        <div class="section-headline centered">
                            <h2 class="dt1">Some Things You Want To Know</h2>
                        </div>
                    </div>
                </div>

                <div class="row margin-bottom-70">
                    <div class="col-md-3 col-sm-6 margin-bottom-20">
                        <div class="benefits-head"><i class="icon-feather-award"></i> Verification Badges</div>
                        <div class="benefits-head-">Badges help verify users identity and qualifications. Users can have all or none and can be verified when viewing offers or profiles.</div>
                    </div>
                    <div class="col-md-3 col-sm-6 margin-bottom-20">
                        <div class="benefits-head"><i class="icon-feather-bar-chart"></i> How Much Can I Make?</div>
                        <div class="benefits-head-">Your salary depends on you. You can make $5 or $500,000+. Remember, you are your work.</div>
                    </div>
                    <div class="col-md-3 col-sm-6 margin-bottom-20">
                        <div class="benefits-head"><i class="icon-feather-heart"></i> Donations</div>
                        <div class="benefits-head-">We rely on donations to keep our platform free with a low commission rate. Your donation will also help deliver our mobile app.</div>
                    </div>
                    <div class="col-md-3 col-sm-6 margin-bottom-20">
                        <div class="benefits-head"><i class="icon-feather-cloud-drizzle"></i> Insurance</div>
                        <div class="benefits-head-">Having insurance eases the worry of mishaps. Clients & freelancers can obtain insurance from a company of their choice.</div>
                    </div>
                </div>

                <div class="row margin-bottom-30">
                    <div class="center">Why taskapron is different? Click me and lets see.</div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <a href="#about" class="arrow">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Infobox / End -->

    </div>
    <!-- Photo Section / End -->


    <!-- Photo Section -->
    <div class="section background-theme padding-top-60 padding-bottom-75">
        <div class="white-font">
            <div class="container">
                <!-- Section Headline -->
                <div class="row margin-bottom-50">
                    <div class="col-12">
                        <!-- Section Headline -->
                        <div class="section-headline section-headline-white centered margin-top-0 margin-bottom-35">
                            <h3 class="dt2 margin-bottom-0">Change is Inevitable. Change is Constant.</h3>
                            <div class="margin-bottom-15">- Benjamin Disraeli</div>
                            <div>Make money doing the things you love</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 margin-bottom-30">
                        <div class="benefits-head">No Hidden Fees <i class="icon-feather-tag"></i></div>
                        <div class="benefits-head-">taskapron has an 11% commission on all completed jobs. This is the only fee you will ever pay.</div>
                    </div>
                    <div class="col-md-4 col-sm-6 margin-bottom-30">
                        <div class="benefits-head">Earn Cashback <i class="icon-feather-shopping-bag"></i></div>
                        <div class="benefits-head-">Clients get 1% Cash Back for every job completed successfully.</div>
                    </div>
                    <div class="col-md-4 col-sm-6 margin-bottom-30">
                        <div class="benefits-head">No Minimums <i class="icon-feather-percent"></i></div>
                        <div class="benefits-head-">You get paid when we do. Payments are released after clients either leaves feedback, manually releases, or 48 hours passes.</div>
                    </div>

                    <div class="col-md-4 col-sm-6 margin-bottom-30">
                        <div class="benefits-head">Immediate Assistance <i class="icon-feather-radio"></i></div>
                        <div class="benefits-head-">Stuck and need roadside assistance? Post a job for a reasonable rate and get help within minutes.</div>
                    </div>
                    <div class="col-md-4 col-sm-6 margin-bottom-30">
                        <div class="benefits-head">Advanced Dashboard <i class="icon-feather-sliders"></i></div>
                        <div class="benefits-head-">With our scheduler you'll see all of your jobs in one place day by day with detailed analytics.</div>
                    </div>
                    <div class="col-md-4 col-sm-6 margin-bottom-30">
                        <div class="benefits-head">Secured Payments <i class="icon-feather-shield"></i></div>
                        <div class="benefits-head-">All jobs are prepaid and remain in escrow until complete. You will make and receive payments using PayPal.</div>
                    </div>

                    <div class="col-md-4 col-sm-6 margin-bottom-30">
                        <div class="benefits-head">The taskapron Guarantee <i class="icon-feather-link"></i></div>
                        <div class="benefits-head-">taskapron guarantees that we as a company will never charge freelancers above an 11% commission.</div>
                    </div>
                    <div class="col-md-4 col-sm-6 margin-bottom-30">
                        <div class="benefits-head">Truely Transparent <i class=""></i></div>
                        <div class="benefits-head-">No more hidden fees or charges for leads and freelancers keep 100% of their tips.</div>
                    </div>
                    <div class="col-md-4 col-sm-6 margin-bottom-30">
                        <div class="benefits-head">You're Truely Independent <i class=""></i></div>
                        <div class="benefits-head-">This platform allows you to be the true independent contractor you are. You control when and where you want to work.</div>
                    </div>
                </div>
                <!-- Infobox / End -->
            </div>
        </div>
    </div>
    <!-- Photo Section / End -->


    <!-- Membership Plans -->
    <div id="about" class="section padding-top-60 padding-bottom-75">
        <div class="container">
            <div class="row">

                <div class="col-xl-12">
                    <!-- Section Headline -->
                    <div class="section-headline centered margin-top-0 margin-bottom-35">
                        <h3>Never Pay For Leads Again</h3>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4">
                    <!-- Icon Box -->
                    <div class="icon-box with-line">
                        <!-- Icon -->
                        <div class="icon-box-circle">
                            <div class="icon-box-circle-inner">
                                <i class="icon-feather-unlock"></i>
                                <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                            </div>
                        </div>
                        <h3>Truely Free Offers</h3>
                        <p>Tired of paying to get business? With taskapron clients post what they need done and freelancers give their best offer free of charge.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4">
                    <!-- Icon Box -->
                    <div class="icon-box with-line">
                        <!-- Icon -->
                        <div class="icon-box-circle">
                            <div class="icon-box-circle-inner">
                                <i class="icon-feather-layers"></i>
                                <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                            </div>
                        </div>
                        <h3>No More Credit Plans</h3>
                        <p>Say goodbye to lead credits. Businesses and freelancers won't have to worry about being charged even when the job isn't accepted.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4">
                    <!-- Icon Box -->
                    <div class="icon-box">
                        <!-- Icon -->
                        <div class="icon-box-circle">
                            <div class="icon-box-circle-inner">
                                <i class="icon-feather-pocket"></i>
                                <div class="icon-box-check"><i class="icon-material-outline-check"></i></div>
                            </div>
                        </div>
                        <h3>No Additional Charges</h3>
                        <p>Quote on as many jobs as you want without being charged any additional fees whether you are a business or freelancer.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Membership Plans / End-->

@endsection
@section('footerjs')
    <script>
        function search(){
            var id = $('#categoryID').val();

            var key = $('#intro-keywords').val();
//             console.log(key);return;

            if(id.length > 0 && key) {
                id = id.length > 1 ? id[0] + '&' + id[1] : id;
                var url = "{{ route('front.listing.create',[':id', ':key']) }}";
                url = url.replace(':id', id);
                url = url.replace(':key', key);

            }
            else if(id.length > 0) {
                id = id.length > 1 ? id[0] + '&' + id[1] : id;
                var url = "{{ route('front.listing.create',[':id']) }}";
                url = url.replace(':id', id);
            }
            else if(key) {
                var url = "{{ route('front.listing.create',[':id', ':key']) }}";
                url = url.replace(':id', 'all');
                url = url.replace(':key', key);
            }
            else {
                var url = "{{ route('front.listing.create') }}";
            }

            window.location.href = url;
        }
        @if($user)
            $('.mark-as-read').click(function () {
                console.log('test');
                var url = "{{ route('user.message.readAllUnread',[':id']) }}";
                url = url.replace(':id', {{ $user->id }});
                $.easyAjax({
                    url: url,
                    type: "GET",
                    container: "#small-dialog-10",
                    success: function (response) {
                        $('span.unreadMessageCount').text(0);
                    }
                });
            });
            @endif
        $('.status-switch label.user-invisible').on('click', function(){
            console.log('invisible');
            var status = '0';
            var url = "{{ route('user.message.update-status',[':status']) }}";
            url = url.replace(':status', status);
            $.ajax({
                url: url,
                type: "GET",
                container: ".user-details",
            });
            $('.status-indicator').addClass('right');
            $('.status-switch label').removeClass('current-status');
            $('.user-invisible').addClass('current-status');
            $('.user-avatar').toggleClass('status-online');
        });

        $('.status-switch label.user-online').on('click', function(){
            console.log('online');
            var status = '1';
            var url = "{{ route('user.message.update-status',[':status']) }}";
            url = url.replace(':status', status);
            $.ajax({
                url: url,
                type: "GET",
                container: ".user-details",
            });
            $('.status-indicator').removeClass('right');
            $('.status-switch label').removeClass('current-status');
            $('.user-online').addClass('current-status');
            $('.user-avatar').toggleClass('status-online');
        });
    </script>
@endsection
