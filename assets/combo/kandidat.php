<?
$query = "select * from tb_pejabat where status !='Pensiun' order by grade";
$hasil = mysqli_query($conn,$query);
$kategori = array();
while ($data=mysqli_fetch_array($hasil))
{
$kategori[]=$data['1'];
$c_id[]=$data['id_pejabat'];
$c_nip[]=$data['nip'];
$c_gelar_dpn[]=$data['gelar_dpn'];
$c_nama_pejabat[]=$data['nama_pejabat'];
$c_gelar_blk[]=$data['gelar_blk'];

$c_esselon[]=$data['esselon'];
$c_status[]=$data['status'];

}
$count=count($kategori);
?>