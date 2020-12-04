<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Berita CSR</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>
    <main>
        <div class="header-wrapper" style="background-image: url('assets/images/bg-header-berita-csr.jpg');">
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="berita.php">BERITA</a></li>
                <li class="breadcrumb-item active" aria-current="page">CSR</li>
            </ol>
        </div>
        <section class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('1')">
                            <img src="assets/images/berita-csr-gempa-lombok.jpg" class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">K2KFC PEDULI GEMPA LOMBOK</h5>
                            </div>
                            <div class="single-news-description text-center">K2KFC Peduli Pemberian Bantuan Sosial</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('2')">
                            <img src="assets/images/berita-csr-tsunami-palu.jpg" class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">K2KFC PEDULI TSUNAMI PALU</h5>
                            </div>
                            <div class="single-news-description text-center">K2KFC Peduli Pemberian Bantuan Sosial</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('3')">
                            <img src="assets/images/berita-csr-beasiswa.jpg" class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">K2KFC PEDULI BEASISWA</h5>
                            </div>
                            <div class="single-news-description text-center">K2KFC Peduli Pemberian Beasiswa K2KFC
                                Peduli Pendidikan</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <div class="modal fade" id="modalDetailBerita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-custom-radius">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <img src="assets/images/berita-csr-gempa-lombok.jpg" class="image-news-detail">
                    <h5 class="title-news-detail">K2KFC PEDULI GEMPA LOMBOK</h5>
                    <div class="utils-news-detail"></div>
                    <div class="position-news-detail text-center">Berita CSR</div>
                    <div class="description-news-detail mt-4 mb-3">Beliau memperoleh gelar
                        Pada hari Minggu (05/08/18) pukul 18:46 WIB gempa berkekuatan 7,0 SR kembali mengguncang wilayah
                        Lombok NTB. BMKG sempat mengeluarkan peringatan dini tsunami (waspada) yang berakhir pada pukul
                        20:00 WIB. Berdasarkan data BPNB total korban meninggal dunia sebanyak 82 jiwa dan ribuan
                        lainnya mengalami luka berat.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('template/footer.php')
    ?>
    <?php
    include('template/js_component.php')
    ?>
    <script>
        var dataBerita = [{
                'id': '1',
                'title': 'K2KFC PEDULI GEMPA LOMBOK',
                'image': 'assets/images/berita-csr-gempa-lombok.jpg',
                'description': 'Pada hari Minggu (05/08/18) pukul 18:46 WIB gempa berkekuatan 7,0 SR kembali mengguncang wilayah Lombok NTB. BMKG sempat mengeluarkan peringatan dini tsunami (waspada) yang berakhir pada pukul 20:00 WIB. Berdasarkan data BPNB total korban meninggal dunia sebanyak 82 jiwa dan ribuan lainnya mengalami luka berat.',
            },
            {
                'id': '2',
                'title': 'K2KFC PEDULI TSUNAMI PALU',
                'image': 'assets/images/berita-csr-tsunami-palu.jpg',
                'description': 'Kabar duka kembali menghentak bumi pertiwi Indonesia. Gempa berkekuatan 7,4 SR diiringi dengan tsunami menerjang Kota Palu, Donggala dan sekitarnya merenggut ribuan jiwa dan lebih dari ribuan lainnya luka berat. Hingga Sabtu (02/10/18) sore hari tercatat telah terjadi 215 gempa susulan dan hampir 16.000 lebih warga mengungsi<br><br>' +
                    'Melihat dan mendengar langsung kabar tersebut, Dewan Pengurus K2KFC menetapkan anggota K2KFC di Palu sebagai prioritas dan perlu dialokasikan bantuan sesegera mungkin.<br><br>' +
                    'Bantuan K2KFC Peduli Sosial diserahkan oleh M. Ridho Ananto – Senior Accounting Staff RSC Makassar kepada Mohammad Rizal (GA Officer dari RSC Makassar), di mana rumah yang bersangkutan hancur tersapu arus deras Tsunami dan hampir sebagian besar perlengkapan rumah tidak bisa lagi digunakan. Semoga bantuan K2KFC Peduli dapat bermanfaat untuk semua, sebagai wujud kepedulian kita kepada sesama anggota.',
            },
            {
                'id': '3',
                'title': 'K2KFC PEDULI BEASISWA',
                'image': 'assets/images/berita-csr-beasiswa.jpg',
                'description': 'Bantuan K2KFC Peduli Pendidikan diserahkan secara simbolis oleh Ade Halim – Koordinator K2KFC kepada perwakilan anggota yang memiliki kriteria anak berprestasi seperti Guntur Ganefo Putra – Security RSC Jakarta yang berturut-turut selama 5 tahun buku menerima dana beasiswa ini. Semoga bantuan K2KFC Peduli dapat bermanfaat untuk semua, sebagai wujud kepedulian kita kepada sesama anggota.',
            },
        ]

        function showDetailBerita(id) {
            let context = dataBerita.filter((e) => e.id == id);
            if (context.length > 0) {
                $('.title-news-detail').html(context[0].title);
                $('.description-news-detail').html(context[0].description);
                $(".image-news-detail").attr("src", context[0].image);
                $('#modalDetailBerita').modal('show');
            } else {
                alert('data tidak ditemukan');
            }
        }
    </script>
</body>

</html>