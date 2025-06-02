<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Strategy Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                {{-- <img src="/assets/img/logo.webp" alt=""> --}}
                <h1 class="sitename">GIZIPEDIA</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">Konten</a></li>
                    <li><a href="#services">Kalkulator</a></li>
                    <li><a href="#portfolio">Forum</a></li>
                    <li><a href="#team">Team</a></li>
                    <li class="dropdown"><a href="#"><span>Menu</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Makanan</a></li>
                            <li><a href="#">Resep</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Tentang Kami</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="btn-auth">
                <a class="btn-login" href="#about">Masuk</a>
                <a class="btn-register" href="#about">Daftar</a>
            </div>

        </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <div><span>Check Our</span> <span class="description-title">Services</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="service-header">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="service-intro">
                            <h2 class="service-heading">
                                <div>Innovative business</div>
                                <div><span>performance solutions</span></div>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="service-summary">
                            <p>
                                We integrate forward-thinking strategies, creative approaches, and state-of-the-art
                                technologies to deliver exceptional customer experiences that drive growth and
                                engage target markets.
                            </p>
                            <a href="services.html" class="service-btn">
                                View All Services
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card position-relative z-1">
                        <div class="service-icon">
                            <i class="bi bi-palette"></i>
                        </div>
                        <a href="service-details.html"
                            class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="service-details.html">
                                Creative <span>branding</span>
                            </a>
                        </h3>
                        <p>
                            Nulla facilisi. Maecenas eget magna neque. Suspendisse potenti. Curabitur eleifend nisi
                            non magna vulputate, vel condimentum libero tempus. Proin consectetur feugiat diam.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card position-relative z-1">
                        <div class="service-icon">
                            <i class="bi bi-gem"></i>
                        </div>
                        <a href="service-details.html"
                            class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="service-details.html">
                                Design <span>systems</span>
                            </a>
                        </h3>
                        <p>
                            Praesent euismod varius tellus, vel bibendum nunc interdum at. Donec vehicula diam vel
                            metus venenatis convallis. Aliquam erat volutpat. Etiam viverra magna sit amet.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card position-relative z-1">
                        <div class="service-icon">
                            <i class="bi bi-megaphone"></i>
                        </div>
                        <a href="service-details.html"
                            class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="service-details.html">
                                Marketing <span>strategies</span>
                            </a>
                        </h3>
                        <p>
                            Vivamus tempor velit id magna dictum, sed fermentum nisi faucibus. Integer nec pretium
                            sapien. Fusce tincidunt ligula et purus consequat, ac pellentesque nulla eleifend.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card position-relative z-1">
                        <div class="service-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <a href="service-details.html"
                            class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="service-details.html">
                                Digital <span>platforms</span>
                            </a>
                        </h3>
                        <p>
                            Cras fermentum odio eu feugiat malesuada. Vestibulum ante ipsum primis in faucibus orci
                            luctus et accumsan cursus. Morbi placerat nulla vel nunc viverra accumsan.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card position-relative z-1">
                        <div class="service-icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <a href="service-details.html"
                            class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="service-details.html">
                                Growth <span>acceleration</span>
                            </a>
                        </h3>
                        <p>
                            Aenean vel augue vel nisi bibendum posuere. Phasellus in lacus quis urna sodales
                            dignissim. Duis aliquam libero eget risus facilisis. Quisque eget libero vel nisl
                            fringilla.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card position-relative z-1">
                        <div class="service-icon">
                            <i class="bi bi-camera-video"></i>
                        </div>
                        <a href="service-details.html"
                            class="card-action d-flex align-items-center justify-content-center rounded-circle">
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                        <h3>
                            <a href="service-details.html">
                                Media <span>solutions</span>
                            </a>
                        </h3>
                        <p>
                            Etiam efficitur lacus in diam finibus, nec ultrices est sagittis. Maecenas elementum
                            magna sed risus faucibus, nec commodo purus facilisis. Vestibulum accumsan magna.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Services Section -->

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Strategy</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>A108 Adam Street</p>
                    <p>New York, NY 535022</p>
                    <p>United States</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                    <p><strong>Email:</strong> <span>info@example.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Strategy</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>