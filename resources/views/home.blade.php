<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.homecss')
</head>

<body>

    @include('home.navbar')
    @include('home.hero')
    @include('home.about')


    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="zoom-out">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Tampat yang nyaman untuk quality time</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Projects</p>
                    </div>
                </div><!-- End Stats Item -->
            </div>
        </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <p><span>Menu </span>Kami</p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-makanan">
                        <h5>Makanan</h5>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-snack">
                        <h5>Snack</h5>
                    </a>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-kopi">
                        <h5>Aneka Kopi</h5>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-wedangan">
                        <h5>Wedangan</h5>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-jus">
                        <h4>Jus & Es</h4>
                    </a>
                </li>

            </ul>
            @php
                use App\Models\Makanan;
                use App\Models\Snack;
                use App\Models\Kopi;
                use App\Models\Wedangan;
                use App\Models\Jus;
                $makanan = Makanan::all();
                $snack = Snack::all();
                $kopi = Kopi::all();
                $wedangan = Wedangan::all();
                $jus = Jus::all();
            @endphp

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                <!-- Menu Makanan  -->
                <div class="tab-pane fade active show" id="menu-makanan">
                    <div class="tab-header text-center">
                        <h4>Makanan</h4>
                    </div>
                    <div class="row gy-5">
                        @foreach ($makanan as $index => $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 menu-item">
                                <!-- MENU THUMB -->
                                <div class="menu-thumb">
                                    <a href="#" class="image-popup" data-toggle="modal"
                                        data-target="#menuModal{{ $index }}">
                                        <img src="{{ asset('images/' . $item->gambar) }}"
                                            class="img-responsive menu-image" alt="{{ $item->nama }}">
                                        <div class="menu-info">
                                            <div class="menu-item">
                                                <h3>{{ $item->nama }}</h3>
                                                <p>{{ $item->deskripsi }}</p>
                                            </div>
                                            <div class="menu-price">
                                                <span>Rp
                                                    {{ number_format($item->harga, 0, ',', '.') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="menuModal{{ $index }}" tabindex="-1" role="dialog"
                                aria-labelledby="menuModalLabel{{ $index }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="menuModalLabel{{ $index }}">
                                                {{ $item->nama }}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{ $item->deskripsi }}</p>
                                            <p>Harga: Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div><!-- End Menu Makanan  -->

                <!-- Menu Snack  -->
                <div class="tab-pane fade" id="menu-snack">
                    <div class="tab-header text-center">
                        <h4>Snack</h4>
                    </div>
                    <div class="row gy-5">
                        <!-- Looping through $snack items -->
                        @foreach ($snack as $index => $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 menu-item">
                                <!-- MENU THUMB -->
                                <div class="menu-thumb">
                                    <a href="#" class="image-popup" data-toggle="modal"
                                        data-target="#menuModal{{ $index }}">
                                        <img src="{{ asset('images/' . $item->gambar) }}"
                                            class="img-responsive menu-image" alt="{{ $item->nama }}">
                                        <div class="menu-info">
                                            <div class="menu-item">
                                                <h3>{{ $item->nama }}</h3>
                                                <p>{{ $item->deskripsi }}</p>
                                            </div>
                                            <div class="menu-price">
                                                <span>Rp
                                                    {{ number_format($item->harga, 0, ',', '.') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="menuModal{{ $index }}" tabindex="-1" role="dialog"
                                aria-labelledby="menuModalLabel{{ $index }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="menuModalLabel{{ $index }}">
                                                {{ $item->nama }}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{ $item->deskripsi }}</p>
                                            <p>Harga: Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- End Menu Snack -->

                <!-- Menu Kopi  -->
                <div class="tab-pane fade" id="menu-kopi">
                    <div class="tab-header text-center">
                        <h4>Aneka Kopi</h4>
                    </div>
                    <div class="row gy-5">
                        <!-- Looping through $kopi items -->
                        @foreach ($kopi as $index => $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 menu-item">
                                <!-- MENU THUMB -->
                                <div class="menu-thumb">
                                    <a href="#" class="image-popup" data-toggle="modal"
                                        data-target="#menuModal{{ $index }}">
                                        <img src="{{ asset('images/' . $item->gambar) }}"
                                            class="img-responsive menu-image" alt="{{ $item->nama }}">
                                        <div class="menu-info">
                                            <div class="menu-item">
                                                <h3>{{ $item->nama }}</h3>
                                                <p>{{ $item->deskripsi }}</p>
                                            </div>
                                            <div class="menu-price">
                                                <span>Rp
                                                    {{ number_format($item->harga, 0, ',', '.') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="menuModal{{ $index }}" tabindex="-1" role="dialog"
                                aria-labelledby="menuModalLabel{{ $index }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="menuModalLabel{{ $index }}">
                                                {{ $item->nama }}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{ $item->deskripsi }}</p>
                                            <p>Harga: Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- End Menu Snack -->

                <!-- Menu Wedangan  -->
                <div class="tab-pane fade" id="menu-wedangan">
                    <div class="tab-header text-center">
                        <h4>Wedangan</h4>
                    </div>
                    <div class="row gy-5">
                        <!-- Looping through $wedangan items -->
                        @foreach ($wedangan as $index => $item)
                            <div class="col-lg-4 menu-item">
                                <a href="#" class="glightbox" data-toggle="modal"
                                    data-target="#menuModal{{ $index }}"><img
                                        src="{{ asset('images/' . $item->gambar) }}" class="menu-img img-fluid"></a>
                                <h4>{{ $item->nama }}</h4>
                                <p class="deskripsi">{{ $item->deskripsi }}</p>
                                <p class="harga"><span>Rp {{ number_format($item->harga, 0, ',', '.') }}</span>
                                </p>
                            </div><!-- Menu Item -->
                        @endforeach
                    </div>
                </div><!-- End Menu Wedangan -->

                <!-- Menu Jus  -->
                <div class="tab-pane fade" id="menu-jus">
                    <div class="tab-header text-center">
                        <h4>Jus & Es</h4>
                    </div>
                    <div class="row gy-5">
                        <!-- Looping through $jus items -->
                        @foreach ($jus as $index => $item)
                            <div class="col-lg-4 col-md-6 col-sm-12 menu-item">
                                <!-- MENU THUMB -->
                                <div class="menu-thumb">
                                    <a href="#" class="image-popup" data-toggle="modal"
                                        data-target="#menuModal{{ $index }}">
                                        <img src="{{ asset('images/' . $item->gambar) }}"
                                            class="img-responsive menu-image" alt="{{ $item->nama }}">
                                        <div class="menu-info">
                                            <div class="menu-item">
                                                <h3>{{ $item->nama }}</h3>
                                                <p>{{ $item->deskripsi }}</p>
                                            </div>
                                            <div class="menu-price">
                                                <span>Rp
                                                    {{ number_format($item->harga, 0, ',', '.') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="menuModal{{ $index }}" tabindex="-1" role="dialog"
                                aria-labelledby="menuModalLabel{{ $index }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="menuModalLabel{{ $index }}">
                                                {{ $item->nama }}</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{ $item->deskripsi }}</p>
                                            <p>Harga: Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div><!-- End Menu Jus -->

            </div>
        </div>
    </section><!-- End Menu Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <p><span>Catering </span>Kami</p>
            </div>
            @php
                // use App\Models\Catering;
                // $catering = Catering::all();
            @endphp
            <div class="row gy-5">
                {{-- @foreach ($catering as $index => $item) --}}
                <div class="col-lg-4 col-md-6 col-sm-12 menu-item">
                    <!-- MENU THUMB -->
                    <div class="menu-thumb">
                        <a href="#" class="image-popup" data-toggle="modal"
                            data-target="#menuModal{{ $index }}">
                            <img src="{{ asset('images/' . $item->gambar) }}" class="img-responsive menu-image"
                                alt="{{ $item->nama }}">
                            <div class="menu-info">
                                <div class="menu-item">
                                    <h3>{{ $item->nama }}</h3>
                                    <p>{{ $item->deskripsi }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="menuModal{{ $index }}" tabindex="-1" role="dialog"
                    aria-labelledby="menuModalLabel{{ $index }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="menuModalLabel{{ $index }}">
                                    {{ $item->nama }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>{{ $item->deskripsi }}</p>
                                <p>Harga: Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>

        </div>
    </section><!-- End Menu Section -->

    <!-- ======= Catering Section ======= -->
    <section id="catering" class="catering ">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Catering</h2>
                <p><span>Catering</span> Kami </span></p>
            </div>
            <div>
                <div class="row bg-danger-section">
                    <div class="col-md-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="assets/img/catering/catering.png" class="img-fluid rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">This is a wider card with supporting text below as
                                            a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="assets/img/catering/catering-1.png" class="img-fluid rounded-start"
                                        alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Catering Section -->


    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Reservasi</h2>
                <p>Reservasi <span> Sekarang </span></p>
            </div>

            <div class="row g-0">

                <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);"
                    data-aos="zoom-out" data-aos-delay="200"></div>

                <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
                    <form action="javascript:void(0);" method="post" role="form" class="wow fadeInUp"
                        id="contact-form" data-wow-delay="0.8s" data-aos-delay="100" onsubmit="sendWhatsApp()">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="name" class="form-control" id="res-name"
                                    placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="email" class="form-control" name="email" id="res-email"
                                    placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" name="phone" id="res-phone"
                                    placeholder="Telepon" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" name="date" class="form-control" id="res-date"
                                    placeholder="Tanggal" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="text" class="form-control" name="time" id="res-time"
                                    placeholder="Waktu" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <input type="number" class="form-control" name="people" id="res-people"
                                    placeholder="Jumlah Orang" data-rule="minlen:1"
                                    data-msg="Please enter at least 1 chars">
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Pesan" id="res-message"></textarea>
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
                        <div class="text-center"><button type="submit" id="res-submit">KIRIM</button></div>
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
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg"
                                class="img-fluid" alt=""></a>
                    </div>
                    <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                            href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg"
                                class="img-fluid" alt=""></a>
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
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.3389716175607!2d110.76226967356227!3d-6.728431965784353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70dd82ee00ddf7%3A0x13365a69a3565eb5!2sDM%20Coffee!5e0!3m2!1sid!2sid!4v1716860986940!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen></iframe>
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

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
    <script src="assets/js/Node.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script> --}}
    {{-- <script>
        function sendWhatsApp() {
            var name = document.getElementById('res-name').value;
            var email = document.getElementById('res-email').value;
            var phone = document.getElementById('res-phone').value;
            var date = document.getElementById('res-date').value;
            var time = document.getElementById('res-time').value;
            var people = document.getElementById('res-people').value;
            var resmessage = document.getElementById('res-message').value;

            var message = "Nama: " + name + "%0AEmail: " + email + "%0APhone: " + phone + "%0ATanggal: " + date +
                "%0AWaktu: " +
                time + "%0AJumlah Orang: " + people + "%0APesan: " + resmessage;

            var whatsappUrl = "https://wa.me/6281326351768?text=" + message;
            window.open(whatsappUrl, '_blank');
        }
    </script> --}}
    <script>
        function sendWhatsApp() {
            var name = document.getElementById('res-name').value;
            var email = document.getElementById('res-email').value;
            var phone = document.getElementById('res-phone').value;
            var date = document.getElementById('res-date').value;
            var time = document.getElementById('res-time').value;
            var people = document.getElementById('res-people').value;
            var resmessage = document.getElementById('res-message').value;

            var data = {
                name: name,
                email: email,
                phone: phone,
                date: date,
                time: time,
                people: people,
                resmessage: resmessage
            };

            fetch('YOUR_BACKEND_URL/generate-struk', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data),
                })
                .then(response => response.json())
                .then(data => {
                    var whatsappUrl = "https://wa.me/6281326351768?text=" + encodeURIComponent(
                        "Pesanan Anda sedang diproses. Silakan cek struk berikut: " + data.imageUrl);
                    window.open(whatsappUrl, '_blank');
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }
    </script>

</body>

</html>
