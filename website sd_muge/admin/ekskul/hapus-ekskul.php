<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$id = $_GET["id"];
$gambar = $_GET["gambar"];

mysqli_query($koneksi, "DELETE FROM tbl_ekskul WHERE id = '$id'");
if ($gambar != 'person.png'){
    unlink("../asset/image/ekskul/" . $gambar);
}

echo "<script>
        alert('Data Ekstrakurikuler Berhasil Dihapus!');
        document.location.href='ekskul.php';
    </script>";
return;

?>