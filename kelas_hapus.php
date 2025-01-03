<?php 
include'koneksi.php';
		
		$id=$_GET['id'];
		
		mysqli_query($koneksi,"DELETE from kelas where id_kelas='$id'");
		
		header("location:kelas_index.php");
?>