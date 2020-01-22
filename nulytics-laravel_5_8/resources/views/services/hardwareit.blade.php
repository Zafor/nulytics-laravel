@extends('layout')


@section('content')

       
            <!-- Breacrumb Area -->
            <div class="breadcrumb-area-hardware" data-black-overlay="7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="cr-breadcrumb text-center">
                            <h1>Hardware & IT Support</h1>                            
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
                                <img src="images/service/hardware-branding.jpg" alt="service thumb">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="pg-service-details">
                                <div class="small-title">
                                    <h4>Service Summary</h4>
                                </div>
                                <p>We provide all kind of POS solution required Hardware such as Desktop Computer, Laptop, Barcode scanner, Barcode Printer, POS Printer, Laser Printer, Inkjet Tank Printer, Thermal POS Roll, Dot Matrix POS Roll, Laser Printer Toner, POS printer ribbon, DOT matrix Printer. All kinds of computer and laptop accessories are available as well. We also provide Laptop, Desktop and industrial server (Brands: Lenovo, HP, DELL. IBM, ASUS, ACER)</p>
                                
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
                                    <img src="images/service-features/latest-products.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Latest Products</a>
                                    </h4>
                                    <p>With enough vendors at our doorstep you can get the latest hadware/devices for yourself or your business. We get the market trend and user trend for you to have what you want.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="service service-style-4 text-center">
                                <div class="service-image">
                                    <img src="images/service-features/warranty.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Warranty</a>
                                    </h4>
                                    <p>Warranty matters! We agree with you and that is why we support you with product warranties for all types of products.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="service service-style-4 text-center">
                                <div class="service-image">
                                    <img src="images/service-features/after-sales-service.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">After Sales Service</a>
                                    </h4>
                                    <p>After sales service is why our customers like us much. We understand you can bump into some troubles with new technology. We are here for you to get started and we definitely give you free trainings!</p>
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