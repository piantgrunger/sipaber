<!-- basic table -->
<?php
			  
			 								//tampil
											$no 		= 1;
											$sql_bro 	="select * from tb_pejabat WHERE status ='Aktif' order by grade ASC";
											$sql_01		= mysqli_query ($conn,$sql_bro);
?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Pegawai</h4>
                                <h6 class="card-subtitle">DataTables has most features enabled by default, so all you
                                    need to do to use it with your own tables is to call the construction
                                    function:<code> $().DataTable();</code>. You can refer full documentation from here
                                    <a href="https://datatables.net/">Datatables</a></h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="3%">No</th>
                                                <th colspan="2" >NAMA PEGAWAI</th>
                                                <th width="30%">JABATAN</th>
												
                                                <th width="7%">ACT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											while($data_bro11 =  mysqli_fetch_array($sql_01))
											{
											$id_jabatan		= $data_bro11['id_jabatan'];
											$id_pejabat	 	= $data_bro11['id_pejabat'];
											$id_skpd	 	= $data_bro11['id_skpd'];
									
											$gelar_depan	= $data_bro11['gelar_dpn'];
											$gelar_belakang	= $data_bro11['gelar_blk'];		
											$nama_pejabat	= $data_bro11['nama_pejabat'];
											$nip			= $data_bro11['nip'];
											$ttl			= $data_bro11['tempat_lahir'];
											$ttl_1			= $data_bro11['tgl_lahir'];
											$pangkat		= $data_bro11['golongan'];
											//$esselon		= $data_bro11['esselon'];
											$tmt_golongan	= $data_bro11['tmt_golongan'];
											$tmt_jabatan	= $data_bro11['tmt_jabatan'];
											$jk				= $data_bro11['jeniskelamin'];
											$esselon		= $data_bro11['esselon'];
											$lokasi 		= $data_bro11['lokasi']; 
											
											if ($gelar_belakang =='')
											{
											$namalengkap	= $gelar_depan;
											$namalengkap	.= ' ';
											$namalengkap	.= $nama_pejabat;
											}
											else
											{
											$namalengkap	= $gelar_depan;
											$namalengkap	.= ' ';
											$namalengkap	.= $nama_pejabat;
											$namalengkap	.= ', ';
											$namalengkap	.= $gelar_belakang;
											}
										
											if ($ttl =='')
											{
											$tempattgllahir	= ' ';
											
											}
											else
											{
											$tempattgllahir	= $ttl;
											$tempattgllahir	.= ', ';
											$tempattgllahir	.= $ttl_1;
											
											}

											$sql_bro11 				="select * from jabatan where id_jabatan= $id_jabatan ";
											$sql_011				= mysqli_query ($conn,$sql_bro11);
											$data_bro1				= mysqli_fetch_array($sql_011);
											$jabatan				= $data_bro1['jabatan'];
											$unit_organisasi		= $data_bro1['unit_organisasi'];		
											$id_skpd				= $data_bro1['id_skpd'];
											
											$sql_skpd_baru 			= "select * from skpd where id_skpd= '$id_skpd' ";
											$sql_skpd_baru_1		= mysqli_query ($conn,$sql_skpd_baru);
											$data_skpd_baru			= mysqli_fetch_array($sql_skpd_baru_1);
											$nama_skpd_baru			= $data_skpd_baru['nama_skpd'];

											
			  							?>
                                            <tr>
                                                <td><?php echo $no++;?></td>
                                                <td>
												<img src="assets/proses/<?php echo $lokasi; ?>"  style="border-radius: 100%;"  width="125" height="125" />
												</td>
                                                <td>
												<strong><?php echo $namalengkap;?> </strong><BR>
												<?php echo $nip;?>
												<br>
												<span class="text-info"><?php echo $pangkat;?></span>
												<br>
												<span class="text-danger">TMT Pangkat : <?php echo $tmt_golongan;?></span>
												<br>
												<?php echo $tempattgllahir;?>
												</td>
												
												
												<td>
												<strong><span class="text-primary"> <?php echo $jabatan;?> (<?php echo $esselon;?>)</span></strong>
												<br>
												<strong><?php echo $nama_skpd_baru;?></strong>
												<br>
												TMT Jabatan : <?php echo $tmt_jabatan;?>
											    </td/>
											   
                                                <td>
											
												<div class="btn-group">
														<button type="button" class="btn btn-danger dropdown-toggle"
															data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon icon-refresh "></i>
															Pilih
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="<?php echo "kandidat-pejabat-baru.php?id=$id_jabatan" ?>"><i class=" mdi mdi-account-edit"></i> Update Pegawai</a>
															<a class="dropdown-item" href="<?php echo "kandidat-pejabat-baru.php?id=$id_jabatan" ?>"><i class=" mdi mdi-account-search"></i> Detail Pegawai</a>
															<a class="dropdown-item" href="<?php echo "kandidat-pejabat-baru.php?id=$id_jabatan" ?>"><i class=" mdi mdi-account-off"></i> Non Aktifkan Pegawai</a>
															<a class="dropdown-item" href="<?php echo "kandidat-pejabat-baru.php?id=$id_jabatan" ?>"><i class=" mdi mdi-account-remove"></i> Hapus Data</a>
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
                                                <th width="3%">No</th>
                                                <th colspan="2" >NAMA PEGAWAI</th>
                                                <th width="30%">JABATAN</th>
												
                                                <th width="7%">ACT</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>