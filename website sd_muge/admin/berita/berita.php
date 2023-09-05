<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Berita - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Berita</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item active">Berita</li>
                        </ol>

                        <div class="card">
                            <div class="card-header">
                                <span class="h5 my-2"><i class="fa-solid fa-list"></i> Berita</span>
                                <a href="<?= $main_url ?>berita/add-berita.php" class="btn btn-sm btn-primary float-end"><i class="fa-solid fa-plus"></i> Tambah Berita </a>
                            </div>
                            <div class="card-body">
                                <table style="text-align: left" class="table table-hover" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col"><center>Judul </center></th>
                                            <th scope="col"><center>Isi Berita</center></th>
                                            <th scope="col"><center>Kategori</center></th>
                                            <th scope="col"><center>Tanggal</center></th>
                                            <th scope="col"><center>Gambar</center></th>
                                            <th scope="col"><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $where = " WHERE 1=1 ";
                                            if (isset($_GET['key'])) {
                                                $where .= "AND keterangan LIKE '%".addslashes($_GET['key'])."%' ";
                                            }
                                            $berita = mysqli_query($koneksi, "SELECT * FROM tbl_berita $where ORDER BY id DESC");
                                            if(mysqli_num_rows($berita) > 0 ) {
                                                while ($data = mysqli_fetch_array($berita)) { ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><?= $data['judul']?></td>
                                            <td><?= $data['isi']?></td>
                                            <td><?= $data['kategori']?></td>
                                            <td><?= $data['tgl']?></td>
                                            <td><img src="../asset/image/berita/<?= $data['gambar']?>" width="250px"></td>
                                            <td align="center">
                                                <a href="edit-berita.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-warning" title="Update Berita"><i class="fa-solid fa-pen"></i></a>
                                                <button type="button" class="btn btn-sm btn-danger" id="btnHapus" title=" Hapus Berita" data-id="<?= $data['id'] ?>" data-foto="<?= $data['gambar'] ?>"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <?php }} else { ?>
                                            <tr>
                                                <td colspan="7">Tidak Ada Data</td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>


                <!--modal untuk hapus data-->
                <div class="modal" id="mdlHapus" tabindex="-1" data-bs-backdrop="static">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Anda Yakin Akan Menghapus Data Ini?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <a href="" id="btnMdlHapus" class="btn btn-primary">Ya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <script> 
                    $(document).ready(function() {
                        $(document).on('click', "#btnHapus", function() {
                            $('#mdlHapus').modal('show');
                            let idBerita = $(this).data('id');
                            let gambarBerita = $(this).data('gambar');
                            $('#btnMdlHapus').attr("href", "hapus-berita.php?id=" + idBerita + "&gambar=" + gambarBerita);
                        })
                    })
            
            
                </script>

<?php

require_once "../layout/footer.php";

?>