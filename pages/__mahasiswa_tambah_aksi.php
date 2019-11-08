<?php
include "config.php";
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['foto']['tmp_name'];
$gambar   = $_FILES['foto']['name'];
// Tentukan folder untuk menyimpan file
$folder = "img/$gambar";

// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  header ("location:index.php?page=mahasiswa_daftar");
  
  // Masukkan informasi file ke database
//   $konek = mysqli_connect("localhost","root","","db_universitas");

  $query = "INSERT INTO tb_mahasiswa ( nim, nama_mhs, tempat_lahir, tgl_lahir, tahun_masuk, id_prodi, dosen_pa, foto)
            VALUES( '$_POST[nim]', '$_POST[nama_mhs]', '$_POST[tempat_lahir]', '$_POST[tgl_lahir]', '$_POST[tahun_masuk]', '$_POST[id_prodi]', '$_POST[dosen_pa]','$gambar')";
            
  mysqli_query($con, $query);
}
else{
  echo "File gagal di upload";
}
?>