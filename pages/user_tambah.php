<?php
includeHeader();
?>
<div class="container">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=user_tambah_aksi">
            <fieldset>
                <legend>Tambah User</legend>
                <div class="form-group">
                    <!-- <label for="user_id">User ID</label> -->
                    <input type="text" class="form-control" id="user_id" name="user_id" placeholder="User ID" required>
                </div>
                <div class="form-group">
                    <!-- <label for="nama">Nama</label> -->
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                </div>
                <div class="form-group">
                    <!-- <label for="password">Password</label> -->
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"required>
                </div>
                <div class="form-group">
                    <!-- <label for="level">Level</label> -->
                    <select class="custom-select" name="level" id="level">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                </select>
                </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </fieldset>
    </form>
    </div>
    </div>
<?php
includeFooter();

                    