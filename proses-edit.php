<?php
include 'koneksi.php';
$id = $_POST['id'];
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];
$gambar = $_POST['gambar'];

//query update
$query = "UPDATE mahasiswa SET 
                  nrp = '$nrp',
                  nama = '$nama',
                  email = '$email',
                  jurusan = '$jurusan',
                  gambar = '$gambar'
                  WHERE id = $id";
$hasil = mysqli_query($conn, $query);
if ($hasil) {
  echo "<script>alert('Ubah data berhasil')</script>";
  echo '<script>window.location="index.php"</script>';
} else {
  echo 'gagal' . mysqli_error($conn);
}
