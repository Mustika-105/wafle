<html>
<head>
		        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen"/>
				<title>DATA SPP</title>
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
<body>

<form action="spp_ubah_proses.php" method="POST">
	

<div id="css_form">
<div class="css_class">

			<table border="0">
			
				<tr>
					<td>Ubah SPP</td>
				</tr>
				<?php
				include 'koneksi.php';
				$id= $_GET['id'];
				$no=1;
				$data=mysqli_query($koneksi,"SELECT * FROM spp where id_spp='$id'");
				while($d=mysqli_fetch_array($data)){
					?>
				<tr>
					<td>ID SPP</td>
					<td><input type="text" name="id_spp" value="<?php echo $d['id_spp'];?>" ></td>
				</tr>
				<tr>
					<td>Tahun</td>
					<td><input type="text" name="tahun" value="<?php echo $d['tahun']; ?>"/></td>
				</tr>
				<tr>
					<td>Nominal</td>
               		<td><input type="text" name="nominal" value="<?php echo $d['nominal']; ?>"/></td>
				</tr>
				
				<?php
				}
				?>
				</table>
				
				<input type="submit" name="submit" value="Submit" id="submit">
		</div>
			</div>
					
			
<div id="footer">
			&copy; 2022 Pembelajaran Pemrograman, Blog, All Right Reserved.
</div>
	</form>
	


</body>

</html>
