<html>
		<head>
		        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen"/>
				<title>DATA SISWA</title>
		</head>
		<body>
		      <div id="wrapper">
                <div id="header">
				<div id="judul">
                        <h3>Aplikasi Pembayaran SPP</h3>
				</div>
                </div>
                <div id="navigasi">
                     <ul id="menu">
                        <li><a href="beranda.php"><h3>Beranda</h3></a></li>
                        <li><a href="data_siswa_index.php"><h3>Siswa</h3></a></li>
                        <li><a href ="data_petugas_index.php"><h3>Petugas</h3></a></li>
                        <li><a href ="kelas_index.php"><h3>Kelas</h3></a></li>
                        <li><a href ="spp_index.php"><h3>SPP</h3></a></li>
                        <li><a href ="pembayaran_index.php"><h3>Transaksi SPP</h3></a></li>
                        <li><a href ="histori.php"><h3>Histori</h3></a></li>
                       
                    </ul>
                    

                </div>
 <!--dekorasi untuk tabel-->    

<div id="tbl_siswa_judul"> 
<div class="siswa"><h3> Tabel Siswa<h3></div>
<div class="btn_option">
<table border="0">	
	<tr><td><div class="input_siswa"><a href="data_siswa_input.php">Input Siswa</a></div></td>
			<td><div class="print_laporan"><a href="laporan_siswa.php">Print Laporan</a></div></td>
	</tr>
</table>
</div>

			<table id="jdl_tbl1" border="0" width="1140">
		<tr>
			<td>No</td>
			<td>NISN</td>
			<td>NIS</td>
			<td>Nama</td>
			<td>Kelas</td>
			<td>Alamat</td>
			<td>Telepon</td>
			<td>Nominal</td>
			<td>Opsi</td>
		</tr>	
			</table>

<div id="tbl_isi">
<div class="button">
<table id="isi" width="1140">
				<?php
				include 'koneksi.php';
				$no=1;
				$data=mysqli_query($koneksi,"select siswa.nisn, siswa.nis, siswa.nama, 
											kelas.nama_kelas, siswa.alamat, siswa.no_telp, 
											spp.nominal  from siswa, kelas, spp  
											where siswa.id_kelas= kelas.id_kelas and siswa.id_spp= spp.id_spp order by nisn");
				while($d=mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $d['nisn']; ?></td>
						<td><?php echo $d['nis']; ?></td>
						<td><?php echo $d['nama']; ?></td>
						<td><?php echo $d['nama_kelas']; ?></td>
						<td><?php echo $d['alamat']; ?></td>
						<td><?php echo $d['no_telp']; ?></td>
						<td><?php echo $d['nominal']; ?></td>
							
					<td><a id="ubah_btn" href="data_siswa_ubah.php?id=<?php echo $d['nisn']; ?>">Ubah</a>
							<a id="hapus_btn" href="data_siswa_hapus.php?id=<?php echo$d['nisn']; ?>" onclick="return confirm('Hapus data <?php echo $d['nisn']; ?> ?')">Hapus</a></td></div>
				</tr>

<?php
				}
?>
		</table>
		</div>
		 </div>
		<div id="footer">
			&copy; 2022 Pembelajaran Pemrograman, Blog, All Right Reserved.
</div>

 </div>
		</body>	
</html>