<?php
includeHeader();
include "config.php";

?>
    <div class="container">
    <legend>Daftar Dosen</legend>
    <?php 
	if(isset($_GET['berhasil'])){
		echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
	}
	?>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Daftar Dosen</li>
    </ol>
    <div class="container text-right p-1">
          <a href="index.php?page=export_dosen" class="btn btn-info pull-left"><i class="fa fa-file-excel-o"></i> Ekspor</a>
          <a href="index.php?page=import_dosen" class="btn btn-success"><i class="fa fa-cloud-upload"></i> Import</a>
          <a href="index.php?page=dosen_tambah" class="btn btn-primary"><i class="fa fa-plus-square"></i> Tambah</a>
    </div>
    <table id= "example" class="table table-default table-bordered" width="100%" cellspacing="0">

    <?php
    $query = mysqli_query($con, "SELECT * FROM tb_dosen ORDER BY id_dosen DESC");
    ?> 

        <thead>
        <tr class="table-primary">
            <th scope="col">No.</th>
            <th scope="col">Nama Dosen</th>
            <th scope="col">Pendidikan Terakhir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email</th>
            <th scope="col">No Handphone</th>
            <th scope="col">Foto</th>
            <th scope="col">Dosen PA</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
  <tbody>
      <?php if (mysqli_num_rows($query)>0){?>
      <?php
      $no=1;
      while($data = mysqli_fetch_array($query)){   
      ?>
          <tr>
            <th scope="row"><?php echo $no?></th>
            <td><?php echo $data["nama_dosen"];?></td>
            <td><?php
                    if($data['pendidikan_terakhir']=='1'){
                      echo "S1";
                    }else if($data['pendidikan_terakhir']=='2'){
                      echo "S2";
                    }else{
                      echo "S3";
                    }?>
            </td>
                <td><?php echo $data["alamat"];?></td>
                <td><?php echo $data["email"];?></td>
                <td><?php echo $data["no_hp"];?></td>
                <td align="center"><img src="img/<?php echo $data["foto"];?>" width="120px"/></td>
            <td><?php 
                    if($data['dosen_pa']=='y'){
                      echo "Ya";
                    }else{
                      echo "Tidak";
                    }?>
            </td>
            <td>
                <a href="index.php?page=edit_dosen&id_dosen=<?php echo $data['id_dosen']; ?>" class="btn btn-warning btn-sm " role="button"><i class="fa fa-pencil" ></i></a>
                <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="index.php?page=hapus_dosen&id_dosen=<?php echo $data['id_dosen']; ?>" class="btn btn-danger btn-sm " alt="hapus"><i class="fa fa-trash" ></i></a>
            </td>
          </tr>
          <?php $no++;}?>
          </tbody>
          <?php
          }
          ?>
</table> 
</div>
<?php
includeFooter();
