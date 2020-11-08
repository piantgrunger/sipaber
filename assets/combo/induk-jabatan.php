<?
//SELECT * FROM tb_produk, tb_kategori where tb_produk.id_kategori=tb_kategori.id_kategori order by id_produk desc

//$sql_jabatan_combo 		= "select * from jabatan where esselon='-' order by id_jabatan, id_skpd, parent_id";

$sql_jabatan_combo 		= "SELECT * FROM jabatan, skpd  where jabatan.id_skpd=skpd.id_skpd and jabatan.esselon !='-' order by jabatan.id_jabatan, jabatan.id_skpd ";
$mysql_jabatan_combo 	= mysqli_query($conn,$sql_jabatan_combo);
$jabatan_combo		 	= array();
while ($data_jab_combo	= mysqli_fetch_array($mysql_jabatan_combo))
{
$jabatan_combo[]		= $data_jab_combo['jabatan'];
$id_sopd_combo[]		= $data_jab_combo['id_skpd'];
$id_jabatan_combo[]		= $data_jab_combo['id_jabatan'];
$nama_skpd_combo[]		= $data_jab_combo['nama_skpd'];


}
$count=count($jabatan_combo);
?>