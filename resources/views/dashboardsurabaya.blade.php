<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DATA KEPENDUDUKAN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Favicons -->
    <link href="{{ asset('surabayadashboard/') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('surabayadashboard/') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('surabayadashboard/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('surabayadashboard/') }}/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{ asset('surabayadashboard/') }}/assets/vendor/font-awesome/css/font-awesome.min.css"
        rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('surabayadashboard/') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bell - v2.2.1
  * Template URL: https://bootstrapmade.com/bell-free-bootstrap-4-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="/"><img src="{{ asset('dashboard/') }}/assets/img/logo-nav.png" alt=""></a>
                <!-- Uncomment below if you prefer to use a text image -->
                <!--<h1><a href="#hero">Bell</a></h1>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="#about">About Us</a></li>
                    <li class="menu-has-children"><a href="">Data</a>
                        <ul>
                            <li><a href="/dashboardbali">Bali</a></li>
                            <li><a href="/dashboardmedan">Medan</a></li>
                            <li><a href="/dashboardsurabaya">Surabaya</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section class="hero">
        <div class="container text-center">

            <div class="col-md-12">
                <a class="btn btn-full scrollto" href="{{ route('login') }}">SURABAYA</a>
            </div>
        </div>

    </section><!-- End Hero -->



    <main id="main">

        <!-- ======= About Section ======= -->
        <section class="about" id="about">

            <div class="container text-center">
                <h2>
                    SURABAYA
                </h2>

                <p class="text-justify">
                    Kota Surabaya adalah ibukota provinsi Jawa Timur, Indonesia. Surabaya merupakan kota terbesar kedua
                    di Indonesia setelah Jakarta. Dengan jumlah penduduk metropolisnya yang lebih dari 4 juta jiwa
                    (perhitungan pada tahun 2007), Surabaya merupakan pusat bisnis, perdagangan, industri, dan
                    pendidikan di kawasan timur Pulau Jawa dan sekitarnya.

                    Terkenal dengan sebutan Kota Pahlawan, karena sejarahnya yang sangat berperan dalam perjuangan
                    kemerdekaan bangsa Indonesia terhadap penjajah. Meskipun Suku Jawa (53%) adalah mayoritas, namun
                    Surabaya juga menjadi tempat tinggal berbagai suku bangsa di Indonesia, termasuk suku Madura (7.5%),
                    Tionghoa (25.5%), Arab (7%), serta para ekspatriat (sisanya). Sebagai pusat pendidikan, Surabaya
                    juga menjadi tempat tinggal mahasiswa dari berbagai daerah dari seluruh Indonesia, bahkan di antara
                    mereka juga membentuk wadah komunitas tersendiri. Sebagai pusat komersial regional, banyak warga
                    asing (ekspatriat) yang tinggal di daerah Surabaya, terutama di daerah Surabaya Barat. Etnis
                    terbesar adalah Tionghoa, Korea, dan Jepang. Perekonomian Sebagai kota metropolitan, Surabaya
                    menjadi pusat kegiatan perekonomian di daerah Jawa Timur dan sekitarnya.

                    Sebagian besar penduduknya bergerak dalam bidang jasa, industri, dan perdagangan. Banyak perusahaan
                    besar yang berkantor pusat di Surabaya, seperti PT Sampoerna Tbk, Maspion, Wing’s Group, Unilever,
                    dan PT PAL. Kawasan industri di Surabaya diantaranya Surabaya Industrial Estate Rungkut (SIER) dan
                    Margomulyo. Dewasa ini terdapat belasan mall-mall besar dan puluhan supermarket besar. Pusat
                    perbelanjaan modern ternama diantaranya: Tunjungan Plaza, Pakuwon Trade Center dan Supermall Pakuwon
                    Indah (satu gedung), Golden City Mall (Carrefour), ITC, Bubutan Junction (BG Junction), Royal Plaza,
                    Mall Galaxy, Plaza Marina (dahulu Sinar Fontana), dan Plaza Surabaya yang oleh masyarakat Surabaya
                    lebih dikenal dengan Delta Plaza. Sedangkan pusat perbelanjaan tradisional ternama diantaranya Pasar
                    Turi, Pasar Atom, dan Darmo Trade Center (DTC) yang dahulunya adalah Pasar Wonokromo.
                </p>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($surabaya as $sby)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $sby->nama }}</td>
                                <td>{{ $sby->nik }}</td>
                                <td>{{ $sby->alamat }}</td>
                            </tr>
                            <?php $no++; ?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        <!-- End About Section -->
        <!-- ======= Team Section ======= -->
        <section class="team" id="team">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="section-title">Contact Us</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="info">
                            <div>
                                <i class="fa fa-map-marker"></i>
                                <p>Kayu Putih</p>
                            </div>

                            <div>
                                <i class="fa fa-envelope"></i>
                                <p>eugine@gmail.com</p>
                            </div>

                            <div>
                                <i class="fa fa-phone"></i>
                                <p>087 856 248 959</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" data-rule="email"
                                        data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" data-rule="minlen:4"
                                        data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                                        data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="site-footer">
        <div class="bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-xs-12 text-lg-left text-center">
                        <p class="copyright-text">
                            &copy; Copyright <strong>Eugine</strong>2021
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('surabayadashboard/') }}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('surabayadashboard/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('surabayadashboard/') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ asset('surabayadashboard/') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('surabayadashboard/') }}/assets/vendor/counterup/counterup.min.js"></script>
    <script src="{{ asset('surabayadashboard/') }}/assets/vendor/tether/js/tether.min.js"></script>
    <script src="{{ asset('surabayadashboard/') }}/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="{{ asset('surabayadashboard/') }}/assets/vendor/venobox/venobox.min.js"></script>
    <script src="{{ asset('surabayadashboard/') }}/assets/vendor/lockfixed/jquery.lockfixed.min.js"></script>
    <script src="{{ asset('surabayadashboard/') }}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('surabayadashboard/') }}/assets/vendor/superfish/superfish.min.js"></script>
    <script src="{{ asset('surabayadashboard/') }}/assets/vendor/hoverIntent/hoverIntent.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('surabayadashboard/') }}/assets/js/main.js"></script>

</body>

</html>
