<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Produk - Simpanan Berjangka</title>
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
            style="background-image: url('assets/images/thumbnail-produk-simpanan-berjangka.jpg');">
            <h5 class="title-header-sijangka">SIJANGKA</h5>
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-bottom:0 !important;">
                <li class="breadcrumb-item"><a href="produk-simpanan.php">SIMPANAN</a></li>
                <li class="breadcrumb-item active" aria-current="page">SIMPANAN BERJANGKA</li>
            </ol>
        </div>
        <section class="content-wrapper" style="padding: 3em 0 0 0;">
            <div class="container">
                <img src="assets/images/image-information-product.PNG" class="image-header-product-detail">
                <div class="descrition-product-detail mt-4">
                    Simpanan Ber jangka atau biasa disingkat Sijangka merupakan simpanan berjangka yang
                    penarikannya hanya dapat dilakukan dalam jangka waktu tertentu menurut perjanjian antara
                    anggota terkait dan Koperasi. <br>
                </div>
                <img src="assets/images/image-syarat-product.PNG" class="image-header-product-detail mt-5">
                <div class="descrition-product-detail mt-4">
                    <ul style="padding-bottom:0 !important;padding-left:15px !important;margin-bottom:0 !important;">
                        <li>Jumlah minimum penempatan simpanan berjangk a adalah Rp 5.000.000 (lima juta rupiah)

                            dengan nilai kelipatan Rp 1.000.000 (satu juta rupiah). </li>
                        <li>Bukti kepemilik an Simpanan Berjangka adalah Bilyet Simpanan Berjangka yang diterbitkan

                            dan ditandatangani oleh Pengurus Koperasi. </li>
                        <li>Simpanan berjangka ini hanya dapat dibayarkan kembali pada saat jatuh tempo dengan

                            menunjukkan dan mengembalikan bilyet Simpanan Berjangka as li yang telah ditandatangani

                            pemberi simpanan (anggota) di atas materai secukupnya dan diserahkan kepada PIC

                            Simpanan Berjangka K2KFC selambat -lambatnya 2 (dua) hari kerja cair.</li>
                        <li>Apabila simpanan berjangka ini dicairkan sebelum tanggal jatuh tempo, maka aka n dikenakan

                            finalti sebesar 0.5% dari akumulasi nilai yang diinvestasikan dan sisa perhitungan bunga

                            bulanan akan dikalkukasikan secara harian. </li>
                        <li> Sesuai dengan PP No. 15 Tahun 2009 dan Peraturan Menteri Keuangan No. PMK 112/PMK.03/2010

                            Maka terhadap bunga simpanan yang melebihi Rp 240.000, - per bulan akan dikenakan pajak PPh
                            Final sebesar 10% dari jumlah bruto bunga. </li>
                    </ul><br>
                    <b>Cara Pembayaran Bunga : </b>
                    <ul style="padding-bottom:0 !important;margin-bottom:0 !important;">
                        <li>Bunga menabah nominal (Automatic Roll Over/AR O) </li>
                        <li>Bunga ditransfer setiap bulan (mohon dilengkapi jika memilih jenis pembayran bunga ini)
                        </li>
                    </ul>
                    <br>
                    <b>Tabel Imbalan Jasa (Bunga) : </b>
                    <div class="table-responsive mt-4 mb-4">
                        <table class="table table-custom table-bordered" style="max-width:500px;">
                            <thead>
                                <tr>
                                    <th class="text-center">Jangka Waktu</th>
                                    <th class="text-center">Bunga per Tahun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        3 Bulan </td>
                                    <td>5,5% p. a
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6 Bulan </td>
                                    <td>6,0% p. a
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        12 Bulan </td>
                                    <td>6,5% p. a
                                    </td>
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