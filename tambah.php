<?php
include 'koneksi.php';

$nama_mahasiswa = $_POST['nama_mahasiswa'];
$prodi_mahasiswa = $_POST['prodi_mahasiswa'];

mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('', '$nama_mahasiswa', '$prodi_mahasiswa')");

header("location:index.html");
?>
