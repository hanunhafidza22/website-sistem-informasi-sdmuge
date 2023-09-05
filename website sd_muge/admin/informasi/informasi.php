<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";


$title = "Data Informasi - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";

if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
} else {
    $msg = '';
}

$alert = '';
if ($msg == 'deleted') {
    $alert = '<div class="alert alert-success alert-dismissible fade show" id="added" role="alert">
    <i class="fa-solid fa-circle-check"></i> Informasi Berhasil Dihapus!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

if ($msg == 'cancel') {
    $alert = '<div class="alert alert-warning alert-dismissible fade show" id="cancel" role="alert">
    <i class="fa-solid fa-xmark"></i> Tambah Informasi Gagal, Mata Informasi Sudah Ada!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

if ($msg == 'added') {
    $alert = '<div class="alert alert-success alert-dismissible fade show" id="added" role="alert" >
    <i class="fa-solid fa-circle-check"></i> Tambah Informasi Berhasil!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

if ($msg == 'cancelupdate') {
    $alert = '<div class="alert alert-warning alert-dismissible fade show" id="cancel" role="alert">
    <i class="fa-solid fa-xmark"></i> Update Informasi Gagal, Mata Informasi Sudah Ada!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}

if ($msg == 'update') {
    $alert = '<div class="alert alert-success alert-dismissible fade show" id="added" role="alert" >
    <i class="fa-solid fa-circle-check"></i> Informasi Berhasil Diperbarui!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}


?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Informasi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active">Data Informasi</li>
            </ol>
            <?php

            if ($msg !== '') {
                echo $alert;
            }

            ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa-solid fa-list"></i> Data Informasi
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <?php
                                $page = 5;
                                if (isset($_GET['hal'])) {
                                    $halaktif = $_GET['hal'];
                                } else {
                                    $halaktif = 1;
                                }

                                if (@$_GET['cari']) {
                                    $keyword = @$_GET['cari'];
                                } else {
                                    $keyword = '';
                                }
                                $start = ($page * $halaktif) - $page;
                                $no = $start + 1;
                                $queryInfo = mysqli_query($koneksi, "SELECT * FROM tbl_info WHERE email like '%$keyword%' or website like '%$keyword%' limit $page offset $start");
                                $queryJmlData = mysqli_query($koneksi, "SELECT * FROM tbl_info WHERE email like '%$keyword%' or website like '%$keyword%'");
                                $jmlData = mysqli_num_rows($queryJmlData);
                                $pages = ceil($jmlData / $page);
                                ?>

                            </div>
                            <table style="text-align: left" class="table table-hover" id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">
                                            <center>Email</center>
                                        </th>
                                        <th scope="col">
                                            <center>Website</center>
                                        </th>
                                        <th scope="col">
                                            <center>Alamat</center>
                                        </th>
                                        <th scope="col">
                                            <center>No Telp/HP</center>
                                        </th>
                                        <th scope="col">
                                            <center>Tentang</center>
                                        </th>
                                        <th scope="col">
                                            <center>Visi</center>
                                        </th>
                                        <th scope="col">
                                            <center>Misi</center>
                                        </th>
                                        <th scope="col">
                                            <center>History</center>
                                        </th>
                                        <th scope="col">
                                            <center>Aksi</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (mysqli_num_rows($queryInfo) > 0) {
                                        while ($data = mysqli_fetch_array($queryInfo)) { ?>
                                            <tr>
                                                <th scope="row"><?= $no++ ?></th>
                                                <td><?= $data['email'] ?></td>
                                                <td><?= $data['website'] ?></td>
                                                <td><?= $data['alamat'] ?></td>
                                                <td><?= $data['nohp'] ?></td>
                                                <td><?= $data['tentang'] ?></td>
                                                <td><?= $data['visi'] ?></td>
                                                <td><?= $data['misi'] ?></td>
                                                <td><?= $data['history'] ?></td>
                                                <td align="center">
                                                    <a href="edit-informasi.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-warning text-white mb-3" title="Update Informasi"><i class="fa-solid fa-pen"></i></a>
                                                </td>
                                            </tr>
                                    <?php }
                                    }  ?>
                                </tbody>
                            </table>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <?php
                                    if ($halaktif > 1) { ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?hal=<?= $halaktif - 1 ?>&cari=<?= $keyword ?>" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <?php }
                                    for ($hal = 1; $hal <= $pages; $hal++) {
                                        if ($hal == $halaktif) { ?>
                                            <li class="page-item active"><a class="page-link" href="?hal=<?= $hal ?>&cari=<?= $keyword ?>"><?= $hal ?></a></li>
                                        <?php } else { ?>
                                            <li class="page-item"><a class="page-link" href="?hal=<?= $hal ?>&cari=<?= $keyword ?>"><?= $hal ?></a></li>
                                        <?php }
                                    }
                                    if ($halaktif < $pages) { ?>
                                        <li class="page-item">
                                            <a class="page-link" href="?hal=<?= $halaktif + 1 ?>&cari=<?= $keyword ?>" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


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
            $(document).on('click', '#btnHapus', function() {
                $('#mdlHapus').modal('show');
                let id = $(this).data('id');
                $('#btnMdlHapus').attr("href", "hapus-informasi.php?id=" + id);
            })

            setTimeout(function() {
                $('#added').slideUp('700');
            }, 3000);

            setTimeout(function() {
                $('#cancel').fadeOut('slow');
            }, 3000);
        })
    </script>

    <?php

    require_once "../layout/footer.php";

    ?>