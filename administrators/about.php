<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;

$pageSql = "SELECT * FROM pageabout";
$pageQry = mysql_query($pageSql, $koneksi) or die ("error paging: ".mysql_error());
			$jml	 = mysql_num_rows($pageQry);
			$max	 = ceil($jml/$row);
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        About Tables
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">About tables</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">About Data Table</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tittle</th>
                                                <th>Content(s)</th>
                                                <th>Edit</th>
                                                <!--<th>Delete</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>  
										<?php
                                            $aboutSql = "SELECT * FROM pageabout ORDER BY aboutid ASC LIMIT $hal, $row";
                                            $aboutQry = mysql_query($aboutSql, $koneksi) or die ("Query about salah : ".mysql_error());
                                            $nomor = 0;
                                            while ($aboutRow = mysql_fetch_array($aboutQry)) {
												$nomor++;
												$Kode = $aboutRow['aboutid'];
                                        ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $aboutRow['tittle']; ?></td>
                                                <td><?php echo $aboutRow['content']; ?></td>
                                                <td><a href="home.php?page=about_edit&Kode=<?php echo $Kode; ?>" target="_self"alt="Edit Data"><button class="btn btn-primary btn-flat">-</button></a></td>
                                                <!--<td><a href="home.php?page=about_delete&Kode=<?php //echo $Kode; ?>" target="_self" alt="Delete Data" onClick="return confirm('ANDA YAKIN INGIN MENGHAPUS DATA PENTING INI ... ?')"><button class="btn btn-primary btn-flat">X</button></td>-->
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
