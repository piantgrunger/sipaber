<?php
function rupiah_4($angka){
	
	$hasil_rupiah =  number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}
			  
			 								//tampil
					$year1				= date("Y");
					$sql_00001			= "select SUM(anggaran_awal) as anggaran_awal_skpd from usulan_perubahan where tahun ='$year1' ";
					$sql_kk001 			= mysqli_query($conn, $sql_00001);
					$data_p1 			= mysqli_fetch_array($sql_kk001);
					$anggaran_awal_skpd	 = $data_p1['0'];
					
					$rp_anggaran_awal_skpd	 = rupiah_4($anggaran_awal_skpd); 
					
					$sql_000012			= "select SUM(anggaran_susulan) as anggaran_perubahan_skpd from usulan_perubahan where tahun ='$year1' ";
					$sql_kk0012 		= mysqli_query($conn, $sql_000012);
					$data_p12 			= mysqli_fetch_array($sql_kk0012);
					$anggaran_perubahan_skpd	 = $data_p12['0'];
					$rp_anggaran_perubahan_skpd	 = rupiah_4($anggaran_perubahan_skpd); 
					
					$rp_anggaran_perubahan_skpd_total	 	= $anggaran_awal_skpd + $anggaran_perubahan_skpd;
					$cetak_anggaran_perubahan_skpd	 		= rupiah_4($rp_anggaran_perubahan_skpd_total); 
?>

<div class="col-md-7 col-12 align-self-center d-none d-md-block">
                    <div class="d-flex mt-2 justify-content-end">
                        <div class="d-flex mr-3 ml-2">
                            <div class="chart-text mr-2">
                                <h6 class="mb-0"><small>MURNI</small></h6>
                                <h4 class="mt-0 text-info"><?php echo $rp_anggaran_awal_skpd; ?></h4>
                            </div>
                            <div class="spark-chart">
                                
                            </div>
                        </div>
                        <div class="d-flex ml-2">
                            <div class="chart-text mr-2">
                                <h6 class="mb-0"><small>USULAN</small></h6>
                                <h4 class="mt-0 text-primary"><?php echo $rp_anggaran_perubahan_skpd; ?></h4>
                            </div>
                            <div class="spark-chart">
                                <div id="monthchart"></div>
                            </div>
                        </div>
						 <div class="d-flex ml-2">
                            <div class="chart-text mr-2">
                                <h6 class="mb-0"><small>TOTAL</small></h6>
                                <h4 class="mt-0 text-success"><?php echo $cetak_anggaran_perubahan_skpd; ?></h4>
                            </div>
                            <div class="spark-chart">
                                <div id="lastmonthchart"></div>
                            </div>
                        </div>
                    </div>
</div>