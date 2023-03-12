<?php
require_once '../koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = $id");
$mahasiswa = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Mahasiswa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include '../partials/nav.php' ?>

  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Edit Data</h1>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <form action="update.php" method="post">
          <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
          </div>
          <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'] ?>">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>