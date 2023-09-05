<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Data Buku Tamu - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Buku Tamu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item active">Data Buku Tamu</li>
                        </ol>

                        <div class="card">
                            <div class="card-header">
                                <span class="h5 my-2"><i class="fa-solid fa-list"></i> Data Buku Tamu</span>
                            </div>
                            <div class="card-body">
                                <table style="text-align: left" class="table table-hover" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col"><center>Nama Tamu </center></th>
                                            <th scope="col"><center>Email Tamu</center></th>
                                            <th scope="col"><center>Komentar</center></th>
                                            <th scope="col"><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $tamu = mysqli_query($koneksi, "SELECT * FROM tbl_bukutamu");
                                        while ($dataTamu = mysqli_fetch_array($tamu)) { ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><?= $dataTamu['nama']?></td>
                                            <td><?= $dataTamu['email']?></td>
                                            <td><?= $dataTamu['komentar']?></td>
                                            <td align="center">
                                                <a href="detail-tamu.php?id=<?= $dataTamu['id'] ?>" class="btn btn-sm btn-warning" title="Detail Data Tamu"><i class="fa-solid fa-circle-info"></i></a>
                                                <button type="button" class="btn btn-sm btn-danger" id="btnHapus" title=" Hapus Data Tamu" data-id="<?= $dataTamu['id'] ?>"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <?php } ?>
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
                            let idTamu = $(this).data('id');
                            $('#btnMdlHapus').attr("href", "hapus-tamu.php?id=" + idTamu);
                        })
                    })
            
            
                </script>

<?php

require_once "../layout/footer.php";

?>