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
	(id_prodi, 
	nama_prodi, 
	jenjang_prodi, kaprodi) VALUES";
	for ($i=2; $i <= count($all_data); $i++) { 
		// $nama = $all_data[$i]['A'];
		$id_prodi = $all_data[$i]['A'];
		$nama = $all_data[$i]['B'];
		$jenjang = $all_data[$i]['C'];
		$kaprodi = $all_data[$i]['D'];
		$sql .= " ('$id_prodi', '$nama', '$jenjang', '$kaprodi'),";

	}
	$sql = substr ($sql, 0, -1);
	// echo $sql;
	mysqli_query($con, $sql) or die (mysqli_error($con));

	unlink($target_file);
	echo "<script>window.location='index.php?page=daftar_prodi'</script>";
}
?>