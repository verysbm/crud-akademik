<?php
includeHeader();
?>
<div class="container">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=program_studi_aksi">
            <fieldset>
                <legend> Tambah Program Studi</legend>
                <div class="form-group">
                    <label for="id">ID Prodi</label>
                    <input type="number" class="form-control" id="id_prodi" name="id_prodi" placeholder="Id Prodi" required>
                </div>
                <div class="form-group">
                    <label for="nama_program">Nama Prodi</label>
                    <input type="text" class="form-control" id="nama_prodi" name="nama_prodi" placeholder="Nama Prodi"required>
                </div>
                <div class="form-group">
                    <label for="jenjang_prodi">Jenjang Prodi</label>
                    <select class="custom-select" name="jenjang_prodi" id="jenjang_prodi" required>
                        <option value="">Jenjang</option>
                        <option value="1">S1</<option>
                        <option value="2">S2</option>
                        <option value="3">S3</<option>
                    </select>
                </div>
                <div class="form-group">    
                    <label for="kaprodi">Nama Kaprodi</label>
                    <input type="text" class="form-control" id="kaprodi" name="kaprodi" placeholder="Nama Kaprodi" required>
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