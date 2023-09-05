<?php

session_start();

if(!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;

}

require_once "../config.php";

//jika tombol simpan diklik

if (isset($_POST['simpan'])) {
    $nis    = htmlspecialchars($_POST['nis']);
    $nama   = htmlspecialchars($_POST['nama']);
    $kelas  = $_POST['kelas'];
    $alamat = htmlspecialchars($_POST['alamat']);
    $foto   = htmlspecialchars($_FILES['image']['name']);

    if ($foto != null) {
        $url = "add-siswa.php";
        $foto = uploading($url);

    } else {
        $foto = 'person.png';
    }

    mysqli_query($koneksi, "INSERT INTO tbl_siswa VALUES('$nis', '$nama', '$alamat', '$kelas', '$foto')");

    echo "<script> 
            alert('Data Siswa Berhasil Disimpan');
            document.location.href = 'siswa.php';
    </script>";
    return;

} else if (isset($_POST['update'])) {
    $nis    = htmlspecialchars($_POST['nis']);
    $nama   = htmlspecialchars($_POST['nama']);
    $kelas  = $_POST['kelas'];
    $alamat = htmlspecialchars($_POST['alamat']);
    $foto   = htmlspecialchars($_POST['fotoLama']);

    if ($_FILES['image']['error'] === 4) {
        $fotoSiswa = $foto;
    } else {
        $url = "siswa.php";
        $fotoSiswa = uploading($url);
        if ($foto != 'person.png') {
            @unlink('../asset/image/' . $foto);
        }
    }
    
    mysqli_query($koneksi, "UPDATE tbl_siswa SET nama ='$nama',kelas ='$kelas',alamat ='$alamat',foto ='$fotoSiswa' WHERE nis ='$nis'");

    echo "<script>
            alert('Data Siswa Berhasil Diupdate!');
            document.location.href='siswa.php';
        </script>";
    return;
}

?>