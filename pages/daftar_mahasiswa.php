<?php
includeHeader();
include "config.php";

?>
    <div class="container">
    <legend>Daftar Mahasiswa</legend>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Daftar Mahasiswa</li>
    </ol>
    <div class="container text-right p-1">
          <a href="index.php?page=import_mhs" class="btn btn-success"><i class="fa fa-cloud-upload"></i> Import</a>
          <a href="index.php?page=mahasiswa_tambah" class="btn btn-primary"><i class="fa fa-plus-square"></i> Tambah</a>
    </div>
    <table id= "example" class="table table-default table-bordered" width="100%" cellspacing="0">
<!-- 
    <?php
    // $query = mysqli_query($con, "SELECT m*,  p.nama_prodi, p.jenjang_prodi, d.nama_dosen
    // FROM ((tb_mahasiswa m
    // INNER JOIN tb_prodi p ON m.id_prodi = p.id_prodi)
    // INNER JOIN tb_dosen d ON m.dosen_pa = d.id_dosen)");
    ?>  -->

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
        $sql = "SELECT *
        FROM tb_mahasiswa m
        LEFT JOIN tb_prodi p ON m.id_prodi = p.id_prodi
        INNER JOIN tb_dosen d ON m.dosen_pa = d.id_dosen";
        $query = mysqli_query($con, $sql) or die (mysqli_error ($con));
      $no=1;
      while($data = mysqli_fetch_object($query)){   
      ?>
          <tr>
            <th scope="row"><?php echo $no++;?></th>
            <td><?php echo $data["nim"];?></td>
            <td><?php echo $data["nama_mhs"];?></td>
            <td align="center"><img src="img/<?php echo $data["foto"];?>" width="120px"/></td>
            <td><?php echo $data["tempat_lahir"];?></td>
            <td><?php echo $data["tgl_lahir"];?></td>
            <td><?php echo $data["tahun_masuk"];?></td>
            <td><?php echo $data["jenjang_prodi"], ' ' , $data["nama_prodi"];?></td>
            <td><?php echo $data["nama_dosen"];?></td>
            
            <td>
                <a href="index.php?page=edit_dosen&id_dosen=<?php echo $data['id_dosen']; ?>" class="btn btn-warning btn-sm " role="button"><i class="fa fa-pencil" ></i></a>
                <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="index.php?page=hapus_dosen&id_dosen=<?php echo $data['id_dosen']; ?>" class="btn btn-danger btn-sm " alt="hapus"><i class="fa fa-trash" ></i></a>
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
