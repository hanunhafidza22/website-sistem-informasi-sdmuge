<?php

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("location:../auth/login.php");
    exit;
}

require_once "../config.php";

$title = "Update Ekstrakurikuler - SD Muhammadiyah Bojonggede";
require_once "../layout/header.php";
require_once "../layout/navbar.php";
require_once "../layout/sidebar.php";


$ekskul = mysqli_query($koneksi, "SELECT * FROM tbl_ekskul WHERE id = '".$_GET['id']."' ");
if(mysqli_num_rows($ekskul) == 0) {
    echo "<script>window.location='ekskul.php'</script>";
}
$data = mysqli_fetch_array($ekskul);

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Update Data Ekstrakurikuler</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="ekskul.php">Ekstrakurikuler</a></li>
                            <li class="breadcrumb-item active">Update Data Ekstrakurikuler</li>
                        </ol>

                        <form action="" method="POST" enctype="multipart/form-data">

                        <div class="card">
                            <div class="card-header">
                                <span class="h5 my-2"><i class="fa-solid fa-pen-to-square"></i> Update Data Ekstrakurikuler </span>
                                <button type="submit" name="update" class="btn btn-primary float-end me-1"><i class="fa-solid fa-floppy-disk"></i> Update</button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3 row">
                                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                        <label for="" class="col-sm-1 col-form-label">:</label>
                                        <div class="col-sm-9" style="margin-left: -50px">
                                            <textarea name="keterangan" id="keterangan" cols="30" rows="3" placeholder="Keterangan" class="form-control" required><?= $data['keterangan'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <input type="hidden" name="gambarLama" value="<?= $data['gambar'] ?>">
                                        <img src="../asset/image/ekskul/<?= $data['gambar'] ?>" class="image" width="250px">
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
                                $keterangan     = addslashes(ucwords($_POST['keterangan']));
                            
                                if ($_FILES['gambar']['name'] != ''){
                                    //ganti gambar
                                    $filename       = ($_FILES['gambar']['name']);
                                    $tmpname        = ($_FILES['gambar']['tmp_name']);
                                    $filesize       = ($_FILES['gambar']['size']);
                            
                                    $formatFile = pathinfo($filename, PATHINFO_EXTENSION);
                                    $rename = 'ekskul'.time().'.'.$formatFile;
                            
                                    $allowedType = array ('png', 'jpg', 'jpeg', 'gif', 'JPG');
                                    //validasi format file
                                    if (!in_array($formatFile, $allowedType)) {
                                        echo "<script>
                                            alert('Format file tidak diizinkan!');
                                        </script>";
                                        return false;
                                    } elseif ($filesize > 1000000) {
                                        echo "<script>
                                            alert('Ukuran file tidak boleh lebih dari 1 MB.!');
                                        </script>";
                                        return false;
                                    } else {
                                        if (file_exists("../asset/image/ekskul/".$_POST['gambarLama'])) {
                                            @unlink("../asset/image/ekskul/".$_POST['gambarLama']);
                                        }
                                        move_uploaded_file($tmpname, "../asset/image/ekskul/".$rename);
                                    }
                                } else {
                                //user tidak ganti gambar
                                    $rename = $_POST['gambarLama'];
                                }
                                mysqli_query($koneksi, "UPDATE tbl_ekskul SET keterangan= '$keterangan',gambar ='$rename' WHERE id = '".$_GET['id']."' ");
                                echo "<script>
                                            alert('Data Ekstrakurikuler Berhasil Diupdate!');
                                            document.location.href='ekskul.php';
                                        </script>";
                                return;
                            }

                        ?>
                    </div>
                </main>

<?php

require_once "../layout/footer.php";

?>