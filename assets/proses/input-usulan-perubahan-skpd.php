<?PHP
include"../include/koneksi.php";
include"../include/session_user.php";

				
				$tgl_			= date("d-m-Y, g:i a"); 
				$admin		 	= $nama_1;
				$year1			= date("Y");

				$id_surat			= $_POST['id_surat'];
				$id_skpd			= $_POST['id_skpd'];
				$kode_rek			= $_POST['kode_rek'];
				$program		 	= $_POST['program'];
				$kegiatan			= $_POST['kegiatan'];
				$objek_belanja	 	= $_POST['objek_belanja'];
				$uraian				= $_POST['uraian'];
				$anggaran_0		 	= $_POST['anggaran_0'];
				$anggaran_1		 	= $_POST['anggaran_1'];
				$keterangan		 	= $_POST['keterangan'];
				
				//$a1 			= strtoupper($tmt_pelantikan);
				//$a2 			= strtoupper($tmt_gladi);
				

				$sql_query 	= "insert usulan_perubahan  values
				('', 
				'$id_surat', 
				'$id_skpd', 
				'$kode_rek', 
				'$program', 
				'$kegiatan', 
				'$objek_belanja', 
				'$uraian', 
				'$anggaran_0',
				'$anggaran_1', 
				'$keterangan',				
				'$admin', 
				'$tgl_',
				'$year1'
				)";
				$sql_skpd	= mysqli_query($conn, $sql_query);
				if ($sql_skpd)
				{
				
				header("location:../../usulan-perubahan-skpd.php");
				}
				else 
				{
				echo $sql_query;
				//header("location:../../../Error-System");	
				//header("location:../admin.php?p=u_tambahjab&pesan=1&isi=Gagal Menambahkan Unit Organisasi Baru Dengan nama $a1 karena ".mysql_error());
				}
?>