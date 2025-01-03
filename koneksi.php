<?php

$koneksi	=	mysqli_connect("localhost","root","","db_spp");
	//cek koneksi database
if (mysqli_connect_error()){
	echo "Koneksi gagal: " . mysqli_connect_error();
}






?>