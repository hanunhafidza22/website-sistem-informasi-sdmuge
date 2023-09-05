<?php

//untuk koneksi
$koneksi = mysqli_connect("localhost", "root", "", "db_sekolah");

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    };
    return $rows;
};

//cek koneksi
//if (mysqli_connect_error()) {
//    echo "Gagal Koneksi Ke Database";
//}else {
//    echo "Berhasil Koneksi Ke Database";
//}

// url induk
$main_url = "http://localhost/sd_muge/admin/";

function uploading($url)
{
    $namafile   = $_FILES['image']['name'];
    $ukuran     = $_FILES['image']['size'];
    $error      = $_FILES['image']['error'];
    $tmp        = $_FILES['image']['tmp_name'];

    //cek file yang diupload
    $validExtension = ['jpg', 'jpeg', 'png'];
    $fileExtension = explode('.', $namafile);
    $fileExtension = strtolower(end($fileExtension));
    if (!in_array($fileExtension, $validExtension)) {
        header("location:" . $url . '?msg=notimage');
        die;
    }

    //cek ukuran gambar (maks 1 mb)
    if ($ukuran > 1000000) {
        header("location:" . $url . '?msg=oversize');
        die;
    }

    //generate nama file gambar
    if ($url == 'profil-sekolah.php') {
        $namafilebaru = rand(0, 50) . '-bgLogin.' . $fileExtension;
    } else {
        $namafilebaru = rand(10, 1000) . '-' . $namafile;
    }

    //upload gambar
    move_uploaded_file($tmp, "../asset/image/" . $namafilebaru);
    return $namafilebaru;
}
