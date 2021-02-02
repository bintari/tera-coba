<?= $this->extend('user/header'); ?>
<?= $this->section('content'); ?>

<div class="container auth-section" data-aos="fade-up">
    <div class="section-title">
        <h2>Login</h2>
    </div>
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
            <form action="">

                <div class="form-group">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username / NIK / NIP" />

                </div>
                <div class="form-group">
                    <input type="password" class="form-control " name="password" id="password" placeholder="Password" />

                </div>
                <div class="text-center">
                    <a href=""></a>
                    <a class="get-started-btn scrollto py-3 px-5 button-submit"  href="<?= base_url('user/dashboard') ?>"type="submit">Login</a></div>
                
            </form>
        </div>

    </div>

</div>
<?= $this->endSection(); ?>