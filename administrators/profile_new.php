<style type="text/css">
select.icon-menu option {
background-repeat:no-repeat;
background-position:bottom left;
padding-left:30px;
}
</style>
<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

$q = mysql_query('SELECT MAX(userid) as userid from `users`');
$row = mysql_fetch_assoc($q);
$next_auto_inc = $row['userid'] + 1;

$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;

$pageSql = "SELECT * FROM users";
$pageQry = mysql_query($pageSql, $koneksi) or die ("error paging: ".mysql_error());
			$jml	 = mysql_num_rows($pageQry);
			$max	 = ceil($jml/$row);
			
if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txtname'])=="") {
			$message[] = "<b>tittle</b> can't be empty!";		
		}
		if (trim($_POST['txtuser'])=="") {
			$message[] = "<b>username</b> can't be empty!";		
		}
		if (trim($_POST['txtpass'])=="") {
			$message[] = "<b>password </b> can't be empty!";		
		}
		
		# Baca Variabel Form
		$txtname	= $_POST['txtname'];
		$txtname	= str_replace("'","&acute;",$txtname);
		$txtuser	= $_POST["txtuser"];
		$txtuser	= str_replace("'","&acute;",$txtuser);
		$txtpass	= $_POST["txtpass"];
		$txtpass	= str_replace("'","&acute;",$txtpass);
		$cmbAva	= $_POST['cmbAva'];

		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		# SIMPAN DATA KE DATABASE
		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			# Cek Password baru
			$qrySave=mysql_query("INSERT INTO users SET userid='', name='$txtname', username='$txtuser',
					password='".md5($txtpass)."', avatar='$cmbAva'") or die ("Gagal query".mysql_error());
			if($qrySave){
				$qryLogs=mysql_query("INSERT INTO logs SET logid='', userid='".$_SESSION['userid']."', trans='NEW', tab='Profile', des='Data telah ditambahkan', servicetime='".$tanggal."'");
				echo "<meta http-equiv='refresh' content='0; url=?page=profile'>";
			}
			exit;
		}	
	} // Penutup POST	
		
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= isset($_POST['txtKode']) ? $_POST['txtKode'] : '';
	$dataName	= isset($_POST['txtname']) ? $_POST['txtname'] : '';
	$dataUser	= isset($_POST['txtuser']) ? $_POST['txtuser'] : '';
	$dataPass	= isset($_POST['txtpass']) ? $_POST['txtpass'] : '';
	$dataAva	= isset($_POST['cmbAva']) ? $_POST['cmbAva'] : '';
	} // Penutup GET

?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Profile Tables
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li class="active">New Profile tables</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Profile Data Table</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form" action="?page=profile_new" method="post" name="frmedit" target="_self" id="frmedit" enctype="multipart/form-data">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No</label>
                                            <input name="txtKode" type="text" class="form-control" value="<?php echo $next_auto_inc; ?>" disabled/>
                                            <input name="txtKode" type="hidden" id="txtKode" value="<?php echo $dataKode; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input name="txtname" type="text" class="form-control" value="<?php echo $dataName; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input name="txtuser" type="text" class="form-control" value="<?php echo $dataUser; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input name="txtpass" type="password" class="form-control" placeholder="Please Insert Your Password" value="<?php echo $dataPass; ?>"  />
                                        </div>
                                        <div class="menu">
                                            <label>Avatar</label>
                                            <select name="cmbAva" class="icon-menu">
                								<option value="avatar.png" style="background-image:url(img/avatar.png)">satu </option>
                                                <option value="avatar2.png" style="background-image:url(img/avatar2.png)">dua </option>
                                                <option value="avatar3.png" style="background-image:url(img/avatar3.png)">tiga </option>
                                                <option value="avatar4.png" style="background-image:url(img/avatar4.png)">empat </option>
                                                <option value="avatar5.png" style="background-image:url(img/avatar5.png)">lima </option>
                                            </select>
                                        </div>
                                        <button class="btn-sm bg-blue btn-flat" name="btnSave" type="submit">Save</button>
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
