<section>
    <div class="row">
        <div class="col-4">
            <img src="<?= base_url('assets/img/ketentuan.png') ?>" alt="" class="img-fluid">
        </div>
        <div class="col-8">
            <div class="container my-3">
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Alert!</strong> <?= $this->session->flashdata('success') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('failed')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Alert!</strong> <?= $this->session->flashdata('failed') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <h3>Lomba Video Komedi Tukang by</h3>&nbsp;&nbsp;
                            <img src="assets/img/top_long.png" alt="" width="180">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <h4 class="text-center">Timeline Lomba</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card bg-maroon text-white">
                            <div class="card-body">
                                <small><b>27 Maret s/d 13 April 2025</b></small>
                                <p>PENDAFTARAN DAN PENGUMPULAN KARYA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-purple text-white">
                            <div class="card-body">
                                <small><b>14 April s/d 16 April 2025</b></small>
                                <p>PENILAIAN KARYA</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-teal text-white">
                            <div class="card-body">
                                <small><b>16 April 2025</b></small>
                                <p>PENGUMUMAN PEMENANG</p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <h4 class="text-center">Hadiah Lomba</h4>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="card bg-teal text-white">
                            <div class="card-body">
                                <ul>
                                    <li>JUARA 1: Rp. 1.000.000 + e-sertifikat</li>
                                    <li>JUARA 2: Rp. 750.000 + e-sertifikat</li>
                                    <li>JUARA 3: Rp. 500.000 + e-sertifikat</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <ul>
                                    <li>HARAPAN 1: Rp. 300.000 + e-sertifikat</li>
                                    <li>HARAPAN 2: Rp. 200.000 + e-sertifikat</li>
                                    <li>HARAPAN 3: Rp. 100.000 + e-sertifikat</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-3">
                <div class="row">
                    <div class="col-3 mx-auto">
                        <a href="#" data-toggle="modal" data-target="#reg-modal" class="btn btn-primary btn-block btn-flat">DAFTAR</a>
                        <p class="text-center mt-2"><i>Step 1</i></p>
                    </div>
                    <div class="col-3 mx-auto">
                        <a href="#" data-toggle="modal" data-target="#send-modal" class="btn btn-success btn-block btn-flat">UPLOAD KONTEN</a>
                        <p class="text-center mt-2"><i>Step 2</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Daftar -->
<div class="modal fade" id="reg-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Daftarkan Diri Anda</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('register') ?>" method="POST">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="name_topevent" id="" class="form-control" placeholder="Contoh: Fulan">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="address_topevent" id="" cols="30" rows="3" class="form-control" placeholder="Contoh: Jl. Bersamamu No. 1"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Nomor HP</label>
                                <input type="text" name="phone_topevent" id="" class="form-control" placeholder="Contoh: 08xxxx">
                            </div>
                            <div class="form-group">
                                <label for="">Instagram</label>
                                <input type="text" name="insta_topevent" id="" class="form-control" placeholder="Contoh: @akun_ig">
                            </div>
                            <div class="form-group">
                                <label for="">TikTok</label>
                                <input type="text" name="tiktok_topevent" id="" class="form-control" placeholder="Contoh: @akun_tiktok">
                            </div>
                        </div>
                        <div class="col-6">
                            <p>Jangan lupa tampilkan logo top di video anda</p>
                            <label for="">Klik untuk mendownload</label>
                            <div class="row">
                                <div class="col-6">
                                    <a href="<?= base_url('assets/img/top_icon.png') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/top_icon.png') ?>" alt="" class="img-thumbnail">
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="<?= base_url('assets/img/top_long.png') ?>" target="_blank">
                                        <img src="<?= base_url('assets/img/top_long.png') ?>" alt="" class="img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-flat btn-block">Simpan</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- Modal Upload -->
<div class="modal fade" id="send-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Kirim Hasil Karya Anda</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('send') ?>" method="POST">
                    <div class="row">
                        <div class="col-6">
                            <h4>Ketentuan</h4>
                            <ul>
                                <li>Upload video di feed reels IG / TikTok</li>
                                <li>Wajib Tag / Collabs akun instagram <b>@topmortar_official</b> dan akun TikTok <b>@topmortar</b></li>
                                <li>menggunakan hashtag <b>#lombakomeditukang #topmortar</b></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nomor HP yang sudah terdaftar</label>
                                <input type="text" name="phone_topevent" id="" class="form-control" placeholder="Contoh: 08xxxx">
                            </div>
                            <div class="form-group">
                                <label for="">Link Konten</label>
                                <textarea name="content_topevent" id="" cols="30" rows="3" class="form-control" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-success btn-flat btn-block">Simpan</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->