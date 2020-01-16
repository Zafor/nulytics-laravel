@extends('layout')

@section('content')

        <!-- Breacrumb Area -->
        <div class="breadcrumb-area-mg" data-black-overlay="7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="cr-breadcrumb text-center">
                            <h1>Motion Graphics</h1>                            
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
                                <img src="images/service/motiongraphics-branding.jpg" alt="service thumb">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="pg-service-details">
                                <div class="small-title">
                                    <h4>Service Summary</h4>
                                </div>
                                <p>Consumers like visuals. Storytelling with visuals grabs the attention of people. Get ahead of competition by using the skills of our Motion Graphics team.</p>
                                
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
                                    <img src="images/service-features/storytelling.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">StoryTelling</a>
                                    </h4>
                                    <p>With storytelling, motion graphics help the consumers relate products to life.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="service service-style-4 text-center">
                                <div class="service-image">
                                    <img src="images/service-features/product-demo.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Product Demo</a>
                                    </h4>
                                    <p>A visual product demo helps people to take decision faster!</p>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="service service-style-4 text-center">
                                <div class="service-image">
                                    <img src="images/service-features/visual-features.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Visual Features</a>
                                    </h4>
                                    <p>Visual features help customers buy product with more confidence and helps the brand spread a genuine flavor!</p>
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