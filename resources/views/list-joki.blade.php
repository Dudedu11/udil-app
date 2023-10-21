<!DOCTYPE html>
<html lang="en">

<head>

    <!-- title -->
    <title>Udil Ganteng</title>

    @include('layout.head')
    <style>
        .card {
            background-color: rgb(26, 25, 31);
            color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>

    @stack('stylesheet')

</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('layout.header')


    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <!-- <div class="section-title">
                                <h5>Top Views</h5>
                            </div> -->
                            <div class="card">
                                <div class="card-body">
                                    <h5 style="color: red;">Ketentuan Joki Rank</h5>
                                    </br>
                                    <h6 style="color: #fff;">Orderan Joki Di Cek Pukul 09.00 - 21.00 WIB</h6>
                                    </br>
                                    <h6 style="color: red;">(Jika Order Melewati Batas Pengecekan Orderan , Maka Orderan Di Cek di Hari Berikutnya)</h6>
                                    </br>
                                    <p style="color: #fff;">Cara Order : </p>
                                    <ol style=" margin-left: 30px;">
                                        <li>Lengkapi Data Joki Dengan Teliti!</li>
                                        <li>Pilih Jenis Joki Rank</li>
                                        <li>Masukkan Jumlah Order</li>
                                        <li>Pilih Metode Pembayaran</li>
                                        <li>Masukkan nomor WhatsApp yg benar!</li>
                                        <li>Klik Beli lakukan Pembayaran</li>
                                        <li>Orderan Joki akan segera di proses setelah pembayaran berhasil</li>
                                    </ol>
                                    </br>
                                    <h6 style="color: red;">Estimasi Proses Jasa Joki Kita Usahakan Secepatnya</h6>
                                    </br>
                                    <h6 style="color: red;">Minimal 12 Jam - Maximal 2x24 Jam</h6>
                                    </br>
                                    <h6 style="color: red;">**Catatan Penting!!! : Sebelum Order Mohon Baca Informasi (Pop Up)</h6>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="product__sidebar__comment">
                            <div class="section-title">
                                <h5>New Comment</h5>
                            </div>
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img src="img/sidebar/comment-1.jpg" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <li>Active</li>
                                        <li>Movie</li>
                                    </ul>
                                    <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                                </div>
                            </div>
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img src="img/sidebar/comment-2.jpg" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <li>Active</li>
                                        <li>Movie</li>
                                    </ul>
                                    <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                                </div>
                            </div>
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img src="img/sidebar/comment-3.jpg" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <li>Active</li>
                                        <li>Movie</li>
                                    </ul>
                                    <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                                </div>
                            </div>
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img src="img/sidebar/comment-4.jpg" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <li>Active</li>
                                        <li>Movie</li>
                                    </ul>
                                    <h5><a href="#">Monogatari Series: Second Season</a></h5>
                                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="product__page__content">
                        <!-- <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h5>Data Diri</h5>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="card" style="padding: 15px;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label style="color:white">Email / No Hp</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan email / no hp">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label style="color:white">Password</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan password">
                                    </div>
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label style="color:white">Requues Hero</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan hero yang diinginkan">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label style="color:white">Catatan</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan catatan">
                                    </div>
                                </div>
                            </div>
                            </br>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label style="color:white">User Id & Nickname</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contoh : 10101191919-Udil">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label for="Login Via"></label>
                                        <select name="Login Via" id="Login Via" class="form-select">
                                            <option value="-">Login Via</option>
                                            <option value="moonton">
                                                Moonton (Rekomendasi)</option>
                                            <option value="vk">
                                                VK (Rekomendasi)</option>
                                            <option value="tiktok">
                                                TikTok</option>
                                            <option value="facebook">
                                                Facebook</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </br>
                        <!-- <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4>List Harga</h4>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="card" style="width: 100%; margin: 0; padding: 15px;">
                                <div class="card-header">
                                    <h5 style="color: #fff;">Pilih Joki Rank</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- <label for="promo_code">Masukan kode voucher</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="promo_code" name="promo_code" placeholder="Kode Voucher" aria-label="Kode Voucher" aria-describedby="promo_code">
                                            <button class="btn btn-secondary btn-ordernow" style="box-shadow: 0 .5rem 1rem rgba(255,255,255,.152)!important;" type="button" id="promo_code" onclick="if (!window.__cfRLUnblockHandlers) return false; checkPromo()">Apply Voucher</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
    </br>
                        <div class="row">
                            <div class="card" style="width: 100%; margin: 0; padding: 15px;">
                                <div class="card-header">
                                    <h5 style="color: #fff;">Gunakan Voucher</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <label for="promo_code">Masukan kode voucher</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="promo_code" name="promo_code" placeholder="Kode Voucher" aria-label="Kode Voucher" aria-describedby="promo_code">
                                            <button class="btn btn-secondary btn-ordernow" style="box-shadow: 0 .5rem 1rem rgba(255,255,255,.152)!important;" type="button" id="promo_code" onclick="if (!window.__cfRLUnblockHandlers) return false; checkPromo()">Apply Voucher</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="card" style="width: 100%; padding: 15px;">
                                <div class="card-header">
                                    <h5 style="color: #fff;">Masukan Jumlah Order</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <label for="promo_code">Jumlah Order</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="promo_code" name="promo_code" placeholder="Kode Voucher" aria-label="Kode Voucher" aria-describedby="promo_code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="card" style="width: 100%; padding: 15px;">
                                <div class="card-header">
                                    <h5 style="color: #fff;">Pilih Metode Pembayaran</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- <label for="promo_code">Jumlah Order</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="promo_code" name="promo_code" placeholder="Kode Voucher" aria-label="Kode Voucher" aria-describedby="promo_code">
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="card" style="width: 100%; padding: 15px;">
                                <div class="card-header">
                                    <h5 style="color: #fff;">Order Joki</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <label for="promo_code">No Whastsapp</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="promo_code" name="promo_code" placeholder="628937282" aria-label="Kode Voucher" aria-describedby="promo_code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </section>
    @include('layout.footer')

    @include('layout.script')

    @stack('scripts')
</body>

</html>