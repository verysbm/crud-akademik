<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$user_id = $_POST['user_id'];
$nama = $_POST['nama'];
$password =sha1($_POST['password']);
$level = $_POST['level'];
// menginput data ke database
mysqli_query($con,"INSERT INTO tb_user VALUES('$user_id','$nama','$password','$level')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php?page=daftar_user");
 
?>