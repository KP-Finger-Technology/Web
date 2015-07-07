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
		$txtPassLama= $_POST['txtPassLama'];
		$txtPassLama= str_replace("'","&acute;",$txtPassLama);
		$txtpass	= $_POST["txtpass"];
		$txtpass	= str_replace("'","&acute;",$txtpass);
		$cmbAva	= $_POST['cmbAva'];

		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		# SIMPAN DATA KE DATABASE
		# Jika jumlah error message tidak ada
		if(count($message)==0){			
			# Cek Password baru
			$qryUpdate=mysql_query("UPDATE users SET name='$txtname', username='$txtuser', password='".md5($txtpass)."', avatar='$cmbAva' WHERE userid='".$_POST['txtKode']."'") or die ("Gagal query".mysql_error());
			if($qryUpdate){
				$qryLogs=mysql_query("INSERT INTO logs SET logid='', userid='".$_SESSION['userid']."', trans='EDIT', tab='Profile', des='Data telah diubah', servicetime='".$tanggal."'");
				echo "<meta http-equiv='refresh' content='0; url=?page=welcome'>";
			}
			exit;
		}	
	} // Penutup POST
	
	#TAMPILKAN DATA ABOUT UNTUK DIEDIT
	$KodeEdit = isset($_GET['Kode']) ? $_GET['Kode'] : $_POST['txtKode'];
	$sqlShow = "SELECT * FROM users WHERE userid='$KodeEdit'";
	$qryShow = mysql_query($sqlShow, $koneksi) or die ("Query ambil data users salah:".mysql_error());
	$dataShow= mysql_fetch_array($qryShow);	
			
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['userid'];
	$dataName	= isset($dataShow['name']) ? $dataShow['name'] : $_POST['txtname'];
	$dataUser	= isset($dataShow['username']) ? $dataShow['username'] : $_POST['txtuser'];
	$dataPass	= isset($dataShow['password']) ? $dataShow['password'] : $_POST['txtpass'];
	$dataAva	= isset($dataShow['avatar']) ? $dataShow['avatar'] : $_POST['cmbAva'];
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
                        <li class="active">Profile tables</li>
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
                                    <form role="form" action="?page=profile_edit" method="post" name="frmedit" target="_self" id="frmedit" enctype="multipart/form-data">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No</label>
                                            <input name="txtKode" type="text" class="form-control" value="<?php echo $dataKode; ?>" disabled/>
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
                                            <input name="txtpass" type="password" class="form-control" placeholder="Please Insert Your Password" />
                                            <input name="txtPassLama" type="hidden" value="<?php echo $dataPass; ?>" /></td>
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
