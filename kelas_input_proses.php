<?php
    include 'koneksi.php';

    $id_kelas= $_POST['id_kelas'];
    $nama_kelas =$_POST['nama_kelas'];
    $kompetensi_keahlian= $_POST['kompetensi_keahlian'];

    mysqli_query($koneksi,"INSERT into kelas values ('$id_kelas','$nama_kelas','$kompetensi_keahlian')");
	header ('location:kelas_index.php');
?>