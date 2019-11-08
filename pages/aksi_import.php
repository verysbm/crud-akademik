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

	$sql ="INSERT INTO tb_dosen 
	(nama_dosen, 
	pendidikan_terakhir, 
	alamat, email, no_hp, dosen_pa) VALUES";
	for ($i=2; $i <= count($all_data); $i++) { 
		// $nama = $all_data[$i]['A'];
		$nama = $all_data[$i]['A'];
		$pendidikan = $all_data[$i]['B'];
		$alamat = $all_data[$i]['C'];
		$email = $all_data[$i]['D'];
		$no_hp = $all_data[$i]['E'];
		$dosen_pa = $all_data[$i]['F'];
		$sql .= " ('$nama', '$pendidikan', '$alamat', '$email', '$no_hp', '$dosen_pa'),";

	}
	$sql = substr ($sql, 0, -1);
	// echo $sql;
	mysqli_query($con, $sql) or die (mysqli_error($con));

	unlink($target_file);
	echo "<script>window.location='index.php?page=daftar_dosen'</script>";
}
?>