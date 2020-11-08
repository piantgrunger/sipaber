<div class="row">
<?php
			//$year1			= date("Y");
			 $no 			= 1;
			 $sql_bro 		="select * from surat_pengajuan  ";
			 $sql_01		= mysqli_query ($conn,$sql_bro);
			 $jml_1			= mysqli_num_rows($sql_01);
?>


                    <!-- Column -->
                    <div class="col-lg-12 col-md-12">
					 <div class="card">
                            <div class="card-body bg-primary rounded-top">
                                <h4 class="text-white card-title">Pilih SKPD</h4>
                            </div>
                            <div class="card-body">
							
							
							<form class="form-horizontal mt-4" action="cetak-usulan-per-skpd.php" method='post' enctype='multipart/form-data'>
															<div class="form-group">
																<label>Tahun Anggaran </span></label>
																<select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="tahun" required >
																	<option>2020</option>
																	<option>2021</option>
																	<option>2022</option>
																	<option>2023</option>
																	<option>2024</option>
																	<option>2025</option>
																	
																</select>
																
																
																
															
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
															
															<hr>
															<button type="submit"
																	class="btn btn-success waves-effect waves-light mr-2">Cetak</button>
															<button type="reset"
																	class="btn btn-inverse waves-effect waves-light">Cancel</button>
														
														</form>
							
							</div>
					</div>
					</div>
					
</div>
