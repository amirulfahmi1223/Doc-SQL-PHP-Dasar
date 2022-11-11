<?php
include 'koneksi.php';
//cek apakah tombol submit sudah ditekan atau blm
if (isset($_POST['submit'])) {
    //ambil data dari tiap elemen form
    $username = htmlspecialchars($_POST["user"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["pass"]);

    //query insert data
    $insert = "INSERT INTO tb_user
  VALUES 
  ('','$username','$email','$password')
  ";
    //panggil disini
    mysqli_query($conn, $insert);

    //cek data apakah berhasil ditambahkan atau tidak
    if (mysqli_affected_rows($conn) > 0) {
        echo '<script>alert("Registrasi Berhasil")</script>';
        echo '<script>window.location = "login.php"</script>';
    } else {
        echo "<script>alert('Registrasi Gagal')</script>";
        echo mysqli_error($conn);
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
                R E G I S T R A S I
            </div>
            <!---Box body--->
            <div class="box-body">
                <!---form login-->
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" placeholder="Username" class="input-kontrol" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" class="input-kontrol" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" placeholder="Password" class="input-kontrol" required>
                    </div>

                    <input type="submit" name="submit" value="Registrasi" class="btn">
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