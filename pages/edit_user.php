<?php
includeHeader();
	
    $user_id = $_GET['user_id'];
	$query = mysqli_query($con,"SELECT * FROM tb_user WHERE user_id='$user_id'");
	while($data = mysqli_fetch_array($query)){
?>
<div class="container">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=update_user">
        <fieldset>
            <legend>Edit User</legend>
            <div class="form-group">
                <label for="user_id">User ID</label>
				<input type="text" class="form-control" name="user_id" value="<?php echo $data['user_id'] ?>" readonly>				
			</div>
			<div class="form-group">
                <label for="nama">Nama</label>
				<input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">					
			</div>	
			<div class="form-group">
                <label for="password">Password</label>
				<input type="password" class="form-control" name="password" value="<?php echo $data['password'] ?>">					
			</div>
            <div class="form-group">
            <label for="level">Level</label>
            <select class="custom-select" name="level" value="<?php echo $data['level'] ?>">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
            </select>
            </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
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