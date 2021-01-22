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
                        <label class="col-3">PEMILIK / PEMAKAI</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">MERK / TYPE / NOMOR SERI</label>

                        <div class="col-4">
                            <input type="text" class="form-control" id="merk" name="merk" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">VOLUME NOMINAL</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">MERK KENDARAAN</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="merk_kendaraan" name="merk_kendaraan" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">NO POLISI / CHASIS</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="no_polisi" name="no_polisi" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">METODA</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="metoda" name="metoda" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row ">
                        <label class="col-3">NO. KODE PLAT</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="kode_plat" name="kode_plat" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">SUHU</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="suhu" name="suhu" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">DILAKSANAKAN OLEH</label>

                        <div class="col-4">
                            <input type="text" class="form-control" id="penguji" name="penguji" placeholder="">
                            <input type="text" class="form-control mt-2" id="penguji" name="penguji" placeholder="">

                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">DETAIL</label>

                        <div>
                            <div class="col row">
                                <label class="col-1"></label>
                                <div class="col-4 row">
                                    <label class="">Muka(mm)</label>
                                </div>
                                <div class="col-4 row">
                                    <label class="">Belakang(mm)</label>
                                </div>
                            </div>
                            <div class="col row">
                                <label class="col-1">t1</label>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="t1_muka" name="t1_muka" placeholder="">
                                </div>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="t1_belakang" name="t1_belakang" placeholder="">
                                </div>
                            </div>
                            <div class="col row">
                                <label class="col-1">t2</label>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="t2_muka" name="t2_muka" placeholder="">
                                </div>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="t2_belakang" name="t2_belakang" placeholder="">
                                </div>
                            </div>
                            <div class="col row">
                                <label class="col-1">t3</label>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="t3_muka" name="t3_muka" placeholder="">
                                </div>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="t3_belakang" name="t3_belakang" placeholder="">
                                </div>
                            </div>
                            <div class="col row">
                                <label class="col-1">t4</label>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="t4_muka" name="t4_muka" placeholder="">
                                </div>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="t4_belakang" name="t4_belakang" placeholder="">
                                </div>
                            </div>
                            <div class="col row">
                                <label class="col-1">T</label>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="T_muka" name="T_muka" placeholder="">
                                </div>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="T_belakang" name="T_belakang" placeholder="">
                                </div>
                            </div>
                            <div class="col row">
                                <label class="col-1">d</label>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="d_muka" name="d_muka" placeholder="">
                                </div>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="d_belakang" name="d_belakang" placeholder="">
                                </div>
                            </div>
                            <div class="col row">
                                <label class="col-1">p</label>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="p_muka" name="p_muka" placeholder="">
                                </div>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="p_belakang" name="p_belakang" placeholder="">
                                </div>
                            </div>
                            <div class="col row">
                                <label class="col-1">q</label>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="q_muka" name="q_muka" placeholder="">
                                </div>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="q_belakang" name="q_belakang" placeholder="">
                                </div>
                            </div>
                            <div class="col row">
                                <label class="col-1">s</label>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="s_muka" name="s_muka" placeholder="">
                                </div>
                                <div class="col-4 row">
                                    <input type="text" class="form-control" id="s_belakang" name="s_belakang" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">KEPEKAAN PADA INDEKS PENUNJUK</label>

                        <div>
                            <div class="col row">
                                <label class="col-2">Muka</label>
                                <div class="col-3 row">
                                    <input type="text" class="form-control" id="kepekaan_index_muka" name="kepekaan_index_muka" placeholder="">
                                </div>
                                <label class="col-2">Belakang</label>
                                <div class="col-3 row">
                                    <input type="text" class="form-control" id="kepekaan_index_belakang" name="kepekaan_index_belakang" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">DIAMETER PIPA PENYERAPAN </label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="diameter_pipa_penyerap" name="diameter_pipa_penyerap" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">RUANG KOSONG TUM</label>
                        <div>
                            <div class="col row">
                                <label class="col-2">Muka</label>
                                <div class="col-3 row">
                                    <input type="text" class="form-control" id="ruang_kosong_tum_muka" name="ruang_kosong_tum_muka" placeholder="">
                                </div>
                                <label class="col-2">Belakang</label>
                                <div class="col-3 row">
                                    <input type="text" class="form-control" id="ruang_kosong_tum_belakang" name="ruang_kosong_tum_belakang" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-3">PANJANG PIPA PENYERAPAN</label>
                        <div>
                            <div class="col row">
                                <label class="col-2">Muka</label>
                                <div class="col-3 row">
                                    <input type="text" class="form-control" id="panjang_pipa_penyerapan_muka" name="panjang_pipa_penyerapan_muka" placeholder="">
                                </div>
                                <label class="col-2">Belakang</label>
                                <div class="col-3 row">
                                    <input type="text" class="form-control" id="panjang_pipa_penyerapan_belakang" name="panjang_pipa_penyerapan_belakang" placeholder="">
                                </div>
                            </div>
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