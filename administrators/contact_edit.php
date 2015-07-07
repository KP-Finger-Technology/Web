<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;

$pageSql = "SELECT * FROM pagecontact";
$pageQry = mysql_query($pageSql, $koneksi) or die ("error paging: ".mysql_error());
			$jml	 = mysql_num_rows($pageQry);
			$max	 = ceil($jml/$row);
			
if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txtaddress'])=="") {
			$message[] = "<b>tittle</b> can't be empty!";		
		}
		if (trim($_POST['txtphone'])=="") {
			$message[] = "<b>content </b> can't be empty!";		
		}
		
		# Baca Variabel Form
		$txtaddress	= $_POST['txtaddress'];
		$txtaddress	= str_replace("'","&acute;",$txtaddress);
		$txtphone	= $_POST["txtphone"];
		$txtphone	= str_replace("'","&acute;",$txtphone);
		$txtemail	= $_POST["txtemail"];
		$txtemail	= str_replace("'","&acute;",$txtemail);

		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		# SIMPAN DATA KE DATABASE
		if(count($message)==0){			
			$qryUpdate=mysql_query("UPDATE pagecontact SET address='$txtaddress', phone='$txtphone', email='$txtemail'
				WHERE contactid='".$_POST['txtKode']."'") or die ("Gagal query".mysql_error());
			if($qryUpdate){
				$qryLogs=mysql_query("INSERT INTO logs SET logid='', userid='".$_SESSION['userid']."', trans='EDIT', tab='Contact', des='Data telah diubah', servicetime='".$tanggal."'");
				echo "<meta http-equiv='refresh' content='0; url=?page=contact'>";
			}
			exit;
		}	
	} // Penutup POST
	
	#TAMPILKAN DATA ABOUT UNTUK DIEDIT
	$KodeEdit = isset($_GET['Kode']) ? $_GET['Kode'] : $_POST['txtKode'];
	$sqlShow = "SELECT * FROM pagecontact WHERE contactid='$KodeEdit'";
	$qryShow = mysql_query($sqlShow, $koneksi) or die ("Query ambil data about salah:".mysql_error());
	$dataShow= mysql_fetch_array($qryShow);	
			
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['contactid'];
	$dataAddress= isset($dataShow['address']) ? $dataShow['address'] : $_POST['txtaddress'];
	$dataPhone	= isset($dataShow['phone']) ? $dataShow['phone'] : $_POST['txtphone'];
	$dataEmail	= isset($dataShow['email']) ? $dataShow['email'] : $_POST['txtemail'];
	} // Penutup GET

?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        About Tables
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">About tables</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">About Data Table</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form" action="?page=contact_edit" method="post" name="frmedit" target="_self" id="frmedit" enctype="multipart/form-data">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No</label>
                                            <input name="txtKode" type="text" class="form-control" value="<?php echo $dataKode; ?>" disabled/>
                                            <input name="txtKode" type="hidden" id="txtKode" value="<?php echo $dataKode; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input name="txtaddress" type="text" class="form-control" value="<?php echo $dataAddress; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input name="txtphone" type="text" class="form-control" value="<?php echo $dataPhone; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="txtemail" type="text" class="form-control" value="<?php echo $dataEmail; ?>"/>
                                        </div>
                                        <button class="btn-sm bg-blue btn-flat" name="btnSave" type="submit">Update</button>
                                 	</form>
                          		</div>
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->

<?php }else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>
