<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM anggota WHERE id=$id"));
?>
<form method="POST" action="update.php">
  <input type="hidden" name="id" value="<?= $data['id'] ?>">
  <input type="text" name="nama" value="<?= $data['nama'] ?>">
  <input type="text" name="no_anggota" value="<?= $data['no_anggota'] ?>">
  <textarea name="alamat"><?= $data['alamat'] ?></textarea>
  <input type="text" name="jabatan" value="<?= $data['jabatan'] ?>">
  <button type="submit">Update</button>
</form>
