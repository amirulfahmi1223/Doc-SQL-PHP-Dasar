<?php
include('koneksi.php');
//ambil id
$id = isset($_GET["id"]) ? $_GET['id'] : '';
$query = "SELECT * FROM mahasiswa WHERE id ='$id'";
$hasil = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contoh</title>
</head>



<body>
  <div class="form">
    <h2 class="buku">Update Data</h2>
    <div class="content-form">
      <form action="proses-edit.php" method="POST">
        <!-- lakukan perulangan -->
        <?php while ($data = mysqli_fetch_array($hasil)) { ?>
          <p>NRP</p>
          <input type="number" name="nrp" size="40px" value="<?php echo $data['nrp'] ?>">
          <p>Nama</p>
          <input type="text" name="nama" value="<?php echo $data['nama'] ?> " required>
          <p>Email</p>
          <input type=" email" name="email" size="40px" required value="<?php echo $data['email'] ?> ">
          <p>Jurusan</p>
          <input type="text" name="jurusan" required value="<?php echo $data['jurusan'] ?> ">
          <p>Gambar</p>
          <input type="text" name="gambar" required value="<?php echo $data['gambar'] ?> ">
          <input type="hidden" name="id" value="<?php echo $data['id'] ?> ">
          <button type="submit" name="submit" onclick="window.location= 'proses-edit.php'"> Ubah Data</button>
        <?php } ?>
      </form>
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
    </div>
  </div>
</body>

</html>