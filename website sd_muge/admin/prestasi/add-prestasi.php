<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Tambah Data Prestasi - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Data Prestasi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="prestasi.php">Prestasi</a></li>
                            <li class="breadcrumb-item active">Tambah Data Prestasi</li>
                        </ol>

                        <form action="proses-prestasi.php" method="POST" enctype="multipart/form-data">


                        <div class="card">
                            <div class="card-header">
                                <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Tambah Data Prestasi </span>
                                <button type="reset" name="reset" class="btn btn-danger float-end"><i class="fa-solid fa-xmark"></i> Reset</button>
                                <button type="submit" name="submit" value="simpan" class="btn btn-primary float-end me-1"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row">
                                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <textarea name="keterangan" id="keterangan" cols="30" rows="3" placeholder="Keterangan" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <input type="file" name="gambar" class="input-control" required> <br>
                                            <small class="text-secondary"> Pilih Foto dengan format PNG, JPG atau JPEG ukuran foto maks 1 MB. </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </main>

<?php

require_once "../layout/footer.php";

?>