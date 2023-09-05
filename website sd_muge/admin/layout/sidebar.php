<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion bg-light" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Home</div>
                    <a class="nav-link" href="<?= $main_url ?>index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <hr class="mb-0">
                    <div class="sb-sidenav-menu-heading">Admin</div>
                    <a class="nav-link" href="<?= $main_url ?>user/add-user.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                        User
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>user/password.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-key"></i></div>
                        Ganti Password
                    </a>
                    <hr class="mb-0">
                    <div class="sb-sidenav-menu-heading">Data</div>
                    <a class="nav-link" href="<?= $main_url ?>siswa/siswa.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                        Siswa
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>guru/guru.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                        Guru & Staf
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>informasi/informasi.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-info"></i></div>
                        Data Informasi
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>prestasi/prestasi.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-award"></i></div>
                        Data Prestasi
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>fasilitas/fasilitas.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-sitemap"></i></div>
                        Fasilitas
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>berita/berita.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-newspaper"></i></div>
                        Berita
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>ppdb/ppdb.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-address-card"></i></div>
                        Data PPDB
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>ekskul/ekskul.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-masks-theater"></i></div>
                        Ekstrakurikuler
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>galeri/galeri.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-photo-film"></i></div>
                        Galeri
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>tamu/tamu.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-user"></i></div>
                        Data Buku Tamu
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>pelajaran/pelajaran.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-book"></i></div>
                        Mata Pelajaran
                    </a>
                    <a class="nav-link" href="<?= $main_url ?>ujian/ujian.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user-graduate"></i></div>
                        Ujian
                    </a>
                    <hr class="mb-0">
                </div>
            </div>
            <div class="sb-sidenav-footer border">
                <div class="small">Logged in as:</div>
                <?= $_SESSION["ssUser"] ?>
            </div>
        </nav>
    </div>