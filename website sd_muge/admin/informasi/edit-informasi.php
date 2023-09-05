<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Update Informasi - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM tbl_info WHERE id = '$id'");
$data = mysqli_fetch_array($query);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Update Informasi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="informasi.php">Kembali</a></li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa-solid fa-pen-to-square"></i> Edit Informasi
                        </div>
                        <div class="card-body">
                            <form action="proses-informasi.php" method="POST">
                                <input type="number" name="id" value="<?= $data['id'] ?>" hidden>
                                <div class="mb-3">
                                    <label for="email" class="form-label ps-1">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?= $data['email'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="website" class="form-label ps-1">Website</label>
                                    <input type="text" class="form-control" id="website" name="website" placeholder="Website" value="<?= $data['website'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label ps-1">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" required><?= $data['alamat'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="nohp" class="form-label ps-1">No Telp/HP</label>
                                    <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No Telp" value="<?= $data['nohp'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tentang" class="form-label ps-1">Tentang</label>
                                    <textarea class="form-control" id="tentang" name="tentang" placeholder="Tentang" required><?= $data['tentang'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="visi" class="form-label ps-1">Visi</label>
                                    <textarea class="form-control" cols="30" rows="3" id="visi" name="visi" placeholder="Visi" required><?= $data['visi'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="misi" class="form-label ps-1">Misi</label>
                                    <textarea class="form-control" cols="100" rows="10" id="misi" name="misi" placeholder="Misi" required><?= $data['misi'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="history" class="form-label ps-1">History</label>
                                    <textarea class="form-control" id="history" name="history" placeholder="History" required><?= $data['history'] ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" name="update"><i class="fa-solid fa-pen"></i> Update</button>
                                <a href="informasi.php" class="btn btn-danger"><i class="fa-solid fa-xmark"></i> Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    require_once "../layout/footer.php";
    ?>