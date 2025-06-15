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

    <!-- Recipe Section -->
    <section id="recipes" class="recipes section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Resep</h2>
            <div><span>Temukan Resep</span> <span class="description-title">yang Anda Inginkan</span></div>
        </div><!-- End Section Title -->

        <!-- Search Bar -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="search-bar" style="margin-bottom: 40px;">
                <input type="text" id="search" placeholder="Pencarian..." onkeyup="filterRecipes()">
            </div>

            @auth
                <div style="text-align: right; margin-bottom: 40px;">
                    <a href="{{ route('recipes.create') }}" class="btn btn-tambah"
                        style="padding: 8px 20px; font-size: 14px; background-color: #D14D29; color: white; border-radius: 8px; text-decoration: none;">
                        Tambahkan Resep
                    </a>
                </div>
            @endauth

            <div class="container" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4" id="recipe-list">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="recipe-item d-flex">
                            <div class="recipe-img"
                                style="flex-shrink: 0; width: 150px; height: 150px; overflow: hidden; border-radius: 8px;">
                                <img src="assets/img/high-angle-sandwich-with-knife.jpg" class="img-fluid"
                                    alt="Roti Biji-Bijian dengan Keju" loading="lazy"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="recipe-info flex-grow-1" style="margin-left: 15px;">
                                <h4><a href="{{ url('/recipe/roti_biji_bijian') }}">Roti Biji-Bijian dengan Keju</a>
                                </h4>
                                <p style="margin-top: 10px;">Campur bahan, diamkan hingga mengembang, lalu panggang
                                    selama
                                    25-30 menit.</p>
                            </div>
                        </div>
                    </div><!-- End Recipe Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="recipe-item d-flex">
                            <div class="recipe-img"
                                style="flex-shrink: 0; width: 150px; height: 150px; overflow: hidden; border-radius: 8px;">
                                <img src="assets/img/delicious-goulash-ready-dinner.jpg" class="img-fluid"
                                    alt="Sup Sayuran dengan Daging Sapi" loading="lazy"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="recipe-info flex-grow-1" style="margin-left: 15px;">
                                <h4><a href="{{ url('/recipe/sup_sayuran') }}">Sup Sayuran dengan Daging Sapi</a></h4>
                                <p style="margin-top: 10px;">Tumis daging, tambahkan sayuran, dan masak hingga mendidih.
                                </p>
                            </div>
                        </div>
                    </div><!-- End Recipe Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="recipe-item d-flex">
                            <div class="recipe-img"
                                style="flex-shrink: 0; width: 150px; height: 150px; overflow: hidden; border-radius: 8px;">
                                <img src="assets/img/lemon-plate-healthy-potato-slice.jpg" class="img-fluid"
                                    alt="Ikan Salmon Bakar dengan Kentang" loading="lazy"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="recipe-info flex-grow-1" style="margin-left: 15px;">
                                <h4><a href="{{ url('/recipe/ikan_salmon') }}">Ikan Salmon Bakar dengan Kentang</a></h4>
                                <p style="margin-top: 10px;">Panggang salmon selama 15-20 menit dan sajikan dengan
                                    kentang.
                                </p>
                            </div>
                        </div>
                    </div><!-- End Recipe Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="recipe-item d-flex">
                            <div class="recipe-img"
                                style="flex-shrink: 0; width: 150px; height: 150px; overflow: hidden; border-radius: 8px;">
                                <img src="assets/img/quinoa-salad-with-fruit.jpg" class="img-fluid"
                                    alt="Salad Quinoa dengan Buah" loading="lazy"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="recipe-info flex-grow-1" style="margin-left: 15px;">
                                <h4><a href="{{ url('/recipe/salad_quinoa') }}">Salad Quinoa dengan Buah</a></h4>
                                <p style="margin-top: 10px;">Masak quinoa, campur dengan buah dan sajikan dingin.</p>
                            </div>
                        </div>
                    </div><!-- End Recipe Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="recipe-item d-flex">
                            <div class="recipe-img"
                                style="flex-shrink: 0; width: 150px; height: 150px; overflow: hidden; border-radius: 8px;">
                                <img src="assets/img/roasted-chicken-with-vegetables.jpg" class="img-fluid"
                                    alt="Ayam Panggang dengan Sayuran" loading="lazy"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="recipe-info flex-grow-1" style="margin-left: 15px;">
                                <h4><a href="{{ url('/recipe/ayam_panggang') }}">Ayam Panggang dengan Sayuran</a></h4>
                                <p style="margin-top: 10px;">Panaskan oven pada suhu 200°C. Lumuri ayam dengan bumbu dan
                                    panggang selama 25-30 menit.</p>
                            </div>
                        </div>
                    </div><!-- End Recipe Item -->

                    @foreach ($recipes as $recipe)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="recipe-item d-flex">
                                <div class="recipe-img"
                                    style="flex-shrink: 0; width: 150px; height: 150px; overflow: hidden; border-radius: 8px;">
                                    <img src="{{ asset('storage/' . $recipe->image) }}" class="img-fluid" alt="{{ $recipe->title }}"
                                        loading="lazy" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div class="recipe-info flex-grow-1" style="margin-left: 15px;">
                                    <h4>{{ $recipe->title }}</h4>
                                    <p style="margin-top: 10px;">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($recipe->steps), 100) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach


    </section><!-- /Recipe Section -->

    <script>
        function filterRecipes() {
            const searchInput = document.getElementById('search').value.toLowerCase();
            const recipeItems = document.querySelectorAll('.recipe-item');

            recipeItems.forEach(item => {
                const title = item.querySelector('h4').innerText.toLowerCase();
                if (title.includes(searchInput)) {
                    item.parentElement.style.display = "block";
                } else {
                    item.parentElement.style.display = "none";
                }
            });
        }
    </script>

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