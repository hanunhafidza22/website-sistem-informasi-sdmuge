<?php

session_start();

require_once "../config.php";

//jika tombol login diklik
if (isset($_POST['login'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $result   = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username'");

    //cek username
    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["ssLogin"] = true;
            $_SESSION["ssUser"] = $username;
            header("location:../index.php");
            exit;
        } else { //username benar, password salah
            echo "<script>
                    alert('Password Salah!');
                    document.location.href= 'login.php';
                    </script>";
        }
    } else { //username salah
        echo "<script>
                alert('Username Tidak Terdaftar!');
                document.location.href= 'login.php';
                </script>";
    }
}

?>