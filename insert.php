<?php

session_start();

include 'koneksi.php';

if ($_SESSION['status_login'] != true) {
  echo '<script>window.location="login.php"</script>';
}

//cek apakah tombol submit sudah ditekan atau blm
if (isset($_POST['submit'])) {
  //ambil data dari tiap elemen form
  $nrp = htmlspecialchars($_POST["nrp"]);
  $nama = htmlspecialchars($_POST["nama"]);
  $email = htmlspecialchars($_POST["email"]);
  $jurusan = htmlspecialchars($_POST["jurusan"]);
  $gambar = htmlspecialchars($_POST["gambar"]);

  //query insert data
  $insert = "INSERT INTO mahasiswa 
  VALUES 
  ('','$nrp','$nama','$email','$jurusan','$gambar')
  ";
  //panggil disini
  mysqli_query($conn, $insert);

  //cek data apakah berhasil ditambahkan atau tidak
  if (mysqli_affected_rows($conn) > 0) {
    echo "<script>alert('Tambah data berhasil')</script>";
    echo "<script>window.location='index.php'</script>";
  } else {
    echo "<script>alert('Tambah data gagal')</script>";
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
  <title>Contoh</title>
</head>
<style>
  .table {
    margin: auto;
    background-color: #fff;
    width: 70%;
    height: 70vh;
    align-items: center;
  }

  .form {
    background-color: #eaeaea;
    width: 920px;
    margin: 70px auto;
    height: 600px;
    border-radius: 5px;
    border: 1px solid;
  }

  .content-form {
    padding: 15px 10px;
  }

  .form h1 {
    margin-bottom: 15px;
  }

  .buku {
    border: 1px solid;
    background-color: #0E86D4;
    color: #fff;
    text-align: center;
    padding: 20px;
    border-radius: 5px;
  }

  h1 {
    text-align: center;
    color: #eaeaea;
  }

  input[type=text] {
    width: 100%;
    height: 30px;
  }

  input[type=email] {
    width: 100%;
    height: 30px;
  }

  input[type=password] {
    width: 100%;
    height: 30px;
    margin-bottom: 10px;
  }

  input[type=date] {
    width: 100%;
    height: 30px;
    margin-bottom: 10px;
  }

  .label {
    margin-top: 5px;
  }

  textarea {
    width: 100%;
    height: 80px;
  }

  input[type=submit] {
    margin-top: 12px;
    width: 100%;
    height: 35px;
    background-color: #0E86D4;
    color: #fff;
    border-radius: 3px;
  }

  button[type=submit] {
    margin-top: 5px;
    width: 100%;
    height: 35px;
    background-color: #0E86D4;
    color: #fff;
    border-radius: 3px;
  }

  input[type=button]:hover {
    background-color: #6CC4A1;
  }

  input[type=submit]:hover {
    background-color: #6CC4A1;
  }
</style>


<body>
  <div class="form">

    <h2 class="buku">Tambah Data</h2>
    <div class="content-form">
      <form action="" method="post">
        <p>NRP</p>
        <input type="number" name="nrp" placeholder="Masukkan nrp" size="40px" required>
        <p>Nama</p>
        <input type="text" name="nama" placeholder="Masukkan Nama" required>
        <p>Email</p>
        <input type="email" name="email" placeholder="Masukkan email" size="40px" required>
        <p>Jurusan</p>
        <input type="text" name="jurusan" placeholder="Masukkan Jurusan" required>
        <p>Gambar</p>
        <input type="text" name="gambar" placeholder="Masukkan gambar" required>
        <button type="submit" name="submit">Tambah</button>
      </form>
    </div>
  </div>
</body>

</html>