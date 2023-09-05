<?php

session_start();

if(!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;

}

require_once "../config.php";

if (isset($_POST['simpan'])) {
    $noUjian = htmlspecialchars($_POST['noUjian']);
    $tgl = htmlspecialchars($_POST['tgl']);
    $nis = htmlspecialchars($_POST['nis']);
    $nama = htmlspecialchars($_POST['nama']);
    $sum = htmlspecialchars($_POST['sum']);
    $min = htmlspecialchars($_POST['min']);
    $max = htmlspecialchars($_POST['max']);
    $avg = htmlspecialchars($_POST['avg']);

    if ($min < 70 or $avg < 70) {
        $hasilUjian = "GAGAL";
    } else {
        $hasilUjian = "LULUS";
    }

    $mapel = $_POST['mapel'];
    $nilai = $_POST['nilai'];

    mysqli_query($koneksi, "INSERT INTO tbl_ujian VALUES('$noUjian', '$tgl', '$nis', '$nama', $sum, $min, $max, $avg, '$hasilUjian')");

    foreach($mapel as $key => $mpl) {
        mysqli_query($koneksi, "INSERT INTO tbl_nilai_ujian VALUES(null, '$noUjian', '$mpl', $nilai[$key])");
    }
    header("location:nilai-ujian.php?msg=$hasilUjian&nis=$nis");
    return;
}


?>