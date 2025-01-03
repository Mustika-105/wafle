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
                        <li><a href ="data_petugas.php"><h3>Petugas</h3></a></li>
                        <li><a href ="kelas_index.php"><h3>Kelas</h3></a></li>
                        <li><a href ="pembayara_index.php"><h3>Transaksi SPP</h3></a></li>
                        <li><a href ="histori.php"><h3>Histori</h3></a></li>
                       
                    </ul>
                    

                </div>
<body>

<form action="data_siswa_ubah_proses.php" method="get">
	<?php
	include 'koneksi.php';
	$id	=$_GET['id'];
	$data=mysqli_query($koneksi,"SELECT * FROM siswa where siswa.nisn ='$id'");
	while($d=mysqli_fetch_array($data)){
	?>

<div id="css_form">
<div class="css_class">

			<table>
				<tr>
					<td>Input data siswa</td>
				</tr>
				<tr>
					<td>NISN</td>
					<td><input type="text" name="nisn" value="<?php echo $d['nisn'];?>" /></td>
				</tr>
				<tr>
					<td>NIS</td>
					<td><input type="text" name="nis" value="<?php echo $d['nis'];?>"/></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama'];?>" /></td>
				</tr>
				<tr>
				<td>Jurusan</td>
					<td><select name="id_kelas" id="id_kelas" onchange="jurusan_autofill()">
					<?php
						include 'koneksi.php';
						$data=mysqli_query($koneksi,"select * from kelas");
						while($d_kelas=mysqli_fetch_array($data)){
					?>
					                                    
							<option value="<?php echo $d_kelas['id_kelas'];  ?>"><?php echo $d_kelas['kompetensi_keahlian']; ?></option>
						 <?php
						}
						?>
							 
							  </select> </td>
						  
					  </tr>

				<tr>
					<td>Alamat</td>
					<td><textarea name="alamat" id="alamat"><?php echo $d['alamat'];?></textarea></td>
				</tr>
				<tr>
					<td>Nomor Telepon</td>
					<td><input type="text" name="no_telp" id="no_telp" value="<?php echo $d['no_telp'];?>"/></td>
				</tr>
				<tr>
					<td>SPP</td>	
					<td><select name="id_spp" id="id_spp" onclick="spp_autofill()">
					<?php
						include 'koneksi.php';
						$data=mysqli_query($koneksi,"select * from spp");
						while($d_spp=mysqli_fetch_array($data)){
					?>
					                                    
							<option value="<?php echo $d_spp['id_spp'];  ?>"><?php echo $d_spp['nominal']; ?></option>
						 <?php
						}
						?>					  				
							  
						</select> </td>
								 <td><input type="text" name="tahun" id="tahun" disabled></td>
								 <td><textarea id="nominal" name="nominal" disabled></textarea></td>
													  
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Submit" id="submit"></td>
					</tr>
					
					<?php
				}
				?>
				</table>
				
				
				
		</div>
			</div>
			
					

<script src="jquery/jquery-3.6.3.js"></script>
                     <script type="text/javascript">

                            function jurusan_autofill(){
                                var id_kelas  = $("#id_kelas").val();
                               $.ajax({
                                        url:    'jurusan_autofill_ajax.php',
                                        data:   'id_kelas='+id_kelas,
                            }).done(function(data){
                                var json = data,
                                               obj= JSON.parse(json);
                                               $("#nama_kelas").val(obj.nama_kelas);
                                               $("#kompetensi_keahlian").val(obj.kompetensi_keahlian);
                                        }) ;         
                            }
                     </script>
					  <script src="jquery/jquery-3.6.3.js"></script>
                     <script type="text/javascript">

                            function spp_autofill(){
                                var id_spp  = $("#id_spp").val();
                               $.ajax({
                                        url:    'spp_autofill.php',
                                        data:   'id_spp='+id_spp,
                            }).done(function(data){
                                var json = data,
                                               obj= JSON.parse(json);
                                               $("#tahun").val(obj.tahun);
                                               $("#nominal").val(obj.nominal);
                                        }) ;         
                            }
                     </script>
                   
			
<div id="footer">
			&copy; 2022 Pembelajaran Pemrograman, Blog, All Right Reserved.
</div>
	</form>
	


</body>

</html>
