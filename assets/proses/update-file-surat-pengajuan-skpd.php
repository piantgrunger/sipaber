<?php
include"../include/koneksi.php";
include "../include/session_user.php";
if (isset($_POST['id_skpd'])){ 
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip', 'jpg', 'jpeg', 'gif', 'png');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				$tahun	 		= $_POST['tahun'];
				$nomor_surat 	= $_POST['nomor_surat'];
				$keterangan		= $_POST['keterangan'];
				$id_skpd		= $_POST['id_skpd'];
				$password 		= md5($_POST['nomor_surat']);
				$id_surat		= $_POST['id_surat'];
				$tgl			= date("d-m-Y, g:i a"); 
								
				$na				= $password;
		
				

					
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 3044070){
						$lokasi = 'files/'.$na.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi); //lamp1
						
					
						
						$in_q ="update surat_pengajuan set 
								lokasi				= '$lokasi',
								admin		 		= '$admin',
								tgl_input			= '$tgl'
								
								
								where id_surat				='$id_surat'";
						
						
						$in = mysqli_query($conn, $in_q);
						if($in){

						header("location:../../surat-pengajuan-skpd.php");
						}else{
						
						//header("location:../admin.php?pesan=1&isi=Gagal Menambahkan Data PNS Dengan nama $nama karena ".mysql_error());

							//echo '<div class="error">ERROR: Gagal upload file!</div>';
							echo $in_q;
						}
					}
					else{
						header("location:../admin.php?pesan=1&isi=ERROR: Besar ukuran file (file size) maksimal 1 Mb ".mysql_error());
						//echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
					}
				}else{
echo $in_q;
				}
}
?>



