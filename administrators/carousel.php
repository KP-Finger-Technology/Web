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
                        Carousel
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Carousel</li>
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
										<form name="form1" id="form1" method="post" accept="image/*" enctype="multipart/form-data" action="?page=carousel_complete">
										<table cellpadding=10 cellspacing=10>
										<tr>
										<td><img src="../images/slide_1.jpg" width=100 height=70 /></td>
										<td style="width:100%;"><input type="file" id="file1" name="file1" style="margin-left:30px; width:100%;" /></td>
										</tr>
										<tr>
										<td><img src="../images/slide_2.jpg" width=100 height=70 /></td>
										<td style="width:100%;"><input type="file" id="file2" name="file2" style="margin-left:30px; width:100%;" /></td>
										</tr>
										<tr>
										<td><img src="../images/slide_3.jpg" width=100 height=70 /></td>
										<td style="width:100%;"><input type="file" id="file3" name="file3" style="margin-left:30px; width:100%;" /></td>
										</tr>
										</table><br/><br/>
										<input type="submit" name="file_upload" value="Edit Carousel" />
										
</form><br/><br/>
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
