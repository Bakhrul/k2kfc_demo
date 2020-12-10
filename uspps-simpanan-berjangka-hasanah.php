<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman USPPS - Simpanan Berjangka Hasanah</title>
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
            style="background-image: url('assets/images/bg-header-uspps-simpanan-berjangka.jpg');">
            <div class="title-header-siberkah">SIBERKAH</div>
        </div>
        <div aria-label="breadcrumb">
            <ol class="breadcrumb" style="margin-bottom:0 !important;">
                <li class="breadcrumb-item"><a href="uspps-simpanan.php">SIMPANAN</a></li>
                <li class="breadcrumb-item active" aria-current="page">SIMPANAN BERJANGKA HASANAH</li>
            </ol>
        </div>
        <section class="content-wrapper" style="padding: 3em 0 0 0;">
            <div class="container">
                <img src="assets/images/image-information-product.PNG" class="image-header-product-detail">
                <div class="descrition-product-detail mt-4">
                    Merupakan simpanan berjangka anggota USPPS dengan jangka waktu 3,6,12 bulan dengan konsep Nisbah
                    atau bagi hasil.<br>
                    <b>Nominal Penempatan Simpanan:</b><br>
                    Nominal minimum Rp 5.000.000 dengan kelipatan Rp 1.000.000<br>
                    <b>Nisbah atau Bagi Hasil</b><br>
                    Konsep nisbah atau bagi hasil yang ditetapkan adalah sebesar 80:20 (USPPS : Anggota) dilakukan
                    dengan 2 cara yaitu :<br>
                    *Nisbah menambah nominal (Automatic Roll Over/ARO)<br>
                    *Nisbah di transfer setiap bulan<br>
                    <b>Tabel Nisbah :</b><br>
                    <div class="table-responsive mt-4 mb-4">
                        <table class="table table-custom table-bordered" style="max-width:500px;">
                            <thead>
                                <tr>
                                    <th class="text-center">Jangka Waktu</th>
                                    <th class="text-center">Nisbah per Tahun</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        3 Bulan</td>
                                    <td class="text-center">5,5% p.a.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6 Bulan</td>
                                    <td class="text-center">6,0% p.a.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        12 Bulan</td>
                                    <td class="text-center">6,5% p.a.
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <b>Biaya Administrasi</b>
                    <p></p>
                    <ul style="padding:0 !important;padding-left:15px !important;">
                        <li>Produk Simpanan ini bebas biaya Administrasi bulanan dan adapun untuk biaya pentutupan
                            simpanan hanya dikenakan biaya pengganti bilyet giro sebesar Rp 4.000,-</li>
                        <li>Sesuai dengan PP No. 15 Tahun 2009 dan Peraturan Menteri Keuangan No. PMK-112/PMK.03/2010
                            maka terhadap bunga simpanan yang melebihi Rp 240.000,- per bulan akan dikenakan pajak PPh
                            Final sebesar 10% dari jumlah bruto nisbah.</li>
                        <li>Apabila simpanan ini dicairkan sebelum tanggal jatuh tempo, maka akan dikenakan penalti
                            sebesar 0,5% dari akumulasi nilai yang diinvestasikan dan sisa perhitungan nisbah bulanan
                            akan diakumulasikan secara harian.</li>
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