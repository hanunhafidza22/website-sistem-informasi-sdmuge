<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<style>
  .body {
    background-color: #f8f8f8;
  }
  .box-formulir {
    width: 50%;
    margin: 100px auto;
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
  .btn-cetak {
    display: inline-block;
    padding: 9px 17px;
    background-color: #40d14c;
    color: #fff;
    border: none;
    font-size: 16px;
    margin-top: 5px;
  }
  .btn-cetak:hover {
    cursor: pointer;
    background-color: #47ed55;
    color: #fff;
  }
  @media screen and (max-width: 768px) {
    .box-formulir {
      width: 90%;
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

  <section class="box-formulir">
    <h2>Pendaftaran Siswa Baru SD Muhammadiyah Bojonggede Berhasil</h2>
    <div class="box">
        <h4>Kode Pendaftaran Anda adalah <?= $_GET['id']?></h4>
        <button type="button" onclick="printDoc()" class="btn-cetak">Cetak Bukti Pendaftaran</button>
    </div>
  </section>

  <script>
    function printDoc() {
        const myWindow = window.open("ppdb-cetak.php?id=<?= $_GET['id'] ?>", "");
    }
  </script>


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