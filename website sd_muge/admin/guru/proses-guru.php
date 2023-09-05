<?php

session_start();

if(!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;

}

require_once "../config.php";

//jika tombol simpan diklik

if (isset($_POST['simpan'])) {
    $nbm        = htmlspecialchars($_POST['nbm']);
    $nama       = htmlspecialchars($_POST['nama']);
    $jabatan    = htmlspecialchars($_POST['jabatan']);
    $telpon     = htmlspecialchars($_POST['telpon']);
    $alamat     = htmlspecialchars($_POST['alamat']);
    $foto       = htmlspecialchars($_FILES['image']['name']);

    $cekNbm     = mysqli_query($koneksi, "SELECT nbm FROM tbl_guru WHERE nbm = '$nbm'");
    
    if (mysqli_num_rows($cekNbm) > 0) {
        header('location:add-guru.php?msg=cancel');
        return;
    }
    
    if ($foto != null) {
        $url = "add-guru.php";
        $foto = uploading($url);

    } else {
        $foto = 'person.png';
    }

    mysqli_query($koneksi, "INSERT INTO tbl_guru VALUES(null, '$nbm', '$nama', '$jabatan', '$alamat', '$telpon', '$foto')");

    header("location:add-guru.php?msg=added");
    return;

}
if (isset($_POST['update'])) {
    $id         = $_POST['id'];
    $nbm        = htmlspecialchars($_POST['nbm']);
    $nama       = htmlspecialchars($_POST['nama']);
    $jabatan    = htmlspecialchars($_POST['jabatan']);
    $telpon     = htmlspecialchars($_POST['telpon']);
    $alamat     = htmlspecialchars($_POST['alamat']);
    $foto       = htmlspecialchars($_POST['fotoLama']);

    $sqlGuru    = mysqli_query($koneksi, "SELECT * FROM tbl_guru WHERE id = '$id'");
    $data       = mysqli_fetch_array($sqlGuru);
    $curNBM     = $data['nbm'];

    $newNBM     = mysqli_query($koneksi, "SELECT nbm FROM tbl_guru WHERE nbm = '$nbm'");

    if ($nbm !== $curNBM) {
        if(mysqli_num_rows($newNBM) > 0) {
            header("location:guru.php?msg=cancel");
            return;
        }
    }

    if ($_FILES['image']['error'] === 4) {
        $fotoGuru = $foto;
    } else {
        $url = "guru.php";
        $fotoGuru = uploading($url);
        if ($foto != 'person.png') {
            @unlink('../asset/image/' . $foto);
        }
    }
    
    mysqli_query($koneksi, "UPDATE tbl_guru SET nbm= '$nbm',nama ='$nama',jabatan ='$jabatan',telpon ='$telpon',alamat ='$alamat',foto ='$fotoGuru' WHERE id ='$id'");
    header("location:guru.php?msg=updated");
    return;
}

?>