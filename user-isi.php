<div class="row">
<?php
			
			 $no 			= 1;
			 $sql_bro 		="select * from users  ";
			 $sql_01		= mysqli_query ($conn,$sql_bro);
			 $jml_1			= mysqli_num_rows($sql_01);
?>


                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
					 <div class="card">
                            <div class="card-body bg-primary rounded-top">
                                <h4 class="text-white card-title">Input User Baru</h4>
                            </div>
                            <div class="card-body">
							
							<form class="form-horizontal mt-4" action="assets/proses/input-user.php" method='post' enctype='multipart/form-data'>
															<div class="form-group">
																<label>Kategori User</label>
																<select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="jenis" required >
																	<option value="">Choose...</option>
																		<option value="Admin">Super Admin</option>
																		<option value="Admin-SKPD">Admin SKPD</option>
																		
																</select>
															</div>
															<div class="form-group">
																<label>Nama Lengkap</span></label>
																<input type="text" class="form-control"  placeholder="Nama Lengkap Admin"  name="nama"  required >
															</div>
															<div class="form-group">
																<label>Username</span></label>
																<input type="text" class="form-control"  placeholder="Username"  name="username"  required >
															</div>
															<div class="form-group">
																<label>Password</span></label>
																<input type="password" class="form-control"  placeholder="Password"  name="pswd"  required >
															</div>
															<div class="form-group">
																<label>No Telp/HP</span></label>
																<input type="text" class="form-control"  placeholder="No Handphone"  name="telp"   >
															</div>
															
															<div class="form-group">
																<label>SKPD</label>
																<select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="id_skpd"  >
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
																<label>Foto Profil</label>
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
