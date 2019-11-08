<?php


$id_prodi=$_POST['id_prodi'];
$nama_prodi   =$_POST['nama_prodi'];
$jenjang_prodi =$_POST['jenjang_prodi'];
$kaprodi=$_POST['kaprodi'];

mysqli_query($con,"UPDATE tb_prodi SET id_prodi='$id_prodi', nama_prodi='$nama_prodi', jenjang_prodi='$jenjang_prodi', kaprodi='$kaprodi' WHERE id_prodi='$id_prodi'");

header('Location:index.php?page=daftar_program_studi');
?>