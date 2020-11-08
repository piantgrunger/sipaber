<?
$sqlunitorganisasi 		= "SELECT * FROM unit_org, skpd  where unit_org.id_skpd=skpd.id_skpd order by skpd.id_skpd ";
$mysqlunitorganisasi 	= mysqli_query($conn,$sqlunitorganisasi);
$nama_unit = array();

while ($data_unit=mysqli_fetch_row($mysqlunitorganisasi))
{
$id_unit[]			= $data_unit['0'];
$id_skpd_unit[]		= $data_unit['1'];
$nama_unit[]		= $data_unit['2'];
$nama_skpd_unit[]	= $data_unit['5'];
$singkat[]			= $data_unit['11'];


}
$count=count($nama_unit);

?>