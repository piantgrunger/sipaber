<?php
  	include "assets/include/koneksi.php";
	include "assets/include/session_user.php";
	require_once("dompdf/dompdf_config.inc.php");
	ob_start();
	$cekid_skpd = $_GET['id']
?>
<?php include "phpqrcode/qrlib.php"; ?>


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <?php include "pages/icon.php";?>
    <?php include "pages/title.php";?>

        <!-- Bootstrap -->
      
		<style>
	@page {  
	 margin-top: 10px; 
	 margin-bottom: 0px;  
	 margin-left:50px; 
	 margin-right:50px; 
	 size:A4 landscape;
		}
     #header { position: fixed; left: 0px; top: -150px; right: 0px; height: 100px;  text-align: center; padding-top:5px;  }
    
	 #footer {
	
	width:100%;
	height:50px;
	position:fixed;
	bottom:0;
	left:0; }

     #footer .page:after { content: counter(page);  }
	 
	 
	 #table {

    border-collapse: collapse;

 
}
#table th {
 	  border: 1px solid black;
padding: 1px;
  
}
#table td {
  border: 1px solid black;
padding: 1px 5px;
}	


#table1 {

    border-collapse: collapse;

 
}
#table1 th {
 	  border: 1px solid black;
padding: 10px;
  
}
#table1 td {
  border: 1px solid black;
padding: 10px 5px;
}	

#table2 {

    border-collapse: collapse;

 
}
#table2 th {
 	  border: 1px solid black;
padding: 5px;
  
}
#table2 td {
  border: 1px solid black;
padding: 5px 5px;
}	

#table3 {

    border-collapse: collapse;

 
}
#table3 th {
 	  border: 1px solid black;
padding: 2px;
  
}
#table3 td {
  border: 1px solid black;
padding: 2px 5px;
}	 
	
    </style>
		
    </head>

    <body>
    
   <br>
   <div id="footer">
     <p class="page" style="font-size:12px" align="center"> dicetak melalui Sistem Pengajuan Anggaran Belanja Perubahan BPKAD Kota Banjarbaru | <b>Halaman <?php $PAGE_NUM; ?></p>
   </div>
   <div id="content">

  <?php
function rupiah_2($angka){
	
	$hasil_rupiah =  number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}
			  
			 								//tampil
											$year1			= date("Y");
											$no 		= 1;
											$sql_bro 	="select * from usulan_perubahan where id_skpd='$cekid_skpd' and tahun ='$year1' order by id_surat";
											$sql_01		= mysqli_query ($conn,$sql_bro);
											
											$sql_00001a				= "select SUM(anggaran_awal) as anggaran_awal_skpda from usulan_perubahan where id_skpd='$cekid_skpd' and tahun ='$year1' ";
											$sql_kk001a 			= mysqli_query($conn, $sql_00001a);
											$data_p1a 				= mysqli_fetch_array($sql_kk001a);
											$anggaran_awal_skpda	 = $data_p1a['0'];
											//echo $anggaran_awal_skpda;
											$rp_anggaran_awal_skpd_a	 = rupiah_2($anggaran_awal_skpda); 
											
											$sql_000012b						= "select SUM(anggaran_susulan) as anggaran_perubahan_skpdb from usulan_perubahan where id_skpd='$cekid_skpd' and tahun ='$year1' ";
											$sql_kk0012b 						= mysqli_query($conn, $sql_000012b);
											$data_p12b 							= mysqli_fetch_array($sql_kk0012b);
											$anggaran_perubahan_skpdb	 		= $data_p12b['0'];
											$rp_anggaran_perubahan_skpd_b	 	= rupiah_2($anggaran_perubahan_skpdb); 
											
											$total_semua_skpd	= $anggaran_awal_skpda + $anggaran_perubahan_skpdb;
											$rp_anggaran_perubahan_skpd_total	 = rupiah_2($total_semua_skpd); 
											
											
											$sql_bro_ 		="select * from skpd where id_skpd='$cekid_skpd' ";
											$mysql_			= mysqli_query ($conn,$sql_bro_);
											$sql_pim		= mysqli_fetch_array($mysql_);
											$nama_skpd		= $sql_pim['nama_skpd'];
											
											$k_unik		= $nama_skpd;	
											$k_unik		.= date("dmY"); 
											$k_unik		.= $nama_1;
											
											
											$doku		= $nama_skpd;	
											$doku		.= ' ';
											$doku		.= $year1;
											
											$kd_unik 			= str_replace(' ', '', $k_unik);
											
											//echo $anggaran_perubahan_skpdb;
											
											
?>

<table width="100%" border="0" style="border-bottom:thin; border-color:#333333" >
  <tr>
    <td width="8%" align="right"><?php echo "<img src='src/assets/images/logo_pemko.png' />" ?></td>
    <td width="82%" align="center"> <h4 align="center"> DAFTAR USULAN ANGGARAN PERUBAHAN <br> <?PHP echo $nama_skpd; ?> <br> TAHUN <?PHP echo $year1; ?> </h4></td>
    <td width="8%" align="left"><?php QRcode::png("$kd_unik", "png/$kd_unik.png", "L", 2, 2); ?>
      <?php echo "<img src='png/$kd_unik.png' />" ?></td>
    
  </tr>
</table>

  
									
                                    <table  width="100%" id="table1" style="font-size:12px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>KODE REK</th>
                                                <th>PROGRAM</th>
												<th>KEGIATAN</th>
												<th>OBJEK BELANJA</th>
												<th>URAIAN</th>
												<th>ANGGARAN SEMULA (Rp)</th>
												<th>USULAN (Rp.)</th>
												<th>JUMLAH ANGGARAN (Rp.)</th>
												<th>KETERANGAN</th>
												
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											while($data_bro1 =  mysqli_fetch_array($sql_01))
											{
											$id_usulan			= $data_bro1['id_usulan'];
											$id_skpd		 	= $data_bro1['id_skpd'];
											$id_surat			= $data_bro1['id_surat'];
											
											
											$kd_rekening		= $data_bro1['kd_rekening'];
											$program			= $data_bro1['program'];
											
											$kegiatan			= $data_bro1['kegiatan'];
											$objek_belanja		= $data_bro1['objek_belanja'];
											$uraian			 	= $data_bro1['uraian'];
											$anggaran_awal		= $data_bro1['anggaran_awal'];
											$anggaran_susulan	= $data_bro1['anggaran_susulan'];
											$keterangan			= $data_bro1['keterangan'];
											$admin				= $data_bro1['admin'];
											$tgl_input			= $data_bro1['tgl_input'];
											$tahun			 	= $data_bro1['tahun'];
										
											
											
										
											$anggaran_0	 = rupiah_2($anggaran_awal); 
											$anggaran_1	 = rupiah_2($anggaran_susulan); 
											$total_anggaran		= $anggaran_awal + $anggaran_susulan;
											$anggaran_2	 = rupiah_2($total_anggaran); 
										
												$sql_total_1		= "select SUM(anggaran_awal) as anggaran_awal_skpd from usulan_perubahan where id_skpd='$cekid_skpd' and tahun ='$year1' ";
												$mysql_total_1 		= mysqli_query($conn, $sql_total_1);
												$data_total_1 		= mysqli_fetch_array($mysql_total_1);
												$total_ang_awal		= $data_total_1['0'];
												
												$cetak_total_1	 	= rupiah_2($total_ang_awal); 
												
												$sql_total_2		= "select SUM(anggaran_susulan) as anggaran_perubahan_skpd from usulan_perubahan where id_skpd='$cekid_skpd' and tahun ='$year1' ";
												$mysql_total_2 		= mysqli_query($conn, $sql_total_2);
												$data_total_2 		= mysqli_fetch_array($mysql_total_2);
												$total_ang_akhir	= $data_total_2['0'];
												$cetak_total_2		= rupiah_2($total_ang_akhir); 
												
												$abt_total 			= $total_ang_awal + $total_ang_akhir;
												$cetak_abt_total	= rupiah_2($abt_total); 

			  							?>
                                            <tr>
                                                <td align="center"><?php echo $no++;?></td>
												<td>
												  <strong><?php echo $kd_rekening;?></strong> 							  
												</td>
												
												<td>  
												  <?php echo $program;?>								  
												</td>
												<td>
												  <?php echo $kegiatan;?>							  
												</td>
												<td>
												  <?php echo $objek_belanja;?>							  
												</td>
												<td>
												 <?php echo $uraian;?>							  
												</td>
												<td>
												Rp. <?php echo $anggaran_0;?>							  
												</td>
												<td>
												Rp. <?php echo $anggaran_1;?>							  
												</td>
												<td>
												Rp. <?php echo $anggaran_2;?>							  
												</td>
												<td>
												  <?php echo $keterangan;?>							  
												</td>
												
								
												
                                            </tr>
                                         <?php
                       							}
                        				?>  
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
												<th></th>
												<th></th>
												<th>TOTAL</th>
												<th align="left">Rp. <?php echo $cetak_total_1; ?></th>
												<th align="left">Rp. <?php echo $cetak_total_2; ?></th>
												<th align="left">Rp. <?php echo $cetak_abt_total; ?></th>
												<th></th>
												
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                       
  
   </body>
</html>

<?php
$html = ob_get_clean();
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("USULAN ANGGARAN PERUBAHAN ".$doku. ".pdf");

?>



<?php
include("checklog.php"); 
require_once("watchlist-controller.php");
require_once("dompdf/dompdf_config.inc.php");
ob_start();
?>

<html>...</html>

<?php
$html = ob_get_clean();
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("sample.pdf");
?>