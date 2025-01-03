<?php
     include 'koneksi.php';

    $nisn= $_GET['nisn'];
    
    $sql= mysqli_query($koneksi,"Select siswa.nisn,siswa.nama, kelas.kompetensi_keahlian from siswa,kelas
						where nisn='$nisn' and siswa.id_kelas=kelas.id_kelas");
    $d= mysqli_fetch_array($sql);
    $data = array(
            'nama' => $d['nama'],
            'kompetensi_keahlian' => $d['kompetensi_keahlian']

    );

    echo json_encode($data);

?>