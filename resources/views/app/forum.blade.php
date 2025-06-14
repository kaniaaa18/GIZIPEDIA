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

    <div class="flex flex-col md:flex-row gap-6 p-6 min-h-screen">

        {{-- Daftar Pertanyaan --}}
        <div class="w-full md:w-2/3 space-y-6">
            @foreach ($questions as $question)
                <div class="flex border-[3px] border-[#ECECEC] rounded-[5px] bg-white p-4 items-start gap-4">
                    {{-- Avatar --}}
                    <div class="w-[80px]">
                        <img src="https://via.placeholder.com/60" alt="Avatar" class="rounded-full">
                    </div>

                    {{-- Konten Pertanyaan --}}
                    <div class="flex-1">
                        <p class="font-black text-[18px] leading-[16px]">
                            {{ $question->is_anonim ? 'ANONIM' : ($question->name ?? 'ANONIM') }}
                        </p>
                        <p class="text-[14px] mt-2 leading-[20px]">
                            {{ $question->question }}
                        </p>

                        <div class="flex items-center justify-between mt-4 text-xs text-gray-500">
                            <span>{{ $question->created_at->format('H:i, d/m/Y') }}</span>
                            <div class="flex items-center gap-6">
                                <span>1 Jawaban</span>
                                <span>○ Suka</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Form Tambah Pertanyaan --}}
        <div class="w-full md:w-1/3 bg-white border border-[#ECECEC] rounded-[5px] p-4 h-fit">
            <h3 class="font-black text-[16px] mb-4">Berbagi Masalah Gizimu!</h3>

            @if (session('success'))
                <div class="bg-green-100 text-green-800 p-2 rounded mb-3 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('forum.store') }}">
                @csrf

                {{-- Anonim --}}
                <div class="flex items-center mb-3">
                    <input type="checkbox" name="is_anonim" value="1" id="anonim" class="mr-2">
                    <label for="anonim" class="text-sm">Centang untuk menjadi anonim</label>
                </div>

                {{-- Nama --}}
                <div class="mb-3">
                    <label for="name" class="text-sm">Nama</label>
                    <input type="text" name="name" id="name"
                        class="w-full border border-[#C4C4C4] rounded-sm px-2 py-1 text-sm focus:outline-none focus:ring focus:ring-red-200">
                </div>

                {{-- Pertanyaan --}}
                <div class="mb-4">
                    <label for="question" class="text-sm">Pertanyaan</label>
                    <textarea name="question" id="question" rows="5"
                        class="w-full border border-[#C4C4C4] rounded-sm px-2 py-1 text-sm focus:outline-none focus:ring focus:ring-red-200"
                        required></textarea>
                </div>

                {{-- Tombol Kirim --}}
                <div class="text-right">
                    <button type="submit"
                        class="bg-[#A63A26] hover:bg-[#8d2f1e] text-white font-bold text-xs px-6 py-2 rounded-full transition-all">
                        KIRIM
                    </button>
                </div>
            </form>
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