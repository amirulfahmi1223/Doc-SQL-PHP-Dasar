<?php
//bisa menggunakan include atau require
session_start();

include 'koneksi.php';

if ($_SESSION['status_login'] != true) {
  echo '<script>window.location="login.php"</script>';
}

// ambil data dari table mahasiswa
//ambil koneksi jadikan variabel agar tidak terlalu panjang
// $query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
//ambil data (fecth) mahasiswa dari objek result
//mysqli_fetch_row => mengembalikan array numerik
//mysqli_fetch_assoc => tinggal mengingat2 field yang ada ditable database
//contoh $row['nama'] tinggal tulis nama field
// mengembalikan array asosiatif
//mysqli_fetch_array => mengembalikan keduanya(numerik dan assosiatif)
//mysqli_fetch_object // mengembalikan object dengan menggunakan tanda panah 
//contoh "->" $mhs -> nama;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <a href="keluar.php">
    <h3>Keluar</h3>
  </a>
  <a href="insert.php">
    <h4>Tambah Data</h4>
  </a>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>
    <?php $no = 1;
    ?>
    <?php
    while ($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td>
          <a href="update.php?id=<?php echo $row['id'] ?>">Edit</a> ||
          <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick=" return confirm('Yakin Hapus?')">Hapus</a>
        </td>
        <td><?php echo $row['gambar'] ?></td>
        <td><?php echo $row['nrp'] ?></td>
        <td><?php echo $row['nama'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['jurusan'] ?></td>
      </tr>
    <?php } ?>
  </table>
  <style>
    a {
      text-decoration: none;
    }
  </style>
</body>

</html>