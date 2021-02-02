<?= $this->extend('user/template'); ?>

<?= $this->section('content') ?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

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
                        <li><a href="#blog">Profil</a></li>
                        <li><a href="<?= base_url('user/dashboard') ?>">Pendaftaran</a></li>

                        <li><a href="<?= base_url('user/retribusi') ?>">Retribusi</a></li>
                        <li class="active"><a href="#pengujian">Pengujian</a></li>
                        <li><a href="">Pengajuan</a></li>


                    </ul>
                </nav><!-- .nav-menu -->

                <a href="#about" class="get-started-btn scrollto">Keluar</a>
            </div>
        </div>

    </div>
</header><!-- End Header -->

<section id="" class=" ">

    <main id="main">
        <section id="hero" class=" align-items-center">

        </section><!-- End Hero -->

        <!-- ======= Blog Section ======= -->
        <section id="pengujian" class="pengujian">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-xl-12">

                        <hr>
                        <h2 class="entry-title">
                            <a href="blog-single.html">
                                <p>Profil User<p>
                            </a>

                        </h2>

                        <div class="member-info">
                            <div class="row">
                                <div class="col-2">Nama Lengkap</div>
                                <div>Agus Pamuji</div>
                            </div>
                            <div class="row">
                                <div class="col-2">Alamat</div>
                                <div>Purwokerto Utara</div>
                            </div>
                        </div>
                        <hr>
                        <div class="col row">
                            
                            <button id="show" class="get-started-btn scrollto mb-2"> Klik disini untuk mengganti password</button>
                        </div>
                        <div class="tb1" style="display: none;">

                            <div class=" col entry-content">
                            <h2>Ganti Password</h2>
                                <form class="user" method="post" action="http://bansos.test/auth">
                                    <div class="form-group">
                                        PASSWORD
                                        <input type="text" placeholder="masukkan password lama" class="form-control form-control-user col-8" id="nama" name="nama" value="">
                                    </div>
                                    <div class="form-group">
                                        PASSWORD BARU
                                        <div class="row col">
                                            <input type="password" placeholder="masukkan password baru" class="form-control form-control-user col-4 mr-3" id="password" name="password">
                                            <input type="text" placeholder="masukkan password baru" class="form-control form-control-user col-4" id="email" name="email" value="">

                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block col-8">
                                        Ganti
                                    </button>

                                </form>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
        </section>
        <script>
            $(document).ready(function() {
                $('#show').click(function() {
                    $('.tb1').toggle("slide");
                });
                $('#show2').click(function() {
                    $('.tb2').toggle("slide");
                });
            });
        </script>
    </main>
</section>
<?= $this->endSection(); ?>