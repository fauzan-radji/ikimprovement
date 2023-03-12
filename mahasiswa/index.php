<?php
require_once '../koneksi.php';

$data = mysqli_query($koneksi, 'SELECT * FROM mahasiswa');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include '../partials/nav.php' ?>

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Daftar Mahasiswa</h1>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <a href="/mahasiswa/create.php" class="btn btn-primary">Tambah Data Mahasiswa</a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">NIM</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            while ($mahasiswa = mysqli_fetch_assoc($data)) : ?>
              <tr>
                <th scope="row"><?= $no ?></th>
                <td><?= $mahasiswa['nama'] ?></td>
                <td><?= $mahasiswa['nim'] ?></td>
                <td>
                  <a href="/mahasiswa/show.php?id=<?= $mahasiswa['id'] ?>" class="btn btn-sm btn-info">Detail</a>
                  <a href="/mahasiswa/edit.php?id=<?= $mahasiswa['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                  <a href="/mahasiswa/destroy.php?id=<?= $mahasiswa['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                </td>
              </tr>
            <?php
              $no++;
            endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>