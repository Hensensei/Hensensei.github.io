<?php
// Koneksi kepada database
include 'koneksi.php';

// Menangkap data id yang dikirim melalu url
$id = $_GET['id'];

// Menghapus data dari database
mysqli_query($koneksi,"delete from data where id='$id'");

// Mengalihkan halaman kembali ke index.php
header("location:index.php");

?>