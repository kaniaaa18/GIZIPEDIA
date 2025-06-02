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

    <!-- Steps Section -->
    <section id="steps" class="steps section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Steps</h2>
            <div><span>How we</span> <span class="description-title">Work</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="steps-wrapper">

                <div class="step-item" data-aos="fade-right" data-aos-delay="200">
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <div class="step-info">
                            <span class="step-number">Step 01</span>
                            <h3>Initial Consultation</h3>
                            <p>Conducting thorough discovery sessions to understand your business requirements and
                                objectives. Our expert team analyzes your needs to create a customized approach.</p>
                        </div>
                    </div>
                </div><!-- End Step Item -->

                <div class="step-item" data-aos="fade-left" data-aos-delay="300">
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="bi bi-gear"></i>
                        </div>
                        <div class="step-info">
                            <span class="step-number">Step 02</span>
                            <h3>Planning &amp; Strategy</h3>
                            <p>Developing comprehensive strategies and detailed project plans based on the initial
                                consultation. We create actionable roadmaps with clear milestones and deliverables.
                            </p>
                        </div>
                    </div>
                </div><!-- End Step Item -->

                <div class="step-item" data-aos="fade-right" data-aos-delay="400">
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <div class="step-info">
                            <span class="step-number">Step 03</span>
                            <h3>Development Phase</h3>
                            <p>Executing the planned strategies with precision and agility. Our team implements
                                solutions while maintaining constant communication and progress updates.</p>
                        </div>
                    </div>
                </div><!-- End Step Item -->

                <div class="step-item" data-aos="fade-left" data-aos-delay="500">
                    <div class="step-content">
                        <div class="step-icon">
                            <i class="bi bi-check2-circle"></i>
                        </div>
                        <div class="step-info">
                            <span class="step-number">Step 04</span>
                            <h3>Launch &amp; Support</h3>
                            <p>Ensuring smooth deployment and providing ongoing support for implemented solutions.
                                We monitor performance and make necessary adjustments for optimal results.</p>
                        </div>
                    </div>
                </div><!-- End Step Item -->

            </div>

        </div>

    </section><!-- /Steps Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="advertise-1 d-flex flex-column flex-lg-row gap-4 align-items-center position-relative">

                <div class="content-left flex-grow-1" data-aos="fade-right" data-aos-delay="200">
                    <span class="badge text-uppercase mb-2">Don't Miss!</span>
                    <h2>Revolutionize Your Digital Experience Today</h2>
                    <p class="my-4">Strategia accelerates your business growth through innovative solutions and
                        cutting-edge technology. Join thousands of satisfied customers who have transformed their
                        operations.</p>

                    <div class="features d-flex flex-wrap gap-3 mb-4">
                        <div class="feature-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Premium Support</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Cloud Integration</span>
                        </div>
                        <div class="feature-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <span>Real-time Analytics</span>
                        </div>
                    </div>

                    <div class="cta-buttons d-flex flex-wrap gap-3">
                        <a href="#" class="btn btn-primary">Start Free Trial</a>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>

                <div class="content-right position-relative" data-aos="fade-left" data-aos-delay="300">
                    <img src="/assets/img/misc/misc-1.webp" alt="Digital Platform" class="img-fluid rounded-4">
                    <div class="floating-card">
                        <div class="card-icon">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <div class="card-content">
                            <span class="stats-number">245%</span>
                            <span class="stats-text">Growth Rate</span>
                        </div>
                    </div>
                </div>

                <div class="decoration">
                    <div class="circle-1"></div>
                    <div class="circle-2"></div>
                </div>

            </div>

        </div>

    </section><!-- /Call To Action Section -->

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