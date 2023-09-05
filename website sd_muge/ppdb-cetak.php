<?php require_once "admin/config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran Siswa Baru SD Muhammadiyah Bojonggede</title>
</head>
<style>
    .rangkasurat {
        width: 980px;
        height: 225px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
    }
    table {
        border-bottom: 5px;
        solid: #000;
        padding: 2px;
    }
    .tengah {
        text-align: center;
        line-height: 5px;
    }
</style>
<body>
    <div class="rangkasurat">
        <table width="100%">
            <tr>
                <td><img src="images/muge.png" alt="" width="200px"></td>
                <td class="tengah">
                    <h4>MAJELIS PENDIDIKAN DASAR DAN MENENGAH</h4>
                    <h4>PIMPINAN DAERAH MUHAMMADIYAH JAKARTA SELATAN</h4>
                    <h2>SEKOLAH DASAR MUHAMMADIYAH BOJONGGEDE</h2>
                    <h4>Jl. Merapi II Blok GX No. 13 Desa Bojonggede Kec. Bojonggede, Kab. Bogor 16320</h4>
                    <h3>TERAKREDITASI A (AMAT BAIK)</h3>
                    <p>Website: sdmuhammadiyahbojonggede.sch.id Email: sdmuhammadiyahbojonggede@gmail.com</p>
                    <p>NPSN: 20201337   &nbsp;&nbsp;&nbsp;   NSS: 101020506061   &nbsp;&nbsp;&nbsp; Telp. &#9742 (021) 8784222</p>
                </td>
            </tr>
            <tr>
                <td colspan="7" style="height: 5px;">
                    <hr style="margin-bottom: 2px; margin-left: -5px; sizes="10" color="grey">
                </td>
            </tr>
        </table>
    </div>
    <div style="text-align: center">
        <h1 style="margin-bottom: -15px;">Bukti Pendaftaran Siswa Baru</h1>
        <h2 style="margin-bottom: 15px;">SD Muhammadiyah Bojonggede</h2>
    </div>
    <table >
        <thead>
            <?php
                $peserta = mysqli_query($koneksi, "SELECT * FROM tbl_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."'");
                while ($dataPeserta = mysqli_fetch_array($peserta)) { ?>
            <tr>
                <td><h2>Data Siswa Baru</h2></td>
            </tr>
            <tr style="height: 35px;">
                <td style="width: 250px;">Kode Pendaftaran</td>
                <td>:</td>
                <td align="left"><?= $dataPeserta['id_pendaftaran'] ?></td>
            </tr>
            <tr style="height: 35px;">
                <td style="width: 250px;">Tahun Ajaran</td>
                <td>:</td>
                <td align="left"><?= $dataPeserta['th_ajaran'] ?></td>
            </tr>
            <tr style="height: 35px;">
                <td style="width: 250px;">Nama Lengkap Siswa/i</td>
                <td>:</td>
                <td align="left"><?= $dataPeserta['nama_peserta'] ?></td>
            </tr>
            <tr style="height: 35px;">
                <td style="width: 250px;">Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td align="left"><?= $dataPeserta['tmp_lahir'] . ', ' . $dataPeserta['tgl_lahir']?></td>
            </tr>
            <tr style="height: 35px;">
                <td style="width: 250px;">Jenis Kelamin</td>
                <td>:</td>
                <td align="left"><?= $dataPeserta['jk'] ?></td>
            </tr>
            <tr style="height: 35px;">
                <td style="width: 250px;">Alamat</td>
                <td>:</td>
                <td align="left"><?= $dataPeserta['alamat'] ?></td>
            </tr>
            <tr style="height: 35px;">
                <td colspan="7">
                    <hr style="margin-bottom: 2px; margin-top: 1px; margin-left: -5px; sizes="3" color="grey">
                </td>
            </tr>
            <?php
            }
            ?>
        </thead>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>