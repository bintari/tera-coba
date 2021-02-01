<?= $this->extend('template/layout'); ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body ">
                <div class="form-group row">
                    <label class="col-2">Nama</label>
                    <?= $tera['tera_atas_nama'] ?>
                </div>
                <div class="form-group row ">
                    <label class="col-2">No Order</label>
                    <?= $tera['tera_no_order'] ?>
                </div>
                <div class="form-group row ">
                    <label class="col-2">Alamat</label>
                    <?= $tera['tera_atas_nama_alamat'] ?>
                </div>
                <div class="form-group row ">
                    <label class="col-2">Keterangan</label>
                    <?= $tera['jenis_pekerjaan'] ?>
                </div>
                <div class="form-group row ">
                    <label class="col-2">Total Retribusi</label>
                </div>
                <div class="form-group row ">
                    <label class="col-2">Denda Keterlambatan</label>
                </div>
                <form action="save/<?= $tera['tera_id'] ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row mt-2">
                        <label class="col-2" for="nama">Pembayaran Sebesar</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="" autofocus>
                        </div>

                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-2" for="bank">Bank</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="bank" name="bank" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-2" for="no_rekening">No Rekening</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="no_rekening" name="no_rekening" placeholder="">
                        </div>
                    </div>



                    <div class="table-responsive">
                        <table class="table table-stripped table-hover">
                            <thead>
                                <th>#</th>
                                <th>Jenis UTTP</th>
                                <th>Kapasitas / Daya Baca</th>
                                <th>Jumlah</th>
                                <th>Tarif</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody class="tbody-jenis_uttps">
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>