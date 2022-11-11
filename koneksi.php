<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_unpas';
//create connetting
$conn = mysqli_connect($host, $user, $pass, $db);
//cek apakah koneksi berhasil atau tidak
if (!$conn) {
  echo 'koneksi gagal : ' . mysqli_connect_error($conn);
}
