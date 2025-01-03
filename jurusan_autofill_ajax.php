<?php
    include 'koneksi.php';

    $id_kelas= $_GET['id_kelas'];
    
    $sql= mysqli_query($koneksi,"Select * from kelas where id_kelas='$id_kelas'");
    $d= mysqli_fetch_array($sql);
    $data = array(
            'nama_kelas' => $d['nama_kelas'],
            'kompetensi_keahlian' => $d['kompetensi_keahlian']

    );

    echo json_encode($data);

?>