@extends('layout')

@section('content')

         <!-- Breacrumb Area -->
         <div class="breadcrumb-area-web" data-black-overlay="7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="cr-breadcrumb text-center">
                            <h1>Website Development</h1>                            
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
                                <img src="images/service/website-branding.jpg" alt="service thumb">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="pg-service-details">
                                <div class="small-title">
                                    <h4>Service Summary</h4>
                                </div>
                                <p>Anybody can make websites. But your business is more than a pretty logo. Your story is uniquely yours - what inspired you to start this venture, what are your company’s vision and goals? We look at the broad spectrum of business goals and connect the dots into categories for a cohesive experience. Our inhouse web development team is well versed in design, UX, UI, SEO, WordPress and databases. Talk to us and you will see how comprehensive our mindsets are: we think of pathways of possibilities for your business in e-Commerce, social media integration, 3rd party integration and customization. One last thing: mobile platforms! We do them too.</p>
                                
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
                                    <img src="images/service-features/custom-websites.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Custom Websites</a>
                                    </h4>
                                    <p>We create custom websites rather than using templates. Our designers will design your websites first and with your approval we create the modern looking website for you and your business.</p>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="service service-style-4 text-center">
                                <div class="service-image">
                                    <img src="images/service-features/responsive-websites.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">Responsive Websites</a>
                                    </h4>
                                    <p>The modern websites are responsive. We always provide responsive web solutions so that your clients have a uninterrupted experience!</p>
                                </div>
                            </div>
                        </div>
                        <!--// Signle Service -->

                        <!-- Signle Service -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="service service-style-4 text-center">
                                <div class="service-image">
                                    <img src="images/service-features/wordpress-integration.jpg" alt="Service Thumb">
                                </div>
                                <div class="service-content">
                                    <h4>
                                        <a href="">WordPress Integration</a>
                                    </h4>
                                    <p>Wordpress is currently most popular CMS in the web community. It helps you speed up your digital business process. We provide 360 degree solution of WordPress for your business!</p>
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