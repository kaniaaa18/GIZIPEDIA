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
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Dashboard
                        </a>
                    @else
                        <a class="btn-login" href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a class="btn-register" href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
    </header>
    <div class="recipe-detail container"
        style="border: 2px solid #ccc; border-radius: 8px; padding: 20px; margin-top: 130px;">
        <h2>Ikan Salmon Bakar dengan Kentang</h2>

        <h3>Bahan:</h3>
        <ul>
            <li>300 g fillet ikan salmon</li>
            <li>2 buah kentang, potong dadu</li>
            <li>1 sdm minyak zaitun</li>
            <li>Garam, merica, dan lemon secukupnya</li>
            <li>1 sdt rosemary kering</li>
        </ul>

        <h3>Alat:</h3>
        <ul>
            <li>Wajan pemanggang atau oven</li>
            <li>Panci</li>
            <li>Mangkuk</li>
        </ul>

        <h3>Cara Membuat:</h3>
        <ol>
            <li>Panaskan oven pada suhu 180°C.</li>
            <li>Campurkan minyak zaitun, garam, merica, dan rosemary dalam mangkuk.</li>
            <li>Lumuri fillet salmon dengan campuran bumbu tersebut.</li>
            <li>Rebus kentang dalam panci hingga empuk, lalu tiriskan.</li>
            <li>Panggang salmon dalam oven selama 15-20 menit.</li>
            <li>Sajikan salmon dengan kentang yang sudah dibumbui.</li>
        </ol>
    </div>
</body>

</html>