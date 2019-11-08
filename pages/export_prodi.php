<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Prodi.xls");
?>
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

                    
                </tr>
                <?php $no++;}?>
                </tbody>
            <?php
            }
            ?>
        </table>