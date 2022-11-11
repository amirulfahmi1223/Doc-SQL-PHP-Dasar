<?php
session_start();
include 'koneksi.php';
if (isset($_POST['login'])) {


    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $cek = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '" . $email . "' AND password = '" . $password . "'");
    if (mysqli_num_rows($cek) > 0) {

        mysqli_fetch_object($cek);
        $_SESSION['status_login'] = true;
        echo '<script>window.location="index.php"</script>';
    } else {
        echo '<script>alert("Username atau Password anda salah")</script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <!---Page Login --->
    <div class="page-login">

        <!---Box-->
        <div class="box box-login">
            <!--box header--->
            <div class="box-header text-center">
                L O G I N
            </div>
            <!---Box body--->
            <div class="box-body">
                <!---form login-->
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="username" class="input-kontrol">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" name="pass" placeholder="Password" class="input-kontrol">
                    </div>
                    <input type="submit" name="login" value="Login" class="btn">
                    <div class="form-group">
                        <p class="register">Belum punya akun? <a href="form-registrasi.php">Daftar</a></p>
                    </div>
                </form>



            </div>
            <!----box footer--->
            <div class="box-footer text-center">
                <a href="index.php">halaman utama</a>
            </div>
        </div>
    </div>
</body>

</html>