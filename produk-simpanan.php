<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Produk - Simpanan</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>
    <main>
        <div class="header-wrapper" style="background-image: url('assets/images/bg-header-produk-simpanan.png');">
            <h5 class="title-product-savings-header">Simpanan Terpecaya<br>Mewujudkan Apapun Rencana Anda</h5>
            <p class="description-product-savings-header">Menabung dengan berbagai pilihan produk berbasis syariah sesuai dengan kebutuhan anda</p>
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-bottom:0 !important;">
                <li class="breadcrumb-item"><a href="produk.php">PRODUK</a></li>
                <li class="breadcrumb-item active" aria-current="page">SIMPANAN</li>
            </ol>
        </div>
        <section class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-product-group">
                            <img src="assets/images/thumbnail-produk-simpanan-pojok.jpg" class="single-product-image">
                            <div style="min-height:70px">
                                <h5 class="single-product-title text-center">SIMPANAN POKOK DAN SIMPANAN WAJIB</h5>
                            </div>
                            <p class="single-product-description text-center">Bergabung Bersama Kami Mewujudkan Apapun Rencana Anda
                            </p>
                            <a href="javascript:void(0)"><button class="btn btn-more-single-product" type="button">LEBIH
                                    LANJUT</button></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-product-group">
                            <img src="assets/images/thumbnail-produk-simpanan-sukarela.jpg" class="single-product-image">
                            <div style="min-height:70px">
                                <h5 class="single-product-title text-center">SIMPANAN SUKARELA</h5>
                            </div>
                            <p class="single-product-description text-center">Simpanan Terpecaya Mewujudkan Apapun Rencana Anda
                               </p>
                            <a href="javascript:void(0)"><button class="btn btn-more-single-product" type="button">LEBIH
                                    LANJUT</button></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-product-group">
                            <img src="assets/images/thumbnail-produk-simpanan-berjangka.jpg" class="single-product-image">
                            <div style="min-height:70px">
                                <h5 class="single-product-title text-center">SIMPANAN BERJANGKA</h5>
                            </div>
                            <p class="single-product-description text-center">Investasi Mudah dan Terpecaya Mewujudkan Masa Depan Terencana</p>
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