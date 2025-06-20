<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>GIZIPEDIA</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

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

    <section>
        <div class="mt-5">
            <div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded-2xl shadow-md border-2 border-gray-200">
                <h2 class="text-center text-xl font-bold text-red-700 mb-6 uppercase">Kalkulator Gizi Harian</h2>

                <form method="POST" action="{{ route('kalkulator.hitung') }}">
                    @csrf

                    <!-- Jenis Kelamin -->
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-red-700 mb-1">Jenis Kelamin</label>
                        <div class="flex items-center gap-6">
                            <label class="inline-flex items-center">
                                <input type="radio" name="gender" value="Laki-laki"
                                    class="text-red-600 focus:ring-red-500">
                                <span class="ml-2">Laki-laki</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" name="gender" value="Perempuan"
                                    class="text-red-600 focus:ring-red-500">
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
                        <input type="number" name="berat" id="berat"
                            class="w-32 border border-gray-300 rounded px-2 py-1" placeholder="Kg" required>
                    </div>

                    <!-- Tinggi Badan -->
                    <div class="mb-4">
                        <label for="tinggi" class="block text-sm font-semibold text-red-700 mb-1">Tinggi Badan</label>
                        <input type="number" name="tinggi" id="tinggi"
                            class="w-32 border border-gray-300 rounded px-2 py-1" placeholder="Cm" required>
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
                        <p class="small text-muted p-3">
                            Sedentari: Tidak berolahraga dan aktivitas harian hanya duduk atau bergerak sangat minim. <br>
                            Rendah: Aktivitas ringan sehari-hari dan olahraga ringan 1–3 kali seminggu. <br>
                            Sedang: Aktivitas fisik cukup sering atau olahraga sedang 3–5 kali seminggu. <br>
                            Berat: Aktivitas fisik intens setiap hari atau pekerjaan fisik berat. <br>
                        </p>
                    </div>

                    <!-- Tombol Hitung -->
                    <div class="text-center">
                        <a href="#hasil">
                            <button type="submit"
                                class="bg-red-600 text-white font-bold px-6 py-2 rounded-full hover:bg-red-700 transition">
                                HITUNG
                            </button>
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <!-- Hasil Perhitungan -->
    <div class="hasil max-w-2xl mx-auto mt-10 bg-white p-6 rounded-2xl shadow-md border-2 border-gray-200">
        <h2 class="text-center text-xl font-bold text-green-700 mb-6 uppercase">Hasil Perhitungan Gizi</h2>

        <div class="space-y-2">
            <p><strong>Total Kalori Harian:</strong> {{ $kalori }} kcal</p>
            <p><strong>Indeks Massa Tubuh (BMI):</strong> {{ $bmi }} ({{ $kategoriBmi }})</p>
            <p><strong>Rekomendasi Asupan Harian:</strong></p>
            <ul class="list-disc list-inside pl-4">
                <li>Karbohidrat: {{ $karbo }} gram</li>
                <li>Protein: {{ $protein }} gram</li>
                <li>Lemak: {{ $lemak }} gram</li>
            </ul>
        </div>
    </div>


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
                        <a href="https://x.com/zyuuwy?t=ALZvMAtwuLwZW5XPjrOC5Q&s=09"><i class="bi bi-twitter-x"></i></a>
                        <a href="https://www.facebook.com/share/16bWmJa4SA/"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/gizipedia_3code?igsh=bXcwd25lemJ5M2Nn"><i
                                class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/alya-kania-7263a3306/"><i class="bi bi-linkedin"></i></a>
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