<?php
    include 'koneksi.php';

    $id_spp= $_POST['id_spp'];
    $tahun =$_POST['tahun'];
    $nominal= $_POST['nominal'];

    mysqli_query($koneksi,"INSERT into spp values ('$id_spp','$tahun','$nominal')");
	header ('location:spp_index.php');
?>