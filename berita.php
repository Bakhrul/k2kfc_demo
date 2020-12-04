<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Berita</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php');    
    ?>
    <main>
        <div class="header-wrapper" style="background-image: url('assets/images/bg-header-berita.jpg');">
            <div class="title-header-news-categories">BERSAMA<br>KITA<br>SEJAHTERA</div>
        </div>
        <div class="sub-header-wrapper text-center">BERITA</div>
        <section class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12  mb-5">
                        <a href="berita-csr.php" class="w-100 d-flex justify-content-center">
                            <div class="categories-news-group"
                                style="background-image: url('assets/images/bg-berita-csr.jpg');">

                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <a href="berita-aktivitas.php" class="w-100 d-flex justify-content-center">
                            <div class="categories-news-group"
                                style="background-image: url('assets/images/bg-berita-aktifitas.jpg');">
                                <div class="title-categories-news">Aktivitas</div>
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