<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Detail Data PPDB - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";

$peserta = mysqli_query($koneksi, "SELECT * FROM tbl_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
$dataPeserta = mysqli_fetch_array($peserta);

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Detail Data PPDB</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="ppdb.php">Data PPDB</a></li>
                            <li class="breadcrumb-item active">Detail Data PPDB</li>
                        </ol>
                    <table>
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
                    </table>

                        
                    </div>
                </main>
                
<?php

require_once "../layout/footer.php";

?>