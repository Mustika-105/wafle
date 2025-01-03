<?php
	include "koneksi.php";

	$id_petugas = $_GET['id_petugas'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nama_petugas = $_POST['nama_petugas'];
	$level = $_POST['level'];
	
	$data = mysqli_query($koneksi, "update petugas set id_petugas='$id_petugas', username='$username',
	password='$password',nama_petugas='$nama_petugas',level='$level'");
	header ('location:data_petugas_index.php');



?>