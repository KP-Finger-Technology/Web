<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txttitle'])=="") {
			$message[] = "<b>Blog</b> can't be empty !";		
		}
		if (trim($_POST['txtcontent'])=="") {
			$message[] = "<b>Blog</b> can't be empty !";		
		}
		
		# Baca Variabel Form
		$txtKode	= $_POST['txtKode'];
		$txtKode	= str_replace("'","&acute;",$txtKode);
		$txtKode	= str_replace(".","",$txtKode);
		$txttitle	= $_POST['txttitle'];
		$txttitle	= str_replace("'","&acute;",$txttitle);
		$txtcontent	= $_POST['txtcontent'];
		$txtcontent	= str_replace("'","&acute;",$txtcontent);
		$txtcategory	= $_POST['txtcategory'];
		$txtcategory	= str_replace("'","&acute;",$txtcategory);
		
		$lokasi_file=$_FILES['picture']['tmp_name'];
		$tipe_file 	=$_FILES['picture']['type'];
		$nama_file	=$_FILES['picture']['name'];
		$direktori	="../images/blog/$nama_file";
		move_uploaded_file($lokasi_file,$direktori);
									
		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		# SIMPAN DATA KE DATABASE
		if(count($message)==0){			
			$qryUpdate=mysql_query("UPDATE blog SET title='$txttitle', content='$txtcontent', image_name='$nama_file', category='$txtcategory' WHERE blogid ='".$txtKode."'")or die ("Gagal query".mysql_error());
			if($qryUpdate){
				$qryLogs=mysql_query("INSERT INTO logs SET logid='', userid='".$_SESSION['userid']."', trans='EDIT', tab='Blog', des='Data telah diubah', servicetime='".$tanggal."'");
				echo "<meta http-equiv='refresh' content='0; url=?page=blog'>";
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
	
	$KodeEdit = isset($_GET['Kode']) ? $_GET['Kode'] : $_POST['txtKode'];
	$sqlShow = "SELECT * FROM blog WHERE blogid='$KodeEdit'";
	$qryShow = mysql_query($sqlShow, $koneksi) or die ("Query ambil data products salah:".mysql_error());
	$dataShow= mysql_fetch_array($qryShow);	
								
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['blogid'];
	$dataTitle	= isset($dataShow['title']) ? $dataShow['title'] : $_POST['txttitle'];
	$dataContent= isset($dataShow['content']) ? $dataShow['content'] : $_POST['txtcontent'];
	$dataCategory = isset($dataShow['category']) ? $dataShow['category'] : $_POST['txtcategory'];
	$pictureLama = $dataShow['image_name'];
}
?>
			<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Blog Tables
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="?page=products">Blog</a></li>
                        <li class="active">Edit Blog</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Blog Data</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form" action="?page=blog_edit" method="post" name="frmedit" target="_self" id="frmedit" enctype="multipart/form-data">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No</label>
                                            
                                            <input name="txtKode" type="text" class="form-control" value="<?php echo $dataKode; ?>" disabled/>
                                            <input name="txtKode" type="hidden" id="txtKode" value="<?php echo $dataKode; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tittle</label>
                                            <input name="txttitle" type="text" class="form-control" value="<?php echo $dataTitle; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea name="txtcontent" class="form-control" rows="3"><?php echo $dataContent; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Picture</label>
                                            <img src="../images/blog/<?php echo $pictureLama; ?>" width="150" />
                                            <input type="file" class="input" size="50" id="picture" name="picture" />
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <input name="txtcategory" type="text" class="form-control" value="<?php echo $dataCategory; ?>"/>
                                        </div>
                                        <button class="btn-sm bg-blue btn-flat" name="btnSave" type="submit" style="cursor:pointer;">Update</button>
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