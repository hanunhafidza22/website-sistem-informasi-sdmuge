<?php

session_start();

if(!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;

}

require_once "../config.php";

//jika tombol submit diklik

if (isset($_POST['submit'])) {
    $judul          = htmlspecialchars($_POST['judul']);
    $isi            = htmlspecialchars($_POST['isi']);
    $kategori       = $_POST['kategori'];
    $tgl            = htmlspecialchars($_POST['tgl']);
    $filename       = ($_FILES['gambar']['name']);
    $tmpname        = ($_FILES['gambar']['tmp_name']);
    $filesize       = ($_FILES['gambar']['size']);

    $formatFile = pathinfo($filename, PATHINFO_EXTENSION);
    $rename = 'berita'.time().'.'.$formatFile;

    $allowedType = array ('png', 'jpg', 'jpeg', 'gif');

    //validasi format file
    if (!in_array($formatFile, $allowedType)) {
        echo '<div class="alert alert-error">Format file tidak diizinkan!</div>';
    } elseif ($filesize > 1000000) {
        echo '<div class="alert alert-error">Ukuran file tidak boleh lebih dari 1 MB.</div>';
    } else {
        move_uploaded_file($tmpname, "../asset/image/berita/".$rename);
        $simpan = mysqli_query($koneksi, "INSERT INTO tbl_berita VALUES(null, '".$judul."', '".$isi."', '".$kategori."', '".$tgl."', '".$rename."')");
        if ($simpan){
            echo "<script>
                    alert('Berita Berhasil Disimpan!');
                    document.location.href='berita.php';
                </script>";
            return;
        } else {
            echo 'Gagal Menyimpan'.mysqli_error($koneksi);
        }
    }
}



?>