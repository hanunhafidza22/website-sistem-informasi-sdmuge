<?php include "admin/config.php"; ?>

<!-- <?php $sekolah = query("SELECT * FROM tbl_sekolah")[0]; ?> -->
<?php $hasil_query = query("SELECT * FROM tbl_sekolah");
if ($hasil_query) {
    $sekolah = $hasil_query[0];
    // Lakukan operasi lain dengan $sekolah
} else {
    // Tindakan yang akan diambil jika tidak ada hasil dari query
    echo "Tidak ada hasil dari query.";
}?>
<?php $info = query("SELECT * FROM tbl_info")[0]; ?>

<?php $total_alumni = query("SELECT COUNT(*) as total FROM tbl_ujian WHERE hasil_ujian = 'LULUS' ")[0]; ?>
<?php $total_siswa = query("SELECT COUNT(*) as total FROM tbl_siswa")[0]; ?>
<?php $total_guru = query("SELECT COUNT(*) as total FROM tbl_guru")[0]; ?>

<head>
    <title><?= $sekolah['nama']; ?></title>
    <link rel="shortcut icon" href="images/logo-muge.ico" sizes="32x32" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="muge" href="images/muge.png" -- />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/versions.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/custom.css" />

    <script src="js/modernizer.js"></script>
</head>