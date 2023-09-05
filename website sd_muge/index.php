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

  <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleControls" data-slide-to="1"></li>
      <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div id="home" class="first-section" style="background-image: url('admin/asset/image/<?= $sekolah['gambar']?>')">
          <div class="dtab">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 text-right">
                  <div class="big-tagline">
                    <h2 data-animation="animated zoomInRight">
                    <strong>SD Muhammadiyah Bojonggede</strong>
                    </h2>
                    <p class="lead">
                      Ini adalah halaman website SD Muhammadiyah Bojonggede.
                      Terima kasih telah berkunjung ke website Kami!
                    </p>
                  </div>
                </div>
              </div>
              <!-- end row -->
            </div>
            <!-- end container -->
          </div>
        </div>
        <!-- end section -->
      </div>
      <div class="carousel-item">
        <div id="home" class="first-section" style="background-image: url('images/perpus1.jpg')">
          <div class="dtab">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 text-left">
                  <div class="big-tagline">
                    <h2 data-animation="animated zoomInRight">
                      SD Muhammadiyah <strong>Bojonggede</strong>
                    </h2>
                    <p class="lead" data-animation="animated fadeInLeft">
                      Ini adalah halaman website SD Muhammadiyah Bojonggede.
                      Terima kasih telah berkunjung ke website Kami!
                    </p>
                  </div>
                </div>
              </div>
              <!-- end row -->
            </div>
            <!-- end container -->
          </div>
        </div>
        <!-- end section -->
      </div>
      <div class="carousel-item">
        <div id="home" class="first-section" style="background-image: url('images/banner3.jpeg')">
          <div class="dtab">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                  <div class="big-tagline">
                    <!--h2 data-animation="animated zoomInRight">
                      <strong>SD Muhammadiyah</strong> Bojonggede
                    </!--h2>
                    <p-- class="lead" data-animation="animated fadeInLeft">
                      Ini adalah halaman website SD Muhammadiyah Bojonggede.
                      Terima kasih telah berkunjung ke website Kami!
                    </p-->
                  </div>
                </div>
              </div>
              <!-- end row -->
            </div>
            <!-- end container -->
          </div>
        </div>
        <!-- end section -->
      </div>
      <!-- Left Control -->
      <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <!-- Right Control -->
      <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div id="overviews" class="section wb">
    <div class="container">
      <div class="section-title row text-center">
        <div class="col-md-8 offset-md-2">
          <h3>SD Muhammadiyah Bojonggede</h3>
          <p class="lead" style="color: black">
            Sambutan dari Kepala Sekolah dan Para Guru
          </p>
        </div>
      </div>
      <!-- end title -->

      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="message-box">
            <h4>Kepala Sekolah SD Muhammadiyah Bojonggede</h4>
            <h2>
              Perkenalan dan Sambutan dari Kepala Sekolah SD Muhammadiyah Bojonggede
            </h2>
          </div>
          <!-- end messagebox -->
        </div>
        <!-- end col -->

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="post-media wow fadeIn">
            <iframe width="520" height="350" src="https://www.youtube.com/embed/juOEjh1fUus" title="kepala sekolah menyapa" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <!-- end media -->
        </div>
        <!-- end col -->
      </div>
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="post-media wow fadeIn">
            <iframe width="520" height="350" src="https://www.youtube.com/embed/dw6p-S2LdA0" title="perkenalan guru" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <!-- end media -->
        </div>
        <!-- end col -->

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
          <div class="message-box">
            <h4>Guru dan Staf SD Muhammadiyah Bojonggede </h4>
            <h2>
              Perkenalan dari Para Pengajar dan Staf SD Muhammadiyah Bojonggede
            </h2>
          </div>
          <!-- end messagebox -->
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>
  <!-- end section -->

  <section class="section lb page-section">
    <div class="container">
      <div class="section-title row text-center">
        <div class="col-md-8 offset-md-2">
          <h3>Program Kegiatan <br>SD Muhammadiyah Bojonggede</h3>
          <p class="lead" style="color: black">
            Berikut ini adalah Kegiatan-Kegiatan yang telah dilaksanakan <br>oleh SD Muhammadiyah Bojonggede.
          </p>
        </div>
      </div>
      <!-- end title -->
      <div class="timeline">
        <div class="timeline__wrap">
          <div class="timeline__items">
            <div class="timeline__item">
              <div class="timeline__content img-bg-01">
                <h2>17 Juni 2023</h2>
                <p>
                  Kegiatan Ekspose yang diikuti kelas 1 sampai dengan 5 dan para guru dengan busana dari masing-masing daerah. Menampilkan karya seni anak.
                </p>
              </div>
            </div>
            <div class="timeline__item">
              <div class="timeline__content img-bg-02">
                <h2>28 Mei 2023</h2>
                <p>
                  Parade Budaya Lebaran 2023. SD Muhammadiyah turut memeriahkan acara Parade Budaya Lebaran dengan menampilkan Tim Drumband dan Tapak Suci
                </p>
              </div>
            </div>
            <div class="timeline__item">
              <div class="timeline__content img-bg-03">
                <h2>23 Mei 2023</h2>
                <p>
                  ROADSHOW LITERASI di SD Muhammadiyah Bojonggede yang diselenggarakan oleh Dinas Arsip dan Perpustakaan Daerah. 
                </p>
              </div>
            </div>
            <div class="timeline__item">
              <div class="timeline__content img-bg-04">
                <h2>15 - 20 Mei 2023.</h2>
                <p>
                  SD Muhammadiyah Bojonggede telah melaksanakan Ujian Sekolah tahun Ajaran 2022/2023.
                </p>
              </div>
            </div>
            <div class="timeline__item">
              <div class="timeline__content img-bg-05">
                <h2>13 Mei 2023</h2>
                <p>
                  Program One Day To Write (ODTW). Hasil karya anak dalam bentuk buku sudah ada di perpustakaan Sekolah, perpustakaan dan Daerah dan menjadi bahan bacaan bagi masyarakat sekitar.
                </p>
              </div>
            </div>
            <div class="timeline__item">
              <div class="timeline__content img-bg-06">
                <h2>28 April 2023</h2>
                <p>
                  Kegiatan Monitoring Program Sekolah Penggerak Bersama Kemendikbudristek.
                </p>
              </div>
            </div>
            <div class="timeline__item">
              <div class="timeline__content img-bg-07">
                <h2>27 April 2023</h2>
                <p>
                  Pelatihan Assesment Kompetensi Minimum Kelas (AKM) dan ASESMENPEDIA bersama BBGP Jawa Barat.
                </p>
              </div>
            </div>
            <div class="timeline__item">
              <div class="timeline__content img-bg-08">
                <h2>27 April 2023</h2>
                <p>
                  Kegiatan Pembuatan Video Praktik Baik Untuk Platform Merdeka Mengajar (PMM) bersama BBGP Jawa Barat.
                </p>
              </div>
            </div>
            <div class="timeline__item">
              <div class="timeline__content img-bg-09">
                <h2>27 April 2023</h2>
                <p>
                  Kegiatan Gebyar Sekolah Penggerak dalam Memperingati Hari Guru Nasional Bersama BBGP Jawa Barat.
                </p>
              </div>
            </div>
            <div class="timeline__item">
              <div class="timeline__content img-bg-10">
                <h2>6 April 2023</h2>
                <p>
                  Kegiatan International Kangaroo Mathematics Contest SD Muhammadiyah Bojonggede di kelas 1 sampai 6.
                </p>
              </div>
            </div>
            <div class="timeline__item">
              <div class="timeline__content img-bg-11">
                <h2>9 - 17 Maret 2023</h2>
                <p>
                  Kegiatan Gebyar TK yang diadakan di SD Muhammadiyah Bojonggede. Perlombaan Tingjat TK dan Sederajat untuk Lomba Tahfidz, Fashion Show, dan Mewarnai.
                </p>
              </div>
            </div>
            <div class="timeline__item">
              <div class="timeline__content img-bg-12">
                <h2>2 November 2022</h2>
                <p>
                  Kegiatan Pustaka Ceria Bekerjasama dengan Perpustakaan Daerah Kabupaten Bogor.
                </p>
              </div>
            </div>
            <div class="timeline__item">
              <div class="timeline__content img-bg-13">
                <h2>1 November 2022</h2>
                <p>
                  Kegiatan Market Day yang dilakukan oleh Para Siswa/i SD Muhammadiyah Bojonggede.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section cl">
    <div class="container">
      <div class="row text-left stat-wrap">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
          <p class="stat_count"><?= $total_siswa['total']; ?></p>
          <h3>Siswa</h3>
        </div>
        <!-- end col -->

        <div class="col-md-4 col-sm-4 col-xs-12">
          <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
          <p class="stat_count">1500</p>
          <h3>Alumni</h3>
        </div>
        <!-- end col -->

        <div class="col-md-4 col-sm-4 col-xs-12">
          <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
          <p class="stat_count"><?= $total_guru['total']; ?></p>
          <h3>Guru dan Staff</h3>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>
  <!-- end section -->

  <?php include "footer.php"; ?>
  <!-- end copyrights -->

  <script type="text/javascript"
    id="botcopy-embedder-d7lcfheammjct"
    class="botcopy-embedder-d7lcfheammjct" 
    data-botId="649f01c5e59cbc0008c91cc9">
    var s = document.createElement('script'); 
    s.type = 'text/javascript'; s.async = true; 
    s.src = 'https://widget.botcopy.com/js/injection.js'; 
    document.getElementById('botcopy-embedder-d7lcfheammjct').appendChild(s);
  </script>


  <!--a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a-->

  <script src="js/all.js"></script>
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