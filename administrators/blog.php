<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;

$pageSql = "SELECT * FROM blog";
$pageQry = mysql_query($pageSql, $koneksi) or die ("error paging: ".mysql_error());
			$jml	 = mysql_num_rows($pageQry);
			$max	 = ceil($jml/$row);
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
                        <li><a href="#">Tables</a></li>
                        <li class="active">Blog tables</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Blog Data Table</h3>                                    
                                </div><!-- /.box-header -->
                                <a href="?page=blog_new"><button class="btn bg-maroon btn-flat margin">New Blogs</button></a>
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Content(s)</th>
                                                <th>Picture</th>
                                                <th>Category</th>
                                                <th>Publish On</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
										<?php
                                            $blogSql = "SELECT * FROM blog ORDER BY blogid ASC LIMIT $hal, $row";
                                            $blogQry = mysql_query($blogSql, $koneksi) or die ("Query about salah : ".mysql_error());
                                            $nomor = 0;
                                            while ($blogRow = mysql_fetch_array($blogQry)) {
												$nomor++;
												$Kode = $blogRow['blogid'];
                                        ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $blogRow['title']; ?></td>
                                                <td><?php echo $blogRow['content']; ?></td>
                                                <td><img src="../images/blog/<?php echo $blogRow['image_name']; ?>" width="100"></td>
                                                <td><?php echo $blogRow['category']; ?></td>
                                                <td><?php echo $blogRow['publish_on']; ?></td>
                                                <td><a href="home.php?page=blog_edit&Kode=<?php echo $Kode; ?>" target="_self"alt="Edit Data"><button class="btn btn-primary btn-flat">-</button></a></td>
                                                <td><a href="home.php?page=blog_delete&Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onClick="return confirm('ANDA YAKIN INGIN MENGHAPUS DATA PENTING INI ... ?')"><button class="btn btn-primary btn-flat">X</button></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->

<?php }else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>
