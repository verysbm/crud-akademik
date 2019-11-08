<?php
#-variable database
$dbHost= 'localhost';
$dbUser= 'root';
$dbPass= '';
$dbName= 'db_peminternet';

#-koneksi ke mysql /mariadb
$con =mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

?>