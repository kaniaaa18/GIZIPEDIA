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

    <section>
        <div class="container section-title" data-aos="fade-up">
            <h2>Forum</h2>
            <div><span>Bagikan</span> <span class="description-title">Informasi Gizi</span></div>
        </div>

        <div class="container">
            <div class="row">
                <!-- Kolom kiri: daftar pertanyaan -->
                <div class="col-md-6 mb-4">
                    <h3 style="font-weight: 900; font-size: 16px; margin-bottom: 16px;">Daftar Pertanyaan</h3>

                    @if ($questions->isEmpty())
                        <p class="text-muted">Belum ada pertanyaan yang masuk.</p>
                    @else
                        @foreach ($questions as $question)
                            <div
                                style="border: 3px solid #ECECEC; border-radius: 5px; padding: 16px; margin-bottom: 16px; background-color: white;">
                                <div style="display: flex; gap: 16px; align-items: flex-start;">
                                    <div style="width: 80px;">
                                        <img src="assets/img/account.png" alt="Avatar"
                                            style="width: 70px; height: 70px; border-radius: 50%; object-fit: cover; filter: grayscale(100%) brightness(0);">
                                    </div>
                                    <div style="flex: 1;">
                                        <p style="font-weight: 900; font-size: 18px; margin: 0;">
                                            {{ $question->is_anonim ? 'ANONIM' : ($question->name ?? 'ANONIM') }}
                                        </p>
                                        <p style="margin-top: 8px; font-size: 14px; line-height: 1.4;">{{ $question->question }}
                                        </p>
                                        <div
                                            style="display: flex; justify-content: space-between; margin-top: 12px; font-size: 12px; color: gray;">
                                            <span>{{ $question->created_at->format('H:i, Y/m/d') }}</span>
                                            <div style="display: flex; gap: 24px;">
                                                <button class="btn btn-link p-0" onclick="toggleAnswers({{ $question->id }})">
                                                    {{ $question->comentars->count() }} Jawaban
                                                </button>
                                                <button class="like-button" onclick="toggleLike(this)">Suka</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bagian Jawaban dan Form -->
                                <div id="answers-{{ $question->id }}"
                                    style="display: none; margin-top: 10px; padding-left: 80px;">
                                    @foreach ($question->comentars as $answer)
                                        <div
                                            style="background-color: #f9f9f9; padding: 10px; margin-bottom: 8px; border-radius: 4px;">
                                            <strong>{{ $answer->is_anonim ? 'ANONIM' : $answer->name }}</strong>
                                            <p style="margin: 4px 0;">{{ $answer->answer }}</p>
                                        </div>
                                    @endforeach

                                    <form method="POST" action="{{ route('forum.answer', $question->id) }}">
                                        @csrf
                                        <div style="margin-bottom: 8px;">
                                            <input type="checkbox" name="is_anonim" id="anonim-answer-{{ $question->id }}"
                                                onchange="toggleAnswerName({{ $question->id }})">
                                            <label for="anonim-answer-{{ $question->id }}">Anonim</label>
                                        </div>
                                        <div id="answer-name-{{ $question->id }}" style="margin-bottom: 8px;">
                                            <input type="text" name="name" placeholder="Nama" class="form-control">
                                        </div>
                                        <textarea name="answer" placeholder="Tulis jawaban..." class="form-control" rows="2"
                                            required></textarea>
                                        <button type="submit" class="btn btn-sm btn-primary mt-2">Kirim Jawaban</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <!-- Kolom kanan: form kirim pertanyaan -->
                <div class="col-md-6 mb-4">
                    <h3 style="font-weight: 900; font-size: 16px; margin-bottom: 16px;">Berbagi Masalah Gizimu!</h3>

                    @if (session('success'))
                        <div
                            style="background-color: #d1fae5; color: #065f46; padding: 8px 12px; border-radius: 4px; margin-bottom: 12px; font-size: 14px;">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('forum.store') }}">
                        @csrf

                        <!-- Checkbox Anonim -->
                        <div style="margin-bottom: 12px;">
                            <input type="checkbox" name="is_anonim" value="1" id="anonim"
                                onchange="toggleNameInput(this)">
                            <label for="anonim" style="font-size: 14px;">Centang untuk menjadi anonim</label>
                        </div>

                        <!-- Field Nama -->
                        <div id="name-field" style="margin-bottom: 12px;">
                            <label for="name" style="font-size: 14px;">Nama</label>
                            <input type="text" name="name" id="name" value="{{ old('name', Auth::user()->name ?? '') }}"
                                style="width: 100%; border: 1px solid #C4C4C4; padding: 6px 8px; font-size: 14px; border-radius: 4px;">
                        </div>

                        <!-- Pertanyaan -->
                        <div style="margin-bottom: 16px;">
                            <label for="question" style="font-size: 14px;">Pertanyaan</label>
                            <textarea name="question" id="question" rows="5" required
                                style="width: 100%; border: 1px solid #C4C4C4; padding: 6px 8px; font-size: 14px; border-radius: 4px;"></textarea>
                        </div>

                        <!-- Tombol Kirim -->
                        <div style="text-align: right;">
                            <button type="submit"
                                style="background-color: #A63A26; color: white; font-weight: bold; font-size: 12px; padding: 8px 24px; border: none; border-radius: 999px; cursor: pointer;">
                                KIRIM
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- Script untuk nonaktifkan input nama jika anonim dicentang -->
    <script>
        // Untuk form pertanyaan baru: sembunyikan input nama jika anonim dicentang
        function toggleNameInput(checkbox) {
            const nameField = document.getElementById('name-field');
            if (checkbox.checked) {
                nameField.style.display = 'none';
            } else {
                nameField.style.display = 'block';
            }
        }

        // Saat halaman dimuat, sembunyikan field nama jika checkbox anonim dicentang
        window.addEventListener('DOMContentLoaded', function () {
            const checkbox = document.getElementById('anonim');
            if (checkbox) {
                toggleNameInput(checkbox);
            }
        });

        // Fungsi untuk toggle "suka"
        function toggleLike(button) {
            button.classList.toggle('liked');
        }

        // Menampilkan/menyembunyikan jawaban (comentars)
        function toggleAnswers(id) {
            const container = document.getElementById(`answers-${id}`);
            container.style.display = container.style.display === 'none' ? 'block' : 'none';
        }

        // Menyembunyikan input nama untuk jawaban anonim
        function toggleAnswerName(id) {
            const field = document.getElementById(`answer-name-${id}`);
            const checkbox = document.getElementById(`anonim-answer-${id}`);
            field.style.display = checkbox.checked ? 'none' : 'block';
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