<?= $this->extend('template/layout'); ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col">
        <div class="card">
            <form action="/retribusi/save" method="post">

                <div class="card-body ">
                    <div class="form-group row ">
                        <label class="col-2">No Order</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-2">Nama</label>
                    </div>
                    <div class="form-group row ">
                        <label class="col-2">Alamat</label>
                    </div>
                    <div class="form-group row ">
                        <label class="col-2">Jenis Retribusi</label>
                    </div>
                    <div class="form-group row ">
                        <label class="col-2">Total Retribusi</label>
                    </div>
                    <div class="form-group row ">
                        <label class="col-2">Jumlah Ketetapan Pokok Retribusi Telah Dibayar</label>
                    </div>
                    <div class="form-group row mt-2">
                        <label class="col-2">Jumlah Kelebihan</label>
                        <div class="col-4">
                            <input type="text" class="form-control" name="nomilal" id="nomilal" placeholder="">
                        </div>
                    </div>
                    <div class="card-body">
                        <button tzype="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>