<?php
    include 'koneksi.php';

    $id_petugas		=$_POST['id_petugas'];
    $username 		=$_POST['username'];
    $password		=$_POST['password'];
	$nama_petugas 	=$_POST['nama_petugas'];
    $level			=$_POST['level'];

    mysqli_query($koneksi,"INSERT into petugas values ('$id_petugas','$username','$password',
							'$nama_petugas','$level')");
	header ('location:data_petugas_index.php');
?>