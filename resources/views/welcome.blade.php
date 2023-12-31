<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Zakatin.site</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Green/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Green/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Green/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Green/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Green/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Green/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Green/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Green
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a
                    href="mailto:masjid.baiturrahmah.km21@gmail.com">masjid.baiturrahmah.km21@gmail.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> 081521796126
            </div>
            <div class="social-links d-none d-md-block">
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="">Zakatin</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Zakatin</a></li>
                    <li><a class="nav-link scrollto" href="#team">Struktur Organisasi</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('login') }}">Log In</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(Green/assets/img/bg1.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Zakatin</span></h2>
                            <p class="animate__animated animate__fadeInUp">Mari berbagi kebahagiaan
                                terhadap sesama, dan raih jannah-Nya.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(Green/assets/img/bg3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Zakat Fitrah</h2>
                            <p class="animate__animated animate__fadeInUp">Zakat fitrah merupakan salah satu dari
                                jenis zakat yang wajib dikeluarkan setiap individu merdeka dan mampu serta sesuai dengan
                                syarat yang telah ditetapkan. Zakat sendiri telah menjadi salah satu bagian dari rukun
                                islam yang ke-4. Oleh karena itu, diwajibkan kita sebagai umat muslim untuk selalu
                                membayar zakat terutama zakat fitrah.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(Green/bg02.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Zakat Maal</h2>
                            <p class="animate__animated animate__fadeInUp">Zakat maal yang dimaksud dalam perhitungan
                                ini adalah zakat yang dikenakan atas uang, emas, surat berharga, dan aset yang disewakan
                                (Al Qur'an Surah At Taubah ayat 103, Peraturan Menteri Agama No 52/2014 dan pendapat
                                Shaikh Yusuf Qardawi). Tidak termasuk harta pertanian, pertambangan, dan lain-lain yang
                                diatur dalam UU No.23/2011 tentang pengelolaan zakat. Zakat maal harus sudah mencapai
                                nishab (batas minimum) dan terbebas dari hutang serta kepemilikan telah mencapai 1 tahun
                                (haul).</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Tentang Zakatin</h2>
                    <p>Zakatin adalah platform zakat inovatif yang bertujuan untuk memudahkan dan memperluas akses
                        berzakat bagi masyarakat Indonesia. Zakatin hadir dengan visi untuk mendorong kepedulian sosial
                        dan membangun keadilan melalui zakat. Melalui Zakatin, proses berzakat menjadi lebih mudah,
                        praktis, dan transparan.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="{{ asset('Green/assets/img/zakat1.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h3>Mengepa Harus Zakatin ?</h3>
                        <p class="fst-italic">
                            Dengan Zakatin, Anda membayar zakat dengan cepat melalui layanan online
                            yang aman. Platform ini menyediakan 2 jenis zakat, seperti zakat fitrah dan zakat mal,
                            sehingga Anda dapat memilih sesuai dengan kebutuhan Anda.
                        </p>
                        <p>
                            Selain kemudahan berzakat, Zakatin juga memberikan transparansi yang tinggi. Anda dapat
                            melihat dengan jelas bagaimana dana zakat Anda digunakan dan dampaknya bagi mereka yang
                            membutuhkan. Ini memberikan keyakinan dan kepercayaan bahwa zakat yang Anda bayarkan
                            benar-benar sampai kepada yang berhak menerimanya.
                        </p>
                        <p>
                            Bergabunglah dengan Zakatin dan menjadi bagian dari gerakan kebaikan yang lebih besar.
                            Dengan berzakat melalui Zakatin, Anda ikut membantu meringankan beban mereka yang kurang
                            beruntung, membangun kesejahteraan sosial, dan mewujudkan keadilan dalam masyarakat.
                            Bersama-sama, kita bisa membuat perbedaan nyata dalam hidup orang-orang yang membutuhkan.
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Struktur Organisasi</h2>
                    <p>Struktur organisasi kami memberikan kejelasan dan tanggung jawab yang diperlukan untuk
                        mempercepat kemajuan dan memenuhi harapan kami</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{ asset('Green/e.png') }}" alt="">
                            <h4>Muhammad Fadlan</h4>
                            <span>Sekertaris</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{ asset('Green/g.png') }}" alt="">
                            <h4>Muhammad Fahrezi</h4>
                            <span>Kepala Pengurus Amil</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{ asset('Green/d.png') }}" alt="">
                            <h4>Bayu Saputra</h4>
                            <span>Bendahara</span>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Team Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Hubungi Kami Sekarang</p>
                </div>

                <div class="row">

                    <div class="col-lg-14 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. Trans Kalimantan, Anjir Muara Lama, Kec. Anjir Muara, Kabupaten Barito
                                    Kuala, Kalimantan Selatan 70564</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p><a href="mailto:musikdi9@gmail.com">masjid.baiturrahmah.km21@gmail.com</a></p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>081521796126</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Green</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Green/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Green/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Green/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Green/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Green/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Green/assets/js/main.js') }}"></script>

</body>

</html>
