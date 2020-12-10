<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Produk - Simpanan Pokok dan Wajib</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>
    <main>
        <div class="header-wrapper" style="background-image: url('assets/images/thumbnail-produk-simpanan-pojok.jpg');">
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-bottom:0 !important;">
                <li class="breadcrumb-item"><a href="produk-simpanan.php">SIMPANAN</a></li>
                <li class="breadcrumb-item active" aria-current="page">SIMPANAN POKOK & WAJIB</li>
            </ol>
        </div>
        <section class="content-wrapper" style="padding: 3em 0 0 0;">
            <div class="container">
                <img src="assets/images/image-information-product.PNG" class="image-header-product-detail">
                <div class="descrition-product-detail mt-4">
                    *Simpanan Pokok merupakan simpanan yang wajib dibayarkan sekali oleh anggota kepada
                    koperasi pada saat pendaftaran menjadi anggota, nil ainya sebesar Rp 10.000, - per anggota.<br>
                    *Simpanan Wajib merupakan simpanan tertentu yang wajib dibayarkan rutin oleh anggota kepada
                    koperasi setiap bulannya dengan jumlah simpanan yang sama, dengan perincian sebagai berikut:<br>
                    <ul style="padding-bottom:0 !important;margin-bottom:0 !important;">
                        <li>Untuk level crew sebesar Rp 75.000,- dan </li>
                        <li>Level staff sebesar Rp 150.000, - </li>
                    </ul>                    
                    Nilai simpanan wajib tersebut di atas, belum termasuk pengurangan untuk cadangan peduli sosial

                    sebesar Rp 2.000, - baik untuk level crew maupun level staff.
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