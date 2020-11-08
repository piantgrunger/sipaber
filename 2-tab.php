<div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-md-12">
					 <div class="card">
                            <div class="card-body bg-primary rounded-top">
                                <h4 class="text-white card-title">Input Tanggal Pelantikan</h4>
                            </div>
                            <div class="card-body">
							<form class="form-horizontal mt-4">
															<div class="form-group">
																<label>Hari Pelantikan</label>
																<select class="custom-select col-12" id="inlineFormCustomSelect">
																	<option selected>Choose...</option>
																	<option >Senin</option>
																	<option >Selasa</option>
																	<option >Rabu</option>
																	<option >Kamis</option>
																	<option >Jum at</option>
																	<option >Sabtu</option>
																	<option >Minggu</option>
																	
																</select>
															</div>
															<div class="form-group">
																<label>Tanggal Pelantikan</span></label>
																<input type="date" class="form-control" value="George deo...">
															</div>
															<div class="form-group">
																<label>Jam Pelantikan</span></label>
																<input type="time" class="form-control" value="George deo...">
															</div>
															<div class="form-group">
																<label>Tempat Pelantikan</label>
																<textarea class="form-control" rows="2"></textarea>
															</div>
															<hr>
															<div class="form-group">
																<label>Hari Gladi</label>
																<select class="custom-select col-12" id="inlineFormCustomSelect">
																	<option selected>Choose...</option>
																	<option >Senin</option>
																	<option >Selasa</option>
																	<option >Rabu</option>
																	<option >Kamis</option>
																	<option >Jum at</option>
																	<option >Sabtu</option>
																	<option >Minggu</option>
																	
																</select>
															</div>
															<div class="form-group">
																<label>Tanggal Gladi</span></label>
																<input type="date" class="form-control" value="George deo...">
															</div>
															<div class="form-group">
																<label>Jam Gladi</span></label>
																<input type="time" class="form-control" value="George deo...">
															</div>
															<div class="form-group">
																<label>Tempat Gladi</label>
																<textarea class="form-control" rows="2"></textarea>
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
                                <h4 class="text-white card-title">Jadwal Pelantikan</h4>
                            </div>
							
                            <div class="card-body">
							<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                                    role="alert">
                                    <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Perhatian - </strong> Tanggal Pelantikan akan sangat menentukan sistem ini berjalan. Silahkan Masukkan Jadwal Pelantikan, Jika ada perubahan update tanggal pelantikan, update tidak berpengaruh pada kandidat pelantikan yang sudah di susun.
                            </div>
							<?php
			  
			 								//tampil
											$no 		= 1;
											$sql_bro 	="select * from tb_tglpelantikan order by status, tgl_pelantikan ";
											$sql_01		= mysqli_query ($conn,$sql_bro);
											
											$jml_1		= mysqli_num_rows($sql_01);
											if ($jml_1	== 0)
											{
											?>
											 <div class="col-md-12">
											<div class="alert alert-info col-md-12 col-sm-12  alert-icon alert-dismissible fade in" role="alert">
											 <div class="col-md-1 col-sm-1 icon-wrapper text-center">
											  <span class="fa fa-info fa-2x"></span></div>
											  <div class="col-md-11 col-sm-11">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
												<p><strong>INFO !</strong> BELUM ADA TANGGAL PELANTIKAN YANG DITAMBAHKAN</p>
											  </div>
											</div>
										  </div>

											<?
											}
											else
											{
							?>
							
							<div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>PELANTIKAN</th>
                                                <th>GLADI BERSIH</th>
                                                <th>ACT</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
			  
			 								//tampil
											
			  
			
			  								while($data_bro =  mysqli_fetch_array($sql_01))
											{

			  								
											$hari_pelantikan	= $data_bro['hari_pelantikan'];
											$tgl_pelantikan	 	= $data_bro['tgl_pelantikan'];
											$jam_pelantikan	 	= $data_bro['jam_pelantikan'];
											$tmt_pelantikan	 	= $data_bro['tmt_pelantikan'];
											$hari_gladi	 		= $data_bro['hari_gladi'];
											$tgl_gladi	 		= $data_bro['tgl_gladi'];
											$jam_gladi	 		= $data_bro['jam_gladi'];
											$tmt_gladi	 		= $data_bro['tmt_gladi'];
											$status	 			= $data_bro['status'];
											$kode	 			= $data_bro['kode'];
											$id_tglpelantikan	= $data_bro['id_tglpelantikan'];
											$a1 				= strtoupper($tmt_pelantikan);
											$a2 				= strtoupper($tmt_gladi);
			  								?>
                                            <tr>
												<td><?php echo $no++;?></td>
												<td>
												  <strong>Tempat : </strong> <?php echo $a1;?><br>
												  <strong>Hari/Tgl : </strong> <?php echo $hari_pelantikan;?>, <?php echo $tgl_pelantikan;?><br>
												  <strong>Waktu : </strong> <?php echo $jam_pelantikan;?>						  
												</td>
												<td>
												  <strong>Tempat : </strong> <?php echo $a2;?><br>
												  <strong>Hari/Tgl : </strong> <?php echo $hari_gladi;?>, <?php echo $tgl_gladi;?><br>
												  <strong>Waktu : </strong> <?php echo $jam_gladi;?>						  
												</td>
												<td align="right">
						  
													<?php
														$sql_111			= "select * from tb_tglpelantikan where id_tglpelantikan='$id_tglpelantikan'";
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
															<a class="dropdown-item" href="javascript:void(0)"><i class=" fas fa-edit"></i> Update Jadwal Pelantikan</a>
														
															<a href="assets/proses/<?php echo "nonaktif-tgl-pelantikan.php?id=$kode" ?>" class="dropdown-item" > <i class="fas fa-eye-slash"></i> Non Aktifkan</a>
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
															
															<a href="assets/proses/<?php echo "aktif-tgl-pelantikan.php?id=$kode" ?>" class="dropdown-item">  <i class="fas fa-eye"></i> Aktifkan</a>
														</div>
														</div>
														<?php
														}
														
													
							
														?>						  </td>
                                               
                                            </tr>
											<?php
											}
											?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>PELANTIKAN</th>
                                                <th>GLADI BERSIH</th>
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
