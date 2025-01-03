<?php
	include 'koneksi.php';
	
	$id_pembayaran=$_GET['id'];
	
	mysqli_query($koneksi,"DELETE from pembayaran where id_pembayaran='$id_pembayaran' ");
	
	header ("location:pembayaran_index.php");

?>