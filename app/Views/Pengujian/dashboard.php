<?= $this->extend('template/layout'); ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header border-0">
        <h3 class="card-title">Jadwal Pengujian Tera / Tera Ulang Luar Kantor</h3>
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
                    <th>Tanggal Pengujian</th>
                    <th>No Order</th>
                    <th>Nama</th>
                    <th>Jenis Pekerjaan</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($orang as $o) : ?>
                    <tr>
                        <td scope="row"><?= $o['tera_id']; ?></td>
                        <td scope="row"><?= $o['tera_date_order']; ?></td>
                        <td scope="row"><?= $o['tera_no_order'] ?></td>
                        <td scope="row"><?= $o['tera_atas_nama'] ?></td>
                        <td scope="row"><?= $o['jenis_pekerjaan'] ?></td>
                        <td scope="row"><?= $o['tera_atas_nama_alamat'] ?></td>
                        <td scope="row"><?= $o['tera_status'] ?></td>
                        <td scope="row">
                        <a href="/penguji/pengujian/<?= $o['tera_id']?>" class="btn btn-primary" >uji </a>
                        
                        </td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>