<?php


$id_dosen = $_POST['id_dosen'];
$nama_dosen = $_POST['nama_dosen'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$dosen_pa = $_POST['dosen_pa'];



if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
    // Ambil data foto yang dipilih dari form
    $nama_foto = $_FILES['foto']['name'];
    $sumber = $_FILES['foto']['tmp_name'];
    
    // Rename nama fotonya dengan menambahkan tanggal dan jam upload
    $fotobaru = date('dmYHis').$nama_foto;
    
    // Set path folder tempat menyimpan fotonya
    $path = "img/".$fotobaru;
    // Proses upload
    if(move_uploaded_file($sumber, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Query untuk menampilkan data 
      $query = "SELECT * FROM tb_dosen WHERE id_dosen='".$id_dosen."'";
      $sql = mysqli_query($con, $query); // Eksekusi/Jalankan query dari variabel $query
      $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
      // Cek apakah file foto sebelumnya ada di folder images
      if(is_file("img/".$data['foto'])) // Jika foto ada
        unlink("img/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images
      
      // Proses ubah data ke Database
      $query = "UPDATE tb_dosen SET nama_dosen='".$nama_dosen."', pendidikan_terakhir='".$pendidikan_terakhir."', alamat='".$alamat."', email='".$email."', no_hp='".$no_hp."', dosen_pa='".$dosen_pa."', foto='".$fotobaru."' WHERE id_dosen='".$id_dosen."'";
      $sql = mysqli_query($con, $query); // Eksekusi/ Jalankan query dari variabel $query
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: index.php?page=daftar_dosen"); // Redirect ke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='index.php?page=edit_dosen'>Kembali Ke Form</a>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='index.php?page=edit_dosen'>Kembali Ke Form</a>";
    }
  }else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
    // Proses ubah data ke Database
    $query = "UPDATE tb_dosen SET nama_dosen='".$nama_dosen."', pendidikan_terakhir='".$pendidikan_terakhir."', alamat='".$alamat."', email='".$email."', no_hp='".$no_hp."', dosen_pa='".$dosen_pa."' WHERE id_dosen='".$id_dosen."'";
    $sql = mysqli_query($con, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: index.php?page=daftar_dosen"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php?page=edit_dosen'>Kembali Ke Form</a>";
    }
  }











?>