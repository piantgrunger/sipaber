<div class="col-lg-12 col-md-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home"
                                        role="tab"><span class="d-none d-md-block">Tanggal Pelantikan</span><span class="d-block d-md-none"><i class="mdi mdi-calendar-clock"></i></span></a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile"
                                        role="tab"><span class="d-none d-md-block">No. BAP</span><span class="d-block d-md-none"><i class="mdi mdi-bulletin-board"></i></a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings"
                                        role="tab"><span class="d-none d-md-block">No. SPP</span><span class="d-block d-md-none"><i class="mdi mdi-comment"></i></a>
                                </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ombak1"
                                        role="tab"><span class="d-none d-md-block">No. SPMT</span><span class="d-block d-md-none"><i class="mdi mdi-comment-account"></i></a>
                                </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ombak2"
                                        role="tab"><span class="d-none d-md-block">No. SPMJ</span><span class="d-block d-md-none"><i class="mdi mdi-comment-check"></i></a>
                                </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ombak3"
                                        role="tab"><span class="d-none d-md-block">No. SK</span><span class="d-block d-md-none"><i class="mdi mdi-comment-processing"></i></a>
                                </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ombak4"
                                        role="tab"><span class="d-none d-md-block">No. Surat Rekomendasi</span><span class="d-block d-md-none"><i class="mdi mdi-comment-alert"></i></a>
                                </li>
								<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ombak5"
                                        role="tab"><span class="d-none d-md-block">No. Surat Undangan</span><span class="d-block d-md-none"><i class="mdi mdi-comment-text"></i></a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
									<!-- Full width modal content -->
										<div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog"
											aria-labelledby="fullWidthModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-full-width">
												<div class="modal-content">
													<div class="modal-header d-flex align-items-center">
														<h4 class="modal-title" id="fullWidthModalLabel">Input Tanggal Pelantikan</h4>
														<button type="button" class="close ml-auto" data-dismiss="modal"
															aria-hidden="true">×</button>
													</div>
													<div class="modal-body">
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
																<label>Default Text <span class="help"> Tanggal Pelantikan</span></label>
																<input type="date" class="form-control" value="George deo...">
															</div>
															<div class="form-group">
																<label>Default Text <span class="help"> Jam Pelantikan</span></label>
																<input type="time" class="form-control" value="George deo...">
															</div>
															<div class="form-group">
																<label>Tempat Pelantikan</label>
																<textarea class="form-control" rows="5"></textarea>
															</div>
															<div class="form-group">
																<label for="example-email">Email <span class="help"> e.g.
																		"example@gmail.com"</span></label>
																<input type="email" id="example-email" name="example-email" class="form-control"
																	placeholder="Email">
															</div>
															<div class="form-group">
																<label>Password</label>
																<input type="password" class="form-control" value="password">
															</div>
															<div class="form-group">
																<label>Placeholder</label>
																<input type="text" class="form-control" placeholder="placeholder">
															</div>
															<div class="form-group">
																<label>Text area</label>
																<textarea class="form-control" rows="5"></textarea>
															</div>
															
															
															<div class="form-group">
																<label>Input Select</label>
																<select class="custom-select col-12" id="inlineFormCustomSelect">
																	<option selected>Choose...</option>
																	<option value="1">One</option>
																	<option value="2">Two</option>
																	<option value="3">Three</option>
																</select>
															</div>
															<div class="form-group">
																<label>Default file upload</label>
																<input type="file" class="form-control" id="exampleInputFile"
																	aria-describedby="fileHelp">
															</div>
															<div class="form-group">
																<label>Custom File upload</label>
																<div class="fileinput fileinput-new input-group" data-provides="fileinput">
																	<div class="form-control" data-trigger="fileinput">
																		<i class="fa fa-file fileinput-exists"></i>
																		<span class="fileinput-filename"></span>
																	</div>
																	<span class="input-group-addon btn btn-secondary btn-file">
																		<span class="fileinput-new">Select file</span>
																		<span class="fileinput-exists">Change</span>
																		<input type="file" name="...">
																	</span>
																	<a href="#" class="input-group-addon btn btn-secondary fileinput-exists"
																		data-dismiss="fileinput">Remove</a>
																</div>
															</div>
															<div class="form-group">
																<label>Helping text</label>
																<input type="text" class="form-control" placeholder="Helping text">
																<span class="help-block"><small>A block of help text that breaks onto a new line and
																		may extend beyond one line.</small></span> </div>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-light"
															data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Save changes</button>
													</div>
												</div><!-- /.modal-content -->
											</div><!-- /.modal-dialog -->
										</div><!-- /.modal -->
									
									
									
									
									<div class="btn-list">
                                    
                                    
                                    <!-- Full width modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#full-width-modal">Input Tanggal Pelantikan</button>
                                    
                                </div>
                                       1
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                      2  
                                    </div>
                                </div>
								<!--3 tab-->
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="Johnathan Doe"
                                                        class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="johnathan@admin.com"
                                                        class="form-control form-control-line" name="example-email"
                                                        id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password"
                                                        class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Phone No</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="123 456 7890"
                                                        class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5"
                                                        class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Country</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>Usa</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
								<!--4 tab-->
                                <div class="tab-pane" id="ombak1" role="tabpanel">
                                    <div class="card-body">
                                      4  
                                    </div>
                                </div>
								<!--5 tab-->
                                <div class="tab-pane" id="ombak2" role="tabpanel">
                                    <div class="card-body">
                                      5  
                                    </div>
                                </div>
								<!--5 tab-->
                                <div class="tab-pane" id="ombak3" role="tabpanel">
                                    <div class="card-body">
                                      6  
                                    </div>
                                </div>
								<!--5 tab-->
                                <div class="tab-pane" id="ombak4" role="tabpanel">
                                    <div class="card-body">
                                      7  
                                    </div>
                                </div>
								<!--5 tab-->
                                <div class="tab-pane" id="ombak5" role="tabpanel">
                                    <div class="card-body">
                                      8  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>