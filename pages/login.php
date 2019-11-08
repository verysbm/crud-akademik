<?php
includeHeader();
?>
<div class="container">
    <div class="col-lg-3">
        <form method="post" action="index.php?page=aksi_login">
            <fieldset>
                <legend>Login</legend>
                <div class="form-group">
                    <label for="user_id">User ID</label>
                    <input type="text" class="form-control" id="user_id" name="user_id" placeholder="User ID">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </select>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fa fa-power-off"></i> Login</button>
        </fieldset>
    </form>
    </div>
    </div>
<?php
includeFooter();
