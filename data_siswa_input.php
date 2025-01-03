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

<form action="data_siswa_input_proses.php" method="POST">
	

<div id="css_form">
<div class="css_class">

			<table>
				<tr>
					<td>Input data siswa</td>
				</tr>
				<tr>
					<td>NISN</td>
					<td><input type="text" name="nisn" /></td>
				</tr>
				<tr>
					<td>NIS</td>
					<td><input type="text" name="nis" /></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"/></td>
				</tr>
				<tr>
                  
					<td>Jurusan</td>			                                    
					<td><select name="id_kelas" id="id_kelas" onclick="jurusan_autofill()">
					<?php
						include 'koneksi.php';
						$data=mysqli_query($koneksi,"select * from kelas");
						while ($d=mysqli_fetch_array($data)){
					?>  
						<option value="<?php echo $d['id_kelas'];  ?>"><?php echo $d['nama_kelas']; ?></option>
						 <?php
						}
						?>
							  </select> </td>
							 
						  
						   <td><textarea id="kompetensi_keahlian" name="kompetensi keahlian" disabled></textarea></td>
						</td>
					<!--<td><input type="text"name="id_kelas" value="<?php //echo $d['nama_kelas'];?>" /></td>-->
				</tr>
                </form>
				<tr>
					<td>Alamat</td>
					<td><textarea name="alamat" ></textarea></td>
				</tr>
				<tr>
					<td>Nomor Telepon</td>
					<td><input type="text" name="no_telp" /></td>
				</tr>
				<tr>
					<td>ID SPP</td>	

							<td><select name="id_spp" id="id_spp" onchange="spp_autofill()">						
					<?php
						include 'koneksi.php';
						$data=mysqli_query($koneksi,"select * from spp");
						while ($d=mysqli_fetch_array($data)){
					?>  
						<option value="<?php echo $d['id_spp'];  ?>"><?php echo $d['tahun']; ?></option>
						 <?php
						}
						?>
							  </select> </td>
							 
						   <td><textarea id="nominal"  name ='nominal' disabled></textarea></td>
						</td>
						                  
					
				</tr>
				</table>
				<input type="submit" name="submit" value="Submit" id="submit">
		</div>
			</div>
					
			
<div id="footer">
			&copy; 2022 Pembelajaran Pemrograman, Blog, All Right Reserved.
</div>
	</form>
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


</body>

</html>
