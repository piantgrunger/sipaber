<div class="row">
<?php
function rupiah_2($angka){
	
	$hasil_rupiah =  number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}
?>
<?php
			 $year1			= date("Y");
			 $no 			= 1;
			 $sql_bro 		="select * from usulan_perubahan where id_skpd='$cekid_skpd' and tahun ='$year1' ";
			 $sql_01		= mysqli_query ($conn,$sql_bro);
			 $jml_1			= mysqli_num_rows($sql_01);
?>


                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
					 <div class="card">
                            <div class="card-body bg-primary rounded-top">
                                <h4 class="text-white card-title">Input Usulan Perubahan Anggaran Belanja</h4>
                            </div>
                            <div class="card-body">
							
							
							<form class="form-horizontal mt-4" action="assets/proses/input-usulan-perubahan-skpd.php" method='post' enctype='multipart/form-data'>
															<div class="form-group">
																<label>Dasar Surat </span></label>
																<select class="custom-select col-12" id="inlineFormCustomSelect" name="id_surat" required >
																	<option value="">Choose...</option>
																	<?PHP
																	include "assets/combo/surat.php";
																	for ($i=0;$i<$count;$i++)
																	{
																	echo "<option value='$id[$i]'>$kategori[$i]";
																	}
																	?>
																	
																</select>
															</div>
															<div class="form-group">
																<label>Kode Rekening</span></label>
																<input type="hidden" class="form-control" value ="<?php echo $cekid_skpd; ?>"   name="id_skpd"   >
																<input type="text" class="form-control"   name="kode_rek"   >
																<small id="textHelp" class="form-text text-muted">Bisa dikosongkan</small>
															</div>
															<div class="form-group">
																<label>Program </span></label>
																<input type="text" class="form-control" placeholder="Nama Program" name="program"  required >
															</div>
															<div class="form-group">
																<label>Kegiatan </span></label>
																<input type="text" class="form-control" placeholder="Nama Kegiatan" name="kegiatan"  required >
															</div>
															<div class="form-group">
																<label>Objek Belanja </span></label>
																<input type="text" class="form-control" placeholder="Nama Objek Belanja" name="objek_belanja"  required >
															</div>
															<div class="form-group">
																<label>Uraian</span></label>
																<div class="form-group">
																	<textarea name="uraian" class="form-control" rows="2" placeholder="Uraian..." required></textarea>
																	
																</div>
															</div>
															<div class="form-group">
																<label>Anggaran Semula (Rp.)</span></label>
																<input type="number" class="form-control"  value ="0" name="anggaran_0"  required >
																<small id="textHelp" class="form-text text-muted">Jika sebelumnya belum dianggarkan biarkan bernilai 0</small>
															</div>
															<div class="form-group">
																<label>Usulan Anggaran Perubahan (Rp.)</span></label>
																<input type="number" class="form-control"  placeholder="Usulan ABT" name="anggaran_1"  required >
																<small id="textHelp" class="form-text text-muted">Isi angka tanpa titik (.)</small>
															</div>
															
															<div class="form-group">
																<label>Keterangan</span></label>
																<div class="form-group">
																	<textarea name="keterangan" class="form-control" rows="2" placeholder="Keterangan..."></textarea>
																	<small id="textHelp" class="form-text text-muted">Bisa dikosongkan</small>
																</div>
															</div>
															
															
															<hr>
															<button type="submit"
																	class="btn btn-success waves-effect waves-light mr-2">Simpan</button>
															<button type="reset"
																	class="btn btn-inverse waves-effect waves-light">Cancel</button>
														
														</form>
							
							</div>
					</div>
					</div>
					<div class="col-lg-8 col-md-12">
					<div class="card">
                            <div class="card-body bg-success rounded-top">
                                <h4 class="text-white card-title">Usulan Perubahan Anggaran Belanja</h4>
                            </div>
							
                            <div class="card-body">
							
											<?php
			  
			 								//tampil
											
											if ($jml_1	== 0)
											{
											?>
											Belum Ada Usulan Perubahan Anggaran Belanja yang diinput

											<?php
											}
											else
											{
							?>
							
							<div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>KODE REK</th>
                                                <th>PROGRAM</th>
												<th>KEGIATAN</th>
												<th>OBJEK BELANJA</th>
												<th>URAIAN</th>
												<th>ANGGARAN SEMULA (Rp)</th>
												<th>USULAN TAMBAHAN (Rp.)</th>
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
											
											$total_anggaran		= $anggaran_awal + $anggaran_susulan;
										
											
											
											$sql_bro_ 		="select * from skpd where id_skpd='$id_skpd' ";
											$mysql_			= mysqli_query ($conn,$sql_bro_);
											$sql_pim		= mysqli_fetch_array($mysql_);
											$nama_skpd		= $sql_pim['nama_skpd'];
										
											$anggaran_0	 = rupiah_2($anggaran_awal); 
											$anggaran_1	 = rupiah_2($anggaran_susulan); 
											$anggaran_2	 = rupiah_2($total_anggaran); 
											
											$sql_total_1		= "select SUM(anggaran_awal) as anggaran_awal_skpd from usulan_perubahan where id_skpd='$id_skpd' and tahun ='$year1' ";
												$mysql_total_1 		= mysqli_query($conn, $sql_total_1);
												$data_total_1 		= mysqli_fetch_array($mysql_total_1);
												$total_ang_awal		= $data_total_1['0'];
												
												$cetak_total_1	 	= rupiah_2($total_ang_awal); 
												
												$sql_total_2		= "select SUM(anggaran_susulan) as anggaran_perubahan_skpd from usulan_perubahan where id_skpd='$id_skpd' and tahun ='$year1' ";
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
												
								
												<td align="left">
												<div class="btn-group">
														<button type="button" class="btn btn-success dropdown-toggle"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-bell-ring-outline"></i>
															Act
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="<?php echo "usulan-perubahan-update-skpd.php?id=$id_usulan" ?>"><i class=" fas fa-edit"></i> Update </a>
														
															<a href="assets/proses/<?php echo "hapus-usulan-perubahan-skpd.php?id=$id_usulan" ?>" class="dropdown-item" > <i class="mdi mdi-delete-empty"></i> Hapus</a>
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
                                                <th> </th>
                                                <th></th>
												<th></th>
												<th></th>
												<th>TOTAL</th>
													<th>Rp. <?php echo $cetak_total_1; ?></th>
												<th>Rp. <?php echo $cetak_total_2; ?></th>
												<th>Rp. <?php echo $cetak_abt_total; ?></th>
												<th></th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                            </div>
							<?php
							}
							?>
											
							
							</div>
					</div>
					</div>
</div>
