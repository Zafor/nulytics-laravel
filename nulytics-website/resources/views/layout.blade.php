<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nulytics - Digital Marketing, POS System, Web Development, E-commerce</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/nu_logo.ico">
    <link rel="apple-touch-icon" href="images/nu_logo.jpg">

    <!-- Google font (font-family: 'Roboto', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- Google font (font-family: 'Roboto Condensed', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/plugins.css">
    <link rel="stylesheet" href="/css/style.css">

    <!-- Color Variation -->
    <link rel="stylesheet" href="/css/color-variations.css">


    <!-- Cusom css -->
    <link rel="stylesheet" href="/css/custom.css">

    <!-- Modernizer js -->
    <script src="/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
     
		 
	 

    <!-- Add your site or application content here -->

     

    <!-- Main wrapper -->
    <div class="wrapper sidemenu-wrapper" id="wrapper">

        <!-- Side Header Triggered -->
        <aside class="header header-sidemenu sticky-header d-none d-lg-block">
            <div class="header-sidemenu-inner">
                <div class="header-sidemenu-inner-inside">
                    <div class="logo">
                        <a href="/">
                            <img src="images/logo.png" alt="header logo" style="width: 200px">
                        </a>
                    </div>
                    <nav class="menu">
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li class="cr-dropdown">
                                <a href="#">Services</a>
                                <ul>
                                    <li><a href="digital">Digital Marketing</a></li>
                                    <li><a href="website">Website Development</a> </li>
                                    <li><a href="ecommerce"> E-commerce Solution</a></li>
                                    <li><a href="mobileapps"> Mobile Apps</a></li>
                                    <li><a href="hardwareit">Hardware & IT Support</a> </li>
                                    <li><a href="motiongraphics">Motion Graphics</a> </li>
                                </ul>                             
                            </li>
                             <li >
                                <a href="products">Products</a>
                            </li>
                            <li>
                                <a href="about">About us</a>
                            </li>
                            <li>
                                <a href="contact">Contact us</a>
                            </li>
                            <li>
                                <a href="faq">FAQ</a>
                            </li>
                            
                        </ul>
                                                    
                    </nav>
                   
                    <div class="address">
                        <span>
                            <a href="tel:+8801846016766">+88 01846 016766</a>
                        </span>
                        <span>
                            <a href="mailto:info@nulytics.com">info@nulytics.com</a>
                        </span>
                    </div>
                    <div class="social-icons">
                        <ul>
                            <li class="facebook">
                                <a href="https://www.facebook.com/nulyticsBD/">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="youtube">
                                <a href="https://www.youtube.com/channel/UCd5EEWqvIil938u7k8hey7A">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li class="instagram">
                                <a href="https://www.instagram.com/nulytics/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li class="linkedin">
                                <a href="https://www.linkedin.com/company/nulytics/">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!--// Side Header Triggered -->

        <div class="sidemenu-wrapper-body">

            <!-- Header -->
            <header class="header header-style-1 bg-white fixed-header d-block d-lg-none">

                <div class="container d-none d-lg-block">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-inner">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="images/logo/logo-secondary-dark.png" alt="logo secondary dark">
                                    </a>
                                </div>
                               <nav class="menu">
                        <ul>
                            <li>
                                <a href="index">Home</a>
                            </li>
                            <li class="cr-dropdown">
                                <a href="services">Services</a>                      
                            </li>
                             <li >
                                <a href="products">Products</a>
                            </li>
                            <li>
                                <a href="about">About us</a>
                            </li>
                            <li>
                                <a href="contact">Contact us</a>
                            </li>
                            <li>
                                <a href="faq">FAQ</a>
                            </li>
                            
                        </ul>
                                                    
                    </nav>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu-wrapper">
                    <div class="container d-block d-lg-none">
                        <div class="mobile-menu clearfix">
                            <a class="mobile-logo" href="index.html">
                                <img src="images/logo/logo-secondary-light.png" alt="mobile logo">
                            </a>
                            
                    </div>
                </div>
                <!-- //Mobile Menu -->

            </header>
            <!-- //Header -->

            @yield('content')

            <!-- Footer Area -->
            <footer id="footer" class="footer-area">

                <!-- Footer Top Area -->
                <div class="footer-top-area bg-dark-light section-padding-sm">
                    <div class="container">
                        <div class="footer-widgets widgets">
                            <div class="row">

                                <div class="col-xl-4 col-md-6 col-12">
                                    <!-- Single Widget -->
                                    <div class="single-widget footer-widget-about">
                                        <a href="index.html">
                                            <img src="images/logo.png" alt="footer logo">
                                        </a>
                                        <p>long established fact that a reader will be distracted by the readable content by
                                            the readable content established fact that</p>
                                    </div>
                                    <!--// Single Widget -->

                                    <!-- Single Widget -->
                                    <div class="single-widget widget-newsletter">
                                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&id=05d85f18ef" method="post" class="newsletter-widget-form">
                                            <input type="email" placeholder="Your Email">
                                            <button type="submit" class="cr-btn cr-btn-sm">
                                                <span>Subscribe</span>
                                            </button>
                                        </form>
                                    </div>
                                    <!--// Single Widget -->
                                </div>

                                <div class="col-xl-2 col-md-6 col-12">
                                    <!-- Single Widget -->
                                    <div class="single-widget widget-quick-links">
                                        <h5 class="footer-widget-title">QUICK LINK</h5>
                                        <ul>
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>
                                                <a href="about-us.html">About Us</a>
                                            </li>
                                            <li>
                                                <a href="blog-fullwidth.html">Blog Pages</a>
                                            </li>
                                            <li>
                                                <a href="contact-us.html">Quick Contact</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <!--// Single Widget -->
                                </div>

                                <div class="col-xl-3 col-md-6 col-12">
                                    <!-- Single Widget -->
                                    <div class="single-widget widget-latest-blog">
                                        <h5 class="footer-widget-title">Latest Blog</h5>
                                        <ul>
                                            <li>
                                                <a href="blog-details.html" class="widget-latest-blog-thumb">
                                                    <img src="images/blog/footer-latest-blog/latest-blog-thumb-1.png" alt="footer latest blog">
                                                </a>
                                                <div class="widget-latest-blog-content">
                                                    <h6>
                                                        <a href="blog-details.html">Some patience for the modern market</a>
                                                    </h6>
                                                    <div class="widget-latest-blog-meta">
                                                        <span>21 Aug 2017</span>
                                                        <span>By
                                                            <a href="blog-fullwidth.html">Admin</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="blog-details.html" class="widget-latest-blog-thumb">
                                                    <img src="images/blog/footer-latest-blog/latest-blog-thumb-2.png" alt="footer latest blog">
                                                </a>
                                                <div class="widget-latest-blog-content">
                                                    <h6>
                                                        <a href="blog-details.html">Patience for the modern market</a>
                                                    </h6>
                                                    <div class="widget-latest-blog-meta">
                                                        <span>21 Aug 2017</span>
                                                        <span>By
                                                            <a href="blog-fullwidth.html">Admin</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="blog-details.html" class="widget-latest-blog-thumb">
                                                    <img src="images/blog/footer-latest-blog/latest-blog-thumb-3.png" alt="footer latest blog">
                                                </a>
                                                <div class="widget-latest-blog-content">
                                                    <h6>
                                                        <a href="blog-details.html">Some patience the modern market & new Generation</a>
                                                    </h6>
                                                    <div class="widget-latest-blog-meta">
                                                        <span>21 Aug 2017</span>
                                                        <span>By
                                                            <a href="blog-fullwidth.html">Admin</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--// Single Widget -->
                                </div>

                                <div class="col-xl-3 col-md-6 col-12">
                                    <!-- Single Widget -->
                                    <div class="single-widget widget-quick-contact">
                                        <h5 class="footer-widget-title">Quick Contact</h5>
                                        <ul>
                                            <li>
                                                <span>Phone</span>
                                                <p>
                                                    <a href="tel:+8801846016766">+88 01846 016766 (BD)</a>
                                                </p>
                                                <p>
                                                    <a href="tel:+17816401317">+1 (781) 640-1317 (US)</a>
                                                </p>                                                
                                            </li>
                                            <li>
                                                <span>Email</span>
                                                <p>
                                                    <a href="mailto:info@nulytics.com">info@nulytics.com</a>
                                                </p>
                                                
                                            </li>
                                            <li>
                                                <span>Bangladesh office</span>
                                                <p>Flat A2, House 71, Road 17/A, Block E, Banani, Dhaka 1213, Bangladesh</p>
                                            </li>
                                            <li>
                                                <span>US office</span>
                                                <p>Lexington, MA 02421</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--// Single Widget -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--// Footer Top Area -->

                <!-- Footer Bottom Area -->
                <div class="footer-bottom-area bg-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <ul class="footer-social">
                                    <li>
                                        <a href="https://www.facebook.com/nulyticsBD/">Facebook</a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/nulytics/">Instagram</a>
                                    </li>
                                   
                                    <li>
                                        <a href="https://www.linkedin.com/company/nulytics/">Linkedin</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="col-lg-4">

                                <p class="footer-copyright">Copyright &copy;
                                    <a href="https://nulytics.com/">Nulytics BD Ltd.</a> 
                                    <script type="text/javascript">
                                      document.write(new Date().getFullYear());
                                    </script>. 
                                    All Right Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Footer Bottom Area -->

            </footer>
            <!-- //Footer Area -->

        </div>

    </div>
    <!-- //Main wrapper -->

    <!-- JS Files -->
    <script src="/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/active.js"></script>
    <script src="/js/scripts.js"></script>
</body>

</html>