<html>
<head>
		        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen"/>
				<title>DATA KELAS</title>
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
                        <li><a href ="spp_input.php"><h3>SPP</h3></a></li>
                        <li><a href ="pembayaran_index.php"><h3>Transaksi SPP</h3></a></li>
                        <li><a href ="histori.php"><h3>Histori</h3></a></li>
                       
                    </ul>
                    

                </div>
<body>

<form action="kelas_ubah_proses.php" method="POST">
	

<div id="css_form">
<div class="css_class">

			<table border="0">
			<?php
			include "koneksi.php";
			$id	=$_GET['id'];
			$data=mysqli_query($koneksi,"SELECT * FROM kelas where id_kelas ='$id'");
			while($d=mysqli_fetch_array($data)){
			?>
				<tr>
					<td>Input data Kelas</td>
				</tr>
				<tr>
					<td>ID Kelas</td>
					<td><input type="text" name="id_kelas" value="<?php echo $d['id_kelas']; ?>" disabled /></td>
				</tr>
				<tr>
					<td>Nama Kelas</td>
					<td><input type="text" name="nama_kelas" value="<?php echo $d['nama_kelas']; ?>" /></td>
				</tr>
				<tr>
					<td>Kompetensi Keahlian</td>
               		<td><input type="text" name="kompetensi_keahlian" value="<?php echo $d['kompetensi_keahlian']; ?>"/></td>
				</tr>
				
				
				</table>
				<?php
			}
				?>
				<input type="submit" name="submit" value="Submit" id="submit">
		</div>
			</div>
					
			
<div id="footer">
			&copy; 2022 Pembelajaran Pemrograman, Blog, All Right Reserved.
</div>
	</form>
	


</body>

</html>
