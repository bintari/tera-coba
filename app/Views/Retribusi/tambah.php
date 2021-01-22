<?= $this->extend('template/layout'); ?>
<?= $this->section('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
      <form action="">
        <div class="form-group row">
          <div class="col-sm-6">
            <div class="row">
              <label for="user_nik" class="col-sm-4 col-form-label">NIK</label>
              <div class="col-sm-8">
                <input data-inputmask="'mask': '9', 'repeat': 16, 'greedy' : false" type="text" class="form-control form-control-sm>" id="user_nik" name="user_nik" placeholder="Masukkan NIK wajib tera" value="">
                <div class="invalid-feedback">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <label for="user_nama" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="user_nama" name="user_nama" placeholder="Masukkan Nama wajib tera" value="">
                <div class="invalid-feedback">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="user_alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
            <textarea class="form-control form-control-sm" id="user_alamat" rows="3" name="user_alamat" placeholder="Masukkan Alamat wajib tera"></textarea>
            <div class="invalid-feedback">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="tera_no_order" class="col-sm-2 col-form-label">No Order</label>
          <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm" id="tera_no_order" name="tera_no_order" placeholder="Masukkan No Order" value="">
            
          </div>
        </div>
        <div class="form-group row">
          <label for="jenis_tera_id" class="col-sm-2 col-form-label">Jenis Pekerjaan</label>
          <div class="col-sm-4">
            <select class="form-control form-control-sm " id="jenis_tera_id" name="jenis_tera_id">
              <option value="">-- Jenis Pekerjaan --</option>
              
            </select>
           
          </div>
        </div>
        <div class="form-group row">
          <label for="tera_atas_nama" class="col-sm-2 col-form-label">Atas Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm " id="tera_atas_nama" name="tera_atas_nama" placeholder="Masukkan Nama wajib tera" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="tera_atas_nama_alamat" class="col-sm-2 col-form-label">Atas Nama Alamat</label>
          <div class="col-sm-10">
            <textarea class="form-control form-control-sm" id="tera_atas_nama_alamat" rows="3" name="tera_atas_nama_alamat" placeholder="Masukkan Alamat wajib tera"></textarea>
            <div class="invalid-feedback">
            </div>
          </div>
        </div>
        <input type="hidden" name="jenis_uttp_ids[]" class="form-jenis_uttp_ids" value="">
        <input type="hidden" name="jenis_uttp_namas[]" class="form-jenis_uttp_namas" value="">
        <input type="hidden" name="kapasitass[]" class="form-kapasitass" value="">
        <input type="hidden" name="daya_bacas[]" class="form-daya_bacas" value="">
        <input type="hidden" name="jumlahs[]" class="form-jumlahs" value="">
       
        <button class="btn btn-success py-1 px-2 mb-2" type="button" onclick="openModal(0)"><i class="fas fa-fw fa-plus"></i>Tambah Jenis UTTP</button>
        <div class="table-responsive">
          <table class="table table-stripped table-hover">
            <thead>
              <th>#</th>
              <th>Jenis UTTP</th>
              <th>Kapasitas / Daya Baca</th>
              <th>Jumlah</th>
              <th>Aksi</th>
            </thead>
            <tbody class="tbody-jenis_uttps">
            </tbody>
          </table>
        </div>
        <button class="btn btn-primary py-2 px-3" type="submit">Simpan</button>
      </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
<!-- modal -->

<?= $this->endSection('content'); ?>
<script src="<?= base_url('assets/vendor/adminlte') ?>/plugins/select2/js/select2.full.min.js"></script>
<script src="<?= base_url('assets/vendor') ?>/adminlte/plugins/inputmask/jquery.inputmask.min.js"></script>