<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Struktur Manajemen</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>
    <main>
        <div class="header-wrapper" style="background-image: url('assets/images/bg-header-struktur-manajemen.jpg');">
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-bottom:0 !important;">
                <li class="breadcrumb-item"><a href="tentang-kami.php">TENTANG KAMI</a></li>
                <li class="breadcrumb-item active" aria-current="page">STRUKTUR MANAJEMEN</li>
            </ol>
        </div>
        <section class="content-wrapper" style="padding: 0 0 3em 0;">
            <div class="header-group-administrator text-center">
                Dewan Pengurus K2KFC
            </div>
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="person-administrator-element c-pointer" onclick="showDetailPengurus('1')">
                            <img src="assets/images/image-israwan.jpg" class="person-administrator-image">
                            <div class="person-administrator-description">
                                <h5>Ketua Umum</h5>
                                <p>Ir. H. Israwan Santoso</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="person-administrator-element c-pointer" onclick="showDetailPengurus('2')">
                            <img src="assets/images/image-ahda.jpg" class="person-administrator-image">
                            <div class="person-administrator-description">
                                <h5>Wakil Ketua</h5>
                                <p>Ahda Faradisa, S.Pi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="person-administrator-element c-pointer" onclick="showDetailPengurus('3')">
                            <img src="assets/images/image-novira.jpg" class="person-administrator-image">
                            <div class="person-administrator-description">
                                <h5>Bendahara</h5>
                                <p>Novira Mayangsari, S.E</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="person-administrator-element c-pointer" onclick="showDetailPengurus('4')">
                            <img src="assets/images/image-efriyanto.jpg" class="person-administrator-image">
                            <div class="person-administrator-description">
                                <h5>Sekertaris</h5>
                                <p>Efriyanto, S.Kom</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-group-administrator text-center">
                Dewan Pengawas K2KFC
            </div>
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="person-administrator-element c-pointer" onclick="showDetailPengurus('5')">
                            <img src="assets/images/image-maman.jpg" class="person-administrator-image">
                            <div class="person-administrator-description">
                                <h5>Ketua Pengawas</h5>
                                <p>Drs. Maman Sudarisman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="person-administrator-element c-pointer" onclick="showDetailPengurus('6')">
                            <img src="assets/images/image-sri-rahayu.jpg" class="person-administrator-image">
                            <div class="person-administrator-description">
                                <h5>Anggota Pengawas I</h5>
                                <p>Sri Rahayu Purwaningsih</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="person-administrator-element c-pointer" onclick="showDetailPengurus('7')">
                            <img src="assets/images/image-zainal.jpg" class="person-administrator-image">
                            <div class="person-administrator-description">
                                <h5>Anggota Pengawas II</h5>
                                <p>Zaenal Abidin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-group-administrator text-center">
                Dewan Pengawas Syariah
            </div>
            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="person-administrator-element c-pointer" onclick="showDetailPengurus('8')">
                            <img src="assets/images/image-fikry.jpg" class="person-administrator-image">
                            <div class="person-administrator-description">
                                <h5>Ketua Pengawas Syariah</h5>
                                <p>Fikry Rachmat S.E.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="person-administrator-element c-pointer" onclick="showDetailPengurus('9')">
                            <img src="assets/images/image-dipo.jpg" class="person-administrator-image">
                            <div class="person-administrator-description">
                                <h5>Anggota Pengawas Syariah</h5>
                                <p>Dipo Yuwuno, S.Par</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-group-administrator text-center">
                Struktur Manajemen
            </div>
            <div class="d-flex justify-content-center">
                <img src="assets/images/image-manajemen.jpeg" style="max-width:100%;">
            </div>
        </section>
    </main>

    <div class="modal fade" id="modalDetailPengurus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-custom-radius">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <img src="assets/images/image-israwan.jpg" class="image-administrator-detail">
                    <h5 class="title-administrator-detail">Ir. H. Israwan Santoso</h5>
                    <div class="utils-administrator-detail"></div>
                    <div class="position-administrator-detail text-center">Ketua Umum</div>
                    <div class="description-administrator-detail description-admin-1 mt-4">Beliau memperoleh gelar
                        Sarjana Pertanian dari
                        Fakultas Pertanian - Institut Pertanian Bogor di tahun 1993. Bapak H. Israwan Tri Santoso
                        bergabung di Koperasi Karyawan Kentucky Fried Chicken sejak tahun 2011 dan menempati berbagai
                        posisi kunci :
                    </div>
                    <ul class="list-administrator-detail mt-2">
                        <li>* Ketua Pengawas dari 2011 - 2014</li>
                        <li>* Ketua Pengurus dari 2017 - 2020</li>
                    </ul>
                    <div class="description-administrator-detail description-admin-2 mt-2 mb-3">Beliau berusia 49 tahun
                        per 31 Desember 2019
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
        var dataPengurus = [{
                'id': '1',
                'image': 'assets/images/image-israwan.jpg',
                'name': 'Ir. H. Israwan Tri Santoso',
                'position': 'KETUA UMUM',
                'description1': 'Beliau memperoleh gelar Sarjana Pertanian dari Fakultas Pertanian - Institut Pertanian Bogor di tahun 1993. Bapak H. Israwan Tri Santoso bergabung di Koperasi Karyawan Kentucky Fried Chicken sejak tahun 2011 dan menempati berbagai posisi kunci :',
                'list': [
                    '* Ketua Pengawas dari 2011 - 2014',
                    '* Ketua Pengurus dari 2017 - 2020',
                ],
                'description2': 'Beliau berusia 49 tahun per 31 Desember 2019',
            },
            {
                'id': '2',
                'image': 'assets/images/image-ahda.jpg',
                'name': 'Ahda Faradisa, S. Pi.',
                'position': 'WAKIL KETUA',
                'description1': 'Beliau memperoleh gelar Sarjana Perikanan dari Fakultas Perikanan dan Ilmu Kelautan - Institut Pertanian Bogor di tahun 2005. Bapak Ahda Faradisa bergabung di Koperasi Karyawan Kentucky Fried Chicken sejak tahun 2017 dan menempati posisi kunci :',
                'list': [
                    '* Wakil Ketua dari 2017 - 2020',
                ],
                'description2': 'Beliau berusia 37 tahun per 31 Desember 2019',
            },
            {
                'id': '3',
                'image': 'assets/images/image-novira.jpg',
                'name': 'Novira Mayang Sari, S. E.',
                'position': 'BENDAHARA',
                'description1': 'Beliau memperoleh gelar Sarjana Ekonomi dari Fakultas Ekonomi - Sekolah Tinggi Ilmu Ekonomi (STIE) Indonesia 1989. Ibu Novira Mayang Sari bergabung di Koperasi Karyawan Kentucky Fried Chicken sejak tahun 1999 dan menempati berbagai posisi kunci :',
                'list': [
                    '* Kasir dari 1999 - 2003',
                    '* Bendahara dari 2003 - 2005',
                    '* Bendahara dari 2005 - 2008',
                    '* Bendahara dari 2008 - 2011',
                    '* Bendahara dari 2011 - 2014',
                    '* Bendahara dari 2014 - 2017',
                    '* Bendahara dari 2017 - 2020',
                ],
                'description2': 'Beliau berusia 52 tahun per 31 Desember 2019',
            },
            {
                'id': '4',
                'image': 'assets/images/image-efriyanto.jpg',
                'name': 'Efriyanto, S. Kom.',
                'position': 'SEKRETARIS',
                'description1': 'Beliau memperoleh gelar Sarjana Komputer dari Fakultas Manajemen dan Informatika - Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK) Gunadarma di tahun 1995. Bapak Efriyanto bergabung di Koperasi Karyawan Kentucky Fried Chicken sejak tahun 2017 dan menempati posisi kunci, yaitu : ',
                'list': [
                    '* Sekretaris 2017 - 2020',
                ],
                'description2': 'Beliau berusia 46 tahun per 31 Desember 2019',
            },
            {
                'id': '5',
                'image': 'assets/images/image-maman.jpg',
                'name': 'Drs. Maman Sudarisman',
                'position': 'KETUA PENGAWAS',
                'description1': 'Beliau memperoleh gelar Sarjana Pendidikan Geografi dari Institut Keguruan dan Ilmu Pendidikan (IKIP) Jakarta di tahun 1991. Bapak Maman Sudarisman bergabung di Koperasi Karyawan Kentucky Fried Chicken sejak tahun 2008 dan menempati berbagai posisi kunci :',
                'list': [
                    '* Anggota Pengawas dari 2008 - 2011',
                    '* Ketua Pengurus dari 2011 - 2014',
                    '* Ketua Pengurus dari 2014 - 2017',
                    '* Ketua Pengawas dari 2017 - 2020',
                ],
                'description2': 'Beliau berusia 53 tahun per 31 Desember 2019',
            },
            {
                'id': '6',
                'image': 'assets/images/image-sri-rahayu.jpg',
                'name': 'Sri Rahayu Purwaningsih',
                'position': 'ANGGOTA PENGAWAS I',
                'description1': 'Beliau lulusan dari Sekolah Menengah Umum (SMU) Negeri 20 Jakarta di tahun 1990. Ibu Sri Rahayu Purwaningsih bergabung di Koperasi Karyawan Kentucky Fried Chicken sejak tahun 2011 dan menempati berbagai posisi kunci : ',
                'list': [
                    '* Anggota Pengawas I dari 2011 - 2012',
                    '* Anggota Pengawas I dari 2019 - 2022 (Upaya Banding)',
                ],
                'description2': 'Beliau berusia 48 tahun per 31 Desember 2020',
            },
            {
                'id': '7',
                'image': 'assets/images/image-zainal.jpg',
                'name': 'Zaenal Abidin',
                'position': 'ANGGOTA PENGAWAS II',
                'description1': 'Beliau lulusan dari Sekolah Menengah Atas (SMA) Negeri 38 Jakarta di tahun 1987. Bapak Zaenal Abidin bergabung di Koperasi Karyawan Kentucky Fried Chicken sejak tahun 2017 dan menempati berbagai posisi kunci :',
                'list': [
                    '* Anggota Pengawas II dari 2017 - 2018',
                    '* Anggota Pengawas I dari 2018 - 2020',
                ],
                'description2': 'Beliau berusia 44 tahun per 31 Desember 2019',
            },
            {
                'id': '8',
                'image': 'assets/images/image-fikry.jpg',
                'name': 'Fikry Rachmat S. E.',
                'position': 'KETUA PENGAWAS SYARIAH',
                'description1': 'Beliau memperoleh gelar Sarjana Ekonomi dari Fakultas Ekonomi - Sekolah Tinggi Ilmu Ekonomi (STIE) Indonesia di tahun 1999 . Adapun pada awal tahun 2019 ini, beliau telah mendapatkan Sertifikasi Pengawas Syariah dari Dewan Syariah Nasional Majelis Ulama Indonesia (DSN-MUI). Bapak Fikry Rachmat bergabung di Koperasi Karyawan Kentucky Fried Chicken sejak tahun 2014 dan menempati berbagai posisi kunci : ',
                'list': [
                    '* Sekretaris dari 2014 - 2017',
                    '* Wakil Ketua pada tahun 2017',
                    '* Ketua Pengawas Syariah dari 2018 - 2020',
                ],
                'description2': 'Beliau berusia 44 tahun per 31 Desember 2019',
            },
            {
                'id': '9',
                'image': 'assets/images/image-dipo.jpg',
                'name': 'Dipo Yuwono, S. Par.',
                'position': 'ANGGOTA PENGAWAS SYARIAH',
                'description1': 'Beliau memperoleh gelar Sarjana Perhotelan dari Fakultas Pariwisata - Pusat Pendidikan Perhotelan dan Pariwisata Bali di tahun 1990. Bapak Dipo Yuwono bergabung di Koperasi Karyawan Kentucky Fried Chicken sejak tahun 2018 dan menempati posisi kunci :',
                'list': [
                    '* Anggota Pengawas Syariah dari 2018 - 2020',
                ],
                'description2': 'Beliau berusia 50 tahun per 31 Desember 2019',
            },
        ]

        function showDetailPengurus(id) {
            let context = dataPengurus.filter((e) => e.id == id);
            if (context.length > 0) {
                $('.title-administrator-detail').html(context[0].name);
                $('.position-administrator-detail').html(context[0].position);
                $(".image-administrator-detail").attr("src", context[0].image);
                $('.description-admin-1').html(context[0].description1);
                $('.description-admin-2').html(context[0].description2);
                let stringList = '';
                $.each(context[0].list, function (index, value) {
                    stringList += '<li>' + value + '</li>';
                });
                $('.list-administrator-detail').html(stringList);

                $('#modalDetailPengurus').modal('show');
            } else {
                alert('data tidak ditemukan');
            }

        }
    </script>
</body>

</html>