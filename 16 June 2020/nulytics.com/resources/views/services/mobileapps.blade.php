@extends('layout')

@section('content')

         
            <!-- Breacrumb Area -->
            <div class="breadcrumb-area-apps" data-black-overlay="7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="cr-breadcrumb text-center">
                            <h1>Mobile Apps</h1>                            
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
                                <img src="images/service/mobileapps-branding.jpg" alt="service thumb">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="pg-service-details">
                                <div class="small-title">
                                    <h4>Service Summary</h4>
                                </div>
                                <p>Use smartphone apps to leverage technology and increase client base. We have our smartphone app development team ready to support your systems and services.</p>
                                
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
                                    <img src="images/service-features/modern-ui.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Modern UI</a>
                                    </h4>
                                    <p>The mobile apps are powered by modern ui. The pixel perfect designs let the users have the best experience.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="service service-style-4 text-center">
                                <div class="service-image">
                                    <img src="images/service-features/android-ios.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Android/iOS</a>
                                    </h4>
                                    <p>Be it Android or iOS, we design it same for the users to get the seamless experience.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="service service-style-4 text-center">
                                <div class="service-image">
                                    <img src="images/service-features/web-api.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Web API</a>
                                    </h4>
                                    <p>For data intensive web applications you have to build and use web api. Otherwise the application size will increase and a regular update will be required.</p>
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