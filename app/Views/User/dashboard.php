<?= $this->extend('user/template'); ?>

<?= $this->section('content') ?>

<!-- ======= Header ======= -->
<!-- End Header -->

<section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row">
                    <div class="col-xl-7">
                        <h1>Selamat Datang<br> Website Tera / Tera Ulang</h1>
                        <h2>Dinas Perindustrian dan Perdagangan Kabupaten Banyumas</h2>
                        <a href="#pendaftaran" class="btn-get-started scrollto">PENDAFTARAN TERA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">


    <!-- ======= Blog Section ======= -->
    <section id="pendaftaran" class="pendaftaran">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-xl-12">


                    <div class="row">
                        <div class="col-12 card">
                            <div class="m-2">

                                <h2 class="entry-title mt-3">
                                    <a href="blog-single.html">
                                        <p>PENDAFTARAN TERA DAN TERA ULANG<p>
                                    </a>

                                </h2>
                                <p>
                                    Pendaftaran untuk pengujian Tera dan Tera Ulang
                                </p>
                                <hr>


                                <div class="card-body">
                                    <form action="">



                                        <div class="form-group row">
                                            <label for="tera_atas_nama" class="col-sm-2 col-form-label">Atas Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-sm " id="tera_atas_nama" name="tera_atas_nama" placeholder="Masukkan Nama wajib tera" value="">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tera_atas_nama_alamat" class="col-sm-2 col-form-label">Atas Nama Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control form-control-sm " id="tera_atas_nama_alamat" rows="3" name="tera_atas_nama_alamat" placeholder="Masukkan Alamat wajib tera"></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jenis_tera_id" class="col-sm-2 col-form-label">Jenis Pekerjaan</label>

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
                                        <button class="get-started-btn scrollto" type="submit">Simpan</button>
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

                </div>


            </div>
        </div>
        </div>

    </section>
</main>
<script>
    var jenis_uttp_ids = [];
    var jenis_uttp_namas = [];
    var kapasitass = [];
    var daya_bacas = [];
    var jumlahs = [];
    var jenis;
    var kapasitas;
    var daya_baca;
    var jumlah;

    function openModal(tipe, index) {
        clearJenisUTTP()
        if (tipe == 0) {
            $('#jenisUTTPModalLabel').html("Tambah Tera Jenis UTTP")
            $('.btn-ubah-jenis').addClass('d-none');
            $('.btn-tambah-jenis').removeClass('d-none');
        } else {
            $('#jenisUTTPModalLabel').html("Ubah Tera Jenis UTTP")
            $('.btn-tambah-jenis').addClass('d-none');
            $('.btn-ubah-jenis').removeClass('d-none');
            $('#jenis_uttp').val(jenis_uttp_ids[index]);
            $('#jenis_uttp').trigger('change');
            $('#kapasitas').val(kapasitass[index]);
            $('#daya_baca').val(daya_bacas[index]);
            $('#jumlah').val(jumlahs[index]);
            $('#jenisUTTPModal').find('.modal-body').data('id', index)
        }
        $('#jenisUTTPModal').modal()
    }
    $(document).ready(function() {
        console.log($('.form-jenis_uttp_ids').val())
        jenis_uttp_ids = $('.form-jenis_uttp_ids').val().split(",").filter((e) => e != "")
        jenis_uttp_namas = $('.form-jenis_uttp_namas').val().split(",").filter((e) => e != "")
        kapasitass = $('.form-kapasitass').val().split(",").filter((e) => e != "")
        daya_bacas = $('.form-daya_bacas').val().split(",").filter((e) => e != "")
        jumlahs = $('.form-jumlahs').val().split(",").filter((e) => e != "")
        updateTabel()
        $('.jenis_uttp').select2({});
        $(":input").inputmask();
        $(".money").inputmask('integer', {
            'removeMaskOnSubmit': true,
            'alias': 'numeric',
            'groupSeparator': '.',
            'autoGroup': true,
            'digitsOptional': false,
            'allowMinus': false,
            'placeholder': '0'
        });
        $('#user_nik').on('keyup change clear', function() {
            var value = $(this).val();
            var min_karakter = 16;
            if (value.length >= min_karakter) {
                $.ajax("<?= base_url('api/user/') ?>/" + value)
                    .done(function(json) {
                        $('#user_nama').val(json.data.user_nama)
                        $('#tera_atas_nama').val(json.data.user_nama)
                        $('#user_alamat').val(json.data.user_alamat)
                        $('#tera_atas_nama_alamat').val(json.data.user_alamat)
                    })
            }
        })
        $("#jenis_uttp").change(function() {
            $(this).data('nama', $(this).find(":selected").data('nama'))
        });
        $('.btn-tambah-jenis').on('click', function() {
            var isValid = validation()
            if (isValid) {
                jenis_uttp_namas.push($("#jenis_uttp").data('nama'))
                jenis_uttp_ids.push(jenis)
                kapasitass.push(kapasitas)
                daya_bacas.push(daya_baca)
                jumlahs.push(jumlah)
                updateTabel()
                clearJenisUTTP()
                $('#jenisUTTPModal').modal('hide')
            }
        })
        $('.btn-ubah-jenis').on('click', function() {
            var index = $("#jenisUTTPModal").find('.modal-body').data('id')
            var isValid = validation()
            if (isValid) {
                var nama = $('#jenis_uttp').data('nama');
                jenis_uttp_ids.splice(index, 1, jenis);
                if (nama != "") {
                    jenis_uttp_namas.splice(index, 1, nama);
                }
                kapasitass.splice(index, 1, kapasitas);
                daya_bacas.splice(index, 1, daya_baca);
                jumlahs.splice(index, 1, jumlah);
                updateTabel()
                clearJenisUTTP()
                $('#jenisUTTPModal').modal('hide')
            }
        })
    })

    function clearJenisUTTP() {
        $('.form-jenis_uttp_ids').val(jenis_uttp_ids)
        $('.form-jenis_uttp_namas').val(jenis_uttp_namas)
        $('.form-kapasitass').val(kapasitass)
        $('.form-daya_bacas').val(daya_bacas)
        $('.form-jumlahs').val(jumlahs)
        $("#jenis_uttp").data('nama', "")
        $('#jenis_uttp').val("");
        $('#jenis_uttp').trigger('change');
        $('#kapasitas').val("");
        $('#daya_baca').val("");
        $('#jumlah').val("");
    }

    function hapus(index) {
        jenis_uttp_ids.splice(index, 1);
        jenis_uttp_namas.splice(index, 1);
        kapasitass.splice(index, 1);
        daya_bacas.splice(index, 1);
        jumlahs.splice(index, 1);
        clearJenisUTTP()
        updateTabel()
    }

    function updateTabel() {
        $('.tbody-jenis_uttps').html("")
        var html = ""
        jenis_uttp_ids.forEach((item, index) => {
            html += "<tr>"
            html += "<td>"
            html += index + 1
            html += "</td>"
            html += "<td>"
            html += jenis_uttp_namas[index]
            html += "</td>"
            html += "<td>"
            html += formatRupiah(kapasitass[index])
            html += " "
            html += daya_bacas[index]
            html += "</td>"
            html += "<td>"
            html += formatRupiah(jumlahs[index])
            html += "</td>"
            html += "<td>"
            html += '<button type="button" class="btn btn-link text-info" onClick="openModal(1,' + index + ')"><i class="fa fa-fw fa-edit" aria-hidden="true" title="Edit Jenis UTTP' + jenis_uttp_namas[index] + '"></i></button>'
            html += '<button type="button" class="btn btn-link text-danger" onClick="hapus(' + index + ')"><i class="fa fa-fw fa-trash" aria-hidden="true" title="Hapus Jenis UTTP' + jenis_uttp_namas[index] + '"></i></button>'
            html += "</td>"
            html += "</tr>"
        })
        $('.tbody-jenis_uttps').html(html)
    }

    function validation() {
        jenis = $('#jenis_uttp').val();
        kapasitas = $('#kapasitas').inputmask('unmaskedvalue');
        daya_baca = $('#daya_baca').val();
        jumlah = $('#jumlah').inputmask('unmaskedvalue');
        if (jenis == "") {
            showError("Jenis UTTP harus dipilih")
            return false;
        }
        if (kapasitas == "") {
            showError("Kapasitas tidak boleh kosong")
            return false;
        }
        if (daya_baca == "") {
            showError("Daya Baca tidak boleh kosong")
            return false;
        }
        if (jumlah == "") {
            showError("Jumlah tidak boleh kosong")
            return false;
        }
        return true;
    }

    function showError(title) {
        Swal.fire({
            icon: 'error',
            title: title
        });
    }
</script>


<?= $this->endSection(); ?>