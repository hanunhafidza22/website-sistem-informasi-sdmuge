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

  <section class="section lb page-section">
    <div class="container">
      <div class="section-title row text-center">
        <div class="col-md-8 offset-md-2">
          <h3>Kontak Kami</h3>
          <p class="lead">
            Silakan Hubungi Kami Apabila Ada Pertanyaan melalui Kontak Yang Tersedia atau dapat menggunakan fitur Bot Pada Website ini.
          </p>
        </div>
      </div>
    </div>
  </section>

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