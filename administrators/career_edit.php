<!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;

$pageSql = "SELECT * FROM pagecareer";
$pageQry = mysql_query($pageSql, $koneksi) or die ("error paging: ".mysql_error());
			$jml	 = mysql_num_rows($pageQry);
			$max	 = ceil($jml/$row);
			
if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		//if (trim($_POST['cmbLevel'])=="BLANK") {
			//$message[] = "Level sistem belum dipilih !";		
		//}
		
		# Baca Variabel Form
		$txtcontent	= $_POST['txtcontent'];
		$txtcontent	= str_replace("'","&acute;",$txtcontent);
		//$cmbLevel	= $_POST['cmbLevel'];

		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		# SIMPAN DATA KE DATABASE
		if(count($message)==0){			
			$qryUpdate=mysql_query("UPDATE pagecareer SET category='', content='$txtcontent' WHERE careerid='".$_POST['txtKode']."'") or die ("Gagal query".mysql_error());
			if($qryUpdate){
				$qryLogs=mysql_query("INSERT INTO logs SET logid='', userid='".$_SESSION['userid']."', trans='EDIT', tab='Career', des='Data telah diubah', servicetime='".$tanggal."'");
				echo "<meta http-equiv='refresh' content='0; url=?page=career'>";
			}
			exit;
		}	
	} // Penutup POST
	
	#TAMPILKAN DATA CAREER UNTUK DIEDIT
	$KodeEdit = isset($_GET['Kode']) ? $_GET['Kode'] : $_POST['txtKode'];
	$sqlShow = "SELECT * FROM pagecareer WHERE careerid='$KodeEdit'";
	$qryShow = mysql_query($sqlShow, $koneksi) or die ("Query ambil data about salah:".mysql_error());
	$dataShow= mysql_fetch_array($qryShow);	
			
	# MASUKKAN DATA KE VARIABEL
	$dataKode		= $dataShow['careerid'];
	//$dataCategory	= isset($dataShow['category']) ? $dataShow['category'] : $_POST['cmbLevel'];
	$dataContent	= isset($dataShow['content']) ? $dataShow['content'] : $_POST['txtcontent'];
	} // Penutup GET

?>
			<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Career Tables
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="?page=career">Career</a></li>
                        <li class="active">Edit Career</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Career Data</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form" action="?page=career_edit" method="post" name="frmedit" target="_self" id="frmedit" enctype="multipart/form-data">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No</label>
                                            <input name="txtKode" type="text" class="form-control" value="<?php echo $dataKode; ?>" disabled/>
                                            <input name="txtKode" type="hidden" id="txtKode" value="<?php echo $dataKode; ?>" />
                                        </div>
                                        <!--<div class="form-group">
                                            <label>Category</label>
                                            <select name="cmbLevel">
                								<option value="BLANK"> </option>
                                                <option value="JUNIOR">JUNIOR</option>
                                                <option value="SENIOR">SENIOR</option>
                                                <option value="WEB">WEB DESIGN</option>
                                            </select>
                                        </div>-->
                                        <div class='box-body pad'>
                                                <textarea id="editor1" name="txtcontent" rows="10" cols="80">
                                                   <?php echo $dataContent; ?>
                                                </textarea>
                                        </div>
                                        <button class="btn-sm bg-blue btn-flat" name="btnSave" type="submit" style="cursor:pointer;">Update</button>
                                 	</form>
                          		</div>
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>      
        <!-- CK Editor -->
        <script src="js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>
            
<?php
}else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>