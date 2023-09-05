<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Detail Data Tamu - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";

$tamu = mysqli_query($koneksi, "SELECT * FROM tbl_bukutamu WHERE id = '".$_GET['id']."' ");
$dataTamu = mysqli_fetch_array($tamu);

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Detail Data Tamu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="tamu.php">Data Tamu</a></li>
                            <li class="breadcrumb-item active">Detail Data Tamu</li>
                        </ol>
                    <table>
                        <tr>
                            <td><h2>Data Tamu</h2></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td style="width: 250px;">Nama Tamu</td>
                            <td>:</td>
                            <td align="left"><?= $dataTamu['nama'] ?></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td style="width: 250px;">Email Tamu</td>
                            <td>:</td>
                            <td align="left"><?= $dataTamu['email'] ?></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td style="width: 250px;">Komentar</td>
                            <td>:</td>
                            <td align="left"><?= $dataTamu['komentar'] ?></td>
                        </tr>
                    </table>  
                    </div>
                </main>
                
<?php

require_once "../layout/footer.php";

?>