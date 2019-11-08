<?php 

// menangkap data yang di kirim dari form
$id_prodi = $_POST['id_prodi'];
$nama_prodi = $_POST['nama_prodi'];
$jenjang_prodi = $_POST['jenjang_prodi'];
$kaprodi = $_POST['kaprodi'];
// menginput data ke database
mysqli_query($con,"INSERT INTO tb_prodi (id_prodi, nama_prodi, jenjang_prodi, kaprodi) VALUES('$id_prodi','$nama_prodi','$jenjang_prodi','$kaprodi')");

// mengalihkan halaman kembali ke index.php
header("Location:index.php?page=daftar_program_studi");

?>