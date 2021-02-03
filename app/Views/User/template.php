<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tera / Tera Ulang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('') ?>/assets/vendor/presento/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>/assets/vendor/presento/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>/assets/vendor/presento/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>/assets/vendor/presento/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>/assets/vendor/presento/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('') ?>/assets/vendor/presento/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('') ?>/assets/vendor/presento/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('') ?>/assets/vendor/presento/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Presento - v1.1.1
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-10 d-flex align-items-center">
                    <h1 class="logo mr-auto"><a href="index.html">Tera / Tera Ulang<span>.</span></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

                    <nav class="nav-menu d-none d-lg-block">
                        <ul>


                            <li><a href="<?= base_url('user/dashboard') ?>">Home</a></li>
                            <li><a href="<?= base_url('user/dashboard') ?>">Pendaftaran</a></li>
                            <li><a href="<?= base_url('user/retribusi') ?>">Retribusi</a></li>
                            <li><a href="<?= base_url('user/pengujian') ?>">Pengujian</a></li>
                            <li><a href="<?= base_url('user/pengajuan') ?>">Pengajuan</a></li>
                            <li><a href="<?= base_url('user/profil') ?>">Profil</a></li>


                        </ul>
                    </nav><!-- .nav-menu -->

                    <a href="<?= base_url('user') ?>" class="get-started-btn scrollto">Keluar</a>
                </div>
            </div>

        </div>
    </header><!-- End Header -->


    <?= $this->renderSection('content'); ?>



</body>
<!-- Vendor JS Files -->
<script src="<?= base_url('') ?>/assets/vendor/presento/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('') ?>/assets/vendor/presento/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('') ?>/assets/vendor/presento/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url('') ?>/assets/vendor/presento/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url('') ?>/assets/vendor/presento/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('') ?>/assets/vendor/presento/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url('') ?>/assets/vendor/presento/vendor/counterup/counterup.min.js"></script>
<script src="<?= base_url('') ?>/assets/vendor/presento/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('') ?>/assets/vendor/presento/vendor/venobox/venobox.min.js"></script>
<script src="<?= base_url('') ?>/assets/vendor/presento/vendor/aos/aos.js"></script>


<!-- Template Main JS File -->
<script src="<?= base_url('') ?>/assets/vendor/presento/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <strong><span>Presento</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </div>
</footer><!-- End Footer -->

</html>