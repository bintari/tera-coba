<?= $this->extend('template/layout'); ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body ">
                <?= $validation->listErrors() ?>


                <form action="save/<?= $tera['tera_id'] ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label class="col-3">NAMA</label>
                        <div class="col-4">
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" placeholder="">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">JENIS ALAT UTTP</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="jenis_uttp" name="jenis_uttp" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">MERK KENDARAAN</label>

                        <div class="col-4">
                            <input type="text" class="form-control" id="merk" name="merk" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">NO POLISI DAN NO. LAMBANG</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">PEMILIK / PEMAKAI</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="buatan" name="buatan" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">ALAMAT</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">DIUJI OLEH</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="">
                        </div>
                    </div>
                    

                    <div class="form-group row ">
                        <label class="col-3">METODE</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="metode" name="metode" placeholder="">
                        </div>
                    </div>

                    <!-- /.card-body -->

                    <div class="card-body">
                        <button tzype="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <?= $this->endSection(); ?>