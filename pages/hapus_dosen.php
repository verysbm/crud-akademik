<?php 
// koneksi database
include 'config.php';

// menangkap data id yang di kirim dari url
$id_dosen = $_GET['id_dosen'];


// menghapus data dari database
mysqli_query($con,"DELETE FROM tb_dosen WHERE id_dosen='$id_dosen'");

// mengalihkan halaman kembali ke index.php
header("location:index.php?page=daftar_dosen");

?>