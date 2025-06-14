<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>GIZIPEDIA</title>
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
                        <a class="btn-dashboard" href="{{ url('/dashboard') }}"
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

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 content-col" data-aos="fade-up">
                        <div class="content">
                            <div class="agency-name">
                                <h5>OUR AGENCY</h5>
                            </div>

                            <div class="main-heading">
                                <h1>PAHAMI GIZI, <br>WUJUDKAN, <br>HIDUP SEHAT</h1>
                            </div>

                            

                            <div class="description">
                                <h4>Informasi Gizi Seimbang untuk Kesehatan
                                Anda dan Keluarga</h4>
                                <p>Portal edukasi gizi terpercaya di Indonesia ini
                                menyediakan materi visual, alat bantu perencanaan
                                makan sehat, serta komunitas diskusi yang dapat diakses
                                kapan saja.</p>
                            </div>

                            <div class="cta-button">
                                <a href="#services" class="btn">
                                    <span>MULAI JELAJAHI GIZIPEDIA</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5" data-aos="zoom-out">
                        <div class="visual-content">
                            <div class="fluid-shape">
                                <img src="/assets/img/abstract/abstract-2.png" alt="Abstract Fluid Shape"
                                    class="fluid-img">
                            </div>

                                <div class="stats-arrow">
                                    <a href="#services"><i class="bi bi-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <div><span>Learn More</span> <span class="description-title">About Us</span></div>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="about-image position-relative">
                            <img src="/assets/img/about/about-portrait-1.webp" class="img-fluid rounded-4 shadow-sm"
                                alt="About Image" loading="lazy">
                            <div class="experience-badge">
                                <span class="years">20+</span>
                                <span class="text">Years of Expertise</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="300">
                        <div class="about-content">
                            <h2>Elevating Business Performance Through Innovation</h2>
                            <p class="lead">We focus on crafting bespoke strategies that navigate complexity and deliver
                                tangible results for our clients.</p>
                            <p>Through a blend of sophisticated analytics and creative problem-solving, we empower
                                organizations to thrive in rapidly evolving markets.</p>

                            <div class="row g-4 mt-3">
                                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="feature-item">
                                        <h5>Fitur Utama</h5>
                                        <p>Baca Konten Gizi yang Menarik <br>
                                        Materi visual, infografis, dan tips sehat yang mudah dipahami untuk semua usia. <br><br>
                                        Gunakan Kalkulator Gizi Harian <br>
                                        Hitung kebutuhan kalori dan nutrisi sesuai usia, aktivitas, dan tujuanmu. <br><br>
                                        Gabung Komunitas Gizi <br>
                                        Diskusi, tanya jawab, dan berbagi pengalaman di forum yang suportif. <br><br>
                                        Dapatkan Menu & Resep Sehat <br>
                                        Rekomendasi menu harian, lengkap dengan nilai gizi dan bahan lokal.<br><br>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="450">
                                    <div class="feature-item">
                                        <i class="bi bi-lightbulb-fill"></i>
                                        <h5>Forward-Thinking Approach</h5>
                                        <p>We embrace innovative methodologies to develop unique strategies that drive
                                            lasting success.</p>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="btn btn-primary mt-4">Explore Our Services</a>
                        </div>
                    </div>
                </div>

                <div class="testimonial-section mt-5 pt-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200">
                            <div class="testimonial-intro">
                                <h3>Testimoni Pengguna</h3>
                                <p>Bukti nyata dari ribuan pengguna yang telah menemukan solusi kesehatan berbasis ilmu gizi yang tepat.</p>
                                <div class="swiper-nav-buttons mt-4">
                                    <button class="slider-prev"><i class="bi bi-arrow-left"></i></button>
                                    <button class="slider-next"><i class="bi bi-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8" data-aos="fade-left" data-aos-delay="300">
                            <div class="testimonial-slider swiper init-swiper">
                                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 800,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "navigation": {
                      "nextEl": ".slider-next",
                      "prevEl": ".slider-prev"
                    },
                    "breakpoints": {
                      "768": {
                        "slidesPerView": 2
                      }
                    }
                  }
                </script>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <p>"Berkat Gizipedia, saya akhirnya memahami mengapa program diet sebelumnya tidak bekerja. 
                                                Sekarang saya bisa menurunkan berat badan dengan cara yang sehat."</p>
                                            <div class="client-info d-flex align-items-center mt-4">
                                                <img src="/assets/img/person/person.png" class="client-img"
                                                    alt="Client" loading="lazy">
                                                <div>
                                                    <h6 class="mb-0">Gege Pranajaya</h6>
                                                    <span>2025</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <p>"Forum ini sangat membantu dengan jawaban dari profesional. Tidak seperti platform lain yang penuh dengan informasi tidak akurat."</p>
                                            <div class="client-info d-flex align-items-center mt-4">
                                                <img src="/assets/img/person/person.png" class="client-img"
                                                    alt="Client" loading="lazy">
                                                <div>
                                                    <h6 class="mb-0">Haikal Fernandez</h6>
                                                    <span>2025</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <p>"Saya suka bisa bertanya secara anonim tentang masalah sensitif. Tim ahli di sini sangat membantu dan tidak menghakimi."</p>
                                            <div class="client-info d-flex align-items-center mt-4">
                                                <img src="/assets/img/person/person.png" class="client-img"
                                                    alt="Client" loading="lazy">
                                                <div>
                                                    <span>2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <p>"Sistem anonimnya membuat saya nyaman bertanya tentang masalah sensitif. Terima kasih Gizipedia!"</p>
                                            <div class="client-info d-flex align-items-center mt-4">
                                                <img src="/assets/img/person/person.png" class="client-img"
                                                    alt="Client" loading="lazy">
                                                <div>
                                                    <span>2025</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

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

 
    </main>

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