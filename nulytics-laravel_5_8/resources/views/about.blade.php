@extends('layout')



@section('content')

    
          <!-- Breacrumb Area -->
          <div class="breadcrumb-area-about" data-black-overlay="7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                        <div class="cr-breadcrumb text-center">
                            <h1>About Us</h1>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Breacrumb Area -->

        <!-- Page Content -->
        <main class="page-content">

            <!-- About Area -->
            <section id="about-area" class="about-area section-padding-lg bg-grey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 order-2 order-lg-1">
                            <div class="about-content" style="text-align:center">
                                <h2 >Our Mission</h2>
                                <p>Simply put, we want to make sure that our clients become the best in their respective sectors 
                                and we will be the ROI multiplier for your company.</p>                                
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 order-2 order-lg-1">
                            <div class="about-content" style="text-align:center">
                                <h2 >Our Vision</h2>
                                <p>We want to be the company that brings a smile and a nod of approval from clients because
                                 of the passion they witness in how we harmonize talent and flawless delivery.</p>                                
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <!--// About Area -->

       

            <!-- Skills Area -->
            <section id="skills-area" class="skills-area section-padding-lg bg-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="skills-area-content p-0">
                                <h2>Technology We Use</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have of
                                    Lorem Ipsum available, but the majority</p>

                                <div class="cr-progress-bar">
                                    <h6>Photoshop</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 85%; visibility: visible; animation-delay: 0.2s; animation-name: slideInLeft;"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        <span>85%</span>
                                    </div>
                                </div>

                                <div class="cr-progress-bar">
                                    <h6>Web Design</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 68%; visibility: visible; animation-delay: 0.2s; animation-name: slideInLeft;"
                                            aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                        <span>68%</span>
                                    </div>
                                </div>

                                <div class="cr-progress-bar">
                                    <h6>Marketing</h6>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: 76%; visibility: visible; animation-delay: 0.2s; animation-name: slideInLeft;"
                                            aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                                        <span>76%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="video-box m-0 ml-xl-5" data-tilt>
                                <div class="video-box-thumb">
                                    <img src="images/video-thumbs/video-thumb-1.jpg" alt="video-thumb">
                                </div>
                                <a href="https://www.youtube.com/watch?v=dk9uNWPP7EA" class="play-button">
                                    <i class="flaticon-play-button"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--//Skills Area  -->

            
        </main>
        <!--// Page Content -->

@endsection