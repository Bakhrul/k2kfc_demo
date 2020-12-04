<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Beranda</title>
    <?php
    include('template/css_component.php')
    ?>
    <style>
        body {
            background: #A0D9F6;
        }
    </style>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>
    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/bg-header-beranda-1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/bg-header-beranda-2.jpg" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <section class="content-wrapper">
            <div class="container">
                <div class="slide-item">
                    <div class="item-beranda-element">
                        <div class="item-beranda-head">
                            <div class="item-beranda-title">Produk</div>
                            <img src="assets/images/icon-beranda-1.PNG" class="item-beranda-image">
                        </div>
                        <p class="item-beranda-description">Berbagai produk terbaik untuk kebutuhan anggota K2KFC
                            se-Indonesia</p>
                    </div>
                    <div class="item-beranda-element">
                        <div class="item-beranda-head">
                            <div class="item-beranda-title">USPPS</div>
                            <img src="assets/images/icon-beranda-2.PNG" class="item-beranda-image">
                        </div>
                        <p class="item-beranda-description">Solusi Pembayaran Syariah untuk anggota USPPS se-Indonesia
                        </p>
                    </div>
                    <div class="item-beranda-element">
                        <div class="item-beranda-head">
                            <div class="item-beranda-title">Tentang Kami</div>
                            <img src="assets/images/icon-beranda-3.PNG" class="item-beranda-image">
                        </div>
                        <p class="item-beranda-description">Kami adalah keluarga besar Koperasi Karyawan KFC Indonesia
                            (K2KFC)</p>
                    </div>
                    <div class="item-beranda-element">
                        <div class="item-beranda-head">
                            <div class="item-beranda-title">Berita</div>
                            <img src="assets/images/icon-beranda-4.PNG" class="item-beranda-image">
                        </div>
                        <p class="item-beranda-description">Berita mengenai Koperasi Karyawan KFC Indonesia (K2KFC)</p>
                    </div>
                </div>
                <h5 class="title-beranda-services">Kami berkomitmen memberikan pelayanan yang prima kepada anda </h5>
                <div class="row mt-4">
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-12">
                        <img src="assets/images/logo.png" class="image-beranda-profile mb-3">
                    </div>
                    <div class="col-xl-8 col-lg-10 col-md-9 col-sm-12">
                        <h5 class="mt-2 font-weight-bolder">PROFILE</h5>
                        <p>Koperasi Karyawan KFC</p>
                        <div class="panel-group mt-4" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading panel-heading-custom" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="more-less-panel fa fa-plus"></i>
                                            VISI MISI
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body panel-body-custom">
                                        <div class="heading-description-right-profile-us">
                                            <img src="assets/images/icon-visi-kami.PNG">
                                            <span>VISI</span>
                                        </div>
                                        <div class="text-description-right-profile-us">Menjadi Koperasi Karyawan terbaik
                                            yang
                                            berlandaskan asas kekeluargaan, etika dan moralitas guna meningkatkan
                                            kesejahteraan anggota.
                                        </div>
                                        <div class="heading-description-right-profile-us mt-3">
                                            <img src="assets/images/icon-misi-kami.PNG" style="width:90px;height:70px;">
                                            <span>MISI</span>
                                        </div>
                                        <ul class="list-description-right-profile-us">
                                            <li>Meningkatkan peran serta anggota koperasi yang merupakan pemilik modal
                                                sekaligus
                                                pengguna jasa dalam memajukan koperasi ke arah yang lebih baik.
                                            </li>
                                            <li>
                                                Menciptakan produk yang beragam, humanis dan terus berinovasi dalam
                                                melihat peluang
                                                usaha baru dengan memperhatikan fleksibilitas dan kemampuan anggota
                                                sebagai tolak
                                                ukurnya.
                                            </li>
                                            <li>Menjalin kerjasama yang baik dan fisible dengan para stockholder dan
                                                stakeholder untuk
                                                kemajuan dan kontinuitas koperasi di masa yang akan datang. </li>
                                            <li>
                                                Memperluas jaringan kemitraan dengan pihak lainnya dalam rangka
                                                diversifikasi usaha
                                                koperasi.
                                            </li>
                                            <li>
                                                Meningkatkan kemampuan sumber daya dan teknologi informasi yang kompeten
                                                sehingga dapat
                                                melayani kebutuhan anggota secara profesional, transparan dan akuntabel.

                                            </li>
                                            <li>
                                                Tunduk dan patuh terhadap peraturan perundang-undangan yang berlaku
                                                dalam mengelola
                                                organisasi koperasi serta tetap mengutamakan nilai-nilai koperasi
                                                didalamnya yang
                                                meliputi aspek sosial, kekeluargaan dan kemanusiaan.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading panel-heading-custom" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            <i class="more-less-panel fa fa-plus"></i>
                                            MOTTO
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingTwo">
                                    <div class="panel-body panel-body-custom">
                                        <div class="heading-description-right-profile-us">
                                            <img src="assets/images/icon-motto-kami.PNG"
                                                style="width:60px;height:70px;">
                                            <span>MOTTO</span>
                                        </div>
                                        <div class="text-description-right-profile-us">Bersama Kita Sejahtera
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- panel-group -->
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
    <script>
        $('.slide-item').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '<button class="btn btn-prev-item-beranda" aria-label="Previous" type="button"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
            nextArrow: '<button class="btn btn-next-item-beranda" aria-label="Next" type="button"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>',
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        function toggleIcon(e) {
            $(e.target)
                .prev('.panel-heading')
                .find(".more-less-panel")
                .toggleClass('fa-plus fa-minus');
        }
        $('.panel-group').on('hidden.bs.collapse', toggleIcon);
        $('.panel-group').on('shown.bs.collapse', toggleIcon);
    </script>

</body>

</html>