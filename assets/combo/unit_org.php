<?
$query = "select * from unit_org where id_skpd='$id_skpd' order by id_unit_org";
$hasil = mysqli_query($conn,$query);
$kategori = array();
$id = array();

while ($data0=mysqli_fetch_row($hasil))
{
$kategori[]=$data0["2"];
$id[]=$data0["0"];

}
$count=count($kategori);
$count=count($id);

?>