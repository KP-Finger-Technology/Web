<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

$q = mysql_query('SELECT MAX(webid) as webid from `pagewebs`');
$row = mysql_fetch_assoc($q);
$next_auto_inc = $row['webid'] + 1;

if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txttittle'])=="") {
			$message[] = "<b>Product</b> can't be empty !";		
		}
		if (trim($_POST['txtcontent'])=="") {
			$message[] = "<b>Product</b> can't be empty !";		
		}
		
		# Baca Variabel Form
		$txtId	= $_POST['txtId'];
		$txtId	= str_replace("'","&acute;",$txtId);
		$txtId	= str_replace(".","",$txtId);
		$txttittle	= $_POST['txttittle'];
		$txttittle	= str_replace("'","&acute;",$txttittle);
		$txtcontent	= $_POST['txtcontent'];
		$txtcontent	= str_replace("'","&acute;",$txtcontent);
		
		$lokasi_file=$_FILES['picture']['tmp_name'];
		$tipe_file 	=$_FILES['picture']['type'];
		$nama_file	=$_FILES['picture']['name'];
		$direktori	="../images/web/$nama_file";
		move_uploaded_file($lokasi_file,$direktori);
									
		# Validasi Nama barang, jika sudah ada akan ditolak
		$sqlCek="SELECT * FROM pagewebs WHERE tittle='$txttittle'";
		$qryCek=mysql_query($sqlCek, $koneksi) or die ("Eror Query".mysql_error()); 

		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		# SIMPAN DATA KE DATABASE
		if(count($message)==0){			
			$qrySave=mysql_query("INSERT INTO pagewebs SET webid='', tittle='$txttittle', content='$txtcontent', picture='$nama_file'") or die ("Gagal query".mysql_error());
			if($qrySave){
				$qryLogs=mysql_query("INSERT INTO logs SET logid='', userid='".$_SESSION['userid']."', trans='NEW', tab='Web', des='Data telah ditambahkan', servicetime='".$tanggal."'");
				echo "<meta http-equiv='refresh' content='0; url=?page=web'>";
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
	$dataTittle	= isset($_POST['txttittle']) ? $_POST['txttittle'] : '';
	$dataContent= isset($_POST['txtcontent']) ? $_POST['txtcontent'] : '';
}
?>
			<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Web Design Tables
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="?page=web">Web Design</a></li>
                        <li class="active">New Web Design</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Web Design Data Table</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form" action="?page=sp_web_new" method="post" name="frmedit" target="_self" id="frmedit" enctype="multipart/form-data">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No</label>
                                            <input name="txtId" type="text" class="form-control" value="<?php echo $next_auto_inc; ?>" disabled/>
                                            <input name="txtId" type="hidden" class="form-control" value="<?php echo $next_auto_inc; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tittle</label>
                                            <input name="txttittle" type="text" class="form-control" value="<?php echo $dataTittle; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea name="txtcontent" class="form-control" rows="3"><?php echo $dataContent; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Picture</label>
                                            <input type="file" class="input" size="50" id="picture" name="picture" />
                                        </div>
                                        <button class="btn-sm bg-blue btn-flat" name="btnSave" type="submit" style="cursor:pointer;">Save</button>
                                 	</form>
                          		</div>
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
            
<?php
}else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>