<?php 

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama_mhs'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tahun_masuk = $_POST['tahun_masuk'];
$program_studi= $_POST['program_studi'];
$dosen_pa = $_POST['dosen_pa'];

$sumber = $_FILES['foto']['tmp_name'];
$nama_foto = $_FILES ['foto']['name'];
$target = "img/$nama_foto";

 move_uploaded_file($sumber,"$target");
    // echo "Nama file : <b>$nama_foto</b> berhasil diupload";

    mysqli_query($con,"INSERT INTO tb_mahasiswa (nim, nama_mhs, tempat_lahir, tgl_lahir, tahun_masuk, id_prodi, dosen_pa, foto)
     VALUES ('$nim','$nama','$tempat_lahir','$tanggal_lahir','$tahun_masuk','$program_studi','$dosen_pa','$nama_foto')");
     header ('Location:index.php?page=daftar_mahasiswa');
// }else{
//     echo "<script> 
//     alert 
//     </script>";
// }
?>