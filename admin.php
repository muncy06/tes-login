<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit();
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Database Anggota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="text-center mb-4">
      <h1 class="fw-bold text-primary">Dashboard Admin</h1>
      <p class="text-muted">Manajemen Data Anggota Organisasi</p>
    </div>
    <div class="card shadow mb-5">
      <div class="card-header bg-primary text-white">Tambah Anggota Baru</div>
      <div class="card-body">
        <form action="tambah.php" method="POST" class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Nomor Anggota</label>
            <input type="text" class="form-control" name="no_anggota" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Jabatan</label>
            <input type="text" class="form-control" name="jabatan">
          </div>
          <div class="col-md-6">
            <label class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" rows="1"></textarea>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-success">Simpan Data</button>
          </div>
        </form>
      </div>
    </div>
    <div class="card shadow">
      <div class="card-header bg-dark text-white">Daftar Anggota</div>
      <div class="card-body">
        <table class="table table-striped table-hover">
          <thead class="table-dark">
            <tr>
              <th>#</th><th>Nama</th><th>No. Anggota</th><th>Alamat</th><th>Jabatan</th><th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM anggota");
            $no = 1;
            while($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                <td>$no</td>
                <td>{$row['nama']}</td>
                <td>{$row['no_anggota']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['jabatan']}</td>
                <td>
                  <a href='edit.php?id={$row['id']}' class='btn btn-sm btn-warning'>Edit</a>
                  <a href='hapus.php?id={$row['id']}' onclick="return confirm('Yakin ingin menghapus data ini?');" class='btn btn-sm btn-danger'>Hapus</a>
                </td>
              </tr>";
              $no++;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
