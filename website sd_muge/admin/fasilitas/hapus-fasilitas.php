<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$id = $_GET["id"];
$gambar = $_GET["gambar"];

mysqli_query($koneksi, "DELETE FROM tbl_fasilitas WHERE id = '$id'");
if ($gambar != 'person.png'){
    unlink("../asset/image/fasilitas/" . $gambar);
}

echo "<script>
        alert('Data Fasilitas Sekolah Berhasil Dihapus!');
        document.location.href='fasilitas.php';
    </script>";
return;

?>