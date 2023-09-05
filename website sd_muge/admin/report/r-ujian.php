<?php

session_start();

if(!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Hasil Ujian</title>
</head>
<body>
    <div style="text-align: center">
        <h2 style="margin-bottom: -15px;">Laporan Hasil Ujian</h2>
        <h2 style="margin-bottom: 15px;">SD Muhammadiyah Bojonggede</h2>
    </div>
    <table>
        <thead>
            <tr>
                <td colspan="7" style="height: 5px;">
                    <hr style="margin-bottom: 2px; margin-left: -5px; sizes="3" color="grey">
                </td>
            </tr>
            <tr>
                <th style="width: 70px;">No. Ujian</th>
                <th style="width: 70px;">NIS</th>
                <th style="width: 70px;">Nama Siswa/i</th>
                <th style="width: 110px;">Nilai Terendah</th>
                <th style="width: 100px;">Nilai Tertinggi</th>
                <th style="width: 100px;">Nilai Rata-rata</th>
                <th style="width: 100px;">Hasil Ujian</th>
            </tr>
            <tr>
                <td colspan="7">
                    <hr style="margin-bottom: 2px; margin-top: 1px; margin-left: -5px; sizes="3" color="grey">
                </td>
            </tr>
        </thead>
        <tbody>
            <?php
            $dataUjian = mysqli_query($koneksi, "SELECT * FROM tbl_ujian");
            while ($data = mysqli_fetch_array($dataUjian)) { ?>
                <tr>
                    <td align="center"><?= $data['no_ujian'] ?></td>
                    <td align="center"><?= $data['nis'] ?></td>
                    <td align="center"><?= $data['nama'] ?></td>
                    <td align="center"><?= $data['nilai_terendah'] ?></td>
                    <td align="center"><?= $data['nilai_tertinggi'] ?></td>
                    <td align="center"><?= $data['nilai_rata2'] ?></td>
                    <td align="center"><?= $data['hasil_ujian'] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="7">
                    <hr style="margin-top: 1px; margin-bottom: 2px; margin-left: -2px;", size="3", color="grey">
                    <p>Bojonggede, <?= date('j F Y')?></p>
                    <p>Dibuat Oleh, <b>Dewan Guru SD Muhammadiyah Bojonggede</b></p>
                </td>
            </tr>
        </tfoot>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>