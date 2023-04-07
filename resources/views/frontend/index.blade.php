@extends('layouts.frontend.main')

@section('title')
    <title>Singgasana Sports</title>
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="beranda" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Singgasana Sports and Recreation Centre</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Tempat olahraga dan rekreasi terpopuler di Kota Bandung
                        dengan banyak pilihan venue</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#about"
                               class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Get Started</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('frontend') }}/assets/img/hero-img.webp" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="tentang" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                         data-aos-delay="200">
                        <div class="content">
                            <h3>Tentang Kita</h3>
                            <h2>Singgasana Sports and Recreation Centre.</h2>
                            <p>
                                Adalah sarana olah raga dan rekreasi keluarga terletak di kawasan exclusive Permukiman
                                Singgasana Pradana – Bandung. Terdapat fasilitas olahraga dan sarana rekreasi untuk
                                warga sekitar & masyarakat luas. Fasilitas tersebut antara lain : Lapangan Tenis Indoor,
                                Basket Indoor, Squash, Tenis Meja, Badminton, Batting Practice, Fitness, Aerobic, Steam,
                                Whirlpool, Jujitsu, Archery, Sport Shop, Swimming Pool, Auditorium, Function Room, dan
                                Pool Side Cafe.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#"
                                   class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Baca Selengkapnya</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('frontend') }}/assets/img/background-ssnrc.webp" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Statistics</h2>
                    <p>Berapa banyak angka yang kami peroleh</p>
                </header>

                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="232"
                                      data-purecounter-duration="1" class="purecounter"></span>
                                <p>Pengunjung</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="521"
                                      data-purecounter-duration="1" class="purecounter"></span>
                                <p>Event</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-headset" style="color: #15be56;"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="1463"
                                      data-purecounter-duration="1" class="purecounter"></span>
                                <p>Venue</p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Keanggotaan</h2>
                    <p>Ada beberapa jenis keanggotaan yang kami tawarkan dengan periode Keanggotaan 2 bulan, 6 bulan dan
                        12 bulan.</p>
                </header>
                <div class="row gy-4" data-aos="fade-left">
                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card box">
                            <h3 style="color: #07d5c0;" class="card-title">Personal</h3>
                            <img src="{{ asset('frontend') }}/assets/img/pricing/personal.webp" class="card-img-top"
                                 alt="Personal Membership">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Syarat</h5>
                                <p class="card-text mb-4">1 Orang (Usia 17 Tahun Ke Atas)</p>
                            </div>
                            <a href="#" class="btn-buy">Pilih Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card box">
                            <h3 style="color: #65c600;" class="card-title">Couple</h3>
                            <img src="{{ asset('frontend') }}/assets/img/pricing/couple.webp" alt="" class="card-img-top"
                                 alt="Couple Membership">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Syarat</h5>
                                <p class="card-text mb-4">
                                    2 Orang (Usia 17 Tahun Ke Atas)<br>
                                    Untuk Paket Keanggotaan Couple Harus Menyertakan Kartu Keluarga
                                </p>
                            </div>
                            <a href="#" class="btn-buy">Pilih Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card box">
                            <h3 style="color: #ff901c;" class="card-title">Triple</h3>
                            <img src="{{ asset('frontend') }}/assets/img/pricing/triple.webp"
                                 class="card-img-top" alt="Triple Membership">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Syarat</h5>
                                <p class="card-text mb-4"> 3 Orang (2 Orang Dewasa, 1 Orang Usia Dibawah 17 Tahun)<br>
                                    Untuk Paket Keanggotaan Couple Harus Menyertakan Kartu Keluarga</p>
                            </div>
                            <a href="#" class="btn-buy">Pilih Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card box">
                            <h3 style="color: #ff0071;" class="card-title">Family</h3>
                            <img src="{{ asset('frontend') }}/assets/img/pricing/family.webp"
                                 class="card-img-top" alt="Family Membership">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Syarat</h5>
                                <p class="card-text mb-4"> 4 Orang (2 Orang Dewasa, 2 Orang Usia Dibawah 17 Tahun)<br>
                                    Untuk Paket Keanggotaan Family Harus Menyertakan Kartu Keluarga</p>
                            </div>
                            <a href="#" class="btn-buy">Pilih Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card box">
                            <h3 style="color: #26bf9b;" class="card-title">Student</h3>
                            <img src="{{ asset('frontend') }}/assets/img/pricing/student.webp"
                                 class="card-img-top" alt="Student Membership">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Syarat</h5>
                                <p class="card-text mb-4">Untuk Paket Keanggotaan Student Harus Menyertakan Kartu Siswa
                                    / Kartu Mahasiswa
                                    <br>
                                    Periode Keanggotaan Student (2 Bulan & 6 Bulan)</p>
                            </div>
                            <a href="#" class="btn-buy">Pilih Sekarang</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3 d-flex align-items-stretch">
                        <div class="card box">
                            <h3 style="color: #ff901c;" class="card-title">Corporate/Community</h3>
                            <img src="{{ asset('frontend') }}/assets/img/pricing/community.webp"
                                 class="card-img-top" alt="Community Membership">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Syarat</h5>
                                <p class="card-text mb-4"> Terdiri dari 5 / 10 Orang dalam 1 Group</p>
                            </div>
                            <a href="#" class="btn-buy">Pilih Sekarang</a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= FacilitySection ======= -->
        <section id="fasilitas" class="facility">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Fasilitas</h2>
                    <p>Lihat fasilitas yang ada</p>
                </header>

                <div class="row gy-4 facility-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 facility-item">
                        <div class="facility-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-1.webp" class="img-fluid" alt="">
                            <div class="facility-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="facility-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-1.webp"
                                       data-gallery="facilityGallery" class="portfokio-lightbox" title="App 1"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="facility-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 facility-item">
                        <div class="facility-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-2.webp" class="img-fluid" alt="">
                            <div class="facility-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="facility-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-2.webp"
                                       data-gallery="facilityGallery" class="portfokio-lightbox" title="App 1"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="facility-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 facility-item">
                        <div class="facility-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-3.webp" class="img-fluid" alt="">
                            <div class="facility-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="facility-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-3.webp"
                                       data-gallery="facilityGallery" class="portfokio-lightbox" title="App 1"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="facility-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 facility-item">
                        <div class="facility-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-4.webp" class="img-fluid" alt="">
                            <div class="facility-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="facility-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-4.webp"
                                       data-gallery="facilityGallery" class="portfokio-lightbox" title="App 1"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="facility-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 facility-item">
                        <div class="facility-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-5.webp" class="img-fluid" alt="">
                            <div class="facility-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="facility-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-5.webp"
                                       data-gallery="facilityGallery" class="portfokio-lightbox" title="App 1"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="facility-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 facility-item">
                        <div class="facility-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-6.webp" class="img-fluid" alt="">
                            <div class="facility-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="facility-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-6.webp"
                                       data-gallery="facilityGallery" class="portfokio-lightbox" title="App 1"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="facility-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 facility-item">
                        <div class="facility-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-2.webp" class="img-fluid" alt="">
                            <div class="facility-info">
                                <h4>Kolam</h4>
                                <p></p>
                                <div class="facility-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-2.webp"
                                       data-gallery="facilityGallery" class="portfokio-lightbox" title="Web 3"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="facility-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 facility-item">
                        <div class="facility-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/tenis-meja-2.webp" class="img-fluid"
                                 alt="">
                            <div class="facility-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="facility-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/tenis-meja-2.webp"
                                       data-gallery="facilityGallery" class="portfokio-lightbox" title="App 2"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="facility-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 facility-item">
                        <div class="facility-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/tenis-meja-3.webp" class="img-fluid"
                                 alt="">
                            <div class="facility-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="facility-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/tenis-meja-3.webp"
                                       data-gallery="facilityGallery" class="portfokio-lightbox" title="App 2"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="facility-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 facility-item">
                        <div class="facility-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/tenis-meja-1.webp" class="img-fluid"
                                 alt="">
                            <div class="facility-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="facility-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/tenis-meja-1.webp"
                                       data-gallery="facilityGallery" class="portfokio-lightbox" title="App 2"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="facility-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End FacilitySection -->

        <!-- ======= Gallery Section ======= -->
        <section id="fasilitas" class="gallery">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Venue</h2>
                    <p>Lihat venue sport yang ada</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="gallery-flters">
                            <li data-filter="*" class="filter-active">All Venue</li>
                            <li data-filter=".filter-football">Football Area</li>
                            <li data-filter=".filter-swim">Swimming Area</li>
                            <li data-filter=".filter-gym">Gym Area</li>
                            <li data-filter=".filter-tennis">Tennis Area</li>
                            <li data-filter=".filter-basket">Basket Area</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 gallery-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 gallery-item filter-swim">
                        <div class="gallery-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-1.webp" class="img-fluid" alt="">
                            <div class="gallery-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="gallery-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-1.webp"
                                       data-gallery="galleryGallery" class="portfokio-lightbox" title="App 1"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="gallery-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 gallery-item filter-swim">
                        <div class="gallery-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-2.webp" class="img-fluid" alt="">
                            <div class="gallery-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="gallery-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-2.webp"
                                       data-gallery="galleryGallery" class="portfokio-lightbox" title="App 1"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="gallery-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 gallery-item filter-swim">
                        <div class="gallery-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-3.webp" class="img-fluid" alt="">
                            <div class="gallery-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="gallery-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-3.webp"
                                       data-gallery="galleryGallery" class="portfokio-lightbox" title="App 1"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="gallery-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item filter-swim">
                        <div class="gallery-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-4.webp" class="img-fluid" alt="">
                            <div class="gallery-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="gallery-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-4.webp"
                                       data-gallery="galleryGallery" class="portfokio-lightbox" title="App 1"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="gallery-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item filter-swim">
                        <div class="gallery-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-5.webp" class="img-fluid" alt="">
                            <div class="gallery-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="gallery-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-5.webp"
                                       data-gallery="galleryGallery" class="portfokio-lightbox" title="App 1"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="gallery-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item filter-swim">
                        <div class="gallery-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-6.webp" class="img-fluid" alt="">
                            <div class="gallery-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="gallery-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-6.webp"
                                       data-gallery="galleryGallery" class="portfokio-lightbox" title="App 1"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="gallery-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item filter-football">
                        <div class="gallery-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/kolam-2.webp" class="img-fluid" alt="">
                            <div class="gallery-info">
                                <h4>Kolam</h4>
                                <p></p>
                                <div class="gallery-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/kolam-2.webp"
                                       data-gallery="galleryGallery" class="portfokio-lightbox" title="Web 3"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="gallery-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item filter-tennis">
                        <div class="gallery-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/tenis-meja-2.webp" class="img-fluid"
                                 alt="">
                            <div class="gallery-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="gallery-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/tenis-meja-2.webp"
                                       data-gallery="galleryGallery" class="portfokio-lightbox" title="App 2"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="gallery-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item filter-tennis">
                        <div class="gallery-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/tenis-meja-3.webp" class="img-fluid"
                                 alt="">
                            <div class="gallery-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="gallery-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/tenis-meja-3.webp"
                                       data-gallery="galleryGallery" class="portfokio-lightbox" title="App 2"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="gallery-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 gallery-item filter-tennis">
                        <div class="gallery-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/venue/tenis-meja-1.webp" class="img-fluid"
                                 alt="">
                            <div class="gallery-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="gallery-links">
                                    <a href="{{ asset('frontend') }}/assets/img/venue/tenis-meja-1.webp"
                                       data-gallery="galleryGallery" class="portfokio-lightbox" title="App 2"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="gallery-details.html" title="More Details"><i class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Gallery Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="blog" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Blog</h2>
                    <p>Recent posts form our Blog</p>
                </header>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ asset('frontend') }}/assets/img/blog/blog-1.webp"
                                                       class="img-fluid"
                                                       alt=""></div>
                            <span class="post-date">Tue, September 15</span>
                            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur
                                sit</h3>
                            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ asset('frontend') }}/assets/img/blog/blog-2.webp"
                                                       class="img-fluid"
                                                       alt=""></div>
                            <span class="post-date">Fri, August 28</span>
                            <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
                            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ asset('frontend') }}/assets/img/blog/blog-3.webp"
                                                       class="img-fluid"
                                                       alt=""></div>
                            <span class="post-date">Mon, July 11</span>
                            <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Our Address</h3>
                                    <p>Bandung <br>
                                        Jawa Barat</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>P : +62 22 543 6458<br>F : +62 22 543 5868</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                           required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                           required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                           required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                              required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
