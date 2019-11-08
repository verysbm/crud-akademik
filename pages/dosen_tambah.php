<?php
includeHeader();
?>
<div class="container">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=dosen_tambah_aksi" enctype="multipart/form-data">
            <fieldset>
                <legend>Tambah Dosen</legend>
    <?php 
	if(isset($_GET['berhasil'])){
		echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
	}
	?>
                <div class="form-group">
                    
                    <input type="hidden" class="form-control" id="id_dosen" name="id_dosen" placeholder="Nama Dosen">
                </div>
                <div class="form-group">
                    <label for="nama_dosen">Nama Dosen</label>
                    <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" placeholder="Nama Dosen">
                </div>
                <div class="form-group">
                    <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                    <select class="custom-select" name="pendidikan_terakhir" id="pendidikan_terakhir" required>
                        <option value="">Jenjang</option>
                        <option value="1">S1</<option>
                        <option value="2">S2</option>
                        <option value="3">S3</<option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat"  rows="5" placeholder="Jl.Wijaya Kusauma No.01"></textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="no_hp">No Handphone </label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone">
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control-file" name="foto">
                </div>
                <div class="form-group">
                    <label for="dosen_pa">Dosen PA</label>
                    <select class="custom-select" name="dosen_pa" id="dosen_pa" required>
                        <option value="">Status Dosen</option>
                        <option value="y">Ya</option>
                        <option value="n">Tidak</<option>
                        </select>
                </div>
                
            <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
            <button type="reset" class=" btn btn-warning">Reset</button>
        </fieldset>
    </form>
    </div>
    </div>
<?php
includeFooter();

                    