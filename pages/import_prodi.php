<?php
includeHeader();
?>
<div class="container ">
    <div class="col-lg-6 ">
        <form method="post" action="index.php?page=aksi_import_prodi" enctype="multipart/form-data">
            <fieldset>
                <legend>Import Excel</legend>
                <div class="form-group">
                <label>Format Import : </label>
                    <a href="_file/format/prodi/Format.xlsx" name="download" class="btn btn-info"><i class="fa fa-download"></i> Download</a>
                    <!-- //<input type="hidden" class="form-control" id="id_dosen" name="id_dosen" placeholder="Nama Dosen"> -->
                </div>
                
                <div class="form-group">
                    <label for="file">File</label>
                    <input type="file" class="form-control" name="file" required>
                </div>
                
                
            <button type="submit" name="import" class="btn btn-primary pull-right"><i class="fa fa-file-excel-o"></i> Import</button>
           
        </fieldset>
    </form>
    </div>
    </div>
<?php
includeFooter();