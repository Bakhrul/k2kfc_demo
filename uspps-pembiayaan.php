<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman USPPS - Pembiayaan</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>
    <main>
        <div class="header-wrapper" style="background-image: url('assets/images/bg-header-uspps-pembiayaan.png');">
            <h5 class="title-uspps-payment-header">Pembiayaan Syariah Kembangkan Usaha Anda Demi Masa Depan Hasanah</h5>
            <p class="description-uspps-payment-header">Penuhi Modal usaha anda dengan cara syariah bersama kami</p>
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-bottom:0 !important;">
                <li class="breadcrumb-item"><a href="uspps.php">USPPS</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pembiayaan</li>
            </ol>
        </div>
        <section class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-product-group">
                            <img src="assets/images/thumbnail-uspps-sikaya.jpg" class="single-product-image">
                            <div style="min-height:70px">
                                <h5 class="single-product-title text-center">SIKAYA</h5>
                            </div>
                            <p class="single-product-description text-center">Raih Hasanah Bertransaksi Syariah</p>
                            <a href="javascript:void(0)"><button class="btn btn-more-single-product" type="button">LEBIH
                                    LANJUT</button></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-product-group">
                            <img src="assets/images/thumbnail-uspps-pasti-murah.jpg" class="single-product-image">
                            <div style="min-height:70px">
                                <h5 class="single-product-title text-center">PASTI MURAH</h5>
                            </div>
                            <p class="single-product-description text-center">Manfaatkan Kemudahan yang Hasanah</p>
                            <a href="javascript:void(0)"><button class="btn btn-more-single-product" type="button">LEBIH
                                    LANJUT</button></a>
                        </div>
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