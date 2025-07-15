<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Keanggotaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="text-center mb-4">
      <h2 class="fw-bold text-success">Status Keanggotaan</h2>
      <p class="text-muted">Informasi daftar anggota aktif organisasi</p>
    </div>
    <div class="card shadow">
      <div class="card-body">
        <table class="table table-bordered table-hover">
          <thead class="table-success">
            <tr>
              <th>#</th><th>Nama</th><th>No. Anggota</th><th>Alamat</th><th>Jabatan</th>
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
