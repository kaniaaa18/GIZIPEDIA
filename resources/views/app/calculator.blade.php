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

    <x-app-layout>
        <div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded-2xl shadow-md border-2 border-gray-200">
            <h2 class="text-center text-xl font-bold text-red-700 mb-6 uppercase">Kalkulator Gizi Harian</h2>

            <form method="POST" {{--action="{{ route('kalkulator.hitung') }} "--}}>
                @csrf

                <!-- Jenis Kelamin -->
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-red-700 mb-1">Jenis Kelamin</label>
                    <div class="flex items-center gap-6">
                        <label class="inline-flex items-center">
                            <input type="radio" name="gender" value="Laki-laki" class="text-red-600 focus:ring-red-500">
                            <span class="ml-2">Laki-laki</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="gender" value="Perempuan" class="text-red-600 focus:ring-red-500">
                            <span class="ml-2">Perempuan</span>
                        </label>
                    </div>
                </div>

                <!-- Usia -->
                <div class="mb-4">
                    <label for="usia" class="block text-sm font-semibold text-red-700 mb-1">Usia</label>
                    <input type="number" name="usia" id="usia" class="w-32 border border-gray-300 rounded px-2 py-1"
                        placeholder="Tahun" required>
                </div>

                <!-- Berat Badan -->
                <div class="mb-4">
                    <label for="berat" class="block text-sm font-semibold text-red-700 mb-1">Berat Badan</label>
                    <input type="number" name="berat" id="berat" class="w-32 border border-gray-300 rounded px-2 py-1"
                        placeholder="Kg" required>
                </div>

                <!-- Tinggi Badan -->
                <div class="mb-4">
                    <label for="tinggi" class="block text-sm font-semibold text-red-700 mb-1">Tinggi Badan</label>
                    <input type="number" name="tinggi" id="tinggi" class="w-32 border border-gray-300 rounded px-2 py-1"
                        placeholder="Cm" required>
                </div>

                <!-- Aktivitas Fisik -->
                <div class="mb-6">
                    <label for="aktivitas" class="block text-sm font-semibold text-red-700 mb-1">Tingkat Aktivitas
                        Fisik</label>
                    <select name="aktivitas" id="aktivitas" class="w-48 border border-gray-300 rounded px-2 py-1">
                        <option value="sedentari">Sedentari</option>
                        <option value="ringan">Ringan</option>
                        <option value="sedang">Sedang</option>
                        <option value="berat">Berat</option>
                    </select>
                </div>

                <!-- Tombol Hitung -->
                <div class="text-center">
                    <button type="submit"
                        class="bg-red-600 text-white font-bold px-6 py-2 rounded-full hover:bg-red-700 transition">
                        HITUNG
                    </button>
                </div>
            </form>
        </div>
    </x-app-layout>


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