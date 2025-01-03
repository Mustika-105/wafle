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
                        <li><a href="surat_masuk.php"><h3>Surat Masuk</h3></a></li>
						<li><a href="surat_keluar.php"><h3>Surat Keluar</h3></a></li>                       
                       
                    </ul>
                </div>
<body>

<form action="kelas_ubah_proses.php" method="POST">
	

<div id="css_form">
<div class="css_class">

			<table border="0">
			
				<tr>
					<td>Input data Kelas</td>
				</tr>
				<tr>
					<td>ID Kelas</td>
					<td><input type="text" name="id_kelas"/></td>
				</tr>
				<tr>
					<td>Nama Kelas</td>
					<td><input type="text" name="nama_kelas"/></td>
				</tr>
				<tr>
					<td>Kompetensi Keahlian</td>
               		<td><input type="text" name="kompetensi_keahlian" /></td>
				</tr>
				
				
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
