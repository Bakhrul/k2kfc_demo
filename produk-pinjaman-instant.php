<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Pinjaman - Pinjaman Instant</title>
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
            style="background-image: url('assets/images/thumbnail-produk-pinjaman-instant.jpg');">
            <h5 class="title-header-pinjaman-instant">PINJAMAN INSTANT</h5>
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-bottom:0 !important;">
                <li class="breadcrumb-item"><a href="produk-pinjaman.php">PINJAMAN</a></li>
                <li class="breadcrumb-item active" aria-current="page">PINJAMAN INSTANT</li>
            </ol>
        </div>
        <section class="content-wrapper" style="padding: 3em 0 0 0;">
            <div class="container">
                <img src="assets/images/image-information-product.PNG" class="image-header-product-detail">
                <div class="descrition-product-detail mt-4">
                    Pinjaman yang diperuntukkan bagi level Crew dan Staff, berjangka waktu 2 bulan dengan tingkat

                    suku bunga tetap dikumulatifkan, dimana persentase bunga sebesar 2% p.m. flat. <br>
                </div>
                <img src="assets/images/image-syarat-product.PNG" class="image-header-product-detail mt-5">
                <div class="descrition-product-detail mt-4">
                    <ul style="padding-bottom:0 !important;padding-left:15px !important;margin-bottom:0 !important;">
                        <li>Lama keanggotaan minimal 5 bulan </li>
                        <li>Hanya diprioritaskan untuk anggota di wilayah Jabodetabek, karena pertimbangan cash flow

                            yang tidak cukup. </li>
                        <li>Pengajuan pinjaman instan dibuka pada tanggal 1 dan ditutup pada tanggal 15 setiap

                            bulannya. </li>
                        <li>Nominal pinjaman yang disetujui maksimal Rp 750.000 ,- untuk Crew dan Rp 1.500.000, - untuk

                            Staff. </li>
                        <li> Jika yang bersang kutan baru meminjam pinjaman di luar pengajuan ini, pinjaman instan tidak

                            dapat diberikan pada saat yang sama akan tetapi baru dapat diberikan setelah pinjaman

                            tersebut dipotong sebanyak 3 kali angsuran, guna pemerataan pinjaman untuk anggota

                            lainnya. </li>
                        <li>Dikenakan biaya administrasi giro sebesar Rp 4.000, - </li>
                    </ul><br>
                    <b>Tabel Kebijakan Nominal Pinjaman </b>
                    <div class="table-responsive mt-4 mb-4">
                        <table class="table table-custom table-bordered" style="max-width:600px;">
                            <thead>
                                <tr>
                                    <th class="text-center">Periode</th>
                                    <th class="text-center">Crew</th>
                                    <th class="text-center">Staff</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        2003 s.d. Maret 2013 </td>
                                    <td>Rp 300.000
                                    </td>
                                    <td>Rp 500.000 </td>
                                </tr>
                                <tr>
                                    <td>
                                        April 2013 s.d. Maret 2015 </td>
                                    <td>Rp 500.000
                                    </td>
                                    <td>Rp 1.000.000 </td>
                                </tr>
                                <tr>
                                    <td>
                                        April 2015 s.d. Sekarang </td>
                                    <td>Rp 750.000
                                    </td>
                                    <td>Rp 1.500.000 </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
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