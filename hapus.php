<?php
include 'koneksi.php';
//AMBIL DAHULU ID NYA
$id = $_GET['id'];
if (isset($_GET['id'])) {
  $delete = mysqli_query($conn, "DELETE FROM mahasiswa
WHERE id ='" . $_GET['id'] . "'");
  echo '<script>window.location="index.php"</script>';
}
