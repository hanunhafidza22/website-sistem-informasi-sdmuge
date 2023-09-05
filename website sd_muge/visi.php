<!DOCTYPE html>
<html lang="en">

<?php include "header.php"; ?>

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
      <h1>VISI & MISI<span class="m_1">SD Muhammadiyah Bojonggede</span></h1>
    </div>
  </div>

  <div class="hmv-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-9">
          <div class="inner-hmv">
            <div class="icon-box-hmv">
              <i class="flaticon-achievement"></i>
            </div>
            <h3>Visi</h3>
            <div class="tr-pa">M</div>
            <p>
              <?= $info['visi']; ?>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-9">
          <div class="inner-hmv">
            <div class="icon-box-hmv"><i class="flaticon-study"></i></div>
            <h3>Misi</h3>
            <div class="tr-pa">V</div>
            <p>
              <ol>
                <li>Menanamkan keyakinan / akidah melalui pengamalan ajaran agama Islam.</li>
                <li>Melaksanakan pembelajaran dan bimbingan secara efektif sehingga potensi siswa dapat berkembang secara optimal.</li>
                <li>Mengembangkan pengetahuan dalam bidang teknologi, bahasa, olahraga dan seni budaya sesuai dengan bakat, minat dan potensi siswa.</li>
                <li>Mengembangkan budaya disiplin dan etos kerja.</li>
                <li>Menjalin kerjasama yang harmonis antara warga sekolah dengan lingkungan.</li>
              </ol>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-9">
          <div class="inner-hmv">
            <div class="icon-box-hmv"><i class="flaticon-online"></i></div>
            <h3>Tujuan</h3>
            <div class="tr-pa">H</div>
            <p>
            Menurut Sisdiknas No. 20 tahun 2003, tujuan pendidikan dasar adalah meletakkan dasar kecerdasan, pengetahuan, kepribadian, akhlak mulia, serta keterampilan untuk hidup mandiri dan mengikuti pendidikan lebih lanjut. 
            Merujuk pada tujuan pendidikan dasar tersebut, maka tujuan Sekolah Dasar Muhammadiyah Bojonggede adalah sebagai berikut.
            <ol>
              <li>Dapat mengamalkan ajaran agama hasil proses pembelajaran dan kegiatan pembiasaan.</li>
              <li>Meraih prestasi akademik maupun nonakademik minimal tingkat Kabupaten/Kota.</li>
              <li>Menguasai dasar-dasar ilmu pengetahuan dan teknologi sebagai bekal untuk melanjutkan ke sekolah yang lebih tinggi.</li>
              <li>Menjadi sekolah pelopor dan penggerak di lingkungan masyarakat sekitar.</li>
              <li>Menjadi sekolah yang diminati di masyarakat.</li>
            </ol>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-9">
          <div class="inner-hmv">
            <div class="icon-box-hmv"><i class="flaticon-history"></i></div>
            <h3>Sejarah Singkat</h3>
            <div class="tr-pa">H</div>
            <p>
              <?= $info['history']; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  </div>
  <!-- end carousel -->
  </div>
  <!-- end col -->
  </!--div>
  <!-- end row -->
  </div>
  <!-- end container -->
  </!--div>
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