<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

$pageSql = "SELECT * FROM pageproducts where productsid=".$_GET['pid'];
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
		/*if (trim($_POST['txtcontent'])=="") {
			$message[] = "<b>Product</b> can't be empty !";		
		}*/
		if ($_GET['type']=='video' && trim($_POST['txtvideo_id'])==""){
			$message[] = "<b>Video ID</b> can't be empty !";
		}
		
		# Baca Variabel Form
		$txtKode	= $_POST['txtKode'];
		$txtKode	= str_replace("'","&acute;",$txtKode);
		$txtKode	= str_replace(".","",$txtKode);
		$txttitle	= $_POST['txttitle'];
		$txttitle	= str_replace("'","&acute;",$txttitle);
		$txtcontent	= $_POST['txtcontent'];
		$txtcontent	= str_replace("'","&acute;",$txtcontent);
		
		if ($_GET['type']=='video'){
			$txtvideo_id = $_POST['txtvideo_id'];
			$txtvideo_id = str_replace("'","&acute;",$txtvideo_id);
		}
		else if ($_GET['type']=='image'){
			echo "<script>alert(".$_FILES['picture']['name'].")</script>";
				$lokasi_file=$_FILES['picture']['tmp_name'];
				$tipe_file 	=$_FILES['picture']['type'];
				$nama_file	=$_FILES['picture']['name'];
				$direktori	="../images/product/$nama_file";
				move_uploaded_file($lokasi_file,$direktori);

				if($nama_file==""){
					$nama_file = $_POST['img_ori'];
				}

			
		}

									
		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		# SIMPAN DATA KE DATABASE
		if(count($message)==0){			
			if($_GET['type']=='image'){
				$qryUpdate=mysql_query("UPDATE pageproductsdetail SET title='$txttitle', content='$txtcontent', picture='$nama_file' WHERE productsdetailid ='".$txtKode."'")or die ("Gagal query".mysql_error());
			} else if ($_GET['type']=='video'){
				$qryUpdate=mysql_query("UPDATE pageproductsdetail SET title='$txttitle', content='$txtcontent', video_id='$txtvideo_id' WHERE productsdetailid ='".$txtKode."'")or die ("Gagal query".mysql_error());
			}

			if($qryUpdate){
				$qryLogs=mysql_query("INSERT INTO logs SET logid='', userid='".$_SESSION['userid']."', trans='EDIT', tab='Product Detail', des='Data telah diubah', servicetime='".$tanggal."'");
				//echo "<meta http-equiv='refresh' content='0; url=?page=products_detail&Kode=".$_GET['pid'].">";
				echo "<meta http-equiv='refresh' content='0; url=?page=products_detail&Kode=".$_GET['pid']."'>";
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
	$sqlShow = "SELECT * FROM pageproductsdetail WHERE productsdetailid='$KodeEdit'";
	$qryShow = mysql_query($sqlShow, $koneksi) or die ("Query ambil data products salah:".mysql_error());
	$dataShow= mysql_fetch_array($qryShow);	
								
	# MASUKKAN DATA KE VARIABEL
	$dataKode	= $dataShow['productsdetailid'];
	//$dataTitle	= isset($dataShow['title']) ? $_POST['txttitle'] : $dataShow['title'];
	//$dataContent= isset($dataShow['content']) ? $_POST['txtcontent'] : $dataShow['content'] ;
	$dataTitle	= isset($_POST['txttitle']) ? $_POST['txttitle'] : $dataShow['title'];
	$dataContent= isset($_POST['txtcontent']) ? $_POST['txtcontent'] : $dataShow['content'] ;
	$pictureLama = $dataShow['picture'];
	$dataVideoId= isset($_POST['txtvideo_id']) ? $_POST['txtvideo_id'] : $dataShow['video_id'] ;
	
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
                        <li class="active">Edit Products Detail</li>
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
                                    <form role="form" action="?page=products_detail_edit&pid=<?php echo $_GET['pid']; ?>&Kode=<?php echo $_GET['Kode']; ?>&type=<?php echo $_GET['type']; ?>" method="post" name="frmedit" target="_self" id="frmedit" enctype="multipart/form-data">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>No</label>
                                            
                                            <input name="txtKode" type="text" class="form-control" value="<?php echo $dataKode; ?>" disabled/>
                                            <input name="txtKode" type="hidden" id="txtKode" value="<?php echo $dataKode; ?>" />
                                            <input name="txtType" type="hidden" class="form-control" value="<?php echo $_GET['type']; ?>"/>
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
	                                        /*echo "<div class=\"form-group\">";
	                                        echo "<label>Picture</label>";
	                                        echo "<input type=\"file\" class=\"input\" size=\"50\" id=\"picture\" name=\"picture\" />";
	                                        echo "</div>";*/

	                                        echo "<div class=\"form-group\">";
                                            echo "<label>Picture</label>";
                                            echo "<img src=\"../images/product/".$pictureLama."\" width=\"150\" />";
                                            echo "<input type=\"file\" class=\"input\" size=\"50\" id=\"picture\" name=\"picture\" style=\"margin-top:10px;\" />";
                                            echo "<input name=\"img_ori\" type=\"hidden\" class=\"form-control\" value=\"$pictureLama\"/>";
                                        	echo "</div>";
	                                    }
	                                    else if($_GET['type'] == 'video')
                                        {
	                                        echo "<div class=\"form-group\">";
	                                        echo "<p><iframe width=\"300\" height=\"200\" src=\"https://www.youtube.com/embed/".$dataVideoId."\" frameborder=\"0\" allowfullscreen></iframe></p>";
                                            echo "<label>Video ID (youtube)</label>";
                                            echo "<p><b>New Link : http://www.youtube.com/watch?v=</b><input style=\"width:200px;\" name=\"txtvideo_id\" type=\"text\" value=\"".$dataVideoId."\"/></p>";
                                            echo "</div>";
	                                    }
	                                    ?>
                                        
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