<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Tentang kami</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>
    <main>
        <div class="header-wrapper" style="background-image: url('assets/images/bg-tentang-kami.jpg');">
            <h5 class="title-about-us-header">SEMUANYA TENTANG<br>KOPERASI KARYAWAN KFC</h5>
            <p class="description-about-us-header">Sebuah Perjalanan Dalam Mewujudkan Kesejahteraan Bersama</p>
        </div>
        <div class="sub-header-wrapper text-center">BERSAMA KITA SEJAHTERA</div>
        <section class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-5">
                        <a href="profile-kami.php" class="w-100 d-flex justify-content-center">
                            <div class="categories-about-group"
                                style="background-image: url('assets/images/bg-profile-kami.jpg');">
                                <h5 class="text-center title-categories-about">Profile Kami</h5>
                                <p class="description-categories-about text-center">Koperasi Karyawan KFC Indonesia</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <a href="struktur-manajemen.php" class="w-100 d-flex justify-content-center">
                            <div class="categories-about-group"
                                style="background-image: url('assets/images/bg-struktur-manajemen.jpg');">
                                <h5 class="text-center title-categories-about">Struktur Manajemen</h5>
                                <p class="description-categories-about text-center">Menjunjung Tinggi Profesionalitas
                                </p>
                            </div>
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