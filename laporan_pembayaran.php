<?php


require('fpdf/fpdf.php');
include "koneksi.php";


//pengaturan PDF

$pdf= new fpdf('P','mm','A4');
$pdf->AddPage();


$pdf->setFont('Times','B','13');
$pdf->Cell(200,10,'Laporan Transaksi',0,0,'C');

$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('times','B','9');
$pdf->Cell(10,7,'No',1,0,'C');
$pdf->Cell(30,7,'Kode Transaksi',1,0,'C');
$pdf->Cell(30,7,'Nama Petugas',1,0,'C');
$pdf->Cell(30,7,'Nama Siswa',1,0,'C');
$pdf->Cell(30,7,'Tanggal Bayar',1,0,'C');
$pdf->Cell(30,7,'Jumlah Bayar',1,0,'C');


$pdf-> Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data= mysqli_query($koneksi,"SELECT pembayaran.id_pembayaran, petugas.nama_petugas, siswa.nama,
							pembayaran.tgl_bayar,pembayaran.bulan_dibayar, pembayaran.tahun_dibayar,
							spp.nominal FROM pembayaran, siswa, petugas,spp where  
							pembayaran.nisn=siswa.nisn and pembayaran.id_petugas=petugas.id_petugas and 
							pembayaran.id_spp=spp.id_spp " );
while($d=mysqli_fetch_array($data)){
	$pdf-> Cell(10,6, $no++,1,0,'C');
	$pdf->Cell(30,6,$d['id_pembayaran'],1,0);
	$pdf->Cell(30,6,$d['nama_petugas'],1,0);
	$pdf->Cell(30,6,$d['nama'],1,0);
	$pdf->Cell(30,6,$d['tgl_bayar'].'-'.$d['bulan_dibayar'].'-'.$d['tahun_dibayar'],1,0);
	$pdf->Cell(30,6,$d['nominal'],1,1);
	
	

}
	$pdf-> Output();





?>