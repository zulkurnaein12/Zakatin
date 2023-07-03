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
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
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
                <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
            </div>
            <div class="social-links d-none d-md-block">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="#">Zakatin</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang Zakatin</a></li>
                    <li><a class="nav-link scrollto" href="#services">Pembayaran Zakat</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li class="dropdown"><a class="getstarted scrollto" href="#"><span>Profile</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown-header">
                                @if (Auth::user()->avatar)
                                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Profile"
                                        class="rounded-circle" width="60px" />
                                @else
                                    <img src="{{ asset('nice') }}/assets/img/profile-img.jpg" alt="Profile"
                                        class="rounded-circle">
                                @endif
                                <h6 class="text-center"><strong>{{ Auth::user()->name }}</strong></h6>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">Sign
                                    Out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
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
                            <p class="animate__animated animate__fadeInUp">"Zakatin: Membuat Perubahan Positif dengan
                                Satu Klik untuk Membayar Zakat dan Membantu Masyarakat yang Membutuhkan"</p>
                            <a href="#services"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Bayar Zakat
                                Sekarang</a>
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
                            <a href="#services"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Bayar Zakat
                                Sekarang</a>
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
                            <a href="#services"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Bayar Zakat
                                Sekarang</a>
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
        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services section-bg">
            <div class="container">

                <div class="row no-gutters">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-box-seam-fill"></i></div>
                            <h4 class="title"><a href="">Zakat Fitrah Terkumpul</a></h4>
                            <p class="description"><strong>{{ $zakatfit }} Kg</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-cash"></i></div>
                            <h4 class="title"><a href="">Zakat Maal Terkumpul</a></h4>
                            <p class="description"><strong>Rp {{ number_format($zakatmaal, 2) }}</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-box-seam-fill"></i></div>
                            <h4 class="title"><a href="">Zakat Fitrah yang tersalurkan</a></h4>
                            <p class="description"><strong>{{ $penerimaanberas }} Kg</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-cash"></i></div>
                            <h4 class="title"><a href="">Zakat Maal Yang Tersalurkan</a></h4>
                            <p class="description"><strong>Rp {{ number_format($penerimaanuang, 2) }}</strong></p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Services Section -->

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

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Pembayaran Zakat</h2>
                    <p>"Melakukan Kewajiban Agung: Membayar Zakat, Menyucikan Harta, dan Memberi Kepada Sesama dengan
                        Penuh Kehati-hatian dan Keikhlasan dalam Mencapai Kemaslahatan Umat dan Keridhaan Ilahi"</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <h4 class="card-title mb-3">Konfirmasi Pembayaran</h4>
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 label ">Nama</div>
                            <div class="col-lg-9 col-md-8">{{ $pembayaran->nama }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 label">No Telpon</div>
                            <div class="col-lg-9 col-md-8">{{ $pembayaran->phone }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 label">Alamat</div>
                            <div class="col-lg-9 col-md-8">{{ $pembayaran->alamat }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-3 col-md-4 label">Total Pembayaran</div>
                            <div class="col-lg-9 col-md-8">Rp {{ number_format($pembayaran->total_uang, 2) }}</div>
                        </div>
                        <button id="pay-button" class="btn btn-primary">Bayar Sekarang</button>
                        <a class="btn btn-success" name="" id=""
                            href="{{ route('muzakki.dashboard') }}">Back</a>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        <h4 class="card-title mb-2">Form Pembayaran</h4>
                        <form action="{{ route('muzakki.checkout') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputText" name="nama"
                                        id="" required aria-describedby="helpId" placeholder="Nama">
                                    {{-- if error validate --}}
                                    @error('nama')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">No Telpon</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="inputText" name="phone"
                                        id="" required aria-describedby="helpId" placeholder="No Telpon">
                                    {{-- if error validate --}}
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <textarea name="alamat" class="form-control  @error('alamat') is-invalid @enderror" id="alamat"
                                        style="height: 100px"></textarea>
                                </div>
                                @error('alamat')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Total</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputText" name="total_uang"
                                        id="" required aria-describedby="helpId" placeholder="Total">
                                    @error('total')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label">Keterangan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputText" name="ket"
                                        id="" required aria-describedby="helpId" placeholder="ket">
                                    {{-- if error validate --}}
                                    @error('ket')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->
        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required>
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Green</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
                placeat.</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
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
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert("payment success!");
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
</body>

</html>
