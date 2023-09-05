<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Update Galeri - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";


$berita = mysqli_query($koneksi, "SELECT * FROM tbl_berita WHERE id = '".$_GET['id']."' ");
if(mysqli_num_rows($berita) == 0) {
    echo "<script>window.location='berita.php'</script>";
}
$data = mysqli_fetch_array($berita);

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Update Berita</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="berita.php">Berita</a></li>
                            <li class="breadcrumb-item active">Update Berita</li>
                        </ol>

                        <form action="" method="POST" enctype="multipart/form-data">

                        <div class="card">
                            <div class="card-header">
                                <span class="h5 my-2"><i class="fa-solid fa-pen-to-square"></i> Update Berita </span>
                                <button type="submit" name="update" class="btn btn-primary float-end me-1"><i class="fa-solid fa-floppy-disk"></i> Update</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row">
                                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <textarea name="judul" id="judul" placeholder="Judul Berita" class="form-control" required><?= $data['judul'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="isi" class="col-sm-2 col-form-label">Isi Berita</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <textarea name="isi" id="isi" placeholder="Isi Berita" class="form-control" required><?= $data['isi'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="kategori" class="col-sm-2 col-form-label">Kategori Berita</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <select name="kategori" id="kategori" class="form-select border-0 border-bottom" required>
                                                <?php
                                                $kategori = ["Kegiatan Sekolah", "Lomba Sekolah", "PPDB"];
                                                foreach($kategori as $ktg){
                                                    if ($data['kategori'] == $ktg) { ?>
                                                        <option value="<?= $ktg; ?>"selected><?= $ktg; ?></option>
                                                    <?php } else { ?>
                                                        <option value="<?= $ktg; ?>"><?= $ktg; ?></option>
                                                <?php 
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tgl" class="col-sm-2 col-form-label">Tanggal</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                        <input type="date" name="tgl" class="form-control" value="<?= $data['tgl'] ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <input type="hidden" name="gambarLama" value="<?= $data['gambar'] ?>">
                                        <img src="../asset/image/berita/<?= $data['gambar'] ?>" class="image" width="250px">
                                        <div class="col-sm-10" style="margin-left: 0px"> <br>
                                            <input type="file" name="gambar" class="input-control"> <br>
                                            <small class="text-secondary"> Pilih Foto dengan format PNG, JPG atau JPEG ukuran foto maks 1 MB. </small>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        </form>
                        <?php
                            if (isset($_POST['update'])) {
                                $judul          = htmlspecialchars($_POST['judul']);
                                $isi            = htmlspecialchars($_POST['isi']);
                                $kategori       = $_POST['kategori'];
                                $tgl            = htmlspecialchars($_POST['tgl']);
                            
                                if ($_FILES['gambar']['name'] != ''){
                                    //ganti gambar
                                    $filename       = ($_FILES['gambar']['name']);
                                    $tmpname        = ($_FILES['gambar']['tmp_name']);
                                    $filesize       = ($_FILES['gambar']['size']);
                            
                                    $formatFile = pathinfo($filename, PATHINFO_EXTENSION);
                                    $rename = 'berita'.time().'.'.$formatFile;
                            
                                    $allowedType = array ('png', 'jpg', 'jpeg', 'gif');
                                    //validasi format file
                                    if (!in_array($formatFile, $allowedType)) {
                                        echo '<div class="alert alert-error">Format file tidak diizinkan!</div>';
                                        return false;
                                    } elseif ($filesize > 1000000) {
                                        echo '<div class="alert alert-error">Ukuran file tidak boleh lebih dari 1 MB.</div>';
                                        return false;
                                    } else {
                                        if (file_exists("../asset/image/berita/".$_POST['gambarLama'])) {
                                            @unlink("../asset/image/berita/".$_POST['gambarLama']);
                                        }
                                        move_uploaded_file($tmpname, "../asset/image/berita/".$rename);
                                    }
                                } else {
                                //user tidak ganti gambar
                                    $rename = $_POST['gambarLama'];
                                }
                                mysqli_query($koneksi, "UPDATE tbl_berita SET judul='$judul', isi= '$isi', kategori= '$kategori', tgl= '$tgl', gambar ='$rename' WHERE id = '".$_GET['id']."' ");
                                echo "<script>
                                            alert('Berita Berhasil Diupdate!');
                                            document.location.href='berita.php';
                                        </script>";
                                return;
                            }

                        ?>
                    </div>
                </main>

<?php

require_once "../layout/footer.php";

?>