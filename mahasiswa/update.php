<?php

require_once '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];

mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim' WHERE id=$id");

header('Location: /mahasiswa');
