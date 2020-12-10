<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman USPPS - Simpanan Biaya Pendidikan</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>
    <main>
        <div class="header-wrapper"
            style="background-image: url('assets/images/bg-header-uspps-simpanan-pendidikan.jpg');">
            <div class="title-header-sibidik">SIBIDIK</div>
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-bottom:0 !important;">
                <li class="breadcrumb-item"><a href="uspps-simpanan.php">SIMPANAN</a></li>
                <li class="breadcrumb-item active" aria-current="page">SIMPANAN BIAYA PENDIDIKAN</li>
            </ol>
        </div>
        <section class="content-wrapper" style="padding: 3em 0 0 0;">
            <div class="container">
                <img src="assets/images/image-information-product.PNG" class="image-header-product-detail">
                <div class="descrition-product-detail mt-4">
                    Merupakan simpanan sukarela anggota USPPS yang ditujukan untuk tabungan Pendidikan anak di masa yang
                    akan datang dan dapat diambil
                    sewaktu-waktu sesuai kebutuhan anggota.<br>
                    <b>Jangka waktu simpanan:</b><br>
                    Waktu yang ditetapkan selama 12, 18, 24 bulan dan lainnya<br>
                    <b>Nominal Penempatan:</b><br>
                    Nominal minimum penempatan mulai dari Rp 100.000,- sampai dengan Rp 500.000,- per bulan<br>
                    <b>Nisbah atau Bagi Hasil</b><br>
                    Konsep nisbah atau bagi hasil yang ditetapkan adalah sebesar 80:20 (USPPS : Anggota) dengan
                    pembayaran bagi hasil simpanan akan dikreditkan langsung kedalam Sibidik anggota setiap bulannya.
                    Berikut daftar bagi hasil per tahunnya :
                    <div class="table-responsive mt-4 mb-4">
                        <table class="table table-custom table-bordered" style="max-width:600px;">
                            <thead>
                                <tr>
                                    <th class="text-center">Saldo</th>
                                    <th class="text-center">Bagi Hasil per Tahun
                                        <br>(Setara %)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        < Rp 500.000</td> <td class="text-center">0,00% p.a.
                                    </td>
                                </tr>
                                <tr>
                                    <td>>= Rp 500.000 - < Rp 1.000.000</td> <td class="text-center">0,25% p.a.</td>
                                </tr>
                                <tr>
                                    <td>>= Rp 1.000.000 - < Rp 2.500.000</td> <td class="text-center">0,50% p.a.</td>
                                </tr>
                                <tr>
                                    <td>>= Rp 2.500.000 - < Rp 5.000.000</td> <td class="text-center">0,75% p.a.</td>
                                </tr>
                                <tr>
                                    <td>>= Rp 5.000.000 - < Rp 10.000.000</td> <td class="text-center">1,00% p.a.</td>
                                </tr>
                                <tr>
                                    <td>>= Rp 10.000.000 - < Rp 20.000.000</td> <td class="text-center">1,25% p.a.</td>
                                </tr>
                                <tr>
                                    <td>>= Rp 20.000.000 </td>
                                    <td class="text-center">1,50% p.a.</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <b>Biaya Administrasi</b>
                    <p></p>
                    <ul style="padding:0 !important;padding-left:15px !important;">
                        <li>Simpanan sukarela ini bebas biaya administrasi bulanan dan dapat dicairkan sewaktu-waktu
                            selambat-lambatnya 2 (dua) hari kerja cair.Adapun untuk biaya penutupan simpanan sukarela
                            hanya dikenakan biaya penggantian bilyet giro sebesar Rp 4.000,- </li>
                        <li>Sesuai dengan PP No. 15 Tahun 2009 dan Peraturan Menteri Keuangan No. PMK-112/PMK.03/2010
                            maka terhadap bunga simpanan yang melebihi Rp 240.000,- per bulan akan dikenakan pajak PPh
                            Final sebesar 10% dari jumlah bruto nisbah.
                    </ul>
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