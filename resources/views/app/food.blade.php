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

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <div><span>Check Our</span> <span class="description-title">Portfolio</span></div>
        </div><!-- End Section Title -->

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                    <li data-filter="*" class="filter-active">
                        <i class="bi bi-grid-3x3"></i> All Projects
                    </li>
                    <li data-filter=".filter-ui">
                        <i class="bi bi-phone"></i> UI/UX
                    </li>
                    <li data-filter=".filter-development">
                        <i class="bi bi-code-slash"></i> Development
                    </li>
                    <li data-filter=".filter-photography">
                        <i class="bi bi-camera"></i> Photography
                    </li>
                    <li data-filter=".filter-marketing">
                        <i class="bi bi-graph-up"></i> Marketing
                    </li>
                </ul>

                <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
                        <article class="portfolio-entry">
                            <figure class="entry-image">
                                <img src="/assets/img/portfolio/portfolio-1.webp" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <div class="entry-meta">UI/UX Design</div>
                                        <h3 class="entry-title">Mobile Banking App</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/portfolio/portfolio-1.webp" class="glightbox"
                                                data-gallery="portfolio-gallery-ui"
                                                data-glightbox="title: Mobile Banking App; description: Praesent commodo cursus magna, vel scelerisque nisl consectetur.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="portfolio-details.html">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
                        <article class="portfolio-entry">
                            <figure class="entry-image">
                                <img src="/assets/img/portfolio/portfolio-10.webp" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <div class="entry-meta">Development</div>
                                        <h3 class="entry-title">E-Learning Platform</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/portfolio/portfolio-10.webp" class="glightbox"
                                                data-gallery="portfolio-gallery-development"
                                                data-glightbox="title: E-Learning Platform; description: Nulla vitae elit libero, a pharetra augue mollis interdum.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="portfolio-details.html">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
                        <article class="portfolio-entry">
                            <figure class="entry-image">
                                <img src="/assets/img/portfolio/portfolio-7.webp" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <div class="entry-meta">Photography</div>
                                        <h3 class="entry-title">Urban Architecture</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/portfolio/portfolio-7.webp" class="glightbox"
                                                data-gallery="portfolio-gallery-photography"
                                                data-glightbox="title: Urban Architecture; description: Sed ut perspiciatis unde omnis iste natus error sit voluptatem.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="portfolio-details.html">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
                        <article class="portfolio-entry">
                            <figure class="entry-image">
                                <img src="/assets/img/portfolio/portfolio-4.webp" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <div class="entry-meta">Marketing</div>
                                        <h3 class="entry-title">Social Media Campaign</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/portfolio/portfolio-4.webp" class="glightbox"
                                                data-gallery="portfolio-gallery-marketing"
                                                data-glightbox="title: Social Media Campaign; description: Quis autem vel eum iure reprehenderit qui in ea voluptate.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="portfolio-details.html">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
                        <article class="portfolio-entry">
                            <figure class="entry-image">
                                <img src="/assets/img/portfolio/portfolio-2.webp" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <div class="entry-meta">UI/UX Design</div>
                                        <h3 class="entry-title">Smart Home Interface</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/portfolio/portfolio-2.webp" class="glightbox"
                                                data-gallery="portfolio-gallery-ui"
                                                data-glightbox="title: Smart Home Interface; description: At vero eos et accusamus et iusto odio dignissimos ducimus.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="portfolio-details.html">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-development">
                        <article class="portfolio-entry">
                            <figure class="entry-image">
                                <img src="/assets/img/portfolio/portfolio-11.webp" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <div class="entry-meta">Development</div>
                                        <h3 class="entry-title">Cloud Management System</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/portfolio/portfolio-11.webp" class="glightbox"
                                                data-gallery="portfolio-gallery-development"
                                                data-glightbox="title: Cloud Management System; description: Temporibus autem quibusdam et aut officiis debitis.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="portfolio-details.html">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-photography">
                        <article class="portfolio-entry">
                            <figure class="entry-image">
                                <img src="/assets/img/portfolio/portfolio-8.webp" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <div class="entry-meta">Photography</div>
                                        <h3 class="entry-title">Nature Collection</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/portfolio/portfolio-8.webp" class="glightbox"
                                                data-gallery="portfolio-gallery-photography"
                                                data-glightbox="title: Nature Collection; description: Integer posuere erat a ante venenatis dapibus posuere velit aliquet.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="portfolio-details.html">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
                        <article class="portfolio-entry">
                            <figure class="entry-image">
                                <img src="/assets/img/portfolio/portfolio-5.webp" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <div class="entry-meta">Marketing</div>
                                        <h3 class="entry-title">Brand Strategy</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/portfolio/portfolio-5.webp" class="glightbox"
                                                data-gallery="portfolio-gallery-marketing"
                                                data-glightbox="title: Brand Strategy; description: Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="portfolio-details.html">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <div><span>Let's</span> <span class="description-title">Connect</span></div>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <!-- Contact Info Boxes -->
            <div class="row gy-4 mb-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Our Address</h4>
                            <p>1842 Maple Avenue, Portland, Oregon 97204</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h4>Email Address</h4>
                            <p>info@example.com</p>
                            <p>contact@example.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="info-content">
                            <h4>Hours of Operation</h4>
                            <p>Sunday-Fri: 9 AM - 6 PM</p>
                            <p>Saturday: 9 AM - 4 PM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- /Contact Section -->

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
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Strategy</strong> <span>All Rights
                    Reserved</span>
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