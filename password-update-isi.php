<div class="row">
<?php
				$id_user 	=  $_GET['id'];
				 $no 			= 1;	
				 $sql_bro 		="select * from users  ";
				 $sql_01		= mysqli_query ($conn,$sql_bro);
				 $jml_1			= mysqli_num_rows($sql_01);
		
				$sql_00				= "select * from users  where id='$id_user'";
				$sql_kk 			= mysqli_query($conn, $sql_00);
				$data_kk 			= mysqli_fetch_array($sql_kk);
				$nama				= $data_kk['nama'];
				$email			 	= $data_kk['email'];
				$kategori			= $data_kk['kategori'];
				$telp				= $data_kk['telp'];
				$id_skpd_			= $data_kk['id_skpd'];
				
				$sql_000			= "select * from skpd  where id_skpd='$id_skpd_'";
				$sql_kkk 			= mysqli_query($conn, $sql_000);
				$data_kkk 			= mysqli_fetch_array($sql_kkk);
				$nama_skpd_			= $data_kkk['nama_skpd'];
		

?>
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
					 <div class="card">
                            <div class="card-body bg-warning rounded-top">
                                <h4 class="text-white card-title">Update Password Admin/User</h4>
                            </div>
                            <div class="card-body">
							<form class="form-horizontal mt-4" action="assets/proses/update-password.php" method='post'>
								
															<div class="form-group">
																<label>Password Baru</span></label>
																<input type="text" class="form-control"  	name="pswd"  required >
																<input type="hidden" class="form-control"  	value="<?php echo $id_user;  ?>"  name="id_user"  required >
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
                            <div class="card-body bg-primary rounded-top">
                                <h4 class="text-white card-title">Data User</h4>
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
												<th>NAMA</th>
                                                <th>USERNAME</th>
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
												 
												  <strong><?php echo $nama;?></strong>
												 										  
												</td>
												
												<td>
												  
												 <?php echo $email;?>												  
												</td>
												<td>
												  
												 <?php echo $nama_skpd;?>												  
												</td>
												
												<td align="left">
												<?php
														$sql_111			= "select * from users where id='$id'";
														$sql_r1 			= mysqli_query($conn, $sql_111 );
														$data_r1 			= mysqli_fetch_array($sql_r1);
														$status_1			= $data_r1['status'];
														//echo $id_tglpelantikan;
														if ($status_1=='Aktif')
														{
														
														?>
														<div class="btn-group">
														<button type="button" class="btn btn-success dropdown-toggle"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-eye"></i>
															Aktif
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="<?php echo "user-update.php?id=$id" ?>"><i class=" fas fa-edit"></i> Update User</a>
															<a class="dropdown-item" href="<?php echo "password-update.php?id=$id" ?>"><i class=" fas fa-edit"></i> Update password</a>
														
															<a href="assets/proses/<?php echo "nonaktif-user.php?id=$id" ?>" class="dropdown-item" > <i class="fas fa-eye-slash"></i> Non Aktifkan</a>
														</div>
														</div>
														<?php
														}
														else
														{
														?>
														
														<div class="btn-group">
														<button type="button" class="btn btn-info dropdown-toggle"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-eye-slash"></i>
															Non Aktif
														</button>
														<div class="dropdown-menu">
															
															<a href="assets/proses/<?php echo "aktif-user.php?id=$id" ?>" class="dropdown-item">  <i class="fas fa-eye"></i> Aktifkan</a>
														</div>
														</div>
														<?php
														}
														
													
							
														?>
						  
												</td>
                                               
                                            </tr>
											<?php
											}
											?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
												<th>NAMA</th>
                                                <th>USERNAME</th>
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
