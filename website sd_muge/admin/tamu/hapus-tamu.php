<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";


$id = $_GET["id"];
$delete = mysqli_query($koneksi, "DELETE FROM tbl_bukutamu WHERE id = '$id' ");
echo "<script>
        alert('Data Tamu Berhasil Dihapus!');
        document.location.href='tamu.php';
    </script>";
return;

?>