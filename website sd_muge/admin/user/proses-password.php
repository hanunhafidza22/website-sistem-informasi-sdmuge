<?php

session_start();

if(!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;

}

require_once "../config.php";

//jika tombol simpan diklik

if (isset($_POST['simpan'])) {
    $curPass    = trim(htmlspecialchars($_POST['curPass']));
    $newPass    = trim(htmlspecialchars($_POST['newPass']));
    $confPass   = trim(htmlspecialchars($_POST['confPass']));

    //buat variabel untuk menyimpan session user yg aktif
    $username   = $_SESSION['ssUser'];
    $queryUser  = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username'");
    $data       = mysqli_fetch_array($queryUser);

    //konfirmasi password apakah sama dengan password baru
    if ($newPass !== $confPass) {
        header("location:password.php?msg=err1");
        exit;
    } 

    //mengecek kecocokan pass lama di kolom curPass
    if (!password_verify($curPass, $data['password'])) {
        header("location:password.php?msg=err2");
        exit;
    } else { //pass nya cocok dengan di database
        $pass = password_hash($newPass, PASSWORD_DEFAULT);
        mysqli_query($koneksi, "UPDATE tbl_user SET password = '$pass' WHERE username = '$username'");
        header("location:password.php?msg=updated");
        exit;

    }

}


?>

