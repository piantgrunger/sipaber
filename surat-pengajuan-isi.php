<div class="row">
<?php
			//$year1			= date("Y");
			 $no 			= 1;
			 $sql_bro 		="select * from surat_pengajuan order by id_skpd  ";
			 $sql_01		= mysqli_query ($conn,$sql_bro);
			 $jml_1			= mysqli_num_rows($sql_01);
?>


                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
					 <div class="card">
                            <div class="card-body bg-primary rounded-top">
                                <h4 class="text-white card-title">Input Surat Pengajuan</h4>
                            </div>
                            <div class="card-body">
							
							
							<form class="form-horizontal mt-4" action="assets/proses/input-surat-pengajuan.php" method='post' enctype='multipart/form-data'>
															<div class="form-group">
																<label>Tahun Anggaran </span></label>
																<input type="text" class="form-control"  value ="<?php echo $year1; ?>" name="tahun"  readonly >
															</div>
															<div class="form-group">
																<label>SKPD</label>
																<select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_skpd" required >
																	<option value="">Choose...</option>
																	<?PHP
																	include "assets/combo/nama_skpd.php";
																	for ($i=0;$i<$count;$i++)
																	{
																	echo "<option value='$id_skpd[$i]'>$nama_skpd[$i]";
																	}
																	?>
																	
																</select>
															</div>
															<div class="form-group">
																<label>Nomor Surat </span></label>
																<input type="text" class="form-control" placeholder="Nomor Surat"  name="nomor_surat" required  >
																
															</div>
															<div class="form-group">
																<label>File Surat Pengajuan</label>
																<div class="input-group mb-3">
																	<div class="input-group-prepend">
																		<span class="input-group-text">Upload</span>
																	</div>
																	<div class="custom-file">
																		<input type="file" name="file" class="custom-file-input" id="inputGroupFile01" required>
																		<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<label>Keterangan</span></label>
																<div class="form-group">
																	<textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan..."></textarea>
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
                                <h4 class="text-white card-title">Surat Pengajuan Anggaran Belanja Perubahan</h4>
                            </div>
							
                            <div class="card-body">
							
											<?php
			  
			 								//tampil
											
											if ($jml_1	== 0)
											{
											?>
											Belum Ada Surat Pengajuan yang diinput

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
												<th>SKPD</th>
                                                <th>NOMOR SURAT</th>
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
											$tahun			 	= $data_bro1['tahun'];
											$keterangan			= $data_bro1['keterangan'];
											$no_surat			= $data_bro1['no_surat'];
											$lokasi				= $data_bro1['lokasi'];
											
											
											$sql_bro_ 		="select * from skpd where id_skpd='$id_skpd' ";
											$mysql_			= mysqli_query ($conn,$sql_bro_);
											$sql_pim		= mysqli_fetch_array($mysql_);
											$nama_skpd		= $sql_pim['nama_skpd'];
										
											
			  								?>
                                            <tr>
												<td><?php echo $no++;?></td>
												<td>
												 
												  <strong><?php echo $nama_skpd;?></strong> 
																				  
												</td>
												<td>
												 
												  <strong><?php echo $no_surat;?></strong> 
																				  
												</td>
												
												<td>
												  
												  <?php echo $keterangan;?>								  
												</td>
												<td>
												<div class="btn-group">
														<button type="button" class="btn btn-success dropdown-toggle"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-eye"></i>
															Admin
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="assets/proses/<?php echo $lokasi; ?>"><i class=" mdi mdi-download"></i> Download</a>
															<a class="dropdown-item" href="<?php echo "update-file-surat.php?id=$id_surat" ?>"><i class=" mdi mdi-pencil"></i> Edit File</a>
															<a class="dropdown-item" href="<?php echo "update-surat.php?id=$id_surat" ?>"><i class=" mdi mdi-pencil"></i> Edit Surat</a>
														
															<a class="dropdown-item" href="assets/proses/<?php echo "hapus-surat.php?id=$id_surat" ?>"><i class=" mdi mdi-delete-empty"></i> Hapus</a>
														</div>
														
												
												</td>
								
												
                                            </tr>
											<?php
											}
											?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>NOMOR SURAT</th>
                                                <th>KETERANGAN</th>
												
                                                <th>ACT</th>
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
