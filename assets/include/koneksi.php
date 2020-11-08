<?php
$conn = mysqli_connect("localhost", "root", "", "sipaber");
if(mysqli_connect_errno()){
	echo "Gagal:".mysqli_connect_error();
}else{
	//echo "Koneksi berhasil";
}
?>