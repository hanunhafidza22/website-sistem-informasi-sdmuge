<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";


$id = $_GET["id"];
$delete = mysqli_query($koneksi, "DELETE FROM tbl_pendaftaran WHERE id_pendaftaran = '$id' ");
echo "<script>
        alert('Data Peserta PPDB Berhasil Dihapus!');
        document.location.href='ppdb.php';
    </script>";
return;

?>