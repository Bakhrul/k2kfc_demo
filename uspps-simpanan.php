<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman USPPS - Simpanan</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>
    <main>
        <div class="header-wrapper" style="background-image: url('assets/images/bg-header-uspps-simpanan.png');">
            <h5 class="title-uspps-savings-header">SERUNYA BERHASANAH</h5>
            <p class="description-uspps-savings-header">Menabung dengan berbagai pilihan produk berbasis syariah sesuai
                dengan kebutuhan anda</p>
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-bottom:0 !important;">
                <li class="breadcrumb-item"><a href="uspps.php">USPPS</a></li>
                <li class="breadcrumb-item active" aria-current="page">Simpanan</li>
            </ol>
        </div>
        <section class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-product-group">
                            <img src="assets/images/thumbnail-uspps-simpoksya.jpg" class="single-product-image">
                            <div style="min-height:70px">
                                <h5 class="single-product-title text-center">SIMPOKSYA & SIWASYA</h5>
                            </div>
                            <p class="single-product-description text-center">Bergabung Bersama Kami dan Raih Hasanahmu
                            </p>
                            <a href="uspps-simpoksya.php"><button class="btn btn-more-single-product"
                                    type="button">LEBIH
                                    LANJUT</button></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-product-group">
                            <img src="assets/images/thumbnail-uspps-biaya-pendidikan.jpg" class="single-product-image">
                            <div style="min-height:70px">
                                <h5 class="single-product-title text-center">SIMPANAN BIAYA PENDIDIKAN</h5>
                            </div>
                            <p class="single-product-description text-center">Rencanakan Masa Depan Pendidikan Buah Hati
                                Anda Sedini Mungkin</p>
                            <a href="uspps-simpanan-biaya-pendidikan.php"><button class="btn btn-more-single-product" type="button">LEBIH
                                    LANJUT</button></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-product-group">
                            <img src="assets/images/thumbnail-uspps-berjangka-hasanah.jpg" class="single-product-image">
                            <div style="min-height:70px">
                                <h5 class="single-product-title text-center">SIMPANAN BERJANGKA HASANAH</h5>
                            </div>
                            <p class="single-product-description text-center">Cara Mudah Berinvestasi Syariah Halal dan
                                Berkah</p>
                            <a href="uspps-simpanan-berjangka-hasanah.php"><button class="btn btn-more-single-product" type="button">LEBIH
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