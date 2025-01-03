<?php
		
		include'koneksi.php';
		
		$id=$_GET['id'];
		
		mysqli_query($koneksi,"DELETE from spp where id_spp='$id'");
		
		header("location:spp_index.php");




?>