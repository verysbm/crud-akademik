<?php
includeHeader();


?>
<div class="container">
<legend>Daftar Mahasiswa</legend>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Daftar Mahasiswa</li>
</ol> 
<div class="container text-right p-1">
      <a href="index.php?page=export_mhs" class="btn btn-info pull-left"><i class="fa fa-file-excel-o"></i> Ekspor</a>
      <a href="index.php?page=import_mhs" class="btn btn-success"><i class="fa fa-cloud-upload"></i> Import</a>
      <a href="index.php?page=mahasiswa_tambah" class="btn btn-primary"><i class="fa fa-plus-circle"></i>Tambah</a>
</div>
<table id= "example" class="table table-default table-bordered" width="100%" cellspacing="0">



  <thead>
  <tr class="table-primary">
      <th scope="col">No.</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Foto</th>
      <th scope="col">Tempat</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Tahun Masuk</th>
      <th scope="col">Program Studi</th>
      <th scope="col">Dosen PA</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
    
    <?php
    $no=1;
    $query = "SELECT *
    FROM tb_mahasiswa m
    INNER JOIN tb_prodi p ON m.id_prodi=p.id_prodi
    INNER JOIN tb_dosen d ON m.dosen_pa=d.id_dosen
    ORDER BY m.nim DESC";
    // echo $query;
    $sql_mhs= mysqli_query($con, $query) or die (mysqli_error($con));
    while($data = mysqli_fetch_array($sql_mhs)){   

        ?>
            <tr>
                <th scope="row">
                    <?php echo $no++;?>
                </th>
                <td>
                    <?php echo $data["nim"];?>
                </td>
                <td>
                    <?php echo $data["nama_mhs"];?>
                </td>
                <td align="center"><img src="img/<?php echo $data["foto"];?>" width="120px"/></td>
                <td>
                    <?php echo $data["tempat_lahir"];?>
                </td>
                <td>
                    <?php echo $data["tgl_lahir"];?>
                </td>
                <td>
                    <?php echo $data["tahun_masuk"];?>
                </td>
                <td>
                    <?php echo $data["jenjang_prodi"], ' ' , $data["nama_prodi"];?>
                </td>
                
                <td>
                    <?php echo $data["nama_dosen"];?>
                </td> 
                <td>
                    <a href="index.php?page=edit_mahasiswa&nim=<?php echo $data['nim']; ?>" class="btn btn-warning btn-sm " role="button">Edit</a>
                    <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="index.php?page=hapus_mahasiswa&nim=<?php echo $data['nim']; ?>" class="btn btn-danger btn-sm " role="button">Hapus</a>

                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        

        </table>
</div>
<?php
includeFooter();
// include "config.php";

?>