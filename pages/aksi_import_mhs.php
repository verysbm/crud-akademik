<?php
require_once "PHPExcel/PHPExcel.php";

if (isset($_POST['import'])){
	$file =$_FILES['file']['name'];
	$ekstensi = explode(".", $file);
	$file_name ="file=".round(microtime(true)).".".end($ekstensi);
	$sumber = $_FILES['file']['tmp_name'];
	$target_dir = "_file/";
	$target_file = $target_dir.$file_name;
	move_uploaded_file($sumber, $target_file);

	$obj =PHPExcel_IOFactory::load($target_file);
	$all_data = $obj->getActiveSheet()->toArray(null, true, true, true);

	$sql ="INSERT INTO tb_prodi
	(nim, 
	nama_mhs, 
	tempat_lahir, tgl_lahir, tahun_masuk, id_prodi, dosen_pa) VALUES";
	for ($i=2; $i <= count($all_data); $i++) { 
		// $nama = $all_data[$i]['A'];
		$nim = $all_data[$i]['A'];
		$nama = $all_data[$i]['B'];
		$tempat = $all_data[$i]['C'];
        $tgl = $all_data[$i]['D'];
        $thn = $all_data[$i]['E'];
        $prodi = $all_data[$i]['F'];
        $dosen_pa = $all_data[$i]['G'];
		$sql .= " ('$nim', '$nama', '$tempat', '$tgl', '$thn', '$prodi', '$dosen_pa'),";

	}
	$sql = substr ($sql, 0, -1);
	// echo $sql;
	mysqli_query($con, $sql) or die (mysqli_error($con));

	unlink($target_file);
	echo "<script>window.location='index.php?page=mahasiswa_daftar'</script>";
}
?>