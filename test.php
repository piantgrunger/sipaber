<?php
	include "assets/include/koneksi.php";
	include "assets/include/session_admin.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form action="test-1.php" method='post'>
<div class="form-group row align-items-center mb-0">
                                        <label for="inputEmail3"
                                            class="col-md-2 text-right control-label col-form-label">Jabatan</label>
                                        <div class="col-md-10 border-left pb-2 pt-2">
                                           <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required name="golongan1" >
                                                <option value="">Pilih ...</option>
												<option>test</option>
                                          </select>
                                        </div>
</div>
<hr>
<div class="col-md-10 border-left pb-2 pt-2">
  <select class="select2 form-control custom-select" style="width: 100%; height:36px;" required name="golongan">
    <option value="">Pilih ...</option>
    <?PHP
												include "assets/combo/golongan.php";
												for ($i=0;$i<$count;$i++)
												{
												echo "<option value='$kategori[$i]'>$kategori[$i]";
												}
												?>
  </select>
</div>
															<button type="submit"
																	class="btn btn-success waves-effect waves-light mr-2">Simpan</button>
															<button type="reset"
																	class="btn btn-inverse waves-effect waves-light">Cancel</button>
</form>
</body>
</html>
