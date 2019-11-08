<?php
include "fpdf.php";
include "config.php";

$pdf = new FPDF();
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(190,7,'UNIVERSITAS SURAKARTA',0,1,'C');
$pdf->Cell(190,7,'FAKULTAS TEKNIK ELEKTRO DAN INFORMATIKA',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(190,7,'Jl. Raya Palur Km.05, Telp.0271-825117 Surakarta',0,1,'C');
$pdf->Ln(3);
$pdf->Cell(190,0.6,'','0','1','C',true);
$pdf->Ln(5);
// Setting spasi kebawah supaya tidak rapat

$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Daftar Dosen',0,1,'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'No',1,0);
// $pdf->Cell(25,6,'ID Dosen',1,0);
$pdf->Cell(45,6,'Nama Dosen',1,0);
$pdf->Cell(35,6,'Pendidikan Terakhir',1,0);
$pdf->Cell(30,6,'Alamat',1,0);
$pdf->Cell(37,6,'Email',1,0);
$pdf->Cell(30,6,'No.Handphone',1,1);
// $pdf->Cell(30,6,'Foto',1,1);
 
$pdf->SetFont('Arial','',10);

$no=0;
$query = mysqli_query($con, "SELECT * FROM tb_dosen ORDER BY id_dosen ASC");

   
while ($data = mysqli_fetch_array($query)){
    $no++;
    $pdf->Cell(10,6,$no.".",1,0,'C');
    // $pdf->Cell(10,6,$data['id_dosen'],1,0);
    $pdf->Cell(45,6,$data['nama_dosen'],1,0);
    $pdf->Cell(35,6,$data['pendidikan_terakhir'],1,0);
    $pdf->Cell(30,6,$data['alamat'],1,0);
    $pdf->Cell(37,6,$data['email'],1,0);
    $pdf->Cell(30,6,$data['no_hp'],1,1);
    // $pdf->Cell(30,6,$data['foto'],1,1);
}

$pdf->Output('I', 'daftar_dosen.pdf');
?>


