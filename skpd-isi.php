<div class="row">
<?php
			
			 $no 			= 1;
			 $sql_bro 		="select * from skpd  ";
			 $sql_01		= mysqli_query ($conn,$sql_bro);
			 $jml_1			= mysqli_num_rows($sql_01);
?>


                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
					 <div class="card">
                            <div class="card-body bg-primary rounded-top">
                                <h4 class="text-white card-title">Input SKPD Baru</h4>
                            </div>
                            <div class="card-body">
							
							<form class="form-horizontal mt-4" action="assets/proses/input-skpd.php" method='post' enctype='multipart/form-data'>
															
															<div class="form-group">
																<label>Nama SKPD</span></label>
																<input type="text" class="form-control"  placeholder="Nama SKPD"  name="nama"  required >
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
                                <h4 class="text-white card-title">Data SKPD</h4>
                            </div>
							
                            <div class="card-body">
							
											<?php
			  
			 								//tampil
											
											if ($jml_1	== 0)
											{
											?>
											Belum Ada User yang diinput

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
                                                <th>ACT</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
			  
			 								//tampil
											
			  
			
			  								while($data_bro1 =  mysqli_fetch_array($sql_01))
											{

			  								
											$nama				= $data_bro1['nama'];
											$email			 	= $data_bro1['email'];
											$id_skpd		 	= $data_bro1['id_skpd'];
											$id				 	= $data_bro1['id'];
											$status				= $data_bro1['status'];
										
											
											$sql_bro_ 		="select * from skpd where id_skpd='$id_skpd' ";
											$mysql_			= mysqli_query ($conn,$sql_bro_);
											$sql_pim		= mysqli_fetch_array($mysql_);
											$nama_skpd		= $sql_pim['nama_skpd'];
										
											
			  								?>
                                            <tr>
												<td><?php echo $no++;?></td>
												
												<td>
												  
												 <?php echo $nama_skpd;?>												  
												</td>
												
												<td align="left">
												
														<div class="btn-group">
														<button type="button" class="btn btn-success dropdown-toggle"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-eye"></i>
															Aktif
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="<?php echo "assets/proses/hapus-skpd.php?id=$id_skpd" ?>"><i class=" fas fa-edit"></i> Hapus</a>
														
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
                                                <th>No</th>
												
                                                <th>SKPD</th>
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
