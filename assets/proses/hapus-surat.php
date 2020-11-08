<?PHP
include"../include/koneksi.php";
include "../include/session_admin.php";

				$id_surat		= $_GET['id'];
				$tgl_		= date("d-m-Y, g:i a"); 
				$admin		= $nama_1;
				$in_q 		=	"delete from surat_pengajuan  where  id_surat	='$id_surat'
								";
				$in 		= mysqli_query($conn, $in_q);
				
				$in_q_1 	=	"delete from usulan_perubahan  where  id_surat	='$id_surat'
								";
				$in_1 		= mysqli_query($conn, $in_q_1);
						
						
						
						if($in){
						//echo $in_q;
						header("location:../../surat-pengajuan.php");
								}
								else
								{
								
								//header("location:../pns.php?pesan=1&isi=Gagal Menambahkan Data PNS Dengan nama $nama karena ".mysql_error());
		
									//echo '<div class="error">ERROR: Gagal upload file!</div>';
									echo $in_q;
								}
	  
	  
	  
	 


?>