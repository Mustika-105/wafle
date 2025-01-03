<?php
	include 'koneksi.php';
	
	$nisn= $_GET['id'];
	
	mysqli_query($koneksi,"DELETE from siswa where nisn='$nisn'");
	
	header ("location: data_siswa_index.php");



?>