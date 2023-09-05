<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<style>
  .col-3 {
    min-height: 300px;
    max-width: 500px;
    float: left;
    padding: 15px;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-right: 40px;
  }

  .thumbnail-box {
    border: 1px solid #ccc;
    min-height: 200px;
    background-color: #fff;
  }

  .thumbnail-img {
    height: 250px;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .thumbnail-text {
    height: 55px;
    padding: 5px;
    text-align: center;
    font-weight: bold;
  }

  .thumbnail-link {
    color: #333;
  }

  .thumbnail-link:hover {
    color: green;
  }

  .pagination {
    margin-bottom: 30px;
    text-align: center;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .pagination-box {
    display: inline-block;
    padding: 8px 16px;
    text-decoration: none;
    color: #333;
    background-color: grey;
    border-radius: 5px;
    cursor: pointer;
    margin: 5px;
    color: #fff;
  }

  .pagination-box:first-child {
    margin-left: 0;
  }

  .pagination-box:last-child {
    margin-right: 50px;
  }

  .pagination-box a {
    color: #fff;
    text-decoration: none;
  }

  /* Mengubah pagination yang aktif*/
  .pagination-box.active {
    background-color: green; /* Mengubah latar belakang teks yang aktif menjadi hijau */
    color: white; /* Mengubah warna teks yang aktif menjadi putih */
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
      <h1>EKSTRAKURIKULER<span class="m_1">SD Muhammadiyah Bojonggede</span></h1>
    </div>
  </div>

  <div id="overviews" class="section wb">
    <div class="container">
      <?php
        $limit = 6; // Number of images per page
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        $ekskul = mysqli_query($koneksi, "SELECT * FROM tbl_ekskul ORDER BY id ASC");
        $totalImages = mysqli_num_rows($ekskul);

      if ($totalImages > 0) {
      $index = 0;
      while ($dataEkskul = mysqli_fetch_array($ekskul)) {
        if ($index >= $offset && $index < ($offset + $limit)) {
        ?>
        <main class="container">
          <div class="col-3">
            <a href="admin/asset/image/ekskul/<?= $dataEkskul['gambar'] ?>" target="_blank" class="thumbnail-link" class="img-fluid" >
            <div class="thumbnail-box">
              <div class="thumbnail-img" style="background-image: url('admin/asset/image/ekskul/<?= $dataEkskul['gambar'] ?>')" class="img-fluid">
              </div>
              <div class="thumbnail-text">
                <?= $dataEkskul['keterangan'] ?>
              </div>
            </div>
            </a>
          </div>
        </main>
      <?php
            }
            $index++;
          }
        } else {
          ?>
          <p>Tidak Ada Data</p>
          <?php
        }
        ?>
      </div>
    </div>

    <div class="pagination">
      <?php if ($page > 1): ?>
        <a href="?page=<?= $page - 1 ?>" class="pagination-box">Previous</a>
      <?php endif; ?>

      <?php for ($i = 1; $i <= ceil($totalImages / $limit); $i++): ?>
        <a href="?page=<?= $i ?>" <?= $i == $page ? 'class="active pagination-box"' : 'class="pagination-box"' ?>><?= $i ?></a>
      <?php endfor; ?>

      <?php if ($page < ceil($totalImages / $limit)): ?>
        <a href="?page=<?= $page + 1 ?>" class="pagination-box">Next</a>
      <?php endif; ?>
    </div>


  <?php include "footer.php"; ?>
  <!-- end copyrights -->

  <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

  <!-- ALL JS FILES -->
  <script src="js/all.js"></script>
  <!-- ALL PLUGINS -->
  <script src="js/custom.js"></script>
</body>

</html>