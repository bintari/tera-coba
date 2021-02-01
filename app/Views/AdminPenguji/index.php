<?= $this->extend('template/layout'); ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-lg-4 col-md-4">

        <div class="ibox">
            <div class="ibox-body text-center">
                <div class="m-t-20">
                    <img src="/themes/booking/assets/back/img/admin-avatar.png">
                </div>
                <h5 class="font-strong m-b-10 m-t-10">Oki Udiono</h5>
                <div class="m-b-20 text-muted">Supir</div>
                <div>
                    <a href="/page/profile" class="btn btn-info btn-rounded m-b-5"><i class="fa fa-plus"></i> Profile</a>
                </div>
                Info Hasil Pengujian Anda Pada Tanggal 12/09/2020<br>
                <label style="color: black;font-size: 25px;">BELUM UJI</label> <br>
            </div>
        </div>
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Info Tanggal Libur</div>
                <div class="ibox-tools">
                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                    <a class="ibox-remove"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="ibox-body text-center">
                <table class="table table-bordered">
                    <thead>
                        <tr align="center">
                            <th>No.</th>
                            <th>Tanggal Format (Bulan/Hari/Tahun)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>01/01/2021</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>03/12/2021</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>03/11/2021</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>02/12/2021</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>01/01/2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-8 col-md-8">
        <div class="ibox">
            <div class="ibox-body">
                <div class="row">

                    <div class="col-lg-6 col-md-6">


                        <a href="/page/jenis">
                            <div class="ibox bg-success color-white widget-stat">
                                <div class="ibox-body">
                                    <h2 class="m-b-5 font-strong">BA</h2>
                                    <div class="m-b-5">Booking Antrian</div><i class="ti-microsoft widget-stat-icon"></i>
                                    <div><i class="fa fa-level-up m-r-5"></i><small>Pilih</small></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="/page/buktibooking">
                            <div class="ibox bg-info color-white widget-stat">
                                <div class="ibox-body">
                                    <h2 class="m-b-5 font-strong">BB</h2>
                                    <div class="m-b-5">Bukti Booking</div><i class="ti-ticket widget-stat-icon"></i>
                                    <div><i class="fa fa-level-up m-r-5"></i><small>Pilih</small></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <a href="/page/antrianpelayanan">
                            <div class="ibox bg-warning color-white widget-stat">
                                <div class="ibox-body">
                                    <h2 class="m-b-5 font-strong">AP</h2>
                                    <div class="m-b-5">Antrian Pelayanan</div><i class="ti-exchange-vertical widget-stat-icon"></i>
                                    <div><i class="fa fa-level-up m-r-5"></i><small>Pilih</small></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">Kontak</h2>
                                <div class="m-b-5">(0281) 637 211</div><i class="ti-signal widget-stat-icon"></i>
                                <div><i class="fa fa-level-down m-r-5"></i><small>Hubungi Dinas Perhubungan Kab. Banyumas</small></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="ibox ibox-info">
                            <div class="ibox-head">
                                <div class="ibox-title">Info Kuota</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="ibox-remove"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form" id="yw0" action="/page" method="post">
                                    <input type="hidden" value="7afb2b62d19308ffd1641abff59fe3910f3c3685" name="BETTER_BMS">
                                    <input type="hidden" name="Booking[jenis]" value="TNU">
                                    <div class="form-group">
                                        <label class="control-label">Cek Tanggal Booking</label>
                                        <input class="form-control" id="datepicker" placeholder="Tanggal" required="required" value="01/28/2021" name="Booking[tgl_daftar]" type="text" maxlength="70">
                                    </div>
                                </form>
                                <br>
                                <div id="divKuota"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script src="/themes/booking/assets/home/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $("#datepicker").datepicker({
            format: "mm/dd/yyyy",
            maxViewMode: "days",
            language: "id",
            startDate: '1m',
            autoclose: true,
            todayHighlight: true,
            daysOfWeekDisabled: [0, 7]
        });
        $("#divKuota").html("");
        $('#datepicker').datepicker().on('changeDate', function(ev) {
            $("#divKuota").html("");
            var a = $("#datepicker").val();
            $("#divKuota").load("/page/cektanggal" + "?date=" + a, function(data) {
                $("#divKuota").html(data);
                // $("#kuota").val(data.kuota);
                // $('#hiddenForm').show(); 
            });

        });
    </script>
</div>
<?= $this->endSection(); ?>