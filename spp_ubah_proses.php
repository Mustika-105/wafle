<?php
	include "koneksi.php";

	$id_spp		= $_POST['id_spp'];
	$tahun		= $_POST['tahun'];
	$nominal	= $_POST['nominal'];

//update ke database

mysqli_query ($koneksi, "UPDATE spp set tahun='$tahun', nominal='$nominal' where id_spp='$id_spp'");

	header ('location:spp_index.php');


?>