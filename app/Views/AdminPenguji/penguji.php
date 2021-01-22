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

                <div class="table-responsive">
                    <table class="table table-stripped table-hover">
                        <thead>
                            <th>#</th>
                            <th>Jenis UTTP</th>
                            <th>Kapasitas / Daya Baca</th>
                            <th>Jumlah</th>
                        </thead>
                        <tbody class="tbody-jenis_uttps">
                        </tbody>
                    </table>
                </div>

                <form action="save/<?= $tera['tera_id'] ?>" method="post">
                    <?= csrf_field(); ?>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="" for="jadwal_pengujian_tanggal">Tanggal Pengujian</label>
                                <div class="">
                                    <input type="date" class="form-control" name="jadwal_pengujian_tanggal" id="jadwal_pengujian_tanggal" placeholder="" autofocus>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6">
                            <!-- select -->
                            <div class="form-group">
                                <label>Penguji</label>
                                <select class="form-control my-2">
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->

                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>