<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Prestasi - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Prestasi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item active">Prestasi</li>
                        </ol>

                        <div class="card">
                            <div class="card-header">
                                <span class="h5 my-2"><i class="fa-solid fa-list"></i> Prestasi</span>
                                <a href="<?= $main_url ?>prestasi/add-prestasi.php" class="btn btn-sm btn-primary float-end"><i class="fa-solid fa-plus"></i> Tambah Data Prestasi </a>
                            </div>
                            <div class="card-body">
                                <table style="text-align: left" class="table table-hover" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col"><center>Foto </center></th>
                                            <th scope="col"><center>Keterangan</center></th>
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
                                            $prestasi = mysqli_query($koneksi, "SELECT * FROM tbl_prestasi $where ORDER BY id DESC");
                                            if(mysqli_num_rows($prestasi) > 0 ) {
                                                while ($data = mysqli_fetch_array($prestasi)) { ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><img src="../asset/image/prestasi/<?= $data['foto']?>" width="250px"></td>
                                            <td><?= $data['keterangan']?></td>
                                            <td align="center">
                                                <a href="edit-prestasi.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-warning" title="Update Data Prestasi"><i class="fa-solid fa-pen"></i></a>
                                                <button type="button" class="btn btn-sm btn-danger" id="btnHapus" title=" Hapus Data Prestasi" data-id="<?= $data['id'] ?>" data-foto="<?= $data['foto'] ?>"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <?php }} else { ?>
                                            <tr>
                                                <td colspan="4">Tidak Ada Data</td>
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
                            let idPrestasi = $(this).data('id');
                            let fotoPrestasi = $(this).data('foto');
                            $('#btnMdlHapus').attr("href", "hapus-prestasi.php?id=" + idPrestasi + "&foto=" + fotoPrestasi);
                        })
                    })
            
            
                </script>

<?php

require_once "../layout/footer.php";

?>