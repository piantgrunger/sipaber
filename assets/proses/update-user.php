<?PHP
include"../include/koneksi.php";
include"../include/session_admin.php";
$tgl_			= date("d-m-Y, g:i a"); 
				$admin		 	= $nama_1;

				$id_user			= $_POST['id_user'];
				$jenis				= $_POST['jenis'];
				$nama				= $_POST['nama'];
				$username			= $_POST['username'];
				$id_skpd			= $_POST['id_skpd'];
				$telp			= $_POST['telp'];
				
				//$a1 			= strtoupper($tmt_pelantikan);
				//$a2 			= strtoupper($tmt_gladi);
				

				$sql_query 	= " update users set 
								nama			 		= '$nama',
								email			 		= '$username',
								kategori		 		= '$jenis',
								telp			 		= '$telp',
								id_skpd			 		= '$id_skpd',
								tgl			 			= '$tgl_'
								
								
								where id				='$id_user'";
				$sql_skpd	= mysqli_query($conn, $sql_query);
				if ($sql_skpd)
				{
				
				header("location:../../user.php");
				}
				else 
				{
				echo $sql_query;
				//header("location:../../../Error-System");	
				//header("location:../admin.php?p=u_tambahjab&pesan=1&isi=Gagal Menambahkan Unit Organisasi Baru Dengan nama $a1 karena ".mysql_error());
				}
?>