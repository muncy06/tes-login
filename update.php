<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_anggota = $_POST['no_anggota'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
mysqli_query($conn, "UPDATE anggota SET nama='$nama', no_anggota='$no_anggota', alamat='$alamat', jabatan='$jabatan' WHERE id=$id");
header("Location: admin.php");
?>