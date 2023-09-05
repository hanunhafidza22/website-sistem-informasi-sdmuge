<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<style>
  .lead {
  font-size: 18px;
  line-height: 30px;
  color: black;
  text-align:center;
  }

  .col-3 {
    min-height: 300px;
    width: 500px;
    float: left;
    padding: 15px;
  }

  .thumbnail-box {
    border: 1px solid #ccc;
    width: 250px;
    height: 250px;
    background-color: #fff;
  }

  .thumbnail-img {
  height: 100%;
  background-repeat: no-repeat;
  background-size: contain;
  background-position: center;
}

  .thumbnail-text {
    height: 55px;
    padding: 5px;
    text-align: center;
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
    margin-top: 30px;
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

  /* CSS untuk memperbesar teks nomor halaman */
  .pagination-box a {
    color: #fff;
    text-decoration: none;
    font-size: 16px; /* Ubah ukuran teks nomor halaman sesuai kebutuhan */
  }

  /* CSS untuk kotak pagination yang aktif */
  .pagination-box.active {
    background-color: green;
    color: white;
  }

.col-lg-4,
.col-md-6,
.col-sm-6,
.col-xs-12 {
  display: flex;
  justify-content: center;
}

.thumbnail-img {
  height: 250px;
  background-repeat: no-repeat;
  background-size: cover;
}

.blog-title h2 {
  font-size: 24px;
  margin-bottom: 15px;
}

.blog-desc p {
  margin-bottom: 15px;
}

.blog-button {
  text-align: center;
}

@media (max-width: 767px) {
  .col-lg-6,
  .col-md-6 {
    padding: 15px 5px;
  }

  .thumbnail-img {
    height: 200px;
  }
}

.blog-item {
  display: flex;
  flex-direction: column;
  height: 100%;
}

.blog-desc {
  flex-grow: 1;
}

.blog-button {
  text-align: center;
  margin-top: auto;
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
      <h1>BERITA<span class="m_1">SD Muhammadiyah Bojonggede</span></h1>
    </div>
  </div> <br>

  <div id="overviews" class="section lb" style="background-color:white">
    <div class="container">
      <div class="section-title row text-center">
        <div class="col-md-8 offset-md-2">
          <p class="lead" style="color:black; font-size:20px; font-weight:bold;">
            Berita dan Informasi Seputar Kegiatan di SD Muhammadiyah Bojonggede.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
  <div class="row">
    <?php
      $limit = 6; // Number of images per page
      $page = isset($_GET['page']) ? $_GET['page'] : 1;
      $offset = ($page - 1) * $limit;
      $berita = mysqli_query($koneksi, "SELECT * FROM tbl_berita ORDER BY id ASC");
      $totalImages = mysqli_num_rows($berita);

      if ($totalImages > 0) {
      $index = 0;
      while ($dataBerita = mysqli_fetch_array($berita)) {
        if ($index >= $offset && $index < ($offset + $limit)) {
        ?>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
          <div class="blog-item">
            <div class="thumbnail-img" style="background-image: url('admin/asset/image/berita/<?= $dataBerita['gambar']; ?>')">
            </div>
            <div class="meta-info-blog">
              <span><i class="fa fa-calendar"></i><?= $dataBerita['tgl']; ?></span>
              <span><i class="fa fa-tag"></i><?= $dataBerita['kategori']; ?></span>
            </div>
            <div class="blog-title">
              <h2><a href="admin/asset/image/berita/<?= $dataBerita['gambar'] ?>" target="_blank" class="thumbnail-link" class="img-fluid" ><?= $dataBerita['judul']; ?></a></h2>
            </div>
            <div class="blog-desc" style="text-align:justify;">
              <p><?= $dataBerita['isi'] ?></p>
            </div>
          </div>
        </div>
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
    
  <div class="container">
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