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
$pdf->Cell(190,7,'Daftar Mahasiswa',0,1,'C');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'No',1,0);
$pdf->Cell(25,6,'NIM',1,0);
$pdf->Cell(35,6,'Nama Mahasiswa',1,0);
// $pdf->Cell(30,6,'Tempat Lahir',1,0);
// $pdf->Cell(30,6,'Tanggal Lahir',1,0);
$pdf->Cell(30,6,'Tahun Masuk',1,0);
$pdf->Cell(30,6,'Prodi',1,0);
$pdf->Cell(20,6,'Dosen PA',1,1);
 
$pdf->SetFont('Arial','',10);

$no=0;
$query = mysqli_query($con, "SELECT * FROM tb_mahasiswa ORDER BY nim ASC");
while ($data = mysqli_fetch_array($query)){
    $no++;
    $pdf->Cell(10,6,$no.".",1,0,'C');
    $pdf->Cell(25,6,$data['nim'],1,0);
    $pdf->Cell(35,6,$data['nama_mhs'],1,0);
    // $pdf->Cell(30,6,$data['tempat_lahir'],1,0);
    // $pdf->Cell(30,6,$data['tgl_lahir'],1,0);
    $pdf->Cell(30,6,$data['tahun_masuk'],1,0);
    $pdf->Cell(30,6,$data['id_prodi'],1,0);
    $pdf->Cell(20,6,$data['dosen_pa'],1,1);
}

$pdf->Output('I', 'daftar_dosen.pdf');
?>


