<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Berita Aktivitas</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>
    <main>
        <div class="header-wrapper" style="background-image: url('assets/images/bg-header-berita-aktivitas.jpg');">
            <h5 class="title-news-aktivitas-header">Aktivitas Bersama Kami</h5>
            <p class="description-news-aktivitas-header">Menjalin Kebersamaan Bersama Kami</p>
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="berita.php">BERITA</a></li>
                <li class="breadcrumb-item active" aria-current="page">AKTIVITAS</li>
            </ol>
        </div>
        <section class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('1')">
                            <img src="assets/images/berita-aktivitas-iduladha-jakarta.jpg" class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">Hari Raya Idul Adha Jakarta</h5>
                            </div>
                            <div class="single-news-description text-center">Memperingati Hari Raya Idul Adha 1437 H,
                                Jakarta 12 September 2016</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('2')">
                            <img src="assets/images/berita-aktivitas-iduladha-medan.png" class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">Hari Raya Idul Adha Medan</h5>
                            </div>
                            <div class="single-news-description text-center">Memperingati Hari Raya Idul Adha 1437 H,
                                Medan 12 September 2016</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('3')">
                            <img src="assets/images/berita-aktivitas-natal-jakarta.jpg" class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">Perayaan Natal dan Tahun Baru, Jakarta</h5>
                            </div>
                            <div class="single-news-description text-center">Memperingati Natal dan Tahun Baru Jakarta
                                Harmony Christmas</div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('4')">
                            <img src="assets/images/berita-aktivitas-natal-medan.jpg" class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">Perayaan Natal dan Tahun Baru, Medan</h5>
                            </div>
                            <div class="single-news-description text-center">Memperingati Natal dan Tahun Baru Medan
                                Harmony Christmas</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('5')">
                            <img src="assets/images/berita-aktivitas-halalbihalak-jakarta.jpg"
                                class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">Acara Halal Bihalal Jakarta</h5>
                            </div>
                            <div class="single-news-description text-center">Meningkatkan Silahturahim bersama Menara
                                Hijau, 13 Juli 2016</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('6')">
                            <img src="assets/images/berita-aktivitas-maulid.jpg" class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">Memperingati Maulid Nabi Muhammad SAW</h5>
                            </div>
                            <div class="single-news-description text-center">Memperingati Perayaan Maulid Nabi Muhammad
                                SAW, Jakarta</div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('7')">
                            <img src="assets/images/berita-aktivitas-seminar-persiapan.jpg" class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">Seminar Masa Persiapan Pensiun Anggota K2KFC
                                </h5>
                            </div>
                            <div class="single-news-description text-center">Seminar masa Persiapan Pensiun Anggota
                                K2KFC, Jakarta</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('8')">
                            <img src="assets/images/berita-aktivitas-pelatihan-uspps.jpg" class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">Pelatihan USPPS dan Ujian Sertifikasi oleh DSN
                                    - MUI</h5>
                            </div>
                            <div class="single-news-description text-center">Pelatihan USPPS dan Ujian Sertifikasi oleh
                                Dewan Syariah Nasional dan Majelis Ulama Indonesia</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('9')">
                            <img src="assets/images/berita-aktivitas-pelatihan-koperasi.jpg" class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">Pelatihan Koperasi Syariah</h5>
                            </div>
                            <div class="single-news-description text-center">Pelatihan Koperasi Syariah bersama Wakil
                                Ketua Umum MUI, 25 September 2018</div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('10')">
                            <img src="assets/images/berita-aktivitas-umroh1.jpg" class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">Keberangkatan Umroh Tahap I</h5>
                            </div>
                            <div class="single-news-description text-center">Keberangkatan Jamaah Ibadah Umroh 26
                                Februari - 07 Maret 2018</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-5">
                        <div class="single-news-group c-pointer" onclick="showDetailBerita('11')">
                            <img src="assets/images/berita-aktivitas-umroh2.jpg" class="single-news-image">
                            <div style="min-height:70px">
                                <h5 class="single-news-title text-center">Keberangkatan Umroh Tahap II</h5>
                            </div>
                            <div class="single-news-description text-center">Keberangkatan Jamaah Ibadah Umroh 12
                                Januari 2019 - 19 Januari 2019</div>
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
                    <div class="position-news-detail text-center">Berita Aktivitas</div>
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
                'title': 'K2KFC PEDULI SOSIAL HARI RAYA IDUL ADHA JAKARTA',
                'image': 'assets/images/berita-aktivitas-iduladha-jakarta.jpg',
                'description': 'Senin, 12 September 2016, dalam rangka merayakan hari Raya Idul Adha 1437 H, selepas sholat ied, pada pukul 09.30 WIT K2KFC Bersama Keluarga Besar Forum Silaturahmi PT Fastfood Indonesia, Tbk mengadakan kegiatan penyembelihan hewan Qurban bertempat di halaman RSC Ciracas, Hewan yang di qurbankan merupakan sumbangan dari K2KFC. Penyembelihan hewan kurban ini bermaksud untuk meningkatkan kepedulian kita kepada sesama dan meningkatkan iman dan takwa kita kepada Allah SWT.',
            },
            {
                'id': '2',
                'title': 'K2KFC PEDULI SOSIAL HARI RAYA IDUL ADHA MEDAN',
                'image': 'assets/images/berita-aktivitas-iduladha-medan.png',
                'description': 'Rabu, 22 Agustus 2018, dalam rangka merayakan hari Raya Idul Adha 1439 H, selepas sholat ied, pada pukul 10.30 WIT K2KFC Bersama Keluarga Besar Forum Silaturahmi PT Fastfood Indonesia, Tbk wilayah Medan mengadakan kegiatan penyembelihan hewan Qurban bertempat di halaman KFC Mataram Medan, Hewan yang di qurbankan merupakan sumbangan dari K2KFC. Penyembelihan hewan kurban ini bermaksud untuk meningkatkan kepedulian kita kepada sesama dan meningkatkan iman dan takwa kita kepada Allah SWT.',

            },
            {
                'id': '3',
                'title': 'K2KFC PEDULI SOSIAL HARI RAYA NATAL JAKARTA',
                'image': 'assets/images/berita-aktivitas-natal-jakarta.jpg',
                'description': 'Selasa, 25 Desember 2018, dalam rangka merayakan Hari Raya Natal, K2KFC telah mengalokasikan dananya guna mensukseskan acara ini. Semoga Natal menjadi pembawa cinta kasih, damai, bahagia dan terang bagi Dunia (Panitia Natal). Perayaan Natal di lingkungan RSC Jakarta digelar di Gedung Smesco Convention Hall, Pancoran, Jakarta Selatan.',
            },
            {
                'id': '4',
                'title': 'K2KFC PEDULI SOSIAL HARI RAYA NATAL MEDAN',
                'image': 'assets/images/berita-aktivitas-natal-medan.jpg',
                'description': 'Selasa, 25 Desember 2018, dalam rangka merayakan Hari Raya Natal, K2KFC telah mengalokasikan dananya guna mensukseskan acara ini. Semoga Natal menjadikan dunia ini selalu dipenuhi dengan kehangatan dan cinta kasih. Selamat Natal dan Tuhan memberkati kita semua (Manaek PS). Perayaan Natal di lingkungan RSC Medan digelar di Mutiara Suara Nafiri, Medan.',
            },
            {
                'id': '5',
                'title': 'K2KFC PEDULI SOSIAL HARI RAYA IDUL FITRI',
                'image': 'assets/images/berita-aktivitas-halalbihalak-jakarta.jpg',
                'description': 'Jumat, 13 Juli 2018, dalam rangka merayakan Hari Raya idul Fitri, K2KFC telah mengalokasikan dananya guna mensukseskan acara ini. Dengan Semangat Fitri Semoga memperkokoh kesatuan dan memperkuat tali persaudaraan antara kita semua. Perayaan Halal Bihalal di lingkungan RSC Jakarta digelar di Gedung Menara Hijau, Jakarta Selatan.',

            },
            {
                'id': '6',
                'title': 'K2KFC PEDULI SOSIAL MAULID NABI MUHAMMAD SAW',
                'image': 'assets/images/berita-aktivitas-maulid.jpg',
                'description': 'Jumat, 14 Desember 2016, dalam rangka merayakan Hari Lahirnya Nabi Besar Muhammad SAW, K2KFC telah mengalokasikan dananya guna mensukseskan acara ini. Dengan memperingati Maulid Nabi Muhammad SAW kita bisa mengingat kembali kisah perjuangan Rasulullah. Dari Kisah tersebut, setiap orang diharapkan dapat meneladani kepribadian Nabi Muhammad SAW. perayaan Halal Bihalal di lingkungan RSC Ciracas digelar di Halaman Parkir RSC Ciracas, Jakarta Selatan.',
            },
            {
                'id': '7',
                'title': 'Seminar Masa Persiapan Pensiun Anggota K2KFC',
                'image': 'assets/images/berita-aktivitas-seminar-persiapan.jpg',
                'description': 'Mengacu pada amanat Rapat Anggota Tahunan (RAT) ke- XIX Tahun Buku 2017 yang mengusulkan untuk mengadakan Seminar MPP bagi anggota K2KFC yang memasuki usia pensiun agar diberikan pelatihan khusus dalam berwirausaha dan mencarikan alternatif usaha yang akan digeluti kedepannya.<br><br>' +
                    'Berangkat dari situ, pada tanggal 07 November 2018 Dewan Pengurus K2KFC bekerjasama dengan pemateri berpengalaman yang merupakan salah satu pendiri D’Besto Chicken dan beberapa franchise lainnya yakni Bapak Suwiryo Tjokro Kardoyo yang juga merupakan pensiunan PT Fast Food Indonesia, Tbk telah mengadakan seminar MPP di RSC Ciracas, dengan materi yang cukup komprehensif dan menarik meliputi perencanaan keuangan, sosialisasi bisnis dan pengenalan investasi. Seminar MPP ini dihadiri oleh ± 40 Anggota dan sebagai langkah awal, seminar pembuka ini cukup diminati oleh anggota tersebut.',
            },
            {
                'id': '8',
                'title': 'Pelatihan USPPS dan Ujian Sertifikasi oleh DSN - MUI',
                'image': 'assets/images/berita-aktivitas-pelatihan-uspps.jpg',
                'description': 'Mengacu pada Peraturan Menteri Koperasi dan Usaha Kecil dan Menengah RI Nomor 16/Per/M.KUKM/IX/2015 yang mengharuskan 50% dari Dewan Pengawas Syariah harus memiliki sertifikasi DPS dari DSN-MUI, maka pada tanggal 10-12 Januari 2019 K2KFC mengirimkan Bapak Fikri Rachmat selaku Ketua DPS untuk mengikuti pelatihan dan ujian sertifikasi tersebut. Dan puji syukur Bapak Fikri Rachmat dinyatakan lulus oleh DSN-MUI dengan predikat Amat Baik sesuai ketetapan surat No. U-019/DSN-MUI Institute/II/2019 tertanggal 04 Februari 2019.',
            },
            {
                'id': '9',
                'title': 'Pelatihan Koperasi Syariah',
                'image': 'assets/images/berita-aktivitas-pelatihan-koperasi.jpg',
                'description': 'Sebagai bentuk keseriusan Dewan Pengurus K2KFC dalam membentuk dan mengembangkan Unit Simpan Pinjam dan Pembiayaan Syariah, pada tanggal 25 September 2018 K2KFC telah mengirimkan Dewan Pengawas Syariah, Pengelola dan Pengurus untuk mengikuti pelatihan Koperasi Syariah secara menyeluruh. Pelatihan ini mengikutsertakan Wakil Ketua Umum Pusat Majelis Ulama Indonesia (MUI) yakni Prof. DR. KH. Muhammad Sirajuddin Syamsudin, M.A. dan banyak pengisi acara lainnya yang sangat berpengalaman di bidangnya. Seminar ini dihadiri oleh Koperasi seluruh Indonesia, sehingga momen seminar sangat efektif sekali untuk bertukar informasi, gagasan maupun pemikiran terhadap kemajuan koperasi kedepannya.',
            },
            {
                'id': '10',
                'title': 'Keberangkatan Umroh Tahap I',
                'image': 'assets/images/berita-aktivitas-umroh1.jpg',
                'description': 'Alhamdulilah, K2KFC telah memberangkatkan jama’ah ibadah umroh pertama di tahun buku 2018 sebanyak 9 orang. Keberangkatan dimulai pada tanggal 26 Februari 2018 dan diakhiri pada tanggal 07 Maret 2018.',
            },
            {
                'id': '11',
                'title': 'Keberangkatan Umroh Tahap II',
                'image': 'assets/images/berita-aktivitas-umroh2.jpg',
                'description': 'Alhamdulilah, untuk kedua kalinya K2KFC telah memberangkatkan 5 orang pada semester pertama tahun buku 2019. Keberangkatan dimulai pada tanggal 12 Januari 2019 dan diakhiri pada tanggal 19 Januari 2019.',
            }
        ];

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