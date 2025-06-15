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
                <h2>Tentang Kami</h2>
                <div><span>Selengkapnya</span></div>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gx-5 align-items-center">
                    <h2>Kenali Gizi, Wujudkan Hidup Sehat Bersama GIZIPEDIA</h2>
                    <p class="lead">GIZIPEDIA hadir sebagai platform edukasi yang membantu kamu memahami gizi dengan
                        cara yang mudah, menyenangkan, dan bermanfaat.</p>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="about-image position-relative">
                            <img src="/assets/img/about/about-home.png" class="img-fluid rounded-4 shadow-sm"
                                alt="About Image" loading="lazy">
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="300">
                        <div class="about-content">
                            <div class="row g-4 mt-3">

                                <!-- Fitur GIZIPEDIA -->
                                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="feature-item shadow-sm rounded-4 p-4 bg-light h-100">
                                        <h5 class="fw-bold text-danger mb-3">
                                            <i class="bi bi-heart-pulse-fill me-2"></i>
                                            Manfaat Utama GIZIPEDIA
                                        </h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex align-items-start mb-3">
                                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                                <span><strong>Kalkulator Gizi Personal:</strong> Bantu atur kebutuhan
                                                    gizi harian sesuai profilmu.</span>
                                            </li>
                                            <li class="d-flex align-items-start mb-3">
                                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                                <span><strong>Konten Edukatif Interaktif:</strong> Materi visual yang
                                                    mudah dimengerti & seru dipelajari.</span>
                                            </li>
                                            <li class="d-flex align-items-start mb-3">
                                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                                <span><strong>Forum Komunitas:</strong> Bertanya & berdiskusi langsung
                                                    dengan ahli dan sesama pengguna.</span>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                                <span><strong>Resep Sehat Harian:</strong> Inspirasi makanan lezat,
                                                    bergizi, dan praktis setiap hari.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Inovasi Gizi -->
                                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="450">
                                    <div class="feature-item shadow-sm rounded-4 p-4 bg-light h-100">
                                        <h5 class="fw-bold text-danger mb-3">
                                            <i class="bi bi-lightbulb-fill me-2"></i>
                                            Pendekatan Inovatif Kami
                                        </h5>
                                        <ul class="list-unstyled">
                                            <li class="d-flex align-items-start mb-2">
                                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                                <span><strong>Personalisasi:</strong> Materi dan fitur disesuaikan
                                                    dengan usia, aktivitas, dan tujuan kesehatan Anda.</span>
                                            </li>
                                            <li class="d-flex align-items-start mb-2">
                                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                                <span><strong>Visual Interaktif:</strong> Gunakan infografik dan
                                                    ilustrasi menarik agar lebih mudah dipahami.</span>
                                            </li>
                                            <li class="d-flex align-items-start">
                                                <i class="bi bi-check-circle-fill text-success me-2 mt-1"></i>
                                                <span><strong>Kolaborasi Ahli:</strong> Semua konten telah dikurasi oleh
                                                    pakar gizi dan kesehatan terpercaya.</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <a href="{{ url('/about') }}"
                                class="btn btn-outline-danger mt-4 px-4 py-2 fw-semibold rounded-pill">
                                <i class="bi bi-arrow-right-circle me-2"></i> Kenali Lebih Lanjut
                            </a>
                        </div>
                    </div>


                </div>

                <div class="testimonial-section mt-5 pt-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200">
                            <div class="testimonial-intro">
                                <h3>Testimoni Pengguna</h3>
                                <p>Bukti nyata dari ribuan pengguna yang telah menemukan solusi kesehatan berbasis ilmu
                                    gizi yang tepat.</p>
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
                                            <p>"Berkat Gizipedia, saya akhirnya memahami mengapa program diet sebelumnya
                                                tidak bekerja.
                                                Sekarang saya bisa menurunkan berat badan dengan cara yang sehat."</p>
                                            <div class="client-info d-flex align-items-center mt-4">
                                                <img src="/assets/img/person/person.png" class="client-img" alt="Client"
                                                    loading="lazy">
                                                <div>
                                                    <h6 class="mb-0">Gege Pranajaya</h6>
                                                    <span>2025</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <p>"Forum ini sangat membantu dengan jawaban dari profesional. Tidak seperti
                                                platform lain yang penuh dengan informasi tidak akurat."</p>
                                            <div class="client-info d-flex align-items-center mt-4">
                                                <img src="/assets/img/person/person.png" class="client-img" alt="Client"
                                                    loading="lazy">
                                                <div>
                                                    <h6 class="mb-0">Haikal Fernandez</h6>
                                                    <span>2025</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <p>"Saya suka bisa bertanya secara anonim tentang masalah sensitif. Tim ahli
                                                di sini sangat membantu dan tidak menghakimi."</p>
                                            <div class="client-info d-flex align-items-center mt-4">
                                                <img src="/assets/img/person/person.png" class="client-img" alt="Client"
                                                    loading="lazy">
                                                <div>
                                                    <span>2024</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <p>"Sistem anonimnya membuat saya nyaman bertanya tentang masalah sensitif.
                                                Terima kasih Gizipedia!"</p>
                                            <div class="client-info d-flex align-items-center mt-4">
                                                <img src="/assets/img/person/person.png" class="client-img" alt="Client"
                                                    loading="lazy">
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

        <!-- Content Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Konten</h2>
                <div><span>Artikel</span></div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="service-header">
                    <div class="row align-items-center">

                        <!-- Kiri -->
                        <div class="col-lg-8 col-md-12">
                            <div class="service-intro">
                                <h2 class="service-heading">
                                    <div>Temukan informasi</div>
                                    <div><span>bergizi dan inspiratif</span></div>
                                </h2>
                                <p class="mt-3">
                                    Mulai hari dengan pengetahuan yang sehat dan bermanfaat.
                                    Jelajahi artikel-artikel terbaru seputar gizi, kesehatan, dan gaya hidup seimbang
                                    hanya di GIZIPEDIA.
                                </p>
                            </div>
                        </div>

                        <!-- Kanan -->
                        <div class="col-lg-4 col-md-12">
                            <div class="service-summary text-lg-end mt-4 mt-lg-0">
                                <a href="{{ route('app.content') }}" class="service-btn">
                                    Lihat Semua Artikel
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
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