<?php
includeHeader();
?>
<div class="container ">
    <div class="col-lg-6">
        <form method="post" action="index.php?page=mahasiswa_tambah_aksi" enctype="multipart/form-data">
            <fieldset>
                <legend>Mahasiswa</legend>
                <div class="form-group ">
                    <label for="nim" class=" col-form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="nama" name="nama_mhs" placeholder="Nama Mahasiswa">
                </div>
                <div class="form-group">   
                    <label for="tempat">Tempat_lahir</label>
                    <input type="text" class="form-control" id="tempat" name="tempat_lahir" placeholder="Tempat">
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                </div>
                <div class="form-group"> 
                    <label for="tahun_masuk">Tahun Masuk</label>
                    <select class="custom-select" name="tahun_masuk">
                        <option value="">Tahun</option>
                                    <?php
                                    $thn_skr = date('Y');
                                    for ($x = $thn_skr; $x >=2000; $x--) {
                                    ?>
                                        <option value="<?php echo $x ?>"><?php echo $x ?></option>
                                    <?php
                                    }
                                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_prodi">Program Studi</label>
                    <select class="custom-select" name="program_studi" id="id_prodi" required>
                        <option value="">Prodi</option>
                        <?php 
                            $sqlProdi=mysqli_query($con, "SELECT jenjang_prodi, nama_prodi FROM tb_prodi ORDER BY id_prodi ASC");
                            while($data=mysqli_fetch_array($sqlProdi)){
                              
                                if($data['jenjang_prodi']=='1'){
                                        echo"<option value='$data[jenjang_prodi]' '$data[nama_prodi]'> 
                                            $data[nama_prodi] S1
                                        </option>";
                                }else if($data['jenjang_prodi']=='2'){
                                    echo"<option value='$data[jenjang_prodi]' '$data[nama_prodi]'> 
                                    $data[nama_prodi] S2
                                </option>";
                                }else{
                                    echo"<option value='$data[jenjang_prodi]' '$data[nama_prodi]'> 
                                    $data[nama_prodi] S3
                                </option>";
                                }
                                
                            }
                        ?>
                    </select>
                </div>
               
                <div class="form-group">
                    <label for="dosen_pa">Dosen PA</label>
                    <select class="custom-select" name="dosen_pa" id="dosen_pa" required>
                        <option value="">Dosen</option>
                        <?php 
                            $sqlProdi=mysqli_query($con, "SELECT * FROM tb_dosen ORDER BY id_dosen ASC");
                            while($data=mysqli_fetch_array($sqlProdi)){
                                if ($data['dosen_pa']=='y') {
                                    echo "<option>$data[nama_dosen]</option>";
                                }
                            }
                        
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class=" btn btn-warning">Reset</button>
        </fieldset>
    </form>
    </div>
    </div>
<?php
includeFooter();
?>