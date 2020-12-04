<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Produk</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>

    <main>
        <div class="header-wrapper" style="background-image: url('assets/images/bg-produk.jpg');"></div>
        <div class="sub-header-wrapper text-center">PRODUK</div>
        <section class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="categories-product-group">
                            <img src="assets/images/icon-produk-simpanan.PNG" class="categories-product-image">
                            <h5 class="categories-product-title text-center">SIMPANAN</h5>
                            <p class="categories-product-description text-center">Berbagai Jenis Program Simpanan
                                Tersedia
                                bagi Anggota Koperasi Karyawan KFC</p>
                            <a href="produk-simpanan.php"><button class="btn btn-more-categories-product"
                                    type="button">LEBIH
                                    LANJUT</button></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="categories-product-group">
                            <img src="assets/images/icon-produk-pinjaman.PNG" class="categories-product-image">
                            <h5 class="categories-product-title text-center">PINJAMAN</h5>
                            <p class="categories-product-description text-center">Berbagai Jenis Program Pinjaman
                                Tersedia
                                bagi Anggota Koperasi Karyawan KFC</p>
                            <a href="produk-pinjaman.php"><button class="btn btn-more-categories-product"
                                    type="button">LEBIH
                                    LANJUT</button></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="categories-product-group">
                            <img src="assets/images/icon-produk-ekspansi.PNG" class="categories-product-image">
                            <h5 class="categories-product-title text-center">EKSPANSI</h5>
                            <p class="categories-product-description text-center">Berbagai Macam Pembayaran
                                Tersedia
                                bagi Anggota Koperasi Karyawan KFC</p>
                            <a href="produk-ekspansi.php"><button class="btn btn-more-categories-product"
                                    type="button">LEBIH
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