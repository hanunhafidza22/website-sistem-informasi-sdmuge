<?php

session_start();

if(!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;

}

require_once "../config.php";

//jika tombol submit diklik

if (isset($_POST['submit'])) {
    $keterangan     = addslashes(ucwords($_POST['keterangan']));
    $filename       = ($_FILES['gambar']['name']);
    $tmpname        = ($_FILES['gambar']['tmp_name']);
    $filesize       = ($_FILES['gambar']['size']);

    $formatFile = pathinfo($filename, PATHINFO_EXTENSION);
    $rename = 'ekskul'.time().'.'.$formatFile;

    $allowedType = array ('png', 'jpg', 'jpeg', 'gif', 'JPG');

    //validasi format file
    if (!in_array($formatFile, $allowedType)) {
        echo '<div class="alert alert-error">Format file tidak diizinkan!</div>';
    } elseif ($filesize > 1000000) {
        echo '<div class="alert alert-error">Ukuran file tidak boleh lebih dari 1 MB.</div>';
    } else {
        move_uploaded_file($tmpname, "../asset/image/ekskul/".$rename);
        $simpan = mysqli_query($koneksi, "INSERT INTO tbl_ekskul VALUES(null, '".$rename."', '".$keterangan."')");
        if ($simpan){
            echo "<script>
                    alert('Data Ekstrakurikuler Berhasil Disimpan!');
                    document.location.href='ekskul.php';
                </script>";
            return;
        } else {
            echo 'Gagal Menyimpan'.mysqli_error($koneksi);
        }
    }
}



?>