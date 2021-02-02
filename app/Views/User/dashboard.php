<?= $this->extend('user/header'); ?>

<?= $this->section('content') ?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-10 d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="index.html">Tera / Tera Ulang<span>.</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="#header">Home</a></li>
                        <li><a href="#blog">Profil</a></li>
                        <li><a href="#pendaftaran">Pendaftaran</a></li>

                        <li><a href="<?= base_url('user/retribusi') ?>">Retribusi</a></li>
                        <li><a href="<?= base_url('user/pengujian') ?>">Pengujian</a></li>
                        <li><a href="#">Pengajuan</a></li>

                    </ul>
                </nav><!-- .nav-menu -->

                <a href="#about" class="get-started-btn scrollto">Keluar</a>
            </div>
        </div>

    </div>
</header><!-- End Header -->

<section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row">
                    <div class="col-xl-7">
                        <h1>Selamat Datang<br> Website Tera / Tera Ulang</h1>
                        <h2>Dinas Perindustrian dan Perdagangan Kabupaten Banyumas</h2>
                        <a href="#pendaftaran" class="btn-get-started scrollto">PENDAFTARAN TERA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">


    <!-- ======= Blog Section ======= -->
    <section id="pendaftaran" class="pendaftaran">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-xl-12">

                    <h2 class="entry-title">
                        <a href="blog-single.html">
                            <p>PENDAFTARAN TERA DAN TERA ULANG<p>
                        </a>

                    </h2>
                    <p>
                        Pendaftaran untuk pengujian Tera dan Tera Ulang
                    </p>
                    <hr>

                    <div class="entry-content">
                        <form class="user" method="post" action="http://bansos.test/auth">
                            <div class="form-group">
                                NAMA
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" value="">
                            </div>
                            <div class="form-group">
                                ALAMAT
                                <input type="password" class="form-control form-control-user" id="password" name="password">
                            </div>
                            <div class="form-group">
                                JENIS PEKERJAAN
                                <input type="text" class="form-control form-control-user" id="email" name="email" value="">
                            </div>
                            <div class="form-group">
                                TEMPAT TERA / TERA ULANG
                                <input type="password" class="form-control form-control-user" id="password" name="password">
                            </div>
                            <div class="form-group">
                                JENIS UTTP
                                <input type="text" class="form-control form-control-user" id="email" name="email" value="">
                            </div>
                            <div class="form-group">
                                KAPASITAS
                                <input type="password" class="form-control form-control-user" id="password" name="password">
                            </div>
                            <div class="form-group">
                                JUMLAH
                                <input type="password" class="form-control form-control-user" id="password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Daftar
                            </button>

                        </form>
                    </div>


                </div>
            </div>
        </div>


    </section>
</main>


<?= $this->endSection(); ?>