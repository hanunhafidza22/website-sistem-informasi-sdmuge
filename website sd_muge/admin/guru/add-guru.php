<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Tambah Guru  Staf - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";


if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
} else {
    $msg = '';
}

$alert = '';
if ($msg == 'cancel') {
    $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-xmark"></i> Tambah Guru Gagal, NBM Sudah Ada!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

if ($msg == 'notimage') {
    $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-xmark"></i> Tambah Guru Gagal, File Yang Anda Upload Bukan Gambar!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

if ($msg == 'oversize') {
    $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-xmark"></i> Tambah Guru Gagal, Ukuran Gambar lebih dari 1 MB!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

if ($msg == 'added') {
    $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-circle-check"></i> Tambah Guru Berhasil!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Guru dan Staf</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="guru.php">Guru & Staf</a></li>
                            <li class="breadcrumb-item active">Tambah Guru & Staf</li>
                        </ol>

                        <form action="proses-guru.php" method="POST" enctype="multipart/form-data">
                        <?php 

                        if ($msg !== '') {
                            echo $alert;
                        }
                        
                        ?>

                        <div class="card">
                            <div class="card-header">
                                <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Tambah Guru & Staf </span>
                                <button type="reset" name="reset" class="btn btn-danger float-end"><i class="fa-solid fa-xmark"></i> Reset</button>
                                <button type="submit" name="simpan" class="btn btn-primary float-end me-1"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row"> <!--nip nya input manual oleh admin-->
                                    <label for="nip" class="col-sm-2 col-form-label">NBM</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <input type="text" name="nbm" title="NBM Terdiri dari 8 Karakter" class="form-control border-0 border-bottom ps-2" id="nbm">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <input type="text" name="nama" required class="form-control border-0 border-bottom ps-2" id="nama">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <input type="text" name="jabatan" required class="form-control border-0 border-bottom ps-2" id="jabatan">
                                        </div>
                                    </div>
                                    <div class="mb-3 row"> 
                                    <label for="telpon" class="col-sm-2 col-form-label">Telepon</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <input type="text" name="telpon" pattern="[0-9]{5,}" title="Minimal 5 Angka" required class="form-control border-0 border-bottom ps-2" id="telpon">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <textarea name="alamat" id="alamat" cols="30" rows="3" placeholder="Alamat Guru" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 text-center px-5">
                                    <img src="../asset/image/person.png" alt="" class="mb-3" width="40%">
                                    <input type="file" name="image" class="form-control form-control-sm">
                                    <small class="text-secondary"> Pilih Foto dengan format PNG, JPG atau JPEG ukuran foto maks 1 MB. </small>
                                </div> 
                            </div>
                        </div>
                        </form>
                    </div>
                </main>


<?php

require_once "../layout/footer.php";

?>