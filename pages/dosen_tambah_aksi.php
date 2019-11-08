<?php 


// menangkap data yang di kirim dari form
$id_dosen = $_POST['id_dosen'];
$nama_dosen = $_POST['nama_dosen'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$dosen_pa = $_POST['dosen_pa'];

// $tambah =$_POST['tambah'];
//input foto
$sumber = $_FILES['foto']['tmp_name'];
$nama_foto = $_FILES ['foto']['name'];
$target = "img/$nama_foto";

if (move_uploaded_file($sumber,"$target")){
    echo "Nama file : <b>$nama_foto</b> berhasil diupload";

    mysqli_query($con,"INSERT INTO tb_dosen (nama_dosen, pendidikan_terakhir, alamat, email, no_hp, dosen_pa, foto)
     VALUES ('$nama_dosen','$pendidikan_terakhir','$alamat','$email','$no_hp','$dosen_pa','$nama_foto')");
     header ('Location:index.php?page=daftar_dosen');
}else{
    echo "<script> 
    alert 
    </script>";
}










?>





