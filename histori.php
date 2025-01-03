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
<div class="siswa"><h3> Tabel Pembayaran<h3></div>
<div class="btn_option">
<table border="0">	
	<tr>
			<td width="121"></td>
			<td><div class="print_laporan"><a href="laporan_pembayaran.php">Print Laporan</a></div></td>
	</tr>
</table>
</div>


			<table id="jdl_tbl1" border="0" width="1140">
		<tr>
			<td>No</td>
			<td>ID Pembayaran</td>
			<td>Nama Petugas</td>
			<td>Nama siswa</td>
			<td>Tanggal Bayar</td>
			<td>Nominal</td>
			<td>Opsi</td>
		</tr>	
			</table>

<div id="tbl_isi">
<div class="button">
<table id="isi" width="1140">
				<?php
					include "koneksi.php";
					$no=1;
					//$data=mysqli_query($koneksi,"select * from pembayaran");
					$data=mysqli_query($koneksi,"select pembayaran.id_pembayaran, petugas.nama_petugas, siswa.nama ,
						pembayaran.tgl_bayar,pembayaran.bulan_dibayar, 
						pembayaran.tahun_dibayar, spp.nominal
						FROM pembayaran, siswa, petugas,spp
					WHERE pembayaran.id_petugas=petugas.id_petugas AND pembayaran.nisn=siswa.nisn and
					pembayaran.id_spp = spp.id_spp ");
					while($d=mysqli_fetch_array($data)){
				?>
				<?php
					//$data2=mysqli_query($koneksi,"select * from siswa");
					//while($d2=mysqli_fetch_array($data2)){
				?>
				<tr>
					<td><?php echo $no++;?></td>
					<td><?php echo $d['id_pembayaran'];?></td>
					<td><?php echo $d['nama_petugas'];?></td>
					<td><?php echo $d['nama'];?></td>
					<td><?php echo $d['tgl_bayar'];
							  echo "-";
							  echo $d['bulan_dibayar'];
							  echo "-";
							  echo $d['tahun_dibayar'];?></td>
					<td><?php echo $d['nominal'];?></td>
					<td><a id="ubah_btn" href="kuitansi.php?id=<?php echo $d['id_pembayaran'];?>">Cetak Kuitansi</a>
					</div>
				</tr>

				<?php
					}
				?>
				<?php
					//}
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