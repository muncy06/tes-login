<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$cek = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($cek);

if (mysqli_num_rows($cek) > 0) {
  $_SESSION['login'] = true;
  $_SESSION['username'] = $data['username'];
  header("Location: admin.php");
} else {
  echo "<script>alert('Login gagal! Username atau password salah'); window.location='login.php';</script>";
}
?>