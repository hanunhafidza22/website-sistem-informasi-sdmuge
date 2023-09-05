<?php

session_start();

if(!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;

}

require_once "../config.php";


$title = "Nilai Ujian - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";

if(isset($_GET['msg']) && isset($_GET['nis'])) {
    $msg = $_GET['msg'];
    $nis = $_GET['nis'];
} else {
    $msg ="";
    $nis ="";
}

$alert = '';
if ($msg == 'GAGAL') {
    $alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-circle-xmark"></i> Siswa dengan NIS : ' . $nis . ' GAGAL Ujian!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
if ($msg == 'LULUS') {
    $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-circle-check"></i> Selamat, Siswa dengan NIS : ' . $nis . ' Berhasil Lulus Ujian!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

$queryNoUjian = mysqli_query($koneksi, "SELECT max(no_ujian) as maxno FROM tbl_ujian");
$data = mysqli_fetch_array($queryNoUjian);
$maxno = $data['maxno'];

$noUrut = (int) substr($maxno, 4, 3);
$noUrut++;
$maxno = "UTS-".sprintf("%03s", $noUrut);


?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-7">
                                <h1 class="mt-4">Nilai Ujian</h1>
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                                    <li class="breadcrumb-item"><a href="ujian.php">Data Ujian</a></li>
                                    <li class="breadcrumb-item active">Nilai Ujian</li>
                                </ol>
                            </div>
                            <div class="col-5">
                                <div class="card mt-3 border-0">
                                    <h5>Syarat Kelulusan</h5>
                                    <ul class="ps-3">
                                        <li><small>Nilai Minimal Tiap Mata Pelajaran Tidak Boleh Kurang Dari 70</small></li>
                                        <li><small>Nilai Rata-rata Mata Pelajaran Tidak Boleh Kurang Dari 70</small></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php 
                        if ($msg !== '') {
                            echo $alert;
                        }
                        ?>
                        <form action="proses-ujian.php" method="POST">
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa-solid fa-plus"></i> Data Peserta Ujian
                                    </div>
                                    <div class="card-body">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"><i class="fa-solid fa-rotate fa-sm"></i></span>
                                            <input type="text" name="noUjian" value= "<?= $maxno ?>" class="form-control bg-transparent" readonly>
                                        </div>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"><i class="fa-solid fa-calendar-days fa-sm"></i></span>
                                            <input type="date" name="tgl" class="form-control" required>
                                        </div>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"><i class="fa-solid fa-user fa-sm"></i></span>
                                            <select name="nis" id="nis" class="form-select" required>
                                                <option value="">---Pilih Nomor Induk Siswa---</option>
                                                <?php
                                                $querySiswa = mysqli_query($koneksi, "SELECT * FROM tbl_siswa");
                                                while ($data = mysqli_fetch_array($querySiswa)) { ?>
                                                    <option value="<?= $data['nis'] ?>"><?= $data['nis'] . '-' . $data['nama'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"><i class="fa-solid fa-user fa-sm"></i></span>
                                            <select name="nama" id="nama" class="form-select" required>
                                                <option value="">---Pilih Nama Siswa---</option>
                                                <?php
                                                $querySiswa = mysqli_query($koneksi, "SELECT * FROM tbl_siswa");
                                                while ($data = mysqli_fetch_array($querySiswa)) { ?>
                                                    <option value="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border mt-2 rounded">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text col-2 ps-2 fw-bold">Sum</span>
                                        <input type="text" name="sum" class="form-control" placeholder="Total Nilai" id="total_nilai" required readonly>
                                    </div>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text col-2 ps-2 fw-bold">Min</span>
                                        <input type="text" name="min" class="form-control" placeholder="Nilai Terendah" id="nilai_terendah" required readonly>
                                    </div>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text col-2 ps-2 fw-bold">Max</span>
                                        <input type="text" name="max" class="form-control" placeholder="Nilai Tertinggi" id="nilai_tertinggi" required readonly>
                                    </div>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text col-2 ps-2 fw-bold">Avg</span>
                                        <input type="text" name="avg" class="form-control" placeholder="Nilai Rata-rata" id="rata2" required readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa-solid fa-list"></i> Input Nilai Ujian
                                        <button type="reset" name="reset" class="btn btn-sm btn-danger float-end"><i class="fa-solid fa-xmark"></i> Reset</button>
                                        <button type="submit" name="simpan" class="btn btn-sm btn-primary me-1 float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                                    </div>
                                    <div class="card-body">
                                        <table class= "table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th><center>No</center></th>
                                                    <th scope="col"><center>Mata Pelajaran</center></th>
                                                    <th scope="col" style="width: 20%"><center>Nilai Ujian</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                $queryPelajaran = mysqli_query($koneksi, "SELECT * FROM tbl_pelajaran");
                                                while ($data = mysqli_fetch_array($queryPelajaran)) { ?>
                                                <tr>
                                                    <th scope="row"><?= $no++ ?></th>
                                                    <td><input type="text" name="mapel[]" value="<?= $data['pelajaran'] ?>" class="border-0 bg-transparent col-12 readonly"></td>
                                                    <td><input type="number" name="nilai[]" value="0" min="0" max="100" step="1"  class="form-control nilai text-center" onchange="fnhitung()"></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </main>
                <script>
                    const total = document.getElementById('total_nilai');
                    const minValue = document.getElementById('nilai_terendah');
                    const maxValue = document.getElementById('nilai_tertinggi');
                    const average = document.getElementById('rata2');

                    function fnhitung() {
                        let nilaiUjian = document.getElementsByClassName('nilai');
                        let totalNilai = 0;
                        let listNilai = [];
                        for (let i = 0; i < nilaiUjian.length; i++) {
                            totalNilai = parseInt(totalNilai) + parseInt(nilaiUjian[i].value);
                            total.value = totalNilai;

                            listNilai.push(nilaiUjian[i].value);
                            listNilai.sort(function (a,b) {
                                return a-b
                            });
                            minValue.value = listNilai[0];
                            maxValue.value = listNilai[listNilai.length - 1];
                            average.value = Math.round(totalNilai / listNilai.length);
                        }
                    }
                </script>

<?php
require_once "../layout/footer.php";
?>