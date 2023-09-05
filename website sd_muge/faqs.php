<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<style type="text/css">
      body {
        background: #eee;
      }
      .header {
        margin-top: 40px;
        border-radius: 20px 20px 0px 0px;
        padding: 30px 0px;
        background: #40d14c;
        color: #fff;
        width: 100%;
        display: flex;
        align-content: center;
        justify-content: center;
      }
      .header h1 {
        font-size: 30px;
      }

      .faq-item {
        margin-bottom: 40px;
        margin-top: 40px;
      }
      .faq-body {
        display: none;
        margin-top: 30px;
      }
      .faq-body ol {
        padding-left: 15px;
      }
      .faq-body ul {
        padding-left: 15px;
      }
      .faq-body li {
        padding-left: 25px;
      }
      .faq-wrapper {
        width: 55%;
        margin: 0 auto;
        margin-bottom: 40px;
      }
      .faq-inner {
        padding: 30px;
        background: rgb(253, 253, 253);
        border-radius: 0px 0px 20px 20px;
      }
      .faq-plus {
        float: right;
        font-size: 1.4em;
        line-height: 1em;
        cursor: pointer;
      }
      hr {
        background-color: #999;
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
  <div class="container">
    <div class="row">
      <div class="faq-wrapper">
        <div class="header">
          <h1>Pertanyaan Yang Sering Ditanyakan</h1>
        </div>
        <div class="faq-inner">
          <div class="faq-item">
            <h3>
              Dimana Alamat SD Muhammadiyah Bojonggede ?
              <span class="faq-plus">&plus;</span>
            </h3>
            <div class="faq-body">
              SD Muhammadiyah Bojonggede beralamat di Perum Bojong Depok Baru Jl. Merapi II Blok GX Bojonggede, Bogor, Jawa Barat, Indonesia.
            </div>
          </div>
          <hr />
          <div class="faq-item">
            <h3>
              Apa Keunggulan SD Muhammadiyah Bojonggede ?
              <span class="faq-plus">&plus;</span>
            </h3>
            <div class="faq-body">
              Keunggulan Bersekolah di SD Muhammadiyah Bojonggede, yaitu :
              <ul>
                <li>Tahfidz Al-Qur'an</li>
                <li>Sekolah Penggerak</li>
                <li>Field Trip</li>
                <li>Program Shaum Sunnah (Senin dan Kamis)</li>
                <li>Pembiasaan Sholat Berjamaah</li>
                <li>Pembiasan Sholat Dhuha</li>
                <li>Pembinaan Keputrian</li>
              </ul>
            </div>
          </div>
          <hr />
          <div class="faq-item">
            <h3>
              Apa Saja Fasilitas Yang Ada di SD Muhammadiyah Bojonggede ?
              <span class="faq-plus">&plus;</span>
            </h3>
            <div class="faq-body">
              SD Muhammadiyah Bojonggede memiliki fasilitas diantaranya:
              <ul>
                <li>Gedung Milik Sendiri</li>
                <li>Masjid Sebagai Sarana Ibadah</li>
                <li>Aula untuk Kegiatan Siswa</li>
                <li>Laboratorium Komputer</li>
                <li>Ruang Tamu</li>
                <li>Ruang UKS</li>
                <li>Kantin</li>
                <li>WIFI</li>
              </ul>
            </div>
          </div>
          <hr />
          <div class="faq-item">
            <h3>
              Apa Kurikulum Yang Diterapkan di SD Muhammadiyah Bojonggede ?
              <span class="faq-plus">&plus;</span>
            </h3>
            <div class="faq-body">
              SD Muhammadiyah Bojonggede Menerapkan Kurikulum :
              <ol>
                <li>Merdeka Belajar</li>
                <li>Pendidikan Al-Islam, Kemuhammadiyahan dan Bahasa Arab (ISMUBA)</li>
                <li>Kurikulum 2013</li>
              </ol>
            </div>
          </div>
          <hr />
          <div class="faq-item">
            <h3>
              Apa Saja Persyaratan Pendaftaran Peserta Didik Baru ?
              <span class="faq-plus">&plus;</span>
            </h3>
            <div class="faq-body">
              <ol>
                <li>Telah Mencapai Kematangan Usia Sekolah</li>
                <li>Mengisi Formulir Pendaftaran</li>
                <li>Melampirkan Fotocopy Akta Kelahiran</li>
                <li>Melampirkan Fotocopy Kartu Keluarga</li>
                <li>Mengikuti Test</li>
                <li>Menyelesaikan Biaya Administrasi</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
  <script type="text/javascript">
    $(".faq-plus").on("click", function() {
      $(this).parent().parent().find(".faq-body").slideToggle();
    });
  </script>
</body>

</html>