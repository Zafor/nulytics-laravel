@extends('layout')

@section('content')

        <!-- Breacrumb Area -->
        <div class="breadcrumb-area-ecom" data-black-overlay="7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="cr-breadcrumb text-center">
                            <h1>E-commerce Solution</h1>                            
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
                                <img src="images/service/e-commerce-branding.jpg" alt="service thumb">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="pg-service-details">
                                <div class="small-title">
                                    <h4>Service Summary</h4>
                                </div>
                                <p>You online store is open 24/7/365. Selling online to a digital consumer (B2C or B2B) requires familiarity with e-commerce best practices. Segmentation, target marketing, scaling, key performance indicators (KPIs) to measure success, optimizing conversions -- these should all be part of strategic planning. We look at every touchpoint so your portfolio of products connects with, speaks to, and informs your customers. Inspire them and they will buy.</p>
                                
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
                                    <img src="images/service-features/fastest-response.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Fastest Response</a>
                                    </h4>
                                    <p>The online shoppers are impatient. They switch tabs within seconds. Your website needs to load faster else they will just move away from the contents you want them to see. We make sure you have best cache so that the web pages load faster.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="service service-style-4 text-center">
                                <div class="service-image">
                                    <img src="images/service-features/minimal-design.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Minimal Design</a>
                                    </h4>
                                    <p>Minimal design ensures less distraction. The visitors can scroll smoothly and buy the product they want without much cluttering. Minimal design keeps it simple and gives the visitors a refreshing experience.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="service service-style-4 text-center">
                                <div class="service-image">
                                    <img src="images/service-features/woocommerce-integration.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">WooCommerce Integration</a>
                                    </h4>
                                    <p>WooCommerce integration allows you to maintain your store in a very organized manner.
                                     You can see the SKU, product sales report, client engagement, product performance all at once. This gives you a better idea how to improve your business.</p>
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