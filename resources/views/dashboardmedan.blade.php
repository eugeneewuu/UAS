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
    <link href="{{ asset('medandashboard/') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('medandashboard/') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('medandashboard/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('medandashboard/') }}/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="{{ asset('medandashboard/') }}/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('medandashboard/') }}/assets/css/style.css" rel="stylesheet">

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
                <a class="btn btn-full scrollto" href="{{ route('login') }}">MEDAN</a>
            </div>
        </div>

    </section><!-- End Hero -->



    <main id="main">

        <!-- ======= About Section ======= -->
        <section class="about" id="about">

            <div class="container text-center">
                <h2>
                    MEDAN
                </h2>

                <p class="text-justify">
                    Kota ini merupakan kota terbesar ketiga di Indonesia setelah DKI Jakarta dan Surabaya, serta kota
                    terbesar di luar pulau Jawa.[7][8][9] Kota Medan merupakan pintu gerbang wilayah Indonesia bagian
                    barat dengan keberadaan Pelabuhan Belawan dan Bandar Udara Internasional Kuala Namu yang merupakan
                    bandara terbesar kedua di Indonesia. Akses dari pusat kota menuju pelabuhan dan bandara dilengkapi
                    oleh jalan tol dan kereta api. Medan adalah kota pertama di Indonesia yang mengintegrasikan bandara
                    dengan kereta api. Berbatasan dengan Selat Malaka, Medan menjadi kota perdagangan, industri, dan
                    bisnis yang sangat penting di Indonesia. Pada tahun 2020, kota Medan memiliki penduduk sebanyak
                    2.524.321 jiwa, dan kepadatan penduduk 9.522,22 jiwa/km2.[2]

                    Sejarah Medan berawal dari sebuah kampung yang didirikan oleh Guru Patimpus di pertemuan Sungai Deli
                    dan Sungai Babura. Hari jadi Kota Medan ditetapkan pada 1 Juli 1590. Selanjutnya pada tahun 1632,
                    Medan dijadikan pusat pemerintahan Kesultanan Deli, sebuah kerajaan Melayu. Bangsa Eropa mulai
                    menemukan Medan sejak kedatangan John Anderson dari Inggris pada tahun 1823. Peradaban di Medan
                    terus berkembang hingga Pemerintah Hindia Belanda memberikan status kota pada 1 April 1909 dan
                    menjadikannya pusat pemerintahan Karesidenan Sumatra Timur. Memasuki abad ke-20, Medan menjadi kota
                    yang penting di luar Jawa, terutama setelah pemerintah kolonial membuka perusahaan perkebunan secara
                    besar-besaran.

                    Menurut Bappenas, Medan adalah salah satu dari empat pusat pertumbuhan utama di Indonesia, bersama
                    dengan Jakarta, Surabaya, dan Makassar.[10][11] Medan adalah kota multietnis yang penduduknya
                    terdiri dari orang-orang dengan latar belakang budaya dan agama yang berbeda-beda. Selain Melayu dan
                    Karo sebagai penghuni awal, Medan didominasi oleh etnis Jawa, Batak, Tionghoa, Minangkabau,
                    Mandailing, dan India. Mayoritas penduduk Medan bekerja di sektor perdagangan, sehingga banyak
                    ditemukan ruko di berbagai sudut kota. Di samping kantor-kantor pemerintah provinsi, di Medan juga
                    terdapat kantor-kantor konsulat dari berbagai negara seperti Amerika Serikat, Jepang, Malaysia, dan
                    Jerman.
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
                        @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $mhs->nama }}</td>
                                <td>{{ $mhs->nik }}</td>
                                <td>{{ $mhs->alamat }}</td>
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
    <script src="{{ asset('medandashboard/') }}/assets/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('medandashboard/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('medandashboard/') }}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ asset('medandashboard/') }}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('medandashboard/') }}/assets/vendor/counterup/counterup.min.js"></script>
    <script src="{{ asset('medandashboard/') }}/assets/vendor/tether/js/tether.min.js"></script>
    <script src="{{ asset('medandashboard/') }}/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="{{ asset('medandashboard/') }}/assets/vendor/venobox/venobox.min.js"></script>
    <script src="{{ asset('medandashboard/') }}/assets/vendor/lockfixed/jquery.lockfixed.min.js"></script>
    <script src="{{ asset('medandashboard/') }}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('medandashboard/') }}/assets/vendor/superfish/superfish.min.js"></script>
    <script src="{{ asset('medandashboard/') }}/assets/vendor/hoverIntent/hoverIntent.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('medandashboard/') }}/assets/js/main.js"></script>

</body>

</html>
