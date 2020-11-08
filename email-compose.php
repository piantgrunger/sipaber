 <?php
						$id_jabatan 			= $_POST['id_jabatan'];
						$wokeh		 			= $_GET['id'];
					
	
						$querycek				= "select * from jabatan where id_jabatan='$id_jabatan' ";
						$sql_querycek 			= mysqli_query($conn, $querycek );
						$data_sql_querycek 		= mysqli_fetch_array($sql_querycek);
						$id_pejabat				= $data_sql_querycek['id_pejabat'];	
						
						$nama_jabatan			= $data_sql_querycek['jabatan'];
						$jab_order				= $data_sql_querycek['jab_order'];
						$id_skpd				= $data_sql_querycek['id_skpd'];
						$esselon_				= $data_sql_querycek['esselon'];
						$unit_organisasi		= $data_sql_querycek['unit_organisasi'];
						$tgl2					= date("d-m-Y"); 
						$jenisjabatanbaru_		= $data_sql_querycek['jns_jabatan'];	
						
						$queryesselon			= "select * from esselon where esselon='$esselon_' ";
						$sql_esselon			= mysqli_query($conn, $queryesselon );
						$data_sql_esselon 		= mysqli_fetch_array($sql_esselon);
						$grade					= $data_sql_esselon['grade'];	
						$pensiun				= $data_sql_esselon['pensiun'];	
						
						$sql_bro8 				= "select * from tb_tglpelantikan where status='Aktif' ";
						$sql_018				= mysqli_query ($conn,$sql_bro8);
						$sql_tgl8				= mysqli_fetch_array($sql_018);
						$kd_tgl					= $sql_tgl8['kode'];
						
				
				
				
						$sql_bro1121 	="select * from skpd where id_skpd= '$id_skpd' ";
						$sql_01121		= mysqli_query ($conn,$sql_bro1121);
						$data_bro121	= mysqli_fetch_array($sql_01121);
						$nama_skpd		= $data_bro121['nama_skpd'];
 ?>
 <div class="email-app">
                <!-- ============================================================== -->
                <!-- Left Part -->
                <!-- ============================================================== -->
                <div class="left-part">
                    <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
                    <div class="scrollable" style="height:100%;">
                        <div class="p-3">
                            <a id="compose_mail" class="waves-effect waves-light btn btn-danger d-block" href="javascript: void(0)">Compose</a>
                        </div>
                        <div class="divider"></div>
                        <ul class="list-group">
                            <li>
                                <small class="p-3 grey-text text-lighten-1 db">Folders</small>
                            </li>
                            <li class="list-group-item border-0 p-0">
                                <a href="javascript:void(0)" class="active list-group-item-action d-flex align-items-center"><i class="font-18 align-middle mr-1 mdi mdi-inbox"></i> Inbox <span class="badge py-1 badge-success ml-auto">6</span></a>
                            </li>
                            <li class="list-group-item border-0 p-0">
                                <a href="javascript:void(0)" class="list-group-item-action d-block"> <i class="font-18 align-middle mr-1 mdi mdi-star"></i> Starred </a>
                            </li>
                            <li class="list-group-item border-0 p-0">
                                <a href="javascript:void(0)" class="list-group-item-action d-flex align-items-center"> <i class="font-18 align-middle mr-1 mdi mdi-send"></i> Draft <span class="badge py-1 badge-danger ml-auto">3</span></a></li>
                            <li class="list-group-item border-0 p-0">
                                <a href="javascript:void(0)" class="list-group-item-action d-block"> <i class="font-18 align-middle mr-1 mdi mdi-email"></i> Sent Mail </a>
                            </li>
                            <li class="list-group-item border-0 p-0">
                                <hr>
                            </li>
                            <li class="list-group-item border-0 p-0">
                                <a href="javascript:void(0)" class="list-group-item-action d-block"> <i class="font-18 align-middle mr-1 mdi mdi-block-helper"></i> Spam </a>
                            </li>
                            <li class="list-group-item border-0 p-0">
                                <a href="javascript:void(0)" class="list-group-item-action d-block"> <i class="font-18 align-middle mr-1 mdi mdi-delete"></i> Trash </a>
                            </li>
                            <li class="list-group-item border-0 p-0">
                                <hr>
                            </li>
                            <li>
                                <small class="p-3 grey-text text-lighten-1 db">Labels</small>
                            </li>
                            <li class="list-group-item border-0 p-0">
                                <a href="javascript:void(0)" class="list-group-item-action d-block"><i class="font-18 align-middle mr-1 text-danger mdi mdi-checkbox-blank-circle"></i> Work </a>
                            </li>
                            <li class="list-group-item border-0 p-0">
                                <a href="javascript:void(0)" class="list-group-item-action d-block"><i class="font-18 align-middle mr-1 text-cyan mdi mdi-checkbox-blank-circle"></i> Business </a>
                            </li>
                            <li class="list-group-item border-0 p-0">
                                <a href="javascript:void(0)" class="list-group-item-action d-block"><i class="font-18 align-middle mr-1 text-warning mdi mdi-checkbox-blank-circle"></i> Family </a>
                            </li>
                            <li class="list-group-item border-0 p-0">
                                <a href="javascript:void(0)" class="list-group-item-action d-block"><i class="font-18 align-middle mr-1 text-info mdi mdi-checkbox-blank-circle"></i> Friends </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Right Part  Mail Compose -->
                <!-- ============================================================== -->
                <div class="right-part mail-compose bg-white overflow-auto">
                    <div class="p-3 border-bottom">
                        <div class="d-flex align-items-center">
                            <div>
                                <h4>Compose</h4>
                                <span>create new message</span>
                            </div>
                            <div class="ml-auto">
                                <button id="cancel_compose" class="btn btn-dark">Back</button>
                            </div>
                        </div>
                    </div>
                    <!-- Action part -->
                    <!-- Button group part -->
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="To">
                            </div>
                            <div class="form-group">
                                <input type="text" id="example-subject" name="example-subject" class="form-control" placeholder="Subject">
                            </div>
                            <div id="summernote"></div>
                            <h4>Attachment</h4>
                            <div class="dropzone" id="dzid">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mt-3"><i class="far fa-envelope"></i> Send</button>
                            <button type="submit" class="btn btn-dark mt-3">Discard</button>
                        </form>
                        <!-- Action part -->
                    </div>
                </div>
            </div>