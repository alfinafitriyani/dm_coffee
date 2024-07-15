<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DMCOFFEE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/logo.png" alt="">
                <!--<h1>DM COFFE<span>.</span></h1>-->
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Beranda</a></li>
                    <li><a href="#about">Tentang</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#catering">Catering</a></li>
                    <!--<li><a href="#events">Event</a></li>
                    <li><a href="#chefs">Chefs</a></li>-->
                    <li><a href="#gallery">Galeri</a></li>
                    <li><a href="#contact">Kontak</a></li>
                    <li class="login-register">
                        @if (Route::has('login'))
                        @auth
                    <li>
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </li>
                    @else
                    <li> <a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Register</a>
                        @endif
                        @endauth
                        @endif
                    </li>
                </ul>
            </nav><!-- .navbar -->
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>



        </div>
    </header><!-- End Header -->


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up"><span>DM</span> Coffee <br> Cafe <span>&</span> Catering</h2>
                    <p data-aos="fade-up" data-aos-delay="100">Ayo cicipi menu-menu di DM coffe!<br> Tersedia berbagai
                        menu
                        enak yang akan membuat kalian ketagihan!.</p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#book-a-table" class="btn-book-a-table">Reservasi</a>

                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="assets/img/dmcoffee.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Tentang Kami</h2>
                    <p>Pelajari Lebih Lanjut <span>Tentang Kami</span></p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-5 position-relative about-img order-2 order-lg-1" style="background-image: url(assets/img/dm.jpg);" data-aos="fade-up" data-aos-delay="150">

                    </div>
                    <div class="col-lg-7 d-flex align-items-end order-1 order-lg-2" data-aos="fade-up" data-aos-delay="300">
                        <div class="content pe-0 pe-lg-5">
                            <p class="fst-italic">
                                DM Coffee merupakan indoor cafe yang menyediakan berbagai menu makanan dan minuman enak
                                dengan tempat yang nyaman. Nama DM Coffee merupakan singkatan dari Dapur Mewah, Mewah
                                sendiri
                                memiliki makna mepet sawah. Disini Juga menyediakan berbagai fasilitas, diantaranya :
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i>Tempat yang nyaman</li>
                                <li><i class="bi bi-check2-all"></i>Makanan dan minuman Enak</li>
                                <li><i class="bi bi-check2-all"></i>Mushola</li>
                                <li><i class="bi bi-check2-all"></i>Toilet Bersih</li>
                                <li><i class="bi bi-check2-all"></i>Karaoke Gratis</li>
                                <li><i class="bi bi-check2-all"></i>Live Music Sesuai Jadwal</li>
                            </ul>
                            <p class="fst-italic">
                                Di DM Coffe juga menyediakan layanan Cathering, seperti:
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i>Nasi Box</li>
                                <li><i class="bi bi-check2-all"></i>Tumpeng</li>
                                <li><i class="bi bi-check2-all"></i>Hajatan, dll</li>

                            </ul>
                            <p>
                                Kalian bisa kumpul dan seru-seruan bareng komunitas, keluarga, maunpun teman di DM
                                Coffee bisa banget. Tunggu apa lagi segera datang di DM coffee dan cicipi menu-menu
                                andalan kami. Serbu juga diskon-diskon yang ada!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="why-box">
                            <h3>Kalian Juga Bisa Order Lewat GrabFood, GoFood, Maupun ShopeeFood lo! Ayo Order Sekarang!
                            </h3>
                            <p>

                            </p>
                            {{-- <div class="text-center">
                                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div> --}}
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-center">
                        <div class="row gy-4">

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <a href="https://r.grab.com/g/6-20240604_112745_ce5018db95d58666_MEXMPS-6-C24EJNVHFACYCA" target="_blank">
                                        <img src="assets/img/grabfood.png" alt="GrabFood Logo" style="width: 250px; height: auto;">
                                    </a>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center ">
                                    <a href="https://gofood.link/a/D2M8FBf" target="_blank">
                                        <img src="assets/img/gofood.png" alt="GoFood Logo" style="width: 250px; height: auto;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center ">
                                    <a href="https://r.grab.com/g/6-20240604_112745_ce5018db95d58666_MEXMPS-6-C24EJNVHFACYCA" target="_blank">
                                        <img src="assets/img/shopeefood.png" alt="ShopeeFood Logo" style="width: 250px; height: auto;">
                                    </a>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->
        <!-- End Why Us Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="zoom-out">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md- 6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Workers</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>
        </section><!-- End Stats Counter Section -->

        <!-- ======= Menu Section ======= -->
        <section id="menu" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Menu Kami</h2>
                    <p><span>DM </span>Coffe</p>
                </div>

                <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                            <h4>Makanan</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                            <h4>Snack</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                            <h4>Aneka Kopi</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                            <h4>Wedangan</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                            <h4>Jus & Es</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="menu-starters">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Makanan</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/ayamgoreng.png" class="glightbox"><img src="assets/img/menu/ayamgoreng.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Ayam Goreng</h4>
                                <p class="deskripsi">
                                    Ayam goreng dengan rasa yang gurih.
                                </p>
                                <p class="harga">
                                    Rp 23.000
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/bebekgoreng.png" class="glightbox"><img src="assets/img/menu/bebekgoreng.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Bebek Goreng</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    Rp 25.000
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/pempek.png" class="glightbox"><img src="assets/img/menu/pempek.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Pempek</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    Rp 13.000
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/miegorengjowo.png" class="glightbox"><img src="assets/img/menu/miegorengjowo.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Mie Goreng Jowo</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    Rp 12.000
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/nasigorengkemul.png" class="glightbox"><img src="assets/img/menu/nasigorengkemul.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Nasi Goreng Kemul</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    Rp 12.000
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/sopiga.png" class="glightbox"><img src="assets/img/menu/sopiga.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Sop Iga</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    Rp 30.000
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Starter Menu Content -->

                    <div class="tab-pane fade" id="menu-breakfast">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Snack</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $5.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $14.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $8.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $9.95
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Breakfast Menu Content -->

                    <div class="tab-pane fade" id="menu-lunch">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Aneka Kopi</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $5.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $14.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $8.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $9.95
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Lunch Menu Content -->

                    <div class="tab-pane fade" id="menu-dinner">

                        <div class="tab-header text-center">
                            <p>Menu</p>
                            <h3>Wedangan</h3>
                        </div>

                        <div class="row gy-5">

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Magnam Tiste</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $5.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Aut Luia</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $14.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Est Eligendi</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $8.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Eos Luibusdam</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $12.95
                                </p>
                            </div><!-- Menu Item -->

                            <div class="col-lg-4 menu-item">
                                <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                                <h4>Laboriosam Direva</h4>
                                <p class="deskripsi">
                                    Lorem, deren, trataro, filede, nerada
                                </p>
                                <p class="harga">
                                    $9.95
                                </p>
                            </div><!-- Menu Item -->

                        </div>
                    </div><!-- End Dinner Menu Content -->

                </div>

            </div>
        </section><!-- End Menu Section -->

        <!-- ======= Catering Section ======= -->
        <section id="catering" class="menu">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Catering Kami</h2>
                    <p><span>DM Coffee </span>Catering</p>
                </div>

                <div class="row gy-5">
                    <div class="col-lg-4">
                        <div class="card">
                            <img src="assets/img/catering/card-1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Catering Paket A</h5>
                                <p class="card-text">Deskripsi singkat mengenai paket catering ini.</p>
                                <p class="card-text"><strong>Harga:</strong> Rp 200.000 per porsi</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <img src="assets/img/catering/card-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Catering Paket B</h5>
                                <p class="card-text">Deskripsi singkat mengenai paket catering ini.</p>
                                <p class="card-text"><strong>Harga:</strong> Rp 250.000 per porsi</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <img src="assets/img/catering/card-3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Catering Paket C</h5>
                                <p class="card-text">Deskripsi singkat mengenai paket catering ini.</p>
                                <p class="card-text"><strong>Harga:</strong> Rp 300.000 per porsi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="https://wa.me/6281234567890?text=Saya%20ingin%20pesan%20catering%20dengan%20paket%20A" class="btn btn-primary">Pesan Sekarang</a>
                </div>

            </div>
        </section><!-- End Catering Section -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimoni</h2>
                    <p>What Are They <span>Saying About Us</span></p>
                </div>

                <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Proin iaculis purus consequat sem cure digni ssim donec porttitora
                                                entum
                                                suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget
                                                nibh
                                                et. Maecen aliquam, risus at semper.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Saul Goodman</h3>
                                            <h4>Ceo &amp; Founder</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore
                                                quem
                                                cillum quid cillum eram malis quorum velit fore eram velit sunt
                                                aliqua
                                                noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Sara Wilsson</h3>
                                            <h4>Designer</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Enim nisi quem export duis labore cillum quae magna enim sint quorum
                                                nulla quem veniam duis minim tempor labore quem eram duis noster
                                                aute
                                                amet eram fore quis sint minim.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Jena Karlis</h3>
                                            <h4>Store Owner</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua
                                                veniam
                                                tempor noster veniam enim culpa labore duis sunt culpa nulla illum
                                                cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>John Larson</h3>
                                            <h4>Entrepreneur</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->


        <!-- ======= Book A Table Section ======= -->
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Reservasi</h2>
                    <p>Reservasi <span> Sekarang </span></p>
                </div>

                <div class="row g-0">

                    <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

                    <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                            <div class="row gy-4">
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Telepon" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" name="date" class="form-control" id="date" placeholder="Tanggal" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="text" class="form-control" name="time" id="time" placeholder="Waktu" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                    <div class="validate"></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <input type="number" class="form-control" name="people" id="people" placeholder="Jumlah Orang" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Pesan"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Permintaan pemesanan Anda telah dikirim. Kami akan
                                    menghubungi kembali atau mengirim Email untuk mengonfirmasi reservasi Anda.
                                    Terima
                                    kasih!</div>
                            </div>
                            <div class="text-center"><button type="submit">KIRIM</button></div>
                        </form>
                    </div><!-- End Reservation Form -->

                </div>

            </div>
        </section><!-- End Book A Table Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>galeri</h2>
                    <p>Galeri <span>Kami</span></p>
                </div>

                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a>
                        </div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Kontak</h2>
                    <p>Hubungi <span>Kami</span></p>
                </div>

                <div class="mb-3">
                    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.3389716175607!2d110.76226967356227!3d-6.728431965784353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70dd82ee00ddf7%3A0x13365a69a3565eb5!2sDM%20Coffee!5e0!3m2!1sid!2sid!4v1716860986940!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-md-4">
                        <div class="info-item d-flex align-items-center">
                            <i class="icon bi bi-map flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Jl.Mayong-Bungu, RT. 06 RW. 01<br>
                                    Kecamatan Mayong, Kabupaten Jepara<br></p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-4">
                        <div class="info-item d-flex align-items-center">
                            <a href="mailto:dmcoffee.jepara@gmail.com"></a>
                            <i class="icon bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>dmcoffee.jepara@gmail.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-4">
                        <div class="info-item d-flex align-items-center">
                            <a href="https://wa.me/6285230955158" target="_blank">
                                <i class="icon bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Telepon</h3>
                                    <p>0852-3095-5158
                            </a></p>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-4">
                    <div class="info-item d-flex align-items-center">
                        <i class="icon bi bi-share flex-shrink-0"></i>
                        <div>
                            <h3>Buka</h3>
                            <div><strong>Senin-Jumat:</strong> 11.00 - 22.00
                                <br><strong>Sabtu-Minggu:</strong> 10.00 - 23.00
                            </div>
                        </div>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-md-4">
                    <div class="info-item d-flex align-items-center">
                        <a href="https://www.instagram.com/dmcoffee.jepara?igsh=MThhdGQ3ZDk2dTFh" target="_blank">
                            <i class="icon bi bi-instagram flex-shrink-0"></i>
                            <div>
                                <h3>Instagram</h3>
                                <p>dmcoffee.jepara
                        </a></p>
                    </div>
                </div>
            </div><!-- End Info Item -->

            <div class="col-md-4">
                <div class="info-item d-flex align-items-center">
                    <a href="https://www.facebook.com/DMCoffeeJepara" target="_blank">
                        <i class="icon bi bi-facebook flex-shrink-0"></i>
                        <div>
                            <h3>Facebook</h3>
                            <p>DMCoffeJepara
                    </a></p>
                </div>
            </div>
            </div><!-- End Info Item -->

            </div>


            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Alamat</h4>
                        <p>
                            Jl.Mayong-Bungu, RT. 06 RW. 01<br>
                            Kecamatan Mayong, Kabupaten Jepara<br>
                        </p>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Reservations</h4>
                        <p>
                            <strong>Telepon:</strong> 0852-3095-5158<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Buka</h4>
                        <p>
                            <strong>Mon-Sat: 11AM</strong> - 23PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Ikuti Kami</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Alfina Fitriyani 2024 | RPL A POLIBANG</span></strong>. All Rights
                Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>