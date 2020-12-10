<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Produk - Simpanan Sukarela</title>
    <?php
    include('template/css_component.php')
    ?>

</head>

<body>
    <?php
    include('template/navbar.php')
    ?>
    <main>
        <div class="header-wrapper" style="background-image: url('assets/images/bg-header-sirela.jpg');">
        <h5 class="title-header-sirela">SIRELA</h5>
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-bottom:0 !important;">
                <li class="breadcrumb-item"><a href="produk-simpanan.php">SIMPANAN</a></li>
                <li class="breadcrumb-item active" aria-current="page">SIMPANAN SUKARELA</li>
            </ol>
        </div>
        <section class="content-wrapper" style="padding: 3em 0 0 0;">
            <div class="container">
                <img src="assets/images/image-information-product.PNG" class="image-header-product-detail">
                <div class="descrition-product-detail mt-4">
                    Simpanan Sukarela a tau biasa disingkat Sirela merupakan tabungan anggota yang besarannya
                    tergantung kemampuan anggota dengan besaran jasa yang telah disepakati dan dituangkan dalam
                    Surat Edaran Pengurus. <br>
                    <!-- <ul style="padding-bottom:0 !important;margin-bottom:0 !important;">
                        <li>Untuk level crew sebesar Rp 75.000,- dan </li>
                        <li>Level staff sebesar Rp 150.000, - </li>
                    </ul>                     -->
                </div>
                <img src="assets/images/image-syarat-product.PNG" class="image-header-product-detail mt-5">
                <div class="descrition-product-detail mt-4">
                    <ul style="padding-bottom:0 !important;padding-left:15px !important;margin-bottom:0 !important;">
                        <li>Penyetoran dana simpanan sukarela selanjutnya dipotong melalui gaji anggota setiap

                            bulannya, sebagaimana kesepakatan pada saat pengisian form di awal. </li>
                        <li>Pembayaran jasa simpanan sukarela akan dikredit langsung kedalam simpanan sukarela

                            anggota setiap bulannya. </li>
                        <li>Penetapan suku bunga simpanan sukarela ter gantung oleh kebijaksanaan Pengurus melalui

                            Surat Edaran yang diumumkan.</li>
                        <li>Simpanan sukarela ini bebas biaya administrasi bulanan dan dapat dicairkan sewaktu -waktu

                            selambat-lambatnya 2 (dua) hari kerja cair. Adapun untuk biaya penutupan simpanan sukarela

                            hanya dikenakan biaya penggantian bilyet giro sebesar Rp 4.000, -. </li>
                        <li> Sesuai dengan PP No. 15 Tahun 2009 dan Peraturan Menteri Keuangan No. PMK 112/PMK.03/2010

                            Maka terhadap bunga simpanan yang melebihi Rp 240.000, - per bulan akan dikenakan pajak PPh
                            Final sebesa r 10% dari jumlah bruto bunga.</li>
                    </ul>
                    <br>
                    <b>Tabel Imbalan Jasa (Bunga) : </b>
                    <div class="table-responsive mt-4 mb-4">
                        <table class="table table-custom table-bordered" style="max-width:600px;">
                            <thead>
                                <tr>
                                    <th class="text-center">Saldo</th>
                                    <th class="text-center">Bunga per Tahun Setara (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        < Rp 500.000 </td> <td>0,00% p.a.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        >= Rp 500.000 - < Rp 1.000.000 </td> <td>0,25% p.a.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        >= Rp 1.000.000 - < Rp 2.500.000 </td> <td>0,50% p.a.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        >= Rp 2.500.000 - < Rp 5.000.000  </td> <td>0,75% p.a.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        >= Rp 10.000.000 - < Rp 20.000.000  </td> <td>1,25% p.a.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        >= Rp 20.000.000   </td>
                                    <td>1,50% p.a.
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