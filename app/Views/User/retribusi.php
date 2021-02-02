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

                        <li class="active"><a href="#retribusi">Retribusi</a></li>
                        <li><a href="<?= base_url('user/pengujian') ?>">Pengujian</a></li>
                        <li><a href="">Pengajuan</a></li>

                    </ul>
                </nav><!-- .nav-menu -->

                <a href="" class="get-started-btn scrollto">Keluar</a>
            </div>
        </div>

    </div>
</header><!-- End Header -->

<section id="" class=" ">
    <main id="main">
        <section id="hero" class=" align-items-center">

        </section><!-- End Hero -->

        <!-- ======= Blog Section ======= -->


        <section id="retribusi" class="retribusi">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-xl-12">

                        <hr>
                        <h2 class="entry-title">
                            <a href="blog-single.html">
                                <p>RETRIBUSI TERA DAN TERA ULANG<p>
                            </a>

                        </h2>


                        <div class="col entry-content">
                            <h5 class="col">Pilih berdasarkan nama serta tanggal pendaftaran tera dan tera ulang</h5>

                            <div class="col card mb-3">
                                <div class="col mt-2"> Agus Pamuji</div>
                                <div class="col row">
                                    <div class="col">
                                        1 Januari 2021</div>
                                    <button id="show" class="get-started-btn scrollto mb-3">lihat selengkapnya</button>
                                </div>

                                <div class="tb1" style="display: none;">
                                    <div class="table-responsive">
                                        <table class="table table-stripped table-hover">
                                            <thead>
                                                <th>NO</th>
                                                <th>Jenis UTTP</th>
                                                <th>Kapasitas / Daya Baca</th>
                                                <th>Tarif </th>
                                                <th>Status</th>
                                            </thead>
                                            <tbody class="tbody-jenis_uttps">
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td scope="row">Timbangan</td>
                                                    <td scope="row">1000 Kg</td>
                                                    <td scope="row">Rp10000</td>
                                                    <td scope="row">Lunas</td>

                                                </tr>
                                                <tr>
                                                    <td scope="row">2</td>
                                                    <td scope="row">Timbangan</td>
                                                    <td scope="row">2000 Kg</td>
                                                    <td scope="row">Rp20000</td>
                                                    <td scope="row">Lunas</td>

                                                </tr>
                                                <tr>
                                                    <td scope="row">3</td>
                                                    <td scope="row">Timbangan</td>
                                                    <td scope="row">1000 Kg</td>
                                                    <td scope="row">Rp10000</td>
                                                    <td scope="row">Lunas</td>

                                                </tr>
                                                <tr>
                                                    <td scope="row">4</td>
                                                    <td scope="row">Timbangan</td>
                                                    <td scope="row">2000 Kg</td>
                                                    <td scope="row">Rp20000</td>
                                                    <td scope="row">Lunas</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        <b>Catatan: </b>
                                    </div>
                                    <div>
                                        <p>Total Pembayaran retribusi sebesar <b>Rp 100000</b></p>
                                    </div>
                                    <div>
                                        <p>Total Retribusi Telah dibayar sebesar <b>Rp 100000</b></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col card mb-3">
                                <div class="col mt-2"> Agus Pamuji</div>
                                <div class="col row">
                                    <div class="col">
                                        1 Januari 2021</div>
                                    <button id="show2" class="get-started-btn scrollto mb-3">lihat selengkapnya</button>
                                </div>
                                <div class="tb2" style="display: none;">
                                    <div class="table-responsive">
                                        <table class="table table-stripped table-hover">
                                            <thead>
                                                <th>NO</th>
                                                <th>Jenis UTTP</th>
                                                <th>Kapasitas / Daya Baca</th>
                                                <th>Tarif </th>
                                                <th>Status</th>
                                            </thead>
                                            <tbody class="tbody-jenis_uttps">
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td scope="row">Timbangan</td>
                                                    <td scope="row">1000 Kg</td>
                                                    <td scope="row">Rp10000</td>
                                                    <td scope="row">Lunas</td>

                                                </tr>
                                                <tr>
                                                    <td scope="row">2</td>
                                                    <td scope="row">Timbangan</td>
                                                    <td scope="row">2000 Kg</td>
                                                    <td scope="row">Rp20000</td>
                                                    <td scope="row">Lunas</td>

                                                </tr>
                                                <tr>
                                                    <td scope="row">3</td>
                                                    <td scope="row">Timbangan</td>
                                                    <td scope="row">1000 Kg</td>
                                                    <td scope="row">Rp10000</td>
                                                    <td scope="row">Lunas</td>

                                                </tr>
                                                <tr>
                                                    <td scope="row">4</td>
                                                    <td scope="row">Timbangan</td>
                                                    <td scope="row">2000 Kg</td>
                                                    <td scope="row">Rp20000</td>
                                                    <td scope="row">Lunas</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        <b>Catatan: </b>
                                    </div>
                                    <div>
                                        <p>Total Pembayaran retribusi sebesar <b>Rp 100000</b></p>
                                    </div>
                                    <div>
                                        <p>Total Retribusi Telah dibayar sebesar <b>Rp 100000</b></p>
                                    </div>

                                </div>
                            </div>
                        </div>
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

                    </div>
                </div>
            </div>


        </section>

    </main>
</section><!-- End Hero -->
</div>
<?= $this->endSection(); ?>