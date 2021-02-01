<?= $this->extend('user/presento'); ?>

<?= $this->section('content') ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row">
                    <div class="col-xl-7">
                        <h1>Selamat Datang<br> Website Tera / Tera Ulang</h1>
                        <h2>Dinas Perindustrian dan Perdagangan Kabupaten Banyumas</h2>
                        <a href="<?= base_url('user/login') ?>" class="btn-get-started scrollto">Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">


    <!-- ======= About Section ======= -->
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
                                <h4>1. Pendaftaran</h4>
                                <p>Wajib tera melakukan pendafataran di loket pendaftaran selanjutnya akan menerima nik serta password </p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-list-check"></i>
                                <h4>2. Kaji Ulang</h4>
                                <p>Membawa uttp ke dinas perindustrian dan perdagangan kabupaten banyumas jika memenuhi syarat maka ke langkah selanjutnya</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="ri-money-dollar-box-line"></i>
                                <h4>3. Pembayaran Surat Ketetapan Retribusi Daerah</h4>
                                <p>Wajib tera harus melakukan pembayaran sebagai syarat pengujian tera maupun tera ulang</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-check-square"></i>
                                <h4>4. Uji tera</h4>
                                <p>Tera akan diuji jika masih memenuhi standar pada dinas perindustrian dan perdagangan maka tera akan dibubuhi tanda sah</p>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>
           
        </div>
    </section><!-- End About Section -->

   
</main><!-- End #main -->
<?= $this->endSection(); ?>