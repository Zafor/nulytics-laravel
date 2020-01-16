@extends('layout')

@section('content')
           
            <!-- Breacrumb Area -->
        <div class="breadcrumb-area-dm" data-black-overlay="7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="cr-breadcrumb text-center">
                            <h1>Digital Marketing</h1>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Breacrumb Area -->


        <!-- Page Content -->
        <main class="page-content">

            <!-- Service Details -->
            <div class="pg-service-area section-padding-lg bg-white">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-lg-12">
                            <h2 class="pg-service-title">Branding</h2>
                        </div> -->
                        <div class="col-lg-7">
                            <div class="pg-service-thumbs">
                                <img src="images/digitalmarketing-one.png" alt="service thumb">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="pg-service-details">
                                <div class="small-title">
                                    <h4>Service Summary</h4>
                                </div>
                                <p>Digital Marketing is a core component of an expanding business. Can your online business grow just by using a state-of-the-art expensive platform? You have innovative ideas that are waiting to see the light of day. But sharing those ideas, growing your online business and building brand loyalty will require a comprehensive strategy. Multiple variables will dictate growth and will involve proactive research, analysis and constant curation of social media platforms. We optimize and streamline this process. Yes, we do the buzzwords too: Content Marketing, Online Analytics, Digital Strategy, Paid Search, Pay-Per-Click (PPC) advertising, Social Media Optimized Boosting, SEO, etc.</p>
                                
                            </div>
                           
                        </div>
                    </div>
                </div>

                <div class="container related-services">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="small-title">
                                <h3 style="text-align: center;">Service Features</h3>
                            </div>
                        </div>
                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="service service-style-4 text-center">
                                <div class="service-image">
                                    <img src="images/service-features/social-media.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Social Media</a>
                                    </h4>
                                    <p>Now, social media has the most people and your product gets most exposure here. 
                                    We make sure the highest activity period to make your product reach the original customers.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="service service-style-4 text-center">
                                <div class="service-image">
                                    <img src="images/service-features/media-buying.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Media Buying</a>
                                    </h4>
                                    <p>The generic reach hardly covers your original clients. A paid promotion ensures your product reach.
                                    And we have no limit for Media Buying. You can use as much you want.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="service service-style-4 text-center">
                                <div class="service-image">
                                    <img src="images/service-features/seo.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Search Engine Optimization</a>
                                    </h4>
                                    <p>SEO(Seach Engine Optimization) allows you to get found in a single Google search! We use most used
                                    keywords by the users to make sure your web page reachs the top position of the search!</p>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->
                    </div>
                </div>

                @include('partials.client-choice')

                 @include('partials.call-to-action')

        </main>
        <!--// Page Content -->

@endsection

