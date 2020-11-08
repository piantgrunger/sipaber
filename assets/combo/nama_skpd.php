<?
//$query = "select id_skpd,nama_skpd,key_skpd from skpd  where id_skpd='60' order by nama_skpd";
$sql_skpd 	= "select id_skpd,nama_skpd from skpd order by nama_skpd";
$mysql_skpd = mysqli_query($conn,$sql_skpd);
$nama_skpd 	= array();
while ($data_skpd=mysqli_fetch_row($mysql_skpd))
{
$nama_skpd[]=$data_skpd['1'];
$id_skpd[]	=$data_skpd['0'];


}
$count=count($nama_skpd);
?>