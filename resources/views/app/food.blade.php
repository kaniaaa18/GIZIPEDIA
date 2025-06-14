<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Strategy Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/G.png') }}" type="image/png">

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

            <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/G.png" alt="">
                <h1 class="sitename">GIZIPEDIA</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/') }}" class="active">Home</a></li>
                    <li><a href="{{ url('/content') }}">Konten</a></li>
                    <li><a href="{{ url('/calculator') }}">Kalkulator</a></li>
                    <li><a href="{{ url('/forum') }}">Forum</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Menu</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ url('/food') }}">Makanan</a></li>
                            <li><a href="{{ url('/recipe') }}">Resep</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            @if (Route::has('login'))
                <div class="btn-auth">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                            Dashboard
                        </a>
                    @else
                        <a class="btn-login" href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 text-[#1b1b18] border border-transparent hover:border-[#19140035] rounded-sm text-sm leading-normal">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a class="btn-register" href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
    </header>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <div><span>Kategori Makanan</span></div>
        </div>
        <!-- End Section Title -->

        <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <!-- <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
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
                </ul> -->

                <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-ui">
                        <article class="portfolio-entry">
                            <figure class="entry-image">
                                <img src="/assets/img/raw-beef-meat.jpg" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <h3 class="entry-title">Daging</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/raw-beef-meat.jpg" class="glightbox"
                                                data-gallery="portfolio-gallery-ui"
                                                data-glightbox="title: Daging; description: Daging merah seperti sapi dan kambing merupakan sumber protein hewani yang kaya zat besi, seng, dan vitamin B12. Konsumsi dalam jumlah seimbang membantu pembentukan otot dan mendukung kesehatan darah.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="details.html">
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
                                <img src="/assets/img/raw-chicken.jpg" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <h3 class="entry-title">Daging Ayam</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/raw-chicken.jpg" class="glightbox"
                                                data-gallery="portfolio-gallery-development"
                                                data-glightbox="title: Daging Ayam; description: Daging ayam merupakan sumber protein rendah lemak, terutama bagian dada tanpa kulit. Kaya akan niasin dan selenium, ayam bermanfaat untuk metabolisme tubuh dan sistem kekebalan.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="details.html">
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
                                <img src="/assets/img/fish.jpg" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <h3 class="entry-title">Ikan</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/fish.jpg" class="glightbox"
                                                data-gallery="portfolio-gallery-photography"
                                                data-glightbox="title: Ikan; description: Ikan merupakan sumber protein tinggi dan kaya lemak sehat seperti omega-3, terutama pada ikan laut seperti salmon dan tuna. Omega-3 berperan penting dalam kesehatan jantung dan otak.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="details.html">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </article>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-marketing">
                        <article class="portfolio-entry">
                            <figure class="entry-image">
                                <img src="/assets/img/milk_and_cheese.jpg" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <h3 class="entry-title">Susu dan Keju</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/milk_and_cheese.jpg" class="glightbox"
                                                data-gallery="portfolio-gallery-marketing"
                                                data-glightbox="title: Susu dan Keju; description: Produk susu dan keju mengandung kalsium, protein, dan vitamin D yang penting untuk kesehatan tulang dan gigi. Pilih varian rendah lemak untuk konsumsi harian yang lebih sehat.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="details.html">
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
                                <img src="/assets/img/fruits.jpg" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <h3 class="entry-title">Buah-buahan</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/fruits.jpg" class="glightbox"
                                                data-gallery="portfolio-gallery-ui"
                                                data-glightbox="title: Buah-buahan; description: Buah-buahan adalah sumber alami vitamin, terutama vitamin C dan A, serta serat dan air. Mereka membantu hidrasi tubuh, melancarkan pencernaan, dan melindungi sel dari kerusakan oksidatif.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="details.html">
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
                                <img src="/assets/img/vegetables.jpg" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <h3 class="entry-title">Sayuran</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/vegetables.jpg" class="glightbox"
                                                data-gallery="portfolio-gallery-development"
                                                data-glightbox="title: Sayuran; description: Sayuran mengandung serat, vitamin, mineral, dan antioksidan yang penting untuk pencernaan dan daya tahan tubuh. Konsumsi beragam sayuran setiap hari membantu menjaga kesehatan jangka panjang.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="details.html">
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
                                <img src="/assets/img/seeds(2).jpg" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <h3 class="entry-title">Biji-bijian</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/seeds(2).jpg" class="glightbox"
                                                data-gallery="portfolio-gallery-photography"
                                                data-glightbox="title: Biji-bijian; description: Biji-bijian utuh seperti beras merah, quinoa, dan gandum merupakan sumber karbohidrat kompleks, serat, vitamin B, dan mineral. Mereka membantu menjaga energi dan kestabilan kadar gula darah.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="details.html">
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
                                <img src="/assets/img/root_vegetables.jpg" class="img-fluid" alt=""
                                    loading="lazy">
                                <div class="entry-overlay">
                                    <div class="overlay-content">
                                        <h3 class="entry-title">Umbi-umbian</h3>
                                        <div class="entry-links">
                                            <a href="/assets/img/root_vegetables.jpg" class="glightbox"
                                                data-gallery="portfolio-gallery-marketing"
                                                data-glightbox="title: Umbi-umbian; description: Umbi-umbian seperti kentang, ubi, dan singkong kaya akan karbohidrat kompleks, serat, serta vitamin dan mineral seperti vitamin C dan kalium. Mereka baik untuk sumber energi alami.">
                                                <i class="bi bi-arrows-angle-expand"></i>
                                            </a>
                                            <a href="details.html">
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


    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">GIZIPEDIA</span>
                    </a>
                    <p>Investasi terbaik untuk tubuhmu dimulai dari piringmu! Pilih makanan bergizi hari ini untuk
                        energi dan kesehatan jangka panjang.</p>
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
                        <li><a href="{{ url('/') }}" class="active">Home</a></li>
                        <li><a href="{{ url('/content') }}">Konten</a></li>
                        <li><a href="{{ url('/calculator') }}">Kalkulator</a></li>
                        <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>Jl. Hasan Basry</p>
                    <p>Pendidikan Komputer</p>
                    <p>Universitas Lambung Mangkurat</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+62 5589 55488 55</span></p>
                    <p><strong>Email:</strong> <span>pilkom@Email.com</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">GIZIPEDIA</strong> <span>All Rights
                    Reserved</span>
            </p>
            <p>2025</p>
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