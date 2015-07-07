<?php
ob_start();
//session_start();
if ($_SESSION['userid'])
{
//include "conn.php";
?>
<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Carousel-Complete
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Carousel-Complete</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
										<?php
										//$path = $_FILES['txtFoto']['tmp_name'];
//$nama_file = $_FILES['txtFoto']['name'];
//$nama_file = 'SC.jpg';
//move_uploaded_file($path,"images/$nama_file");
//echo "$nama_file berhasil diupload";

$valid_formats = array("jpg", "png", "jpeg");
$max_file_size = 1024*5000; //5000 kb
$path = "../images/"; // Upload directory
$count = 0;


if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){

$path1 = $_FILES['file1']['tmp_name'];
$path2 = $_FILES['file2']['tmp_name'];
$path3 = $_FILES['file3']['tmp_name'];

$nama_file1 = $_FILES['file1']['name'];
$nama_file2 = $_FILES['file2']['name'];
$nama_file3 = $_FILES['file3']['name'];

move_uploaded_file($path1,"../images/slide_1.jpg");
move_uploaded_file($path2,"../images/slide_2.jpg");
move_uploaded_file($path3,"../images/slide_3.jpg");

if((!empty($nama_file1)) and (!empty($nama_file2)) and (!empty($nama_file3)))
{
echo "$nama_file1 , $nama_file2 & $nama_file3 has been successfully uploaded.";
}
elseif((empty($nama_file1)) and (!empty($nama_file2)) and (!empty($nama_file3)))
{
echo "$nama_file2 & $nama_file3 has been successfully uploaded.";
}
elseif((!empty($nama_file1)) and (empty($nama_file2)) and (!empty($nama_file3)))
{
echo "$nama_file1 & $nama_file3 has been successfully uploaded.";
}
elseif((!empty($nama_file1)) and (!empty($nama_file2)) and (empty($nama_file3)))
{
echo "$nama_file1 & $nama_file2 has been successfully uploaded.";
}
elseif((!empty($nama_file1)) and (empty($nama_file2)) and (empty($nama_file3)))
{
echo "$nama_file1 has been successfully uploaded.";
}
elseif((empty($nama_file1)) and (!empty($nama_file2)) and (empty($nama_file3)))
{
echo "$nama_file2 has been successfully uploaded.";
}
elseif((empty($nama_file1)) and (empty($nama_file2)) and (!empty($nama_file3)))
{
echo "$nama_file3 has been successfully uploaded.";
}
else
{
echo "<font color=red>Error</font> : No File Chosen.";
}


}
?>
</thead>
                                        <tbody> 
										
											</tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
			<?php
}else
{
echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>