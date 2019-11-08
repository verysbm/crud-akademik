<?php 


// menangkap data id yang di kirim dari url
$id_prodi = $_GET['id_prodi'];


// menghapus data dari database
mysqli_query($con,"DELETE FROM tb_prodi where id_prodi='$id_prodi'");

// mengalihkan halaman kembali ke
header("location:index.php?page=daftar_program_studi");

?>