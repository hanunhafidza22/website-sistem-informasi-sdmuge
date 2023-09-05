<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$id = $_GET["id"];

mysqli_query($koneksi, "DELETE FROM tbl_pelajaran WHERE id = '$id'");
header("location:pelajaran.php?msg=deleted");
return;

?>