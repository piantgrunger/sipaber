<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
include "assets/include/koneksi.php";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Report_ABT.xls");
//$cekid_skpd = $_GET['id'];
?>
<?php
function rupiah_2($angka){
	
	$hasil_rupiah =  number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}
			  
			 								//tampil
											$year1			= date("Y");
											$no 		= 1;
											$sql_bro 	="select * from usulan_perubahan where tahun ='$year1' order by id_skpd, id_surat";
											$sql_01		= mysqli_query ($conn,$sql_bro);
											
										
											
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
     <td width="8%" align="right"></td>
    <td colspan="9" align="center"> <h4 align="center"> DAFTAR USULAN ANGGARAN PERUBAHAN <br>  TAHUN <?PHP echo $year1; ?> </h4></td>
    <td width="8%" align="left"></td>
    
  </tr>
</table>

  
									
                                    <table  width="100%" id="table1" border="0" style="font-size:12px">
                                        <thead>
                                            <tr>
                                               <th>No</th>
												<th>SKPD</th>
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
			  
			 								//tampil
											
			  
			
			  								while($data_bro1 =  mysqli_fetch_array($sql_01))
											{

			  								
											$id_surat			= $data_bro1['id_surat'];
											$id_skpd		 	= $data_bro1['id_skpd'];
											$id_usulan			= $data_bro1['id_usulan'];
											
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
										
											
											
											$sql_bro_ 		="select * from skpd where id_skpd='$id_skpd' ";
											$mysql_			= mysqli_query ($conn,$sql_bro_);
											$sql_pim		= mysqli_fetch_array($mysql_);
											$nama_skpd		= $sql_pim['nama_skpd'];
										
											$anggaran_0	 = rupiah_2($anggaran_awal); 
											$anggaran_1	 = rupiah_2($anggaran_susulan); 
											
											$total_anggaran		= $anggaran_awal + $anggaran_susulan;
											$anggaran_2	 		= rupiah_2($total_anggaran); 
											
											
											
											
												$sql_total_1		= "select SUM(anggaran_awal) as anggaran_awal_skpd from usulan_perubahan where tahun ='$year1' ";
												$mysql_total_1 		= mysqli_query($conn, $sql_total_1);
												$data_total_1 		= mysqli_fetch_array($mysql_total_1);
												$total_ang_awal		= $data_total_1['0'];
												
												$cetak_total_1	 	= rupiah_2($total_ang_awal); 
												
												$sql_total_2		= "select SUM(anggaran_susulan) as anggaran_perubahan_skpd from usulan_perubahan where tahun ='$year1' ";
												$mysql_total_2 		= mysqli_query($conn, $sql_total_2);
												$data_total_2 		= mysqli_fetch_array($mysql_total_2);
												$total_ang_akhir	= $data_total_2['0'];
												$cetak_total_2		= rupiah_2($total_ang_akhir); 
												
												$abt_total 			= $total_ang_awal + $total_ang_akhir;
												$cetak_abt_total	= rupiah_2($abt_total); 
											
											
											
											
			  								?>
                                            <tr>
												<td><?php echo $no++;?></td>
												<td>
												 
												  <?php echo $nama_skpd;?>
																				  
												</td>
												<td>
												  <?php echo $kd_rekening;?>						  
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
												<?php echo $anggaran_0;?>							  
												</td>
												<td>
												<?php echo $anggaran_1;?>						  
												</td>
												<td>
												<?php echo $anggaran_2;?>							  
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
                                                <th> </th>
                                                <th></th>
												<th></th>
												<th> </th>
												<th></th>
												<th><?php echo $cetak_total_1; ?></th>
												<th><?php echo $cetak_total_2; ?></th>
												<th><?php echo $cetak_abt_total; ?></th>
												<th></th>
												
                                                
                                            </tr>
                                        </tfoot>
                                    </table>