<?PHP
include"../include/koneksi.php";
include"../include/session_admin.php";

				
				$tgl_			= date("d-m-Y, g:i a"); 
				$admin		 	= $nama_1;
				$year1			= date("Y");

				$nama			= $_POST['nama'];
				
				
				$a1 			= strtoupper($nama);
				//$a2 			= strtoupper($tmt_gladi);
				

				$sql_query 	= "insert skpd  values
				('', 
				'$a1', 
				'', 
				'', 
				'', 
				''
				)";
				$sql_skpd	= mysqli_query($conn, $sql_query);
				if ($sql_skpd)
				{
				
				header("location:../../skpd.php");
				}
				else 
				{
				echo $sql_query;
				//header("location:../../../Error-System");	
				//header("location:../admin.php?p=u_tambahjab&pesan=1&isi=Gagal Menambahkan Unit Organisasi Baru Dengan nama $a1 karena ".mysql_error());
				}
?>