<?php
session_start();

include "koneksi.php";

if (isset($_SESSION['session_login_by_id'])){ //jika session loginnya ada maka lanjutkan
	$user_id = $_SESSION['session_login_by_id'];
	//dapatkan data user
	$sql = "select * from users where id='$user_id'";
	$sql_01 = mysqli_query ($conn, $sql);
	$data = mysqli_fetch_array($sql_01);
	$nama_1 		= $data['nama'];
	$email 			= $data['email'];
	$kategori		= $data['kategori'];
	$password 		= $data['pswd'];
	$pertanyaan 	= $data['pertanyaan'];
	$lokasi_pict 	= $data['lokasi_ad'];
	$cekid_skpd		= $data['id_skpd'];
	
	//untuk liat data skpd
				$sqlnamaskpd 	= "select * from skpd where id_skpd='$cekid_skpd' ";
				$mysqlnamaskpd	= mysqli_query ($conn,$sqlnamaskpd);
				$datasqlnamaskpd= mysqli_fetch_array($mysqlnamaskpd);
				$nama_skpd_admin= $datasqlnamaskpd['nama_skpd'];
	
				$tgl		= date("d-m-Y, g:i a"); 
				
	//untuk liat data jabatan
				
		if ($kategori!='Admin-SKPD')
		{
			
		//include("inc/cekyourlogin.php"); 
		//echo "Anda Harus Login terlebih dahulu untuk mengakses halaman ini <p> <a href='index.php'>Kembali</a>";
		
		exit();
		}
			

}
else{
	//include("inc/cekyourlogin.php"); 
	//echo "Anda Harus Login terlebih dahulu untuk mengakses halaman ini <p> <a href='index.php'>Kembali</a>";
			header("location:index.php");

	exit();
}

?>