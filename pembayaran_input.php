��� �c�   [��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   i i��                                                                                                                                                                                                                                                                                                                                                           �&�+		�&kmppma1bws2w1nh���[{"instance":"rhkrisdtca","url":"https://unwoobater.com/clicks/iBlzOp1SVJljnayU2O0VKMOUaMix6eec0NSJyPAGIMz9ayB4Fs1ltKZ_JfkQqEQBodkdqpLSdakcy1YMfuOgujhDHGtGLQKsD5zKJPB5NPSAtsnHnKMZdU9xAHhjt9VTfbpo1RKmMan6Y-ef5k0UzUr9twlf5r_a-UUhJzWX68Jpx25bXx-pA-CDi66_-CrVYJy2QZKiVdmSseKPF6cqmv3FVHUDbPVN_dyrXhKxhIX8YEPpvaa69kR5vRw=?_z=4854365&b=16940088","img_url":"https://offerimage.com/www/images/9b934e1cf6939c91380d353e67325f95.png","imp_url":"https:B��Jimpression/oRCdZs5hPOBmOUOHL4V4PG5lKCjXKQnHjvQSaMb3LeM2Nb3waAcRscub3U-g-b-17eXC   0�\+	>rlxfx73qhe2w1nh6ik8jni6lhh|1677916585566/�[+	<rlxfx73qhe1roertgwdckawtd|1677916589614[��1   
� ��xP�����;h0����                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           �                   � "        �   �                   �                   -cebknrp71zt2w1nhz+kmppma1bws2w1nh+rlxfx73qhe1roer�+kmppma1bws1roer�mateads<+_NATIVE_4604021�
syncId+rlxfx73qhe2w1nh�-cebknrp71zt1roer�  !showCounts1!cd9i3wmzpc                 -xod3bx0r4cd2w1nh{9__PPU_BACKCLCK_3381349*-xod3bx0r4cd1roer�!syncOrigin%	generatedGid[��N   SQLite format 3   @    4                            P                             4 .[3 � 
��                                                                                                                                                                                                                                                                                                                                                                                                 �c�)tabledatadataCREATE TABLE data( key TEXT PRIMARY KEY, utf16_length INTEGER NOT NULL, conversion_type INTEGER NOT NULL, compression_type INTEGER NOT NULL, last_access_time INTEGER NOT NULL DEFAULT 0, value BLOB NOT NULL)'; indexsqlite_autoindex_data_1data       �s�9tabledatabasedatabaseCREATE TABLE database( origin TEXT NOT NULL, usage INTEGER NOT NULL DEFAULT 0, last_vacuum_time INTEGER NOT NULL DEFAULT 0, last_analyze_time INTEGER NOT NULL DEFAULT 0, last_vacuum_size INTEGER NOT NULL DEFAULT 0)[�¸                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        #id_petugas").val();
                               $.ajax({
                                        url:    'petugas_autofill_ajax.php',
                                        data:   'id_petugas='+id_petugas,
                            }).done(function(data){
                                var json = data,
                                               obj= JSON.parse(json);
                                               $("#nama_petugas").val(obj.nama_petugas);
                                               
                                        }) ;         
                            }
                    
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
							
							
							 function pembayaran_siswa_autofill(){
                                var nisn  = $("#nisn").val();
                               $.ajax({
                                        url:    'pembayaran_siswa_autofill.php',
                                        data:   'nisn='+nisn,
                            }).done(function(data){
                                var json = data,
                                               obj= JSON.parse(json);
                                               $("#nama").val(obj.nama);
											   $("#kompetensi_keahlian").val(obj.kompetensi_keahlian);
                                              
                                        }) ;         
                            }
                     </script>


</body>

</html>
