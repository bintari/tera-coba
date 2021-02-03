<?= $this->extend('user/template'); ?>

<?= $this->section('content') ?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



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
                                <div>: Agus Pamuji</div>
                            </div>
                            <div class="row">
                                <div class="col-2">Alamat</div>
                                <div>: Purwokerto Utara</div>
                            </div>
                            <div class="row">
                                <div class="col-2">Nomor Telepon</div>
                                <div>: 0899387536254</div>
                            </div>


                        </div>
                        <hr>

                        <button id="show" class="get-started-btn scrollto mb-2"> Klik disini untuk mengubah profil</button>
                        <hr>
                        <div class="tb1" style="display: none;">
                            <div class="row">
                                <div class="card col-5 m-3 ml-5">
                                    <h2 class="mt-3 mb-3">Ubah Nomor telepon</h2>
                                    <form class="user mt-1" method="post" action="http://bansos.test/auth">
                                        <div class="form-group">
                                            Nomor Telepon
                                            <input type="text" placeholder="masukkan nomor teleponx" class="form-control form-control-user col" id="nama" name="nama" value="">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block col">
                                            Ganti
                                        </button>

                                    </form>
                                </div>
                                <div class="card col-6 mt-3 mr-3">
                                    <h2 class="mt-3 mb-2">Ganti Password</h2>
                                    <form class="user" method="post" action="http://bansos.test/auth">
                                        <div class="form-group">
                                            PASSWORD
                                            <input type="text" placeholder="masukkan password lama" class="form-control form-control-user col" id="nama" name="nama" value="">
                                        </div>
                                      
                                        <div class="form-group">
                                            PASSWORD BARU
                                           
                                                <input type="password" placeholder="masukkan password baru" class="form-control form-control-user col mb-1" id="password" name="password">
                                                <input type="text" placeholder="masukkan password baru" class="form-control form-control-user  col" id="email" name="email" value="">

                                            

                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block col mb-3 ">
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