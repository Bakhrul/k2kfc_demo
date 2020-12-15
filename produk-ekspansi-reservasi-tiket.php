<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Ekspansi - Reservasi Tiket</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>
    <main>
        <div class="header-wrapper" style="background-image: url('assets/images/ReservasiTiket.png');">
            <div class="title-header-reservasi-tiket">RESERVASI TIKET</div>
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-bottom:0 !important;">
            <li class="breadcrumb-item"><a href="produk-ekspansi.php">EKSPANSI</a></li>
                <li class="breadcrumb-item active" aria-current="page">RESERVASI TIKET</li>
            </ol>
        </div>
        <section class="content-wrapper" style="padding: 3em 0 0 0;">
            <div class="container">
                <img src="assets/images/image-information-product.PNG" class="image-header-product-detail">
                <div class="descrition-product-detail mt-4">
                    Ekspansi produk diluar Pinjaman, yakni sebagai Mitra Bisnis untuk penyediaan tiket dengan skala
                    nasional bagi Anggota dan PT Fastfood Indonesia, Tbk. Tiket yang disediakan, meliputi :
                    <br><br>
                    1) Tiket Pesawat
                    <ul style="padding-bottom:0 !important;padding-left:20px !important;margin-bottom:0 !important;">
                        <li>Seluruh maskapai Domestik <br>Garuda Indonesia, Batik Air, Citilink, Sriwijaya, Lion Air,
                            NAM Air, Wings Air, Kalstar dan Asia</li>
                        <li>Maskapai International by Request Menggunakan sistem Abacus yang su dah terintegrasi
                            dengan seluruh maskapai internasional.
                        </li>
                    </ul><br>
                    2) Tiket Kereta Api Indonesia
                    <ul style="padding-bottom:0 !important;padding-left:20px !important;margin-bottom:0 !important;">
                        <li>Tatacara pengajuan ticketing dapat melalui representative staff kami di (021) 8301133 Ext.
                            508 - 509 atau via email ke kopkar.kfc@gmail.com. Mekanisme pembayaran dapat melalui
                            potong gaji atau transfer melalui rekening kami di No. 436 380 2021 a.n. Koperasi Karyawan
                            KFC
                        </li>
                    </ul>
                </div>
                <div class="row mt-custom-group-footer-product">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center mb-3">
                        <a href="javascript:void(0)">
                            <button type="button" class="btn btn-brochure-product">
                                <img src="assets/images/background-brochure-product.PNG">
                            </button>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center mb-3">
                        <a href="javascript:void(0)">
                            <button type="button" class="btn btn-form-product">
                                <img src="assets/images/background-form-product.PNG">
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <?php
    include('template/footer.php')
    ?>
    <?php
    include('template/js_component.php')
    ?>

</body>

</html>