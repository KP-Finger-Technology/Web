<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

$q = mysql_query('SELECT MAX(productsdetailid) as productsid from `pageproductsdetail`');
$row = mysql_fetch_assoc($q);
$next_auto_inc = $row['productsid'] + 1;

$pageSql = "SELECT * FROM pageproducts where productsid=".$_GET['Kode'];
$pageQry = mysql_query($pageSql, $koneksi) or die ("error paging: ".mysql_error());
while ($pageRow = mysql_fetch_array($pageQry)) {
    $title = $pageRow['tittle'];
}

if($_GET) {
	if(isset($_POST['btnSave'])){
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txttitle'])=="") {
			$message[] = "<b>Product</b> can't be empty !";		
		}
		if (trim($_POST['txtcontent'])=="") {
			$message[] = "<b>Product</b> can't be empty !";		
		}
		if ($_GET['type']=='image' && trim($_FILES['picture']['tmp_name'])==""){
			$message[] = "<b>Picture</b> can't be empty !";
		}
		if ($_GET['type']=='video' && trim($_POST['txtvideo_id'])==""){
			$message[] = "<b>Video ID</b> can't be empty !";
		}

		
		# Baca Variabel Form
		$txtId	= $_POST['txtId'];
		$txtId	= str_replace("'","&acute;",$txtId);
		$txtId	= str_replace(".","",$txtId);
		$txttitle	= $_POST['txttitle'];
		$txttitle	= str_replace("'","&acute;",$txttitle);
		$txtcontent	= $_POST['txtcontent'];
		$txtcontent	= str_replace("'","&acute;",$txtcontent);
		
		$productsid = $_POST['txtProductsId'];
		$type = $_POST['txtType'];

		if ($_GET['type']=='video'){
			$txtvideo_id = $_POST['txtvideo_id'];
			$txtvideo_id = str_replace("'","&acute;",$txtvideo_id);
		}
		else if ($_GET['type']=='image'){
			$lokasi_file=$_FILES['picture']['tmp_name'];
			$tipe_file 	=$_FILES['picture']['type'];
			$nama_file	=$_FILES['picture']['name'];
			$direktori	="../images/product/$nama_file";
			move_uploaded_file($lokasi_file,$direktori);
		}

		# Validasi Nama barang, jika sudah ada akan ditolak
		/*$sqlCek="SELECT * FROM pageproductsdetail WHERE tittle='$txttittle'";
		$qryCek=mysql_query($sqlCek, $koneksi) or die ("Eror Query".mysql_error()); */

		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		# SIMPAN DATA KE DATABASE
		if(count($message)==0){			
			if($_GET['type']=='image'){
				$qrySave=mysql_query("INSERT INTO pageproductsdetail SET productsid='$productsid', m_type='$type', title='$txttitle', content='$txtcontent', picture='$nama_file'") or die ("Gagal query".mysql_error());
			} else if ($_GET['type']=='video'){
				$qrySave=mysql_query("INSERT INTO pageproductsdetail SET productsid='$productsid', m_type='$type', title='$txttitle', content='$txtcontent', video_id='$txtvideo_id'") or die ("Gagal query".mysql_error());
			}

			if($qrySave){
				$qryLogs=mysql_query("INSERT INTO logs SET logid='', userid='".$_SESSION['userid']."', trans='NEW', tab='Products Detail', des='Data telah ditambahkan', servicetime='".$tanggal."'");
				echo "<meta http-equiv='refresh' content='0; url=?page=products_detail&Kode=".$_GET['Kode']."'>";
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
	$dataTitle	= isset($_POST['txttitle']) ? $_POST['txttitle'] : '';
	$dataContent= isset($_POST['txtcontent']) ? $_POST['txtcontent'] : '';
	$dataVideoId= isset($_POST['txtvideo_id']) ? $_POST['txtvideo_id'] : '';

}
?>
			<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Products Detail Tables : <?php echo $title; ?>
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="?page=products">Products</a></li>
                        <li class="active"><?php echo $title; ?></li>
                        <li class="active">New Products Detail</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Products Detail Data <?php echo $_GET['type']; ?></h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form role="form" action="?page=products_detail_new&Kode=<?php echo $_GET['Kode']; ?>&type=<?php echo $_GET['type']; ?>" method="post" name="frmedit" target="_self" id="frmedit" enctype="multipart/form-data">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No</label>
                                            <input name="txtId" type="text" class="form-control" value="<?php echo $next_auto_inc; ?>" disabled/>
                                            <input name="txtId" type="hidden" class="form-control" value="<?php echo $next_auto_inc; ?>"/>
                                            <input name="txtType" type="hidden" class="form-control" value="<?php echo $_GET['type']; ?>"/>
                                            <input name="txtProductsId" type="hidden" class="form-control" value="<?php echo $_GET['Kode']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input name="txttitle" type="text" class="form-control" value="<?php echo $dataTitle; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea name="txtcontent" class="form-control" rows="3"><?php echo $dataContent; ?></textarea>
                                        </div>
                                        <?php 
                                        if($_GET['type'] == 'image')
                                        {
	                                        echo "<div class=\"form-group\">";
	                                        echo "<label>Picture</label>";
	                                        echo "<input type=\"file\" class=\"input\" size=\"50\" id=\"picture\" name=\"picture\" />";
	                                        echo "</div>";
	                                    }
	                                    else if($_GET['type'] == 'video')
                                        {
	                                        echo "<div class=\"form-group\">";
                                            echo "<label>Video ID (youtube)</label>";
                                            echo "<p><b>http://www.youtube.com/watch?v=</b><input style=\"width:200px;\" name=\"txtvideo_id\" type=\"text\" value=\"".$dataVideoId."\"/></p>";
                                        	echo "</div>";
	                                    }
	                                    ?>
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