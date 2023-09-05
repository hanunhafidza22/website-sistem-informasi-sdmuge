<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Tambah Siswa - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";

//script apabila NIS-nya dibuat otomatis:
//$queryNis = mysqli_query($koneksi, "SELECT  max(nis) as maxnis FROM tbl_siswa");
//$data = mysqli_fetch_array($queryNis);
//$maxnis = $data["maxnis"];

//$noUrut = (int) substr($maxnis, 3, 3);
//$noUrut++;
//$maxnis = "NIS" . sprintf("%03s", $noUrut);

if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
} else {
    $msg = '';
}

$alert = '';
if ($msg == 'notimage') {
    $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-xmark"></i> Tambah Siswa Gagal, File Yang Anda Upload Bukan Gambar!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

if ($msg == 'oversize') {
    $alert = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-xmark"></i> Tambah Siswa Gagal, Ukuran Gambar lebih dari 1 MB!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

if ($msg == 'simpan') {
    $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-circle-check"></i> Tambah Siswa Berhasil!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Siswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="siswa.php">Siswa</a></li>
                            <li class="breadcrumb-item active">Tambah Siswa</li>
                        </ol>

                        <form action="proses-siswa.php" method="POST" enctype="multipart/form-data">
                        <?php 

                        if ($msg !== '') {
                            echo $alert;
                        }
                        
                        ?>

                        <div class="card">
                            <div class="card-header">
                                <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Tambah Siswa </span>
                                <button type="reset" name="reset" class="btn btn-danger float-end"><i class="fa-solid fa-xmark"></i> Reset</button>
                                <button type="submit" name="simpan" class="btn btn-primary float-end me-1"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row"> <!--nis nya input manual oleh admin, apabila nis sama akan error (pada file proses-siswa.php line 30)-->
                                    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <input type="text" title="NIS Terdiri dari 10 Angka" pattern="[0-9]{10,}" name="nis" required class="form-control border-0 border-bottom ps-2" id="nis">
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
                                        <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <select name="kelas" id="kelas" class="form-select border-0 border-bottom" required>
                                                <option selected>--Pilih Kelas--</option>
                                                <option value="I A">I A</option>
                                                <option value="I B">I B</option>
                                                <option value="I C">I C</option>
                                                <option value="II A">II A</option>
                                                <option value="II B">II B</option>
                                                <option value="III A">III A</option>
                                                <option value="III B">III B</option>
                                                <option value="IV A">IV A</option>
                                                <option value="IV B">IV B</option>
                                                <option value="V A">V A</option>
                                                <option value="V B">V B</option>
                                                <option value="VI">VI</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <textarea name="alamat" id="alamat" cols="30" rows="3" placeholder="Alamat Siswa" class="form-control" required></textarea>
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