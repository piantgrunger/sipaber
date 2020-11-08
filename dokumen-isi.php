<!-- basic table -->
<?php
function rupiah_2($angka){
	
	$hasil_rupiah =  number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}
			  
			 								//tampil
											$year1			= date("Y");
											$no 		= 1;
											$sql_bro 	="select * from usulan_perubahan where tahun ='$year1' order by id_skpd";
											$sql_01		= mysqli_query ($conn,$sql_bro);
											
											$sql_00001a				= "select SUM(anggaran_awal) as anggaran_awal_skpda from usulan_perubahan where tahun ='$year1' ";
											$sql_kk001a 			= mysqli_query($conn, $sql_00001a);
											$data_p1a 				= mysqli_fetch_array($sql_kk001a);
											$anggaran_awal_skpda	 = $data_p1a['0'];
											//echo $anggaran_awal_skpda;
											$rp_anggaran_awal_skpd_a	 = rupiah_2($anggaran_awal_skpda); 
											
											$sql_000012b		= "select SUM(anggaran_susulan) as anggaran_perubahan_skpdb from usulan_perubahan where tahun ='$year1' ";
											$sql_kk0012b 		= mysqli_query($conn, $sql_000012b);
											$data_p12b 			= mysqli_fetch_array($sql_kk0012b);
											$anggaran_perubahan_skpdb	 = $data_p12['0'];
											$rp_anggaran_perubahan_skpd_b	 = rupiah_2($anggaran_perubahan_skpdb); 
											
?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Usulan Anggaran Perubahan | <a href="<?php echo "cetak-usulan.php" ?>" > <i class="ti ti-printer"></i> Cetak Pdf</a> | <a href="<?php echo "cetak-usulan-excel.php" ?>" > <i class="ti ti-printer"></i> Cetak Excel</a></h4>
                                <h6 class="card-subtitle"><?php echo $nama_skpd_admin?></h6>
                                <div class="table-responsive">
                                   <table id="zero_config" class="table table-striped table-bordered">
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
												
                                                <th>ACT</th>
                                               
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
												
												$cetak_total_1	 	= rupiah_4($total_ang_awal); 
												
												$sql_total_2		= "select SUM(anggaran_susulan) as anggaran_perubahan_skpd from usulan_perubahan where tahun ='$year1' ";
												$mysql_total_2 		= mysqli_query($conn, $sql_total_2);
												$data_total_2 		= mysqli_fetch_array($mysql_total_2);
												$total_ang_akhir	= $data_total_2['0'];
												$cetak_total_2		= rupiah_4($anggaran_perubahan_skpd); 
												
												$abt_total 			= $total_ang_awal + $total_ang_akhir;
												$cetak_abt_total	= rupiah_4($abt_total); 
											
											
											
											
											
											
											
											
											
											
											
											
											
			  								?>
                                            <tr>
												<td><?php echo $no++;?></td>
												<td>
												 
												  <strong><?php echo $nama_skpd;?></strong> 
																				  
												</td>
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
												
								
												<td align="left">
												<div class="btn-group">
														<button type="button" class="btn btn-success dropdown-toggle"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-bell-ring-outline"></i>
															Act
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="<?php echo "usulan-perubahan-update.php?id=$id_usulan" ?>"><i class=" fas fa-edit"></i> Update </a>
														
															<a href="assets/proses/<?php echo "hapus-usulan-perubahan.php?id=$id_usulan" ?>" class="dropdown-item" > <i class="mdi mdi-delete-empty"></i> Hapus</a>
														</div>
														</div>
												
												
												
												
											
						  
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
												<th>Rp. <?php echo $cetak_total_1; ?></th>
												<th>Rp. <?php echo $cetak_total_2; ?></th>
												<th>Rp. <?php echo $cetak_abt_total; ?></th>
												<th></th>
												
												<th></th>
												
                                         
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>