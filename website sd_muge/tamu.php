<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<style>
  .btn-kirim {
    padding: 9px 17px;
    background-color: #4A99D7;
    color: #fff;
    border: none;
    font-size: 16px;
  }
  .btn-kirim:hover {
    cursor: pointer;
    background-color: #4881AE;
  }
  @media screen and (max-width: 768px) {
    .kontak {
      width: 70%;
      margin: 40px 0px 0px 50px;
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

  <div class="container kontak">
    <h3 class="mb-4">BUKU TAMU</h3>
    <form action="" method="POST">
      <div class="formKontakKiri">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" required />
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" required />
        </div>

        <div class="form-group">
          <label for="komentar">Komentar</label>
          <textarea name="komentar" cols="30" rows="8" class="form-control" required></textarea>
        </div>
        <input type="submit" name="submit" value="Kirim" class="btn-kirim">
      </div>
    </form>
  </div>

  <?php
  require_once "admin/config.php";
  if (isset($_POST['submit'])) {
    $nama  = $_POST['nama'];
    $email  =$_POST['email'];
    $komentar  = $_POST['komentar'];

    $insert = mysqli_query($koneksi, "INSERT INTO tbl_bukutamu (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')");
    echo "<script>
            alert('Terima Kasih Telah Mengisi Buku Tamu Website Kami!');
            document.location.href='tamu.php';
          </script>";
    return;
    }
  ?>

  <?php include "footer.php"; ?>
  <!-- end copyrights -->

  <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

  <!-- ALL JS FILES -->
  <script src="js/all.js"></script>
  <!-- ALL PLUGINS -->
  <script src="js/custom.js"></script>
  <script src="js/timeline.min.js"></script>
  <script>
    timeline(document.querySelectorAll(".timeline"), {
      forceVerticalMode: 700,
      mode: "horizontal",
      verticalStartPosition: "left",
      visibleItems: 4,
    });
  </script>
</body>

</html>