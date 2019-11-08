<?php
includeHeader();

    $id_dosen = $_GET['id_dosen'];
	$query = mysqli_query($con,"SELECT * FROM tb_dosen WHERE id_dosen='$id_dosen'");
	while($data = mysqli_fetch_array($query)){
?>
<div class="container">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=update_dosen" enctype="multipart/form-data">
        <fieldset>
                <legend>Edit Dosen</legend>
                <div class="form-group">
                    
                    <input type="hidden" class="form-control" id="id_dosen" name="id_dosen" value="<?php echo $data['id_dosen']?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama_dosen">Nama Dosen</label>
                    <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="<?php echo $data['nama_dosen']?>" placeholder="Nama Dosen">
                </div>
                <div class="form-group">
                    <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                <select class="custom-select" name="pendidikan_terakhir" required>
					<option value ="">Jenjang</option>
					<option value ="1"<?php if ($data['pendidikan_terakhir']=='1'){echo 'selected';}?>>S1</option>
					<option value ="2"<?php if ($data['pendidikan_terakhir']=='2'){echo 'selected';}?>>S2</option>
					<option value ="3"<?php if ($data['pendidikan_terakhir']=='3'){echo 'selected';}?>>S3</option>
				</select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="5" value="<?php echo $data['alamat']?>"></textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $data['email']?>" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="no_hp">No Handphone </label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $data['no_hp']?>"  placeholder="No Handphone">
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label><br>
                    <img src="img/<?php echo $data["foto"];?>" width="120px"/><br>
                    <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
                    <input type="file" class="form-control-file" name="foto">
                    
                </div>
                <div class="form-group">
                    <label for="dosen_pa">Dosen PA</label>
                    <select class="custom-select" name="dosen_pa" id="dosen_pa" required>
                        <option value="">Dosen PA</option>
                        <option value="y"<?php if ($data['dosen_pa']=='y'){echo 'selected';}?>>Ya</option>
                        <option value="n"<?php if ($data['dosen_pa']=='n'){echo 'selected';}?>>Tidak</option>
                        
                    </select>
                </div>
            <button type="submit" name ="update" class="btn btn-primary">Simpan</button>
            <button type="reset" class=" btn btn-warning">Reset</button>    
        </fieldset>
    </form>
    <?php
    }
    ?>
    </div>
    </div>
<?php
includeFooter();