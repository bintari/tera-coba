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
                                                <th>NO</th>
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

        </section>

    </main>
</section><!-- End Hero -->
</div>
<?= $this->endSection(); ?>