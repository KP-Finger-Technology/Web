<link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

$q = mysql_query('SELECT MAX(careerid) as careerid from `pagecareer`');
$row = mysql_fetch_assoc($q);
$next_auto_inc = $row['careerid'] + 1;

if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['cmbLevel'])=="BLANK") {
			$message[] = "Level sistem belum dipilih !";		
		}
		
		# Baca Variabel Form
		$txtId		= $_POST['txtId'];
		$txtId		= str_replace("'","&acute;",$txtId);
		$txtId		= str_replace(".","",$txtId);
		$txtcontent	= $_POST['txtcontent'];
		$txtcontent	= str_replace("'","&acute;",$txtcontent);
		//$txtcategory= $_POST['txtcategory'];
		//$txtcategory= str_replace("'","&acute;",$txtcategory);
									
		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		# SIMPAN DATA KE DATABASE
		if(count($message)==0){			
			$qrySave=mysql_query("INSERT INTO pagecareer SET careerid='', category='', content='$txtcontent'")
				or die ("Gagal query".mysql_error());
			if($qrySave){
				$qryLogs=mysql_query("INSERT INTO logs SET logid='', userid='".$_SESSION['userid']."', trans='NEW', tab='Career', des='Data telah ditambah', servicetime='".$tanggal."'") or die ("Gagal query".mysql_error());
				echo "<meta http-equiv='refresh' content='0; url=?page=career'>";
			}
			exit;
		}
		# JIKA ADA PESAN ERROR DARI VALIDASI
		// (Form Kosong, atau Duplikat ada), Ditampilkan lewat kode ini
		if (! count($message)==0 ){
            echo "<div class='mssgBox'>";
			echo "<img src='img/attention.png' class='imgBox'> <hr>";
				$Num=0;
				foreach ($message as $indeks=>$pesan_tampil) { 
				$Num++;
					echo "&nbsp;&nbsp;$Num. $pesan_tampil<br>";	
				} 
			echo "</div> <br>"; 
		}
	} // Penutup POST
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= isset($_POST['txtKode']) ? $_POST['txtKode'] : '';
	//$dataCategory	= isset($_POST['txtcategory']) ? $_POST['txtcategory'] : '';
	$dataContent= isset($_POST['txtcontent']) ? $_POST['txtcontent'] : '';
}
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
                        <li class="active">New Career</li>
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
                                    <form role="form" action="?page=career_new" method="post" name="frmedit" target="_self" id="frmedit" enctype="multipart/form-data">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No</label>
                                            <input name="txtId" type="text" class="form-control" value="<?php echo $next_auto_inc; ?>" disabled/>
                                        </div>
                                        <!--<div class="form-group">
                                            <label>Category</label>
                                            <input name="txtcategory" type="text" class="form-control" value="<?php// echo $dataCategory; ?>"/>
                                        </div>-->
                                        <div class='box-body pad'>
                                                <textarea id="editor1" name="txtcontent" rows="10" cols="80">
                                                   <?php echo $dataContent; ?>
                                                </textarea>
                                        </div>
                                        <button class="btn-sm bg-blue btn-flat" name="btnSave" type="submit" style="cursor:pointer;">Save</button>
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