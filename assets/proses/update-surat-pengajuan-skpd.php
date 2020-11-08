<?PHP
include"../include/koneksi.php";
include"../include/session_user.php";
$tgl_			= date("d-m-Y, g:i a"); 
				$admin		 	= $nama_1;

				$id_surat			= $_POST['id_surat'];
				$keterangan			= $_POST['keterangan'];
				$nomor_surat		= $_POST['nomor_surat'];
			
				
				//$a1 			= strtoupper($tmt_pelantikan);
				//$a2 			= strtoupper($tmt_gladi);
				

				$sql_query 	= " update surat_pengajuan set 
								no_surat			= '$nomor_surat',
								keterangan			= '$keterangan',
								admin		 		= '$admin',
								tgl_input			= '$tgl_'
								
								
								where id_surat				='$id_surat'";
				$sql_skpd	= mysqli_query($conn, $sql_query);
				if ($sql_skpd)
				{
				
				header("location:../../surat-pengajuan-skpd.php");
				}
				else 
				{
				echo $sql_query;
				//header("location:../../../Error-System");	
				//header("location:../admin.php?p=u_tambahjab&pesan=1&isi=Gagal Menambahkan Unit Organisasi Baru Dengan nama $a1 karena ".mysql_error());
				}
?>