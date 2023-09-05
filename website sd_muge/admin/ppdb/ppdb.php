<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Data PPDB - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data PPDB</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item active">Data PPDB</li>
                        </ol>

                        <div class="card">
                            <div class="card-header">
                                <span class="h5 my-2"><i class="fa-solid fa-list"></i> Data PPDB</span>
                            </div>
                            <div class="card-body">
                                <table style="text-align: left" class="table table-hover" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col"><center>ID Pendaftaran </center></th>
                                            <th scope="col"><center>Nama Siswa</center></th>
                                            <th scope="col"><center>Jenis Kelamin</center></th>
                                            <th scope="col"><center>Aksi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $peserta = mysqli_query($koneksi, "SELECT * FROM tbl_pendaftaran");
                                        while ($dataPeserta = mysqli_fetch_array($peserta)) { ?>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><?= $dataPeserta['id_pendaftaran']?></td>
                                            <td><?= $dataPeserta['nama_peserta']?></td>
                                            <td><?= $dataPeserta['jk']?></td>
                                            <td align="center">
                                                <a href="detail-ppdb.php?id=<?= $dataPeserta['id_pendaftaran'] ?>" class="btn btn-sm btn-warning" title="Detail PPDB"><i class="fa-solid fa-circle-info"></i></a>
                                                <button type="button" class="btn btn-sm btn-danger" id="btnHapus" title=" Hapus Data PPDB" data-id="<?= $dataPeserta['id_pendaftaran'] ?>"><i class="fa-solid fa-trash"></i></button>
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
                            let idPeserta = $(this).data('id');
                            $('#btnMdlHapus').attr("href", "hapus-ppdb.php?id=" + idPeserta);
                        })
                    })
            
            
                </script>

<?php

require_once "../layout/footer.php";

?>