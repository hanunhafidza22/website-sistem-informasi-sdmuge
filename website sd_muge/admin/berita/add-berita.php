<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Tambah Berita - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Berita</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="berita.php">Berita</a></li>
                            <li class="breadcrumb-item active">Tambah Berita</li>
                        </ol>

                        <form action="proses-berita.php" method="POST" enctype="multipart/form-data">


                        <div class="card">
                            <div class="card-header">
                                <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Tambah Berita </span>
                                <button type="reset" name="reset" class="btn btn-danger float-end"><i class="fa-solid fa-xmark"></i> Reset</button>
                                <button type="submit" name="submit" value="simpan" class="btn btn-primary float-end me-1"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row">
                                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <textarea name="judul" id="judul" placeholder="Judul Berita" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="isi" class="col-sm-2 col-form-label">Isi Berita</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <textarea name="isi" id="isi" cols="30" rows="3" placeholder="Isi Berita" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="kategori" class="col-sm-2 col-form-label">Kategori Berita</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px;">
                                            <select name="kategori" id="kategori" class="form-select border-0 border-bottom" required> 
                                                <option value="" selected>--Pilih Kategori Berita---</option>
                                                <option value="Kegiatan Sekolah">Kegiatan Sekolah</option>
                                                <option value="Lomba Sekolah">Lomba Sekolah</option>
                                                <option value="PPDB">PPDB</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                        <input type="date" name="tgl" class="form-control" required>
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