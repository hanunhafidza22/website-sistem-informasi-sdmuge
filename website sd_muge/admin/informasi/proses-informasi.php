<?php

session_start();

if(!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;

}

require_once "../config.php";

if (isset($_POST['simpan'])) {
    $email      = htmlspecialchars($_POST['email']);
    $website    = $_POST['website'];
    $alamat     = $_POST['alamat'];
    $nohp       = $_POST['nohp'];
    $tentang    = $_POST['tentang'];
    $visi       = $_POST['visi'];
    $misi       = $_POST['misi'];
    $history    = $_POST['history'];

    $cekEmail = mysqli_query($koneksi, "SELECT * FROM tbl_info WHERE email = '$email'");
    if (mysqli_num_rows($cekEmail) > 0) {
        header("location:informasi.php?msg=cancel");
        return;
    }

    mysqli_query($koneksi, "INSERT INTO tbl_info (email, website, alamat, nohp, tentang, visi, misi, history) VALUES ('$email', '$website', '$alamat', '$nohp', '$tentang', '$visi', '$misi', '$history')");

    header("location:informasi.php?msg=added");
    return;
}

if (isset($_POST['update'])) {
    $id         = $_POST['id'];
    $email      = htmlspecialchars($_POST['email']);
    $website    = $_POST['website'];
    $alamat     = $_POST['alamat'];
    $nohp       = $_POST['nohp'];
    $tentang    = $_POST['tentang'];
    $visi       = $_POST['visi'];
    $misi       = $_POST['misi'];
    $history    = $_POST['history'];

    $queryInfo = mysqli_query($koneksi, "SELECT * FROM tbl_info WHERE id = '$id'");
    $data = mysqli_fetch_array($queryInfo);
    $curEmail = $data['email'];

    $cekEmail = mysqli_query($koneksi, "SELECT * FROM tbl_info WHERE email = '$email'");
    if ($email !== $curEmail) {
        if (mysqli_num_rows($cekEmail) > 0) {
            header("location:informasi.php?msg=cancelupdate");
            return;
        }
    }

    mysqli_query($koneksi, "UPDATE tbl_info SET email = '$email', website = '$website', alamat = '$alamat', nohp = '$nohp', tentang = '$tentang', visi = '$visi', misi = '$misi', history = '$history' WHERE id = '$id'");
    header("location:informasi.php?msg=update");
    return;
}
