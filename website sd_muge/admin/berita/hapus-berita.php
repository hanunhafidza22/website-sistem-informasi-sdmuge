<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$id = $_GET["id"];
$gambar = $_GET["gambar"];

mysqli_query($koneksi, "DELETE FROM tbl_berita WHERE id = '$id'");
if ($gambar != 'person.png'){
    unlink("../asset/image/berita/" . $gambar);
}

echo "<script>
        alert('Berita Berhasil Dihapus!');
        document.location.href='berita.php';
    </script>";
return;

?>