<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include "header.php"; ?>

<style>
  .lead {
  font-size: 18px;
  line-height: 30px;
  color: black;
  text-align: center;
  }

  .col-3 {
  min-height: 300px;
  width: 33.33%;
  float: left;
  padding: 15px;
}

@media (max-width: 1000px) {
  .col-3 {
    width: 100%;
    float: none;
    margin: 0 auto;
    padding: 15px 0;
    margin-left:110px;
  }

  .thumbnail-box {
    border: 1px solid #ccc;
    width: 250px;
    min-height: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
}

  .thumbnail-box {
    border: 1px solid #ccc;
    width: 250px;
    min-height: 250px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .thumbnail-img {
    width: 250px;
    height: 250px;
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center center;
    object-fit: contain;
    margin-bottom: 0px;
  }


  .thumbnail-box .thumbnail-text {
    height: 55px;
    padding: 5px;
    color: black;
    text-align: center;
  }


  .thumbnail-box:hover .thumbnail-text {
    background: #40d14c;
  }
  

  .thumbnail-link {
    color: #333;
  }

  .thumbnail-link:hover {
    color: green;
  }
  
  .row::after {
  content: "";
  display: table;
  clear: both;
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
      <h1>PROFIL GURU DAN STAF<span class="m_1"><?= $sekolah['nama']; ?></span></h1>
    </div>
  </div> <br>

    <div class="container">
        <div class="col-12">
          <p class="lead">
            SD Muhammadiyah Bojonggede berkomitmen menciptakan generasi berprestasi berakhlakul karimah yang didampingi oleh Pendidik dan Tenaga Kependidikan yang profesional dibidangnya.
          </p>
        </div>
    </div>

  <div class="section wb">
    <div class="container">
          <?php
            $guru = mysqli_query($koneksi, "SELECT * FROM tbl_guru ORDER BY id ASC");
            if(mysqli_num_rows($guru) > 0) {
              while ($dataGuru = mysqli_fetch_array($guru)) {
          ?>
            <main class="container">
              <div class="col-3">
                <a href="admin/asset/image/<?= $dataGuru['foto'] ?>" target="_blank" class="thumbnail-link" >
                <div class="thumbnail-box">
                  <div class="thumbnail-img" style="background-image: url('admin/asset/image/<?= $dataGuru['foto'] ?>')">
                  </div>
                  <div class="thumbnail-text" style="text-align: center">
                    <span class="text" style="font-weight: bold"><?= $dataGuru['jabatan'] ?></span> <br>
                    <span class="text-1"><?= $dataGuru['nama'] ?></span>
                  </div>
                </div>
                </a>
              </div>
            </main>
            <?php }} else { ?>
              Tidak Ada Data 
            <?php } ?>
        </div>
      </div>
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
  </div>
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