<?php
includeHeader();

    $id_prodi = $_GET['id_prodi'];
	$query = mysqli_query($con,"SELECT * FROM tb_prodi WHERE id_prodi='$id_prodi'");
	while($data = mysqli_fetch_array($query)){
?>
<div class="container">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=update_program_studi">
            <fieldset>
                <legend>Edit Program Studi</legend>
			<div class="form-group">
				<label>Id Prodi</label>
				<td><input type="number" class="form-control" name="id_prodi" value="<?php echo $data['id_prodi'] ?>" required>				
			</div>
			<div class="form-group">
				<label>Nama Prodi</label>
				<input type="text" class="form-control" name="nama_prodi" value="<?php echo $data['nama_prodi'] ?>"required>				
			</div>
			<div class="form-group">	
				<label class="form-label">Jenjang</label>
				<select class="custom-select" name="jenjang_prodi" required>
					<option value ="">Jenjang</option>
					<option value ="1"<?php if ($data['jenjang_prodi']=='1'){echo 'selected';}?>>S1</option>
					<option value ="2"<?php if ($data['jenjang_prodi']=='2'){echo 'selected';}?>>S2</option>
					<option value ="3"<?php if ($data['jenjang_prodi']=='3'){echo 'selected';}?>>S3</option>
				</select>
				</div>					
			
			<div class="form-group">
            <label>Nama Kaprodi</label>
				<input type="text" class="form-control" name="kaprodi" value="<?php echo $data['kaprodi'] ?>"required>
    		</div>
				<button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-warning">Reset</button>			
		
        </fieldset>
    </form>
    <?php
    }
    ?>
    </div>
    </div>
<?php
includeFooter();