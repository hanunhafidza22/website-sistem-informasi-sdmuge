<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$id = $_GET["id"];
$foto = $_GET["foto"];

mysqli_query($koneksi, "DELETE FROM tbl_prestasi WHERE id = '$id'");
if ($foto != 'person.png'){
    unlink("../asset/image/prestasi/" . $foto);
}

echo "<script>
        alert('Data Prestasi Berhasil Dihapus!');
        document.location.href='prestasi.php';
    </script>";
return;

?>