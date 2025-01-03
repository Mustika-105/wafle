<html>
		<head>
		        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen"/>
				<title>DATA Petugas</title>
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
<div class="siswa"><h3> Tabel Petugas<h3></div>
<div class="btn_option">
<table border="0">	
	<tr><td><div class="input_siswa"><a href="data_petugas_input.php">Input Petugas</a></div></td>
			<td><div class="print_laporan"><a href="laporan_petugas.php">Print Laporan</a></div></td>
	</tr>
</table>
</div>

			<table id="jdl_tbl1" border="0" width="1140">
		<tr>
			<td>No</td>
			<td>Id Petugas</td>
			<td>Username</td>
			<td>Password</td>
			<td>Nama Petugas</td>
			<td>Level</td>
			<td>Opsi</td>
		</tr>	
			</table>

<div id="tbl_isi">
<div class="button">
<table id="isi" width="1140">
				<?php
				include 'koneksi.php';
				$no=1;
				$data=mysqli_query($koneksi,"SELECT * FROM petugas");
				while($d=mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $d['id_petugas']; ?></td>
						<td><?php echo $d['username']; ?></td>
						<td><?php echo $d['password']; ?></td>
						<td><?php echo $d['nama_petugas']; ?></td>
						<td><?php echo $d['level']; ?></td>
													
					<td><a id="ubah_btn" href="data_petugas_ubah.php?id=<?php echo $d['id_petugas']; ?>">Ubah</a>
							<a id="hapus_btn" href="data_petugas_hapus.php?id=<?php echo$d['id_petugas']; ?>" onclick="return confirm('Hapus data <?php echo $d['id_petugas']; ?> ?')">Hapus</a></td></div>
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