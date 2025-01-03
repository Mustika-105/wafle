<?php


require('fpdf/fpdf.php');
include "koneksi.php";

//$id_pembayaran = $_GET['id'];

//pengaturan PDF

$pdf= new fpdf('L','mm','A4');
$pdf->AddPage();


$pdf->setFont('Times','B','13');
$pdf->Cell(200,10,'Laporan Transaksi',0,0,'C');

$pdf->Cell(10,15,11,0,1);
$pdf->SetFont('times','B','9');
$pdf->Cell(10,7,'No',1,0,'C');
$pdf->Cell(30,7,'NISN',1,0,'C');
$pdf->Cell(30,7,'NIS',1,0,'C');
$pdf->Cell(55,7,'Nama Siswa',1,0,'C');
$pdf->Cell(50,7,'Jurusan',1,0,'C');
$pdf->Cell(30,7,'Alamat',1,0,'C');
$pdf->Cell(30,7,'Nomor Telepon',1,0,'C');
$pdf->Cell(30,7,'Nominal SPP',1,0,'C');


$pdf-> Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data= mysqli_query($koneksi,"select siswa.nisn, siswa.nis, siswa.nama, 
								kelas.kompetensi_keahlian, siswa.alamat, siswa.no_telp, 
								spp.nominal  from siswa, kelas, spp  
								where siswa.id_kelas= kelas.id_kelas and siswa.id_spp= spp.id_spp order by nisn" );
while($d=mysqli_fetch_array($data)){
	$pdf-> Cell(10,6, $no++,1,0,'C');
	$pdf->Cell(30,6,$d['nisn'],1,0);
	$pdf->Cell(30,6,$d['nis'],1,0);
	$pdf->Cell(55,6,$d['nama'],1,0);
	$pdf->Cell(50,6,$d['kompetensi_keahlian'],1,0);
	$pdf->Cell(30,6,$d['alamat'],1,0);
	$pdf->Cell(30,6,$d['no_telp'],1,0);
	$pdf->Cell(30,6,$d['nominal'],1,1);
	
	

}
	$pdf-> Output();





?>