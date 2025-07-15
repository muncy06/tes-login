<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$no_anggota = $_POST['no_anggota'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
mysqli_query($conn, "INSERT INTO anggota (nama, no_anggota, alamat, jabatan) VALUES ('$nama','$no_anggota','$alamat','$jabatan')");
header("Location: admin.php");
?>