<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<style>
  .body {
    background-color: #f8f8f8;
  }
  .thumbnail-link {
    color: #333;
  }
  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }
  .box-formulir {
    width: 50%;
    margin: 25px auto 75px auto;
  }
  .box {
    background-color: #f8f8f8;
    border: 1px solid #ddd;
    padding: 10px;
    box-sizing: border-box;
    margin: 5px 0 25px;
  }
  .table-form {
    width: 100%;
  }
  .table-form tr td:nth-child(1) {
    width: 30%;
  }
  .input-control {
    padding: 5px 10px;
    font-size: 16px;
    margin: 5px 0;
  }
  .btn-daftar {
    padding: 9px 17px;
    background-color: #4A99D7;
    color: #fff;
    border: none;
    font-size: 16px;
  }
  .btn-daftar:hover {
    cursor: pointer;
    background-color: #4881AE;
  }
  @media screen and (max-width: 768px) {
    .box-formulir {
      width: 100%;
    }
  }
</style>

<body class="host_version">
  <!-- LOADER -->
  <div id="preloader">
    <div class="loader-container">
      <div class="progress-br float shadow">
        <div class="progress__item"></div>
      </div>
    </div>
  </div>
  <!-- END LOADER -->

  <!-- Start header -->
  <?php include "navbar.php"; ?>
  <!-- End header -->

  <div class="all-title-box" style="background-image: url('admin/asset/image/<?= $sekolah['gambar']?>')">
    <div class="container text-center">
      <h1>
        PENERIMAAN PESERTA DIDIK BARU
        <span class="m_1">SD Muhammadiyah Bojonggede</span>
      </h1>
    </div>
  </div> <br>
  <div id="overviews" class="section wb">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12">
          <a href="images/ppdb1.png" target="_blank" class="thumbnail-link">
            <img src="images/ppdb1.png" width="100%" alt="">
          </a>
        </div>
        <div class="col-lg-4 col-md-8 col-12">
          <a href="images/ppdb3.jpeg" target="_blank" class="thumbnail-link">
            <img src="images/ppdb3.jpeg" width="65%" height="100%" alt="" class="center">
          </a>
        </div>
        <div class="col-lg-4 col-md-8 col-12">
          <a href="images/ppdb2.png" target="_blank" class="thumbnail-link">
            <img src="images/ppdb2.png" width="100%" style="background-image" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>

  <section class="box-formulir">
    <h2>Formulir Pendaftaran Siswa Baru SD Muhammadiyah Bojonggede</h2>
    <form action="" method="POST">
      <div class="box">
        <table border="0" class="table-form">
          <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td>
              <input type="text" name="th_ajaran" class="input-control" value="2023/2024" readonly>
            </td>
          </tr>
        </table>
      </div>
      <h3>Data Diri Calon Siswa Baru</h3>
      <div class="box">
        <table border="0" class="table-form">
          <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>
              <input type="text" name="nama" class="input-control" required>
            </td>
          </tr>
          <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>
              <input type="text" name="tmp_lahir" class="input-control" required>
            </td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>
              <input type="date" name="tgl_lahir" class="input-control" required>
            </td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
              <input type="radio" name="jk" class="input-control" value="Laki-laki"> Laki-laki &nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
            </td>
          </tr>
          <tr>
            <td>Alamat Lengkap</td>
            <td>:</td>
            <td>
              <textarea name="alamat" id="alamat" cols="25" rows="4" class="input-control" required></textarea>
            </td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td>
              <input type="submit" name="submit" value="Daftar Sekarang" class="btn-daftar">
            </td>
          </tr>
        </table>
      </div>
    </form>

  </section>
<?php
  require_once "admin/config.php";
  if (isset($_POST['submit'])) {
    //ambil 1 id terbesar di kolom id pendaftaran lalu ambil 5 karakter dari sebelah kanan
    $getMaxId = mysqli_query($koneksi, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tbl_pendaftaran");
    $d = mysqli_fetch_object($getMaxId);
    $generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);
    //proses insert
    $insert = mysqli_query($koneksi, "INSERT INTO tbl_pendaftaran VALUES(
                          '".$generateId."', 
                          '".date('Y-m-d')."', 
                          '".$_POST['th_ajaran']."', 
                          '".$_POST['nama']."', 
                          '".$_POST['tmp_lahir']."', 
                          '".$_POST['tgl_lahir']."',
                          '".$_POST['jk']."',
                          '".$_POST['alamat']."'
                          )");
    if ($insert) {
      echo "<script>
              window.location='ppdb-berhasil.php?id=".$generateId."';
            </script>";
      return;
    } else {
      echo 'GAGAL'.mysqli_error($koneksi);
    }
  }
?>

  <!-- end section -->
  <?php include "footer.php"; ?>
  <!-- end copyrights -->

  <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

  <!-- ALL JS FILES -->
  <script src="js/all.js"></script>
  <!-- ALL PLUGINS -->
  <script src="js/custom.js"></script>
</body>

</html>