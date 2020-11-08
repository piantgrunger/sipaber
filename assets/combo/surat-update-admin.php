<?php
$year1			= date("Y");
$query = "select * from surat_pengajuan where id_skpd='$id_skpd' and tahun ='$year1' order by id_surat";
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