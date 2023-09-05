<?php

session_start();

if(!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$noUjian = $_GET['noUjian'];
$dataUjian = mysqli_query($koneksi, "SELECT * FROM tbl_ujian WHERE no_ujian= '$noUjian'");
$data = mysqli_fetch_array($dataUjian);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Nilai Ujian</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .title{
            text-align: center;
        }
        h3 {
            margin-bottom: 30px;
        }
        h2 {
            margin-top: 30px;
        }
        .head-left{
            width: 100px;
            padding-left: 3px;
            padding-bottom: 5px;
            text-align: justify;
        }
        .head-right {
            color: red;
        }
        hr {
            margin-bottom: 2px;
            margin-left: 5px;
        }
        .head-no{
            padding-left: 20px;
            text-align: center;
        }
        .head-mapel {
            width: 400px;
            text-align: justify;
        }
        .head-nilai {
            width: 170px;
            text-align: center;
        }
        .data-no {
            padding-left: 20px;
            text-align: center;
        }
        .data-pel {
            text-align: justify;
        }
        .data-nilai {
            text-align: center;
        }
        .foot {
            padding-left : -28px;
            padding-bottom: 5px;
        }
        .sum-colon {
            margin-left: 28px;
        }
        .min-nilai {
            margin-left: 8px;
        }
        .max-colon {
            margin-left: 7px;
        }
        .foot-nilai {
            margin-left: 5px;
        }
        .avg-colon {
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="title">
        <h2>Laporan Nilai Ujian</h2>
        <h3>SD Muhammadiyah Bojonggede</h3>
    </div>
    <table>
        <thead>
            <tr>
                <th class="head-left">No. Ujian</th>
                <th class="head-left">: <?= $data['no_ujian'] ?></th>
                <!--th>Bojonggede, <?= date('j F Y')?> </th-->
            </tr>
            <tr>
                <th class="head-left">Tanggal Ujian</th>
                <th class="head-left">: <?= date("d-m-Y", strtotime($data['tgl_ujian'])) ?></th>
            </tr>
            <tr>
                <th class="head-left">Nama Siswa/i</th>
                <th class="head-left">: <?= $data['nama'] ?></th>
            </tr>
            <tr>
                <th class="head-left">NIS</th>
                <th class="head-left">: <?= $data['nis'] ?></th>
                <th class="head-right">Hasil Ujian : <?= $data['hasil_ujian'] ?></th>
            </tr>
            <tr>
                <th colspan="3">
                    <hr>
                </th>
            </tr>
            <tr>
                <th class="head-no">No.</th>
                <th class="head-mapel">Mata Pelajaran</th>
                <th class="head-nilai">Nilai</th>
            </tr>
            <tr>
                <th colspan="3">
                    <hr>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        $nilaiUjian = mysqli_query($koneksi, "SELECT * FROM tbl_nilai_ujian WHERE no_ujian = '$noUjian'");
        while ($nilai = mysqli_fetch_array($nilaiUjian)) { ?>
            <tr>
                <td class="data-no"><?= $no++ ?></td>
                <td class="data-pel"><?= $nilai['pelajaran'] ?></td>
                <td class="data-nilai"><?= $nilai['nilai_ujian'] ?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">
                    <hr>
                </th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th class="foot">Total Nilai <span class="sum-colon"> : <?= $data['total_nilai'] ?></span></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th class="foot">Nilai Terendah : <span class="min-nilai"><?= $data['nilai_terendah'] ?></span></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th class="foot">Nilai Tertinggi <span class="max-colon"> :</span> <span class="foot-nilai"> <?= $data['nilai_tertinggi'] ?></span></th>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th class="foot">Nilai Rata-rata <span class="avg-colon"> : </span> <span class="foot-nilai"> <?= $data['nilai_rata2'] ?></span></th>
            </tr>
        </tfoot>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>