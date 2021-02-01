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

    <!-- <div class="row">
        <div class="col-lg-5 col-md">
            <div>
                <div class="card" href="dd">
                    <div class="card-header border-0">
                        <div class="card-body">
                            <div class="card-body text-center">
                                <div class="m-t-20">
                                    <img src="\public\assets\images\default1.png">
                                </div>
                                <h5 class="font-strong m-b-10 m-t-10">Bintari Hidayanti</h5>
                                <div class="m-b-20 text-muted">Alamat</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header border-0">
                    <div class="card-body text-center">
                        <h5 class="font-strong ">Pengjuan Jenis UTTP TERA / TERA Ulang</h5>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis Uttp</th>
                                    <th>kapasitas</th>
                                    <th>jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td>1600</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td></td>
                                    <td>1600</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td></td>
                                    <td>1600</td>
                                    <td>2</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg col-md row">
            <div class="col-lg-4  col-md-4">
                <div class="card bg-warning">
                    <div class="card-header border-0">
                        <div class="card-body">
                            <div class="card-body text-center">
                                <h5 class=" m-b-10 m-t-10">Status pembayaran</h5>
                                <label style="color: light;font-size: 20px;">BELUM UJI</label> <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card bg-success">
                    <div class="card-header border-0 ">
                        <div class="card-body ">
                            <div class="card-body text-center">
                                <h5 class="m-b-10 m-t-10">Status Pengujian</h5>
                                <label style="color: light;font-size: 20px;">BELUM UJI</label> <br>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card bg-info">
                    <div class="card-header border-0 ">
                        <div class="card-body ">
                            <div class="card-body text-center">
                                <h5 class="m-b-10 m-t-10">Hasil Pengujian</h5>
                                <label style="color: light;font-size: 20px;">BELUM UJI</label> <br>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div> -->
</main>
<section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
            <div class="content col-xl-5 d-flex align-items-stretch">
                <div class="content">
                    <h3>Alur Pengujian Tera dan Tera Ulang </h3>

                </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h4>Pendaftaran</h4>
                            <p>Wajib tera melakukan pendafataran di loket pendaftaran selanjutnya akan menerima nik serta password </p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i>2. Kaji Ulang</i>
                            <h4>wajib tera membawa uttp</h4>
                            <p>Membawa uttp ke dinas perindustrian dan perdagangan kabupaten banyumas jika memenuhi syarat maka ke langkah selanjutnya</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i>3. Pembayaran SKRD</i>
                            <h4>Pembayaran Surat Ketetapan Retribusi Daerah</h4>
                            <p>Wajib tera harus melakukan pembayaran sebagai syarat pengujian tera maupun tera ulang</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i>4. Pengujian Tera</i>
                            <h4>Uji tera</h4>
                            <p>Tera akan diuji jika masih memenuhi standar pada dinas perindustrian dan perdagangan maka tera akan dibubuhi tanda sah</p>
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
        </div>
        <div class="row no-gutters">
            <div class="content col-xl-5 d-flex align-items-stretch">

            </div>
            <div class="col-xl-7 d-flex align-items-stretch">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h4>Corporis voluptates sit</h4>
                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Ullamco laboris nisi</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-images"></i>
                            <h4>Labore consequatur</h4>
                            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                        </div>
                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-shield"></i>
                            <h4>Beatae veritatis</h4>
                            <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
        </div>

    </div>
</section><!-- End About Section -->


<?= $this->endSection(); ?>