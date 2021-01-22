<?= $this->extend('template/layout'); ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header border-0">
        <h3 class="card-title">Jadwal Pengujian Tera / Tera Ulang di Tempat</h3>
        <div class="card-tools">
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-download"></i>
            </a>
            <a href="#" class="btn btn-tool btn-sm">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped table-valign-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Order</th>
                    <th>Nama Penguji</th>
                    <th>Tanggal Pengujian</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>


                <?php foreach ($jadwal as $o) : ?>
                    <tr>
                        <td scope="row"><?= $o['jadwal_pengujian_id']; ?></td>
                        <td scope="row"><?= $o['jadwal_pengujian_tera_id'] ?></td>
                        <td scope="row"><?= $o['jadwal_pengujian_penguji'] ?></td>
                        <td scope="row"><?= $o['jadwal_pengujian_tanggal'] ?></td>
                        <td scope="row"><?= $o['jadwal_pengujian_status'] ?></td>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>