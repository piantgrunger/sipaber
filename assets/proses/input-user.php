<?PHP
include"../include/koneksi.php";
include"../include/session_admin.php";
if (isset($_POST['nama'])){ 

				$allowed_ext	= array('jpg', 'jpeg', 'gif', 'png');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				$username 		= $_POST['username'];
				$nama 		= $_POST['nama'];
				$jenis		= $_POST['jenis'];
				$telp		= $_POST['telp'];
				$id_skpd	= $_POST['id_skpd'];
				$pswd		= $_POST['pswd'];

				$password 	= md5($_POST['pswd']);
	

				$tgl			= date("d-m-Y, g:i a"); 
				$year			= date("d-m-Y");
				$year1			= date("Y");
				$tgll			= date("dmY"); 
			
				
				$na				= $password;
				$na				.= $jenis;
			

					
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 3044070){
						$lokasi = 'files/'.$na.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						
						$in_q ="INSERT INTO users VALUES(
						NULL, 
						'$nama', 
						'$password', 
						'$username', 
						'$pswd', 
						'$telp', 
						'Aktif', 
						'$lokasi', 
						'$jenis',
						'$id_skpd',
						'$tgl'
						
						)";
						$in = mysqli_query($conn, $in_q);
						if($in){

						header("location:../../user.php");
						}
						else
						{
						
							echo $in_q;
						}
					}
					else
					{
						header("location:../user.php?pesan=1&isi=ERROR: Besar ukuran file (file size) maksimal 1 Mb ".mysql_error());
						//echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
					}
				}
				else
				{
echo "salah";
				}
}
?>