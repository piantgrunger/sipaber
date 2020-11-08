<?PHP
include"../include/koneksi.php";
include"../include/session_admin.php";
$tgl_			= date("d-m-Y, g:i a"); 
				$admin		 	= $nama_1;

				$id_surat			= $_POST['id_surat'];
				$keterangan			= $_POST['keterangan'];
				$nomor_surat		= $_POST['nomor_surat'];
				//$id_skpd			= $_POST['id_skpd'];
			
				
				//$a1 			= strtoupper($tmt_pelantikan);
				//$a2 			= strtoupper($tmt_gladi);
					$sql_bro_ 		="select * from surat_pengajuan where id_surat='$id_surat' ";
					$mysql_			= mysqli_query ($conn,$sql_bro_);
					$sql_pim		= mysqli_fetch_array($mysql_);
					$id_skpd		= $sql_pim['id_skpd'];

				$sql_query 	= " update surat_pengajuan set 
								no_surat			= '$nomor_surat',
								keterangan			= '$keterangan',
								admin		 		= '$admin',
								id_skpd		 		= '$id_skpd',
								tgl_input			= '$tgl_'
								
								
								where id_surat				='$id_surat'";
				$sql_skpd	= mysqli_query($conn, $sql_query);
				
				$sql_query_s 	= " update usulan_perubahan set 
									
									id_skpd		 		= '$id_skpd',
									tgl_input			= '$tgl_'
								
								
								where id_surat				='$id_surat'";
				$sql_skpd_s		= mysqli_query($conn, $sql_query_s);
				
				if ($sql_skpd_s)
				{
				
				header("location:../../surat-pengajuan.php");
				}
				else 
				{
				echo $sql_query;
				//header("location:../../../Error-System");	
				//header("location:../admin.php?p=u_tambahjab&pesan=1&isi=Gagal Menambahkan Unit Organisasi Baru Dengan nama $a1 karena ".mysql_error());
				}
?>