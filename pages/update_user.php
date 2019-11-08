<?php
include 'config.php';

$id_user =$_POST['user_id'];
$nama    =$_POST['nama'];
$password=$_POST['password'];
$level   =$_POST['level'];

mysqli_query($con,"UPDATE tb_user SET nama='$nama', password='$password', level='$level' WHERE user_id='$id_user'");

header('Location:index.php?page=daftar_user');
?>