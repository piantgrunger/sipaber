<div class="row">
<?php
$id_pejabat	= $_GET['id'];

				$sql_bro1 			= "SELECT * FROM tb_pejabat where id_pejabat='$id_pejabat'  ";
				$sql_011			= mysqli_query ($conn,$sql_bro1);
			  	$data_r 			= mysqli_fetch_array($sql_011);
			
			  	$id_pejabat			= $data_r['id_pejabat'];
				$id_skpd			= $data_r['id_skpd'];
				$id_jabatan1		= $data_r['id_jabatan'];
			  	$gelar_depan1		= $data_r['gelar_dpn'];
				$nama_pejabat1		= $data_r['nama_pejabat'];
				$gelar_belakang1	= $data_r['gelar_blk'];
				$nip				= $data_r['nip'];
				$ttl				= $data_r['tempat_lahir'];
				$tgl_lahir			= $data_r['tgl_lahir'];
				$pangkat			= $data_r['golongan'];
				$lokasi				= $data_r['lokasi'];
				$tmtgol				= $data_r['tmt_golongan'];
				$tmtjab				= $data_r['tmt_jabatan'];
				$jeniskelamin		= $data_r['jeniskelamin'];
				$status				= $data_r['status'];
				$no_telp			= $data_r['no_telp'];
				$alamat				= $data_r['alamat'];
				$agama				= $data_r['agama'];
				$diklat				= $data_r['diklat'];
				$esselon__			= $data_r['esselon'];
											
											
				$sql_00				= "select * from jabatan where id_jabatan='$id_jabatan1' ";
				$sql_kk 			= mysqli_query($conn, $sql_00);
				$data_kk 			= mysqli_fetch_array($sql_kk);
				$esselon			= $data_kk['esselon'];
				$status			 	= $data_kk['status'];
				$jabatan1			= $data_kk['jabatan'];
				$$id_unit_org		= $data_kk['id_unit_org'];		
				$id_skpd			= $data_kk['id_skpd'];	
											
				$sql_bro11org			="select * from skpd where id_skpd	= $id_skpd	 ";
				$sql_011org				= mysqli_query ($conn,$sql_bro11org);
				$data_bro1org			= mysqli_fetch_array($sql_011org);
				$sopd					= $data_bro1org['nama_skpd'];		
											
				$queryesselon1			= "select * from esselon where esselon='$esselon__' ";
				$sql_esselon1			= mysqli_query($conn, $queryesselon1 );
				$data_sql_esselon1 		= mysqli_fetch_array($sql_esselon1);
				$grade1					= $data_sql_esselon1['grade'];
				$pensiun1				= $data_sql_esselon1['pensiun'];
				
				
				
											if ($gelar_belakang1 =='')
											{
											$namalengkap	= $gelar_depan1;
											$namalengkap	.= ' ';
											$namalengkap	.= $nama_pejabat1;
											}
											else
											{
											$namalengkap	= $gelar_depan1;
											$namalengkap	.= ' ';
											$namalengkap	.= $nama_pejabat1;
											$namalengkap	.= ', ';
											$namalengkap	.= $gelar_belakang1;
											}			
?>
                    <!-- Column -->
                    <div class="col-lg-12 col-md-12">
					 <div class="card">
                            <div class="card-body bg-primary rounded-top">
                                <h4 class="text-white card-title">Update Data Pegawai : <?php echo $namalengkap; ?></h4>
                            </div>
                            <div class="card-body">
							<form class="form-horizontal r-separator" action="assets/proses/update-pegawai.php" method='post' enctype='multipart/form-data'>
							
							<div class="form-group row align-items-center mb-0">
                                        <label for="inputEmail3"
                                            class="col-md-2 text-right control-label col-form-label">NIP Pegawai</label>
                                        <div class="col-md-10 border-left pb-2 pt-2">
                                            <input type="number" class="form-control" id="inputEmail3" name="nip" required maxlength="18" value="<?php echo $nip;  ?>">
											<input type="hidden" name="id_pejabat"	class="span6"  placeholder="NIP Baru Pejabat" value="<?php echo $id_pejabat;  ?>" required />
                                        </div>
                            </div>
							<div class="form-group row align-items-center mb-0">
                                        <label for="inputEmail3"
                                            class="col-md-2 text-right control-label col-form-label">Nama Pegawai</label>
                                        <div class="col-md-2 border-left pb-2 pt-2">
                                            <input type="text" class="form-control" id="inputEmail3" name="gelar_depan" value="<?php echo $gelar_depan1;  ?>">
                                        </div>
										<div class="col-md-6 ">
                                            <input type="text" class="form-control" id="inputEmail3" name="nama" value="<?php echo $nama_pejabat1;  ?>" required>
                                        </div>
										<div class="col-md-2 ">
                                            <input type="text" class="form-control" id="inputEmail3" name="gelar_belakang" value="<?php echo $gelar_belakang1;  ?>">
                                        </div>
                            </div>
							<div class="form-group row align-items-center mb-0">
                                        <label for="inputEmail3"
                                            class="col-md-2 text-right control-label col-form-label">Tempat Lahir</label>
                                        <div class="col-md-10 border-left pb-2 pt-2">
                                            <input type="text" class="form-control" id="inputEmail3" name="ttl" required value="<?php echo $ttl;  ?>" >
                                        </div>
                            </div>
							<div class="form-group row align-items-center mb-0">
                                        <label for="inputEmail3"
                                            class="col-md-2 text-right control-label col-form-label">Jenis Kelamin</label>
                                        <div class="col-md-10 border-left pb-2 pt-2">
                                           <select class="select2 form-control custom-select" style="width: 100%; height:36px;"  name="jk" required >
												<option><?php echo $jeniskelamin;  ?></option>
                                                <option>Laki-Laki</option>
												<option>Perempuan</option>
                                            </select>
                                        </div>
                            </div>
							<div class="form-group row align-items-center mb-0">
                                        <label for="inputEmail3"
                                            class="col-md-2 text-right control-label col-form-label">Pangkat/Gol.</label>
                                        <div class="col-md-10 border-left pb-2 pt-2">
                                           <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required name="golongan">
                                                <option><?php echo $pangkat;  ?></option>
												<?PHP
												include "assets/combo/golongan.php";
												for ($i=0;$i<$count;$i++)
												{
												echo "<option value='$kategori[$i]'>$kategori[$i]";
												}
												?>
                                            </select>
                                        </div>
                            </div>
							<div class="form-group row align-items-center mb-0">
                                        <label for="inputEmail3"
                                            class="col-md-2 text-right control-label col-form-label">TMT Pangkat/Gol</label>
                                        <div class="col-md-10 border-left pb-2 pt-2">
                                          <input type="text" name="tmt" required class="form-control" value="<?php echo $tmtgol;  ?>"  />
                                        </div>
                            </div>
							<div class="form-group row align-items-center mb-0">
                                        <label for="inputEmail3"
                                            class="col-md-2 text-right control-label col-form-label">Agama</label>
                                        <div class="col-md-10 border-left pb-2 pt-2">
                                           <select class="select2 form-control custom-select" style="width: 100%; height:36px;"  name="agama" required>
												<option><?php echo $agama;  ?></option>
                                                <option>Islam</option>
												<option>Kristen Protestan</option>
												<option>Katholik</option>
												<option>Hindu</option>
												<option>Budha</option>
												<option>Konghuchu</option>
                                            </select>
                                        </div>
                            </div>
							<div class="form-group row align-items-center mb-0">
                                        <label for="inputEmail3"
                                            class="col-md-2 text-right control-label col-form-label">Alamat</label>
                                        <div class="col-md-10 border-left pb-2 pt-2">
                                          <textarea class="form-control" rows="2" name="alamat" required><?php echo $alamat;  ?></textarea>
                                        </div>
                            </div>
							<div class="form-group row align-items-center mb-0">
                                        <label for="inputEmail3"
                                            class="col-md-2 text-right control-label col-form-label">No Telp/HP</label>
                                        <div class="col-md-10 border-left pb-2 pt-2">
                                            <input type="text" class="form-control" id="inputEmail3" name="no_telp" required value="<?php echo $no_telp;  ?>" >
                                        </div>
                            </div>
							<div class="form-group row align-items-center mb-0">
                                        <label for="inputEmail3"
                                            class="col-md-2 text-right control-label col-form-label">Jabatan</label>
                                        <div class="col-md-10 border-left pb-2 pt-2">
                                           <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required name="jabatan" >
                                                <option value="<?php echo $id_jabatan1;  ?>"><?php echo $sopd;  ?> - <?php echo $jabatan1;  ?></option>
												<?PHP
												include "assets/combo/jabatan.php";
												for ($i=0;$i<$count;$i++)
												{
												echo "<option value='$id_jabatan_combo[$i]'>$nama_skpd_combo[$i] - $jabatan_combo[$i]";
												}
												?>
                                            </select>
                                        </div>
                            </div>
							
							<div class="form-group row align-items-center mb-0">
                                        <label for="inputEmail3"
                                            class="col-md-2 text-right control-label col-form-label">TMT Jabatan</label>
                                        <div class="col-md-10 border-left pb-2 pt-2">
                                          <input type="text" name="tmt2" 	required class="form-control" value="<?php echo $tmtjab;  ?>">
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
					
</div>
