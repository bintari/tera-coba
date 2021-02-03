<?= $this->extend('user/template'); ?>

<?= $this->section('content') ?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<section id="" class=" ">

    <main id="main">
        <section id="hero" class=" align-items-center">

        </section><!-- End Hero -->

        <!-- ======= Blog Section ======= -->
        <section id="pengujian" class="pengujian">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-xl-12">

                        <hr>
                        <h2 class="entry-title">
                            <a href="blog-single.html">
                                <p>Daftar pengajuan<p>
                            </a>

                        </h2>


                        <div class="entry-content">

                            <div class="col card mb-3">
                                <div class="col row">
                                    <h5 class="col mt-2">Pengajuan Keringanan Pembayaran</h5>
                                    <button id="show" class="get-started-btn scrollto m-3">lihat selengkapnya</button>
                                </div>
                                <div class="tb1" style="display: none;">
                                    <div class="table-responsive ">
                                        <table class="table table-stripped table-hover">
                                            <thead>
                                                <th>No</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Total Retribusi</th>
                                                <th>Besar Pengajuan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </thead>
                                            <tbody class="tbody-jenis_uttps">
                                                <tr>
                                                    <td scope="row">1</td>
                                                    <td scope="row">1/2/2021</td>
                                                    <td scope="row">Rp 20000000</td>
                                                    <td scope="row">Rp 200000</td>
                                                    <td scope="row">proses</td>
                                                    <td>
                                                        <button id="detail" class="get-started-btn scrollto">detail</button>
                                                    </td>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <div class="detail card" style="display:none">
                                            <h3 class="col  m-3">Detail pengajuan keringanan</h3>
                                            <div class="col mt-2 mb-2">
                                                <div class="col row ">
                                                    <div class="col-3">NO</div>
                                                    <div class="col-9">: 1</div>
                                                </div>
                                                <div class="col row  ">
                                                    <div class="col-3">Tanggal Pengajuan</div>
                                                    <div class="col-9">: 1/2/2021</div>
                                                </div>
                                                <div class="col row  ">
                                                    <div class="col-3">Total Retribusi</div>
                                                    <div class="col-9">: Rp 20000000</div>
                                                </div>
                                                <div class="col row  ">
                                                    <div class="col-3">Besar Pengajuan</div>
                                                    <div class="col-9">: Rp 200000</div>
                                                </div>
                                                <div class="col row  ">
                                                    <div class="col-3">Status</div>
                                                    <div class="col-9">: proses</div>
                                                </div>
                                                <div class="col row  ">
                                                    <div class="col-3">Status</div>
                                                    <div class="col-9">: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus cumque aperiam expedita suscipit in. Sint eum harum ipsam impedit nisi! Iure in voluptate consequuntur minus cupiditate blanditiis optio explicabo ea.</div>
                                                </div>
                                            </div>


                                        </div>


                                    </div>
                                    <div>
                                        <i>Catatan: </i>
                                    </div>
                                    <div>
                                        <i>
                                            Proses reparasi perbaikan ulang terhitung 7 hari sejak penetapan hasil pengujian melebihi batas waktu maka akan dikenai denda sesuai aturan yang berlaku
                                        </i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col card mb-3">
                            <div class="col row">
                                <h5 class="col mt-2">Pengajuan Kelebihan Pembayaran</h5>
                                <button id="show2" class="get-started-btn scrollto m-3">lihat selengkapnya</button>
                            </div>
                            <div class="tb2" style="display: none;">
                                <div class="table-responsive">
                                    <table class="table table-stripped table-hover">
                                        <thead>
                                            <th>NO</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Total Retribusi</th>
                                            <th>Besar Retribusi Sudah dibayar</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                        </thead>
                                        <tbody class="tbody-jenis_uttps">
                                            <tr>
                                                <td scope="row">1</td>
                                                <td scope="row">1/2/2021</td>
                                                <td scope="row">Rp 20000000</td>
                                                <td scope="row">Rp 21000000</td>
                                                <td scope="row">proses</td>
                                                <td>
                                                        <button id="detaillebih" class="get-started-btn scrollto">detail</button>
                                                    </td>

                                            </tr>

                                        </tbody>

                                    </table>
                                    <div class="detaillebih card" style="display:none">
                                        <h3 class="col  m-3">Detail pengajuan kelebihan</h3>
                                        <div class="col mt-2 mb-2">
                                            <div class="col row ">
                                                <div class="col-3">NO</div>
                                                <div class="col-9">: 1</div>
                                            </div>
                                            <div class="col row  ">
                                                <div class="col-3">Tanggal Pengajuan</div>
                                                <div class="col-9">: 1/2/2021</div>
                                            </div>
                                            <div class="col row  ">
                                                <div class="col-3">Total Retribusi</div>
                                                <div class="col-9">: Rp 20000000</div>
                                            </div>
                                            <div class="col row  ">
                                                <div class="col-3">Retribusi yang telah dibayar</div>
                                                <div class="col-9">: Rp 200000</div>
                                            </div>
                                            <div class="col row  ">
                                                <div class="col-3">Status</div>
                                                <div class="col-9">: proses</div>
                                            </div>
                                            <div class="col row  ">
                                                <div class="col-3">Status</div>
                                                <div class="col-9">: Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus cumque aperiam expedita suscipit in. Sint eum harum ipsam impedit nisi! Iure in voluptate consequuntur minus cupiditate blanditiis optio explicabo ea.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <i>Catatan: </i>
                                    </div>
                                    <div>
                                        <!-- <i>
                                            Proses reparasi perbaikan ulang terhitung 7 hari sejak penetapan hasil pengujian melebihi batas waktu maka akan dikenai denda sesuai aturan yang berlaku
                                        </i> -->
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>


                </div>
            </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#show').click(function() {
                        $('.tb1').toggle("slide");
                    });
                    $('#show2').click(function() {
                        $('.tb2').toggle("slide");
                    });
                    $('#detail').click(function() {
                        $('.detail').toggle("slide");
                    });
                    $('#detaillebih').click(function() {
                        $('.detaillebih').toggle("slide");
                    });
                });
            </script>
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

        </section>

    </main>
</section><!-- End Hero -->
</div>
<?= $this->endSection(); ?>