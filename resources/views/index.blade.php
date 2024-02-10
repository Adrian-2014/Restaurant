<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scaleable=no">
    <title>Restaurant</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('/logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">


    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Charmonman:wght@700&family=Dancing+Script:wght@500&family=Parisienne&family=Sacramento&display=swap"
        rel="stylesheet">
    {{-- font end --}}

</head>

<body>

    {{-- LANDING PAGE --}}
    <section class="first" id="first-sec">

        <nav class="px-lg-5 py-lg-2 px-3 py-2">
            <div class="brand">
                Adrians
            </div>
            <div class="link">
                <div class="link-item aktif" id="link-item">
                    <a href="#">Home</a>
                </div>
                <div class="link-item" id="link-item">
                    <a href="#">Menu</a>
                </div>
                <div class="link-item" id="link-item">
                    <a href="#">Galeri</a>
                </div>
                <div class="link-item" id="link-item">
                    <a href="#">Kontak</a>
                </div>
                <div class="link-item last">
                    <a href="#">Reservasi</a>
                </div>
            </div>
            <div class="ham">
                <a href="#" id="menu" onclick="return false;">
                    <i data-feather="menu"></i>
                </a>
            </div>
        </nav>

        <div class="container position-relative">
            <div class="text-center vh-100 d-flex align-items-center justify-content-center">
                <div class="row g-0 w-100">
                    <div class="col-12 fw-medium fs-2 mb-lg-1 text-light">
                        DIBUAT DENGAN CINTA
                    </div>
                    <div class="col-12 text-light mx-lg-1 my-lg-2 my-3ph px-lg-0 px-1">
                        <div class="teks1">
                            Selamat datang di Website kami.kami menyediakan banyak menu untuk anda cicipi dan nikmati
                            bersama keluarga anda.</div>
                        <div class="teks2">
                            kami membuat website ini untuk memudahkan anda dalam merasakan kenikmatan citarasa
                            hidangan dari kami.
                        </div>
                    </div>
                    <div class="col-12 mt-lg-3 mt-2">
                        <button type="button" class="btn btn-sm rounded-pill px-3 text-light"
                            style="background-color: orangered">klik untuk detail</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="content">
            <div class="photo">
                <img src="img/outdor-restaurant.jpg">
            </div>
            <div class="deskripsi">
                <p class="pe mb-0 mt-0">KISAH KAMI</p>
                <p class="mt-0 mt-lg-1 px-lg-0 px-2">Restoran ini bermula dari mimpi seorang koki berbakat yang memiliki
                    hasrat untuk menghidangkan cita rasa pada dunia. <br>
                    Chef dengan keterampilan memasaknya yang luar biasa,menciptakan menu yang unik dan memikat hati para
                    pelanggan.</p>
            </div>
        </div>

    </section>
    {{-- LANDING PAGE END --}}


    <div class="container text-center">
        <div class="row">
            <div class="col-lg-3 col-6 text-center d-flex flex-column align-items-center g-2 mt-lg-0">
                <i data-feather="thumbs-up" class="like" style="color: rgb(0, 183, 255)"></i>
                <p>1482</p>
                <p class="paragraph">orang-orang menyukai kami</p>
            </div>
            <div class="col-lg-3 col-6 text-center d-flex flex-column align-items-center g-2 mt-lg-0">
                <i data-feather="coffee" class="like" style="color: chocolate"></i>
                <p>112</p>
                <p class="paragraph">menu & hidangan kami</p>
            </div>
            <div class="col-lg-3 col-6 text-center d-flex flex-column align-items-center g-2 mt-lg-0 mt-4">
                <i data-feather="heart" class="like" style="color: rgb(255, 0, 60)"></i>
                <p>882</p>
                <p class="paragraph">orang orang mencintai kami</p>
            </div>
            <div class="col-lg-3 col-6 text-center d-flex flex-column align-items-center g-2 mt-lg-0 mt-4">
                <i data-feather="award" class="like" style="color: rgb(255, 204, 0)"></i>
                <p>651</p>
                <p class="paragraph">pencapaian kami</p>
            </div>

        </div>
    </div>


    {{-- MAIN CONTENT --}}
    <section class="sec">
        <div class="text-center mt-5 fs-2 text-white fw-semibold">
            MENU KAMI
        </div>

        <div class="container px-5 py-5">
            <div class="splide" id="slider1" role="group">
                <div class="splide__track">
                    <ul class="splide__list text-center">
                        <li class="splide__slide">
                            <div class="card">
                                <img src="{{ asset('img-product/burger.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Burger King</h5>
                                    <p class="card-text">kelezatan instan</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="{{ asset('img-product/pizza.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Pizza Special</h5>
                                    <p class="card-text">Hidangan khas italia</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="{{ asset('img-product/croissant.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Croissant</h5>
                                    <p class="card-text">Makanan khas Prancis</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="{{ asset('img-product/nasi-goreng.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Nasi goreng</h5>
                                    <p class="card-text">kelezatan sejuta rasa</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="{{ asset('img-product/lobster.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Lobster</h5>
                                    <p class="card-text">Kesegaran dari lautan</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="{{ asset('img-product/sallad.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Sallad</h5>
                                    <p class="card-text">Makanan Kekinian</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="{{ asset('img-product/sosis-bakar.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Sosis Bakar</h5>
                                    <p class="card-text">Gurih mengenyangkan</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="{{ asset('img-product/tortilla.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Tortilla</h5>
                                    <p class="card-text">Makanan khas Meksiko</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="{{ asset('img-product/donat.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Donat</h5>
                                    <p class="card-text">Hidangan Penutup manis</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card">
                                <img src="{{ asset('img-product/ramen.jpg') }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Ramen</h5>
                                    <p class="card-text">Mie kenyal khas jepang</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="photo">
                <img src="img/the-chef.jpg">
            </div>
            <div class="deskripsi">
                <p class="pe m-0">CHEF KAMI</p>
                <p class="desk m-0 mt-lg-1 px-lg-0 px-2">
                    Chef kami adalah seniman kuliner yang mahir dan memiliki keahlian luar biasa dalam meracik
                    bahan-bahan segar menjadi karya seni rasa yang menggugah selera. Di dalam dapur, chef menggabungkan
                    cita rasa dengan sempurna.
                </p>
                <p class="ttd fw-semibold">
                    Adrians Doc .
                </p>
            </div>
        </div>

    </section>
    {{-- MAIN CONTENT END --}}


    <div class="container end">

        <div class="header">
            TESTIMONIALS
        </div>

        <div class="splide mt-4" id="slider2" role="group" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <div class="body-list">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile">
                                        <div class="pp">
                                            <img src="{{ asset('img/person1.jpg') }}">
                                        </div>
                                        <div class="identitas">
                                            <div class="name">
                                                Rafi Ardian saputra
                                            </div>
                                            <div class="status">
                                                Pelanggan Baru
                                            </div>
                                        </div>
                                    </div>
                                    <div class="komentar">
                                        Pesanan saya, pizza, benar-benar menggugah selera dan memberikan pengalaman
                                        kuliner yang tak terlupakan. Rasa pizza yang enak dan sempurna, disertai dengan
                                        layanan yang ramah dan suasana yang nyaman, membuat kunjungan ini menjadi
                                        sukses.
                                    </div>
                                </div>
                            </div>
                    </li>

                    <li class="splide__slide">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile">
                                    <div class="pp">
                                        <img src="{{ asset('img/person2.jpg') }}">
                                    </div>
                                    <div class="identitas">
                                        <div class="name">
                                            Rio D Jenairo
                                        </div>
                                        <div class="status">
                                            Pelanggan setia
                                        </div>
                                    </div>
                                </div>
                                <div class="komentar">
                                    Saya sangat puas dengan pengalaman makan di restoran ini. Ketika saya memesan nasi
                                    goreng, saya benar-benar terkesan dengan rasa yang lezat. Rasanya pas, bumbunya
                                    terasa sempurna, dan tekstur nasi gorengnya begitu menggugah selera.
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="to-up" id="to-up">
        <a href="#first-sec">
            <i data-feather="chevron-up"></i>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
         <script>
            document.addEventListener('contextmenu', function (e) {
                e.preventDefault();
            });
        </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('#slider1', {
                type: 'loop',
                drag: 'true',
                perMove: '5',
                perPage: 5,
                pagination: true,
                gap: '1.5rem',
                breakpoints: {
                    600: {
                        perPage: 2,
                        gap: '1rem',
                    }
                }
            });

            splide.mount();

            var splide = new Splide('#slider2', {
                type: 'loop',
                perPage: 1,
                autoplay: true,
                drag: false,
                interval: 5000,
                pagination: true,
            });

            splide.mount();
        });
    </script>
    <script src="script.js"></script>
    <script>
        feather.replace();
    </script>
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        window.addEventListener("load", () => {
            if ("serviceWorker" in navigator) {
                navigator.serviceWorker.register("sw.js")
            }
        });
    </script>

    <script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/sw.js')
                .then((registration) => {
                    console.log('Service Worker registered with scope:', registration.scope);
                })
                .catch((error) => {
                    console.error('Service Worker registration failed:', error);
                });
        }
    </script>

</body>

</html>
