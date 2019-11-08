<?php
includeHeader();
include "config.php";

?>
    <div class="container">
        <legend>Daftar Program Studi</legend>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Program Studi</li>
        </ol>
        <div class="container text-right p-1">
        <a href="index.php?page=export_prodi" class="btn btn-info pull-left"><i class="fa fa-file-excel-o"></i> Ekspor</a>
        <a href="index.php?page=import_prodi" class="btn btn-success"><i class="fa fa-cloud-upload"></i> Import</a>
        <a href="index.php?page=tambah_program_studi" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
        </div>
        <table id="example" class="table table-default table-bordered" width="100%" cellspacing="0">

    <?php
    $query = mysqli_query($con, "SELECT * FROM tb_prodi ORDER BY id_prodi DESC");
    ?>

            <thead>
                <tr class="table-primary">
                    <th scope="col">No.</th>
                    <th scope="col">Nama Prodi</th>
                    <th scope="col">Jenjang Prodi</th>
                    <th scope="col">Kaprodi</th>
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
                    <th scope="row">
                        <?php echo $no?>
                    </th>
                    <td>
                        <?php echo $data["nama_prodi"];?>
                    </td>
                    <td>
                        <?php 
                        if ($data['jenjang_prodi']=='1') {
                            echo "S1";
                        } else if($data['jenjang_prodi']=='2') {
                            echo "S2";
                        }else{
                            echo "S3";
                        }
                        ?> 
                    </td>
                    <td>
                        <?php echo $data["kaprodi"];?>
                    </td>

                    <td>
                        <a href="index.php?page=edit_program_studi&id_prodi=<?php echo $data['id_prodi']; ?>" class="btn btn-warning btn-sm " role="button"><i class="fa fa-pencil" ></i> Edit</a>
                        <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="index.php?page=hapus_program_studi&id_prodi=<?php echo $data['id_prodi']; ?>" class="btn btn-danger btn-sm " role="button"><i class="fa fa-trash" ></i> Hapus</a>

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

