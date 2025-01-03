<?php
    include 'koneksi.php';

    $id_petugas= $_GET['id_petugas'];
    
    $sql= mysqli_query($koneksi,"Select * from petugas where id_petugas='$id_petugas'");
    $d= mysqli_fetch_array($sql);
    $data = array(
            'nama_petugas' => $d['nama_petugas'],
            

    );

    echo json_encode($data);

?>