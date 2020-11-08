<?php
			$year1				= date("Y");
			
			$sql_hitung11 		="select * from tb_pensiun  where thn_pensiun='$year1'  order by bln_pensiun, tgl_pensiun  ";
			$sql_hitung_0111	= mysqli_query ($conn,$sql_hitung11);
			$sql_hitung_0211	= mysqli_num_rows($sql_hitung_0111);
			
			$sql_hitung11b 		="select * from tb_pensiun  where thn_pensiun='$year1' and esselon !='-' order by bln_pensiun, tgl_pensiun  ";
			$sql_hitung_0111b	= mysqli_query ($conn,$sql_hitung11b);
			$sql_hitung_0211b	= mysqli_num_rows($sql_hitung_0111b);
			
			$sql_hitung11a 		="select * from tb_pensiun  where thn_pensiun='$year1' and esselon ='-' order by bln_pensiun, tgl_pensiun  ";
			$sql_hitung_0111a	= mysqli_query ($conn,$sql_hitung11a);
			$sql_hitung_0211a	= mysqli_num_rows($sql_hitung_0111a);
			
			$sql_hitung111 		="select * from jabatan  where status='Kosong' and esselon !='-' ";
			$sql_hitung_01111	= mysqli_query ($conn,$sql_hitung111);
			$sql_hitung_02111	= mysqli_num_rows($sql_hitung_01111);
			
			$sql_hitung1111 	="select * from jabatan  where status !='Kosong'  and esselon !='-' ";
			$sql_hitung_011111	= mysqli_query ($conn,$sql_hitung1111);
			$sql_hitung_021111	= mysqli_num_rows($sql_hitung_011111);
			
											$sql_bro 	="select * from tb_tglpelantikan where status='Aktif' ";
											$sql_01		= mysqli_query ($conn,$sql_bro);
											$sql_tgl	= mysqli_fetch_array($sql_01);
											$kd_tgl		= $sql_tgl['kode'];
											
											$sql_2a 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='2' and keterangan='MUTASI' ";
											$sql_2a_esselon			= mysqli_query ($conn,$sql_2a);
											$sql_2a_esselon_m		= mysqli_num_rows($sql_2a_esselon);
											
											$sql_2aa 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='2' and keterangan='DEMOSI' ";
											$sql_2a_esselona		= mysqli_query ($conn,$sql_2aa);
											$sql_2a_esselon_ma		= mysqli_num_rows($sql_2a_esselona);
											
											$sql_2ab 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='2' and keterangan='PROMOSI' ";
											$sql_2a_esselonb		= mysqli_query ($conn,$sql_2ab);
											$sql_2a_esselon_mb		= mysqli_num_rows($sql_2a_esselonb);
											
											$sql_2ac 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='2' and keterangan='MUTASI DIAGONAL' ";
											$sql_2a_esselonc		= mysqli_query ($conn,$sql_2ac);
											$sql_2a_esselon_mc		= mysqli_num_rows($sql_2a_esselonc);
											
											$sql_2abd 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='2' and keterangan='PERUBAHAN NOMENKLATUR' ";
											$sql_2a_esselonbd		= mysqli_query ($conn,$sql_2abd);
											$sql_2a_esselon_mbd		= mysqli_num_rows($sql_2a_esselonbd);
											
											//------------------------------- esselon III.a
											
											$sql_3a 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='3' and keterangan='MUTASI' ";
											$sql_3a_esselon			= mysqli_query ($conn,$sql_3a);
											$sql_3a_esselon_m		= mysqli_num_rows($sql_3a_esselon);
											
											$sql_3aa				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='3' and keterangan='DEMOSI' ";
											$sql_3a_esselona		= mysqli_query ($conn,$sql_3aa);
											$sql_3a_esselon_ma		= mysqli_num_rows($sql_3a_esselona);
											
											$sql_3ab 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='3' and keterangan='PROMOSI' ";
											$sql_3a_esselonb		= mysqli_query ($conn,$sql_3ab);
											$sql_3a_esselon_mb		= mysqli_num_rows($sql_3a_esselonb);
											
											$sql_3ac 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='3' and keterangan='MUTASI DIAGONAL' ";
											$sql_3a_esselonc		= mysqli_query ($conn,$sql_3ac);
											$sql_3a_esselon_mc		= mysqli_num_rows($sql_3a_esselonc);
											
											$sql_3abd 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='3' and keterangan='PERUBAHAN NOMENKLATUR' ";
											$sql_3a_esselonbd		= mysqli_query ($conn,$sql_3abd);
											$sql_3a_esselon_mbd		= mysqli_num_rows($sql_3a_esselonbd);

											//------------------- esselon III.b
											
											$sql_4a 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='4' and keterangan='MUTASI' ";
											$sql_4a_esselon			= mysqli_query ($conn,$sql_4a);
											$sql_4a_esselon_m		= mysqli_num_rows($sql_4a_esselon);
											
											$sql_4aa				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='4' and keterangan='DEMOSI' ";
											$sql_4a_esselona		= mysqli_query ($conn,$sql_4aa);
											$sql_4a_esselon_ma		= mysqli_num_rows($sql_4a_esselona);
											
											$sql_4ab 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='4' and keterangan='PROMOSI' ";
											$sql_4a_esselonb		= mysqli_query ($conn,$sql_4ab);
											$sql_4a_esselon_mb		= mysqli_num_rows($sql_4a_esselonb);
											
											$sql_4ac 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='4' and keterangan='MUTASI DIAGONAL' ";
											$sql_4a_esselonc		= mysqli_query ($conn,$sql_4ac);
											$sql_4a_esselon_mc		= mysqli_num_rows($sql_4a_esselonc);
											
											$sql_4abd 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='4' and keterangan='PERUBAHAN NOMENKLATUR' ";
											$sql_4a_esselonbd		= mysqli_query ($conn,$sql_4abd);
											$sql_4a_esselon_mbd		= mysqli_num_rows($sql_4a_esselonbd);
											
											//------------------- esselon IV.a
											$sql_5a 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='5' and keterangan='MUTASI' ";
											$sql_5a_esselon			= mysqli_query ($conn,$sql_5a);
											$sql_5a_esselon_m		= mysqli_num_rows($sql_5a_esselon);
											
											$sql_5aa				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='5' and keterangan='DEMOSI' ";
											$sql_5a_esselona		= mysqli_query ($conn,$sql_5aa);
											$sql_5a_esselon_ma		= mysqli_num_rows($sql_5a_esselona);
											
											$sql_5ab 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='5' and keterangan='PROMOSI' ";
											$sql_5a_esselonb		= mysqli_query ($conn,$sql_5ab);
											$sql_5a_esselon_mb		= mysqli_num_rows($sql_5a_esselonb);
											
											$sql_5ac 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='5' and keterangan='MUTASI DIAGONAL' ";
											$sql_5a_esselonc		= mysqli_query ($conn,$sql_5ac);
											$sql_5a_esselon_mc		= mysqli_num_rows($sql_5a_esselonc);
											
											$sql_5abd 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='5' and keterangan='PERUBAHAN NOMENKLATUR' ";
											$sql_5a_esselonbd		= mysqli_query ($conn,$sql_5abd);
											$sql_5a_esselon_mbd		= mysqli_num_rows($sql_5a_esselonbd);

											//------------------- esselon IV.b
			
											$sql_6a 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='6' and keterangan='MUTASI' ";
											$sql_6a_esselon			= mysqli_query ($conn,$sql_6a);
											$sql_6a_esselon_m		= mysqli_num_rows($sql_6a_esselon);
											
											$sql_6aa				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='6' and keterangan='DEMOSI' ";
											$sql_6a_esselona		= mysqli_query ($conn,$sql_6aa);
											$sql_6a_esselon_ma		= mysqli_num_rows($sql_6a_esselona);
											
											$sql_6ab 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='6' and keterangan='PROMOSI' ";
											$sql_6a_esselonb		= mysqli_query ($conn,$sql_6ab);
											$sql_6a_esselon_mb		= mysqli_num_rows($sql_6a_esselonb);
											
											$sql_6ac 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='6' and keterangan='MUTASI DIAGONAL' ";
											$sql_6a_esselonc		= mysqli_query ($conn,$sql_6ac);
											$sql_6a_esselon_mc		= mysqli_num_rows($sql_6a_esselonc);
											
											$sql_6abd 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and grade ='6' and keterangan='PERUBAHAN NOMENKLATUR' ";
											$sql_6a_esselonbd		= mysqli_query ($conn,$sql_6abd);
											$sql_6a_esselon_mbd		= mysqli_num_rows($sql_6a_esselonbd);
											
											//------------------- REKAPITULASI
											$sql_7a 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl'  and keterangan='MUTASI' ";
											$sql_7a_esselon			= mysqli_query ($conn,$sql_7a);
											$sql_7a_esselon_m		= mysqli_num_rows($sql_7a_esselon);
											
											$sql_7aa				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and keterangan='DEMOSI' ";
											$sql_7a_esselona		= mysqli_query ($conn,$sql_7aa);
											$sql_7a_esselon_ma		= mysqli_num_rows($sql_7a_esselona);
											
											$sql_7ab 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl' and keterangan='PROMOSI' ";
											$sql_7a_esselonb		= mysqli_query ($conn,$sql_7ab);
											$sql_7a_esselon_mb		= mysqli_num_rows($sql_7a_esselonb);
											
											$sql_7ac 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl'  and keterangan='MUTASI DIAGONAL' ";
											$sql_7a_esselonc		= mysqli_query ($conn,$sql_7ac);
											$sql_7a_esselon_mc		= mysqli_num_rows($sql_7a_esselonc);
											
											$sql_7abd 				="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl'  and keterangan='PERUBAHAN NOMENKLATUR' ";
											$sql_7a_esselonbd		= mysqli_query ($conn,$sql_7abd);
											$sql_7a_esselon_mbd		= mysqli_num_rows($sql_7a_esselonbd);
											
											$sql_7abd_j 			="select * from tb_pelantikan  where tgl_pelantikan ='$kd_tgl'  ";
											$sql_7a_esselonbd_j		= mysqli_query ($conn,$sql_7abd_j);
											$sql_7a_esselon_mbd_j	= mysqli_num_rows($sql_7a_esselonbd_j);


			?>
			<?php
			$sql_hitung_pegawai_1 		= "select * from tb_pejabat  where status='Aktif' and esselon ='II.a'   ";
			$sql_hitung_pegawai_1		= mysqli_query ($conn,$sql_hitung_pegawai_1);
			$count_hitung_pegawai_1		= mysqli_num_rows($sql_hitung_pegawai_1);
			?>
			<?php
			$sql_hitung_pegawai_2 		= "select * from tb_pejabat  where status='Aktif' and esselon ='II.b'  ";
			$sql_hitung_pegawai_2		= mysqli_query ($conn,$sql_hitung_pegawai_2);
			$count_hitung_pegawai_2		= mysqli_num_rows($sql_hitung_pegawai_2);
			?>
			<?php
			$sql_hitung_pegawai_3 		= "select * from tb_pejabat  where status='Aktif' and esselon ='III.a'  ";
			$sql_hitung_pegawai_3		= mysqli_query ($conn,$sql_hitung_pegawai_3);
			$count_hitung_pegawai_3		= mysqli_num_rows($sql_hitung_pegawai_3);
			?>
			<?php
			$sql_hitung_pegawai_4 		= "select * from tb_pejabat  where status='Aktif' and esselon ='III.b'  ";
			$sql_hitung_pegawai_4		= mysqli_query ($conn,$sql_hitung_pegawai_4);
			$count_hitung_pegawai_4		= mysqli_num_rows($sql_hitung_pegawai_4);
			?>
			<?php
			$sql_hitung_pegawai_5 		= "select * from tb_pejabat  where status='Aktif' and esselon ='IV.a'  ";
			$sql_hitung_pegawai_5		= mysqli_query ($conn,$sql_hitung_pegawai_5);
			$count_hitung_pegawai_5		= mysqli_num_rows($sql_hitung_pegawai_5);
			?>
			<?php
			$sql_hitung_pegawai_6 		= "select * from tb_pejabat  where status='Aktif' and esselon ='IV.b'  ";
			$sql_hitung_pegawai_6		= mysqli_query ($conn,$sql_hitung_pegawai_6);
			$count_hitung_pegawai_6		= mysqli_num_rows($sql_hitung_pegawai_6);
			?>
			
			<?php
			$sql_hitung1111c 	="select * from jabatan  where status = 'Kosong'  and esselon !='-' ";
			$sql_hitung_011111c	= mysqli_query ($conn,$sql_hitung1111c);
			$sql_jab_kosong		= mysqli_num_rows($sql_hitung_011111c);
			
			$sql_hitung1111c_ 		="select * from tb_jabatan_kosong  where tgl_pelantikan='$kd_tgl'  and esselon !='-' ";
			$sql_hitung_011111c_	= mysqli_query ($conn,$sql_hitung1111c_);
			$sql_jab_kosong_		= mysqli_num_rows($sql_hitung_011111c_);
			
			$jml_kosong				= $sql_jab_kosong - $sql_jab_kosong_;
			?>
			
			<?PHP
			$sql_hitung1111ab 		="select * from daftar_tunggu     ";
			$sql_hitung_011111ab	= mysqli_query ($conn,$sql_hitung1111ab);
			$sql_daftar_tunggu		= mysqli_num_rows($sql_hitung_011111ab);
			?>
			

			<?php
			$sql_bro5 				="select * from tb_tglpelantikan where status='Aktif' ";
			$sql_015				= mysqli_query ($conn,$sql_bro5);
			$sql_tgl5				= mysqli_fetch_array($sql_015);
			$kd_tgl					= $sql_tgl5['kode'];
			
			$sql_hitung1111pel 		="select * from tb_pelantikan  where tgl_pelantikan='$kd_tgl'   ";
			$sql_hitung_011111pel	= mysqli_query ($conn,$sql_hitung1111pel);
			$sql_hitung_021111pel	= mysqli_num_rows($sql_hitung_011111pel);
			
			
			$sql_hitung1111 		="select * from tb_pelantikan  where tgl_pelantikan='$kd_tgl' and kd_esselon='AA'   ";
			$sql_hitung_011111		= mysqli_query ($conn,$sql_hitung1111);
			$sql_hitung_021111		= mysqli_num_rows($sql_hitung_011111);
			
			$sql_hitung1111a 		="select * from tb_pelantikan  where tgl_pelantikan='$kd_tgl' and kd_esselon ='BB'   ";
			$sql_hitung_011111a		= mysqli_query ($conn,$sql_hitung1111a);
			$sql_hitung_021111a		= mysqli_num_rows($sql_hitung_011111a);
			
			$sql_hitung1111aa 		="select * from tb_pelantikan  where tgl_pelantikan='$kd_tgl' and kd_esselon ='CC'   ";
			$sql_hitung_011111aa	= mysqli_query ($conn,$sql_hitung1111aa);
			$sql_hitung_021111aa	= mysqli_num_rows($sql_hitung_011111aa);
			
			$sql_hitung1111aaa 		="select * from tb_pelantikan  where tgl_pelantikan='$kd_tgl' and kd_esselon ='DD'   ";
			$sql_hitung_011111aaa	= mysqli_query ($conn,$sql_hitung1111aaa);
			$sql_hitung_021111aaa	= mysqli_num_rows($sql_hitung_011111aaa);
			?>
<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile position-relative" style="background: url(src/assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="src/assets/images/users/profile.png" alt="user" class="w-100" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text pt-1"> 
                        <a href="#" class="dropdown-toggle u-dropdown w-100 text-white d-block position-relative" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe</a>
                        <div class="dropdown-menu animated flipInY"> 
                            <a href="#" class="dropdown-item"><i class="ti-user"></i>
                                My Profile</a> 
                            <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My
                                Balance</a>
                            <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div> 
                            <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div> 
                            <a href="src/material/authentication-login1.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Settings</span></li>
                         <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="tgl-pelantikan.php" aria-expanded="false"><i class="mdi mdi-calendar-clock"></i><span
                                    class="hide-menu">Tgl Pelantikan</span></a></li>					
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-file-document"></i><span class="hide-menu">Administrasi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item"><a href="surat-undangan.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Undangan </span></a></li>
								<li class="sidebar-item"><a href="surat-rekomendasi.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Rekomendasi </span></a></li>
                                <li class="sidebar-item"><a href="bap.php" class="sidebar-link"><i
                                            class="mdi mdi-email"></i><span class="hide-menu"> BAP </span></a></li>
                                <li class="sidebar-item"><a href="spp.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> SPP </span></a></li>
								<li class="sidebar-item"><a href="spmt.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> SPMT </span></a></li>
								<li class="sidebar-item"><a href="spmj.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> SPMJ </span></a></li>
								<li class="sidebar-item"><a href="surat-keputusan.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> SK </span></a></li>
                             
                            </ul>
                        </li>
						 <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="saksi.php" aria-expanded="false"><i class="mdi mdi-account-convert"></i><span
                                    class="hide-menu">Saksi Pelantikan</span></a></li>
						 <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="rohaniawan.php" aria-expanded="false"><i class="mdi mdi-yin-yang"></i><span
                                    class="hide-menu">Rohaniawan</span></a></li>
									
					 <li class="nav-small-cap"><i class="mdi mdi-yin-yang"></i>
                            <span class="hide-menu">Data</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="data-pegawai.php" aria-expanded="false"><i class="mdi mdi-worker"></i><span
                                    class="hide-menu">Pegawai</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="tambah-pegawai.php" aria-expanded="false"><i class="mdi mdi-account-multiple-plus"></i><span
                                    class="hide-menu">Tambah Pegawai</span></a></li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-account-off"></i><span class="hide-menu"> Pensiun </span>&nbsp;&nbsp; <span class="badge badge-pill badge-primary"><?php echo $sql_hitung_0211; ?></span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="data-pensiun-pejabat.php" class="sidebar-link"><i
                                            class="mdi mdi-email"></i><span class="hide-menu"> Pejabat </span> &nbsp;&nbsp;<span class="badge badge-pill badge-danger"><?php echo $sql_hitung_0211b; ?></span></a></li>
                                <li class="sidebar-item"><a href="data-pensiun-pegawai.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Staff
                                        </span> &nbsp;&nbsp;<span class="badge badge-pill badge-warning"><?php echo $sql_hitung_0211a; ?></span></a></li>
                             
                            </ul>
                        </li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="daftar-tunggu.php" aria-expanded="false"><i class="mdi mdi-account-star"></i><span
                                    class="hide-menu">Daftar Tunggu</span> &nbsp;&nbsp;<span class="badge badge-pill badge-secondary"><?php echo $sql_daftar_tunggu; ?></span></a></li>
						 <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Jabatan</span></li>
							
						
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-sitemap"></i><span class="hide-menu">Jabatan </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="tambah-jabatan.php" class="sidebar-link"><i
                                            class="mdi mdi-email"></i><span class="hide-menu"> Tambah Jabatan </span> </a></li>
                                <li class="sidebar-item"><a href="esselon-3.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Tambah Unit Org.</span></a></li>
								<li class="sidebar-item"><a href="jabatan.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Data Jabatan  </span> </a></li>
								
                            </ul>
                        </li>
						<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="jabatan-kosong.php" aria-expanded="false"><i class="mdi mdi-timer-sand-empty"></i><span
                                    class="hide-menu">Jab. Kosong</span>&nbsp;&nbsp;<span class="badge badge-pill badge-warning"><?php echo $jml_kosong; ?></span></a></li>
						
						<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Pelantikan</span></li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-account-switch"></i><span class="hide-menu">Pelantikan </span> &nbsp;&nbsp;<span class="badge badge-pill badge-primary"><?php echo $sql_hitung_021111pel; ?></span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="esselon-2.php" class="sidebar-link"><i
                                            class="mdi mdi-email"></i><span class="hide-menu"> Esselon II </span> &nbsp;&nbsp;<span class="badge badge-pill badge-danger"><?php echo $sql_hitung_021111; ?></span></a></li>
                                <li class="sidebar-item"><a href="esselon-3.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Esselon III</span> &nbsp;&nbsp;<span class="badge badge-pill badge-info"><?php echo $sql_hitung_021111a; ?></span></a></li>
								<li class="sidebar-item"><a href="esselon-4.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Esselon IV  </span> &nbsp;&nbsp;<span class="badge badge-pill badge-warning"><?php echo $sql_hitung_021111aa; ?></span></a></li>
								<li class="sidebar-item"><a href="numenklatur.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Perubahan Numenklatur</span> &nbsp;&nbsp;<span class="badge badge-pill badge-secondary"><?php echo $sql_hitung_021111aaa; ?></span></a></li>
                             
                            </ul>
                        </li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-checkbox-multiple-marked-outline"></i><span class="hide-menu">Nomor SK </span> &nbsp;&nbsp;<span class="badge badge-pill badge-primary"><?php echo $sql_hitung_021111pel; ?></span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="no-sk-esselon-2.php" class="sidebar-link"><i
                                            class="mdi mdi-email"></i><span class="hide-menu"> Esselon II </span> &nbsp;&nbsp;<span class="badge badge-pill badge-danger"><?php echo $sql_hitung_021111; ?></span></a></li>
                                <li class="sidebar-item"><a href="no-sk-esselon-3.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Esselon III / IV</span> &nbsp;&nbsp;<span class="badge badge-pill badge-info"><?php echo $sql_hitung_021111a; ?></span></a></li>
								
                             
                            </ul>
                        </li>
						<li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Cetak</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-printer"></i><span class="hide-menu">Cetak Dokumen
                                    </span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                
                                <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false"><i class="mdi mdi-email"></i><span
                                            class="hide-menu">Master Excel</span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item"><a href="report-bap-excel.php" class="sidebar-link"><i
                                                    class="mdi mdi-octagram"></i><span class="hide-menu"> BAP</span></a></li>
                                        <li class="sidebar-item"><a href="report-administrasi-excel.php" class="sidebar-link"><i
                                                    class="mdi mdi-octagram"></i><span class="hide-menu"> Administrasi</span></a></li>
                                        <li class="sidebar-item"><a href="report-sk-excel.php" class="sidebar-link"><i
                                                    class="mdi mdi-octagram"></i><span class="hide-menu"> Lamp. SK</span></a></li>
                                        
                                    </ul>
                                </li>
                                 <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                        aria-expanded="false"><i class="mdi mdi-email"></i><span
                                            class="hide-menu">Template Cetak</span></a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item"><a href="template-administrasi.php" class="sidebar-link"><i
                                                    class="mdi mdi-octagram"></i><span class="hide-menu"> Dok. Pelantikan</span></a></li>
                                        <li class="sidebar-item"><a href="template-struktur-organisasi.php" class="sidebar-link"><i
                                                    class="mdi mdi-octagram"></i><span class="hide-menu"> Struktur Org.</span></a></li>
                                     
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>
						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-printer"></i><span class="hide-menu">Absensi </span> </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="report-absen-esselon-dua.php" class="sidebar-link"><i
                                            class="mdi mdi-email"></i><span class="hide-menu"> Esselon II </span> </a></li>
                                <li class="sidebar-item"><a href="report-absen-esselon-tiga.php.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Esselon III</span> </a></li>
								<li class="sidebar-item"><a href="report-absen-esselon-empat.php.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Esselon IV  </span> </a></li>
								<li class="sidebar-item"><a href="report-absen-non-esselon.php.php" class="sidebar-link"><i
                                            class="mdi mdi-email-alert"></i><span class="hide-menu"> Staff</span> </a></li>
                             
                            </ul>
                        </li>
						
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Extra</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="../Documentation/document.html" aria-expanded="false"><i
                                    class="mdi mdi-content-paste"></i><span class="hide-menu">Documentation</span></a>                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="src/material/authentication-login1.html" aria-expanded="false"><i
                                    class="mdi mdi-directions"></i><span class="hide-menu">Log Out</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>            </div>
            <!-- End Bottom points-->
        </aside>