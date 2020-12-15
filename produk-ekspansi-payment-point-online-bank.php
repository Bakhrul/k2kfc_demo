<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Ekspansi - PPOB</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>
    <main>
        <div class="header-wrapper" style="background-image: url('assets/images/PaymentPointOnlineBank.png');">
            <div class="title-header-payment-point">PAYMENT POINT ONLINE BANK<br>(PPOB)</div>
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-bottom:0 !important;">
            <li class="breadcrumb-item"><a href="produk-ekspansi.php">EKSPANSI</a></li>
                <li class="breadcrumb-item active" aria-current="page">PAYMENT POINT ONLINE BANK</li>
            </ol>
        </div>
        <section class="content-wrapper" style="padding: 3em 0 0 0;">
            <div class="container">
                <img src="assets/images/image-information-product.PNG" class="image-header-product-detail">
                <div class="descrition-product-detail mt-4">
                    Ekspansi produk diluar Pinjaman, yakni PPOB yang dirancang untuk mempermudah anggota
                    dalam melakukan transaksi pembayaran tagihan bulanan, angsuran, tiket dan pulsa seperti : <br><br>
                    <ol style="padding-bottom:0 !important;padding-left:20px !important;margin-bottom:0 !important;">
                        <li>Public Utility & TV Cable <br>Meliputi : Aora TV, Speedy, Listrik PLN, PDAM, TelkomVision,
                            Indovision, BIG TV dan BPJS
                            Kesehatan.
                        </li>
                        <li>Transportation<br>Meliputi : Kereta Api dan Tiket Pesawat All Domestic </li>
                        <li>Multi Finance, dan <br>Meliputi : FIF, Adira Finance, Mega Auto Finance, Mega Central
                            Finance, Bussan Auto
                            Finance dan WOM Finance.
                        </li>
                        <li>Pulsa Elektrik <br>Tatacara pengajuan PPOB dapat diajukan melalui request by email ke
                            kopkar.kfc@gmail.com
                            baik individual maupun kelompok d an ditawarkan melalui mekanisme potong gaji.
                        </li>

                    </ol>
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