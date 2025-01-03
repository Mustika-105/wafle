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
<body>

<form action="data_petugas_input_proses.php" method="POST">
	

<div id="css_form">
<div class="css_class">

			<table>
				<tr>
					<td>Input data siswa</td>
				</tr>
				<tr>
					<td>Id Petugas</td>
					<td><input type="text" name="id_petugas" /></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password"/></td>
				</tr>
				
            	<tr>
					<td>Nama Petugas</td>
					<td><input type="text" name="nama_petugas" /></td>
				</tr>
				<tr>
					<td>Level</td>
					<td><input type="radio" name="level" value="admin"> Admin</td>
					<td><input type="radio" name="level" value="petugas"> Petugas</td>
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
