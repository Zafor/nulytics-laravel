@extends('layout')


@section('content')

 <!-- Breacrumb Area -->
 <div class="breadcrumb-area-contact" data-black-overlay="7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="cr-breadcrumb text-center">
                            <h1>Contact Us</h1>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Breacrumb Area -->

        <!-- Page Content -->
        <main class="page-content">

            <!-- Contact Us Area -->
            <div class="pg-contact-us-area">

                <!-- Contact Page Details -->
                <div class="pg-contact-details bg-grey section-padding-sm mobile-mt-0">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-quick-contact text-center">
                                    <i class="bi bi-phone"></i>
                                    <h5>Phone Number</h5>
                                    <p>
                                        <a href="tel:+8801846016766">+880 1846016766 (BD)</a>
                                        <a href="tel:+17816401317">+1(781)640-1317 (US)</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-quick-contact text-center">
                                    <i class="bi bi-envelop"></i>
                                    <h5>E-Mail Address</h5>
                                    <p>
                                        <a href="mailto:info@nulytics.com">info@nulytics.com</a>
                                        
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="single-quick-contact text-center">
                                    <i class="bi bi-location-pointer"></i>
                                    <h5>Bangladesh Office</h5>
                                    <p>Flat A2, House 71, Road 17/A, Block E, Banani, Dhaka 1213, Bangladesh</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Contact Page Details -->

                <!-- Contact Page Form and Map -->
                <div class="pg-contact-form-map-wrapper bg-white section-padding-lg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="pg-contact-form pg-contact-form-2 mr-0 mr-lg-3">
                                    <div class="small-title">
                                        <h2>Contact Form</h2>
                                        <p>Send us your thoughts!</p>
                                    </div>
                                    <form id="contact-form" action="" method="post">
                                        <div class="row no-gutters">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-input">
                                                    <input type="text" name="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-input">
                                                    <input type="email" name="email" placeholder="E-mail">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="single-input">
                                                    <input type="text" name="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-input">
                                                    <textarea name="message" cols="10" rows="4" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-input">
                                                    <button class="cr-btn cr-btn-round" type="submit">
                                                        <span>Send Now</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="pg-contact-map-wrapper">
                                    <div class="small-title">
                                        <h2>Contact Map</h2>                                        
                                    </div>
                                    <div class="contact-map">
                                        <div class="contact-google-map" id="google-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d383.7370744902211!2d90.40869070805562!3d23.792168868680278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1579084445889!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Contact Page Form and Map -->

            </div>
            <!--// Contact Us Area -->

            

        </main>
        <!--// Page Content -->


@endsection