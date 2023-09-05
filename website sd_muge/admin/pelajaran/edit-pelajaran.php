<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Update Pelajaran - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";

$id = $_GET['id'];

$queryPelajaran = mysqli_query($koneksi, "SELECT * FROM tbl_pelajaran WHERE id = '$id'");
$data = mysqli_fetch_array($queryPelajaran);

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Update Mata Pelajaran</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="pelajaran.php">Kembali</a></li>
                        </ol>
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa-solid fa-pen-to-square"></i> Edit Pelajaran
                                    </div>
                                    <div class="card-body">
                                        <form action="proses-pelajaran.php" method="POST">
                                            <input type="number" name="id" value="<?= $data['id'] ?>" hidden>
                                        <div class="mb-3">
                                            <label for="pelajaran" class="form-label ps-1">Pelajaran</label>
                                            <input type="text" class="form-control" id="pelajaran" name="pelajaran" placeholder="Nama Pelajaran" value="<?= $data['pelajaran'] ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="guru" class="form-label ps-1">Guru</label>
                                            <select name="guru" class="form-select" id="guru" required>
                                                <?php
                                                $queryGuru= mysqli_query($koneksi, "SELECT * FROM tbl_guru");
                                                while ($dataGuru = mysqli_fetch_array($queryGuru)) { 
                                                    if ($data['guru'] == $dataGuru['nama']) {
                                                ?>
                                                        <option value="<?= $dataGuru['nama'] ?>" selected><?= $dataGuru['nama'] ?></option>
                                                    <?php } else { ?>
                                                        <option value="<?= $dataGuru['nama'] ?>"><?= $dataGuru['nama'] ?></option>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                            <button type="submit" class="btn btn-primary" name="update"> <i class="fa-solid fa-pen"></i> Update</button>
                                            <a href="pelajaran.php" class="btn btn-danger "><i class="fa-solid fa-xmark"></i> Batal</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa-solid fa-list"></i> Data Pelajaran
                                    </div>
                                    <div class="card-body"> 
                                        <table class="table table-hover" style="text-align: center">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col"><center>Mata Pelajaran</center></th>
                                                    <th scope="col"><center>Guru</center></th>
                                                    <th scope="col"><center>Aksi</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                ?>

                                                <tr>
                                                    <th scope="row"><?= $no ?></th>
                                                    <td><?= $data['pelajaran'] ?></td>
                                                    <td><?= $data['guru'] ?></td>
                                                    <td align="center">
                                                        <button type="button" class="btn btn-sm btn-warning rounded-0 col-10">Updating...</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<?php
require_once "../layout/footer.php";
?>