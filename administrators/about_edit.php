<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;

$pageSql = "SELECT * FROM pageabout";
$pageQry = mysql_query($pageSql, $koneksi) or die ("error paging: ".mysql_error());
			$jml	 = mysql_num_rows($pageQry);
			$max	 = ceil($jml/$row);
			
if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txttittle'])=="") {
			$message[] = "<b>tittle</b> can't be empty!";		
		}
		if (trim($_POST['txtcontent'])=="") {
			$message[] = "<b>content </b> can't be empty!";		
		}
		
		# Baca Variabel Form
		$txttittle	= $_POST['txttittle'];
		$txttittle	= str_replace("'","&acute;",$txttittle);
		$txtcontent	= $_POST["txtcontent"];
		$txtcontent	= str_replace("'","&acute;",$txtcontent);

		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		# SIMPAN DATA KE DATABASE
		if(count($message)==0){			
			$qryUpdate=mysql_query("UPDATE pageabout SET tittle='$txttittle', content='$txtcontent' WHERE aboutid='".$_POST['txtKode']."'") or die ("Gagal query".mysql_error());
			if($qryUpdate){
			$qryLogs=mysql_query("INSERT INTO logs SET logid='', userid='".$_SESSION['userid']."', trans='EDIT', tab='About', des='Data telah diubah', servicetime='".$tanggal."'") or die ("Gagal query".mysql_error());
				echo "<meta http-equiv='refresh' content='0; url=?page=about'>";
			}
			exit;
		}	
	} // Penutup POST
	
	#TAMPILKAN DATA ABOUT UNTUK DIEDIT
	$KodeEdit = isset($_GET['Kode']) ? $_GET['Kode'] : $_POST['txtKode'];
	$sqlShow = "SELECT * FROM pageabout WHERE aboutid='$KodeEdit'";
	$qryShow = mysql_query($sqlShow, $koneksi) or die ("Query ambil data about salah:".mysql_error());
	$dataShow= mysql_fetch_array($qryShow);	
			
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['aboutid'];
	$dataTittle	= isset($dataShow['tittle']) ? $dataShow['tittle'] : $_POST['txttittle'];
	$dataContent= isset($dataShow['content']) ? $dataShow['content'] : $_POST['txtcontent'];
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
                                    <form role="form" action="?page=about_edit" method="post" name="frmedit" target="_self" id="frmedit" enctype="multipart/form-data">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No</label>
                                            <input name="txtKode" type="text" class="form-control" value="<?php echo $dataKode; ?>" disabled/>
                                            <input name="txtKode" type="hidden" id="txtKode" value="<?php echo $dataKode; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tittle</label>
                                            <input name="txttittle" type="text" class="form-control" value="<?php echo $dataTittle; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea name="txtcontent" class="form-control" rows="3"><?php echo $dataContent; ?></textarea>
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
