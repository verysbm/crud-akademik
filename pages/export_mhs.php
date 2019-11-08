<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Mahasiswa.xls");
?>
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
      

    </tr>
  </thead>
  <tbody>
    
    <?php
    $no=1;
    $query = "SELECT *
    FROM tb_mahasiswa m
    INNER JOIN tb_prodi p ON m.id_prodi=p.id_prodi
    INNER JOIN tb_dosen d ON m.dosen_pa=d.dosen_pa
    ORDER BY m.nim DESC";
    $sql_mhs= mysqli_query($con, $query) or die (mysqli_error($con));
  
    $no=1;
    while($data = mysqli_fetch_array($sql_mhs)){   
    
    ?>
    <tr>
        <th scope="row"><?php echo $no?></th>
        <td><?php echo $data["nim"];?></td>
        <td><?php echo $data["nama_mhs"];?></td>
        <?php echo "<td> <img src='img/".$data['foto']."' width='100' height='100'> </td>"; ?>
        <td><?php echo $data["tempat_lahir"];?></td>
        <td><?php echo $data["tgl_lahir"];?></td>
        <td><?php echo $data["tahun_masuk"];?></td>
        <td><?php echo $data["jenjang_prodi"], ' ' , $data["nama_prodi"];?></td>
        <td><?php echo $data["nama_dosen"];?></td>
      
    </tr>
    <?php
     }
     ?>
    </tbody>
    
                

</table> 