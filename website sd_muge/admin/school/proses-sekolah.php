<?php

session_start();

if(!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;

}

require_once "../config.php";

//jika tombol simpan diklik
if (isset($_POST['simpan'])) {
    //ambil value yang diposting

    $id         = $_POST['id'];
    $nama       = trim(htmlspecialchars($_POST['nama']));
    $email      = trim(htmlspecialchars($_POST['email']));
    $status     = $_POST['status'];
    $akreditasi = $_POST['akreditasi'];
    $alamat     = trim(htmlspecialchars($_POST['alamat']));
    $tagline    = trim(htmlspecialchars($_POST['tagline']));
    $gbr        = trim(htmlspecialchars($_POST['gbrLama']));

    //cek gambar dari user
    if ($_FILES['image']['error'] === 4) {
        $gbrSekolah = $gbr;
    } else {
        $url = 'profil-sekolah.php';
        $gbrSekolah = uploading($url);
        @unlink('../asset/image/' . $gbr);
    }

    // update data
    mysqli_query($koneksi, "UPDATE tbl_sekolah SET
                            nama        = '$nama',
                            email       = '$email',
                            status      = '$status',
                            akreditasi  = '$akreditasi',
                            alamat      = '$alamat',
                            tagline     = '$tagline',
                            gambar      = '$gbrSekolah'
                            WHERE id = $id
                            ");
    header("location:profil-sekolah.php?msg=updated");
    return;
    


    
}


?>