<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;

$pageSql = "SELECT * FROM pagedesktop";
$pageQry = mysql_query($pageSql, $koneksi) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Desktop Tables
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Desktop</a></li>
                        <li class="active">Desktop tables</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Desktop Apps Descriptions</h3>
                                </div><!-- /.box-header -->
                                <!--<a href="?page=desktop_new"><button class="btn bg-maroon btn-flat margin">New Products</button></a>-->
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
                                            $productSql = "SELECT * FROM services WHERE tittle = 'Desktop'";
                                            $productQry = mysql_query($productSql, $koneksi) or die ("Query services salah : ".mysql_error());
                                            $nomor = 0;
                                            while ($productRow = mysql_fetch_array($productQry)) {
												$nomor++;
												$Kode = $productRow['serviceid'];
                                        ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $productRow['tittle']; ?></td>
                                                <td><?php echo $productRow['content']; ?></td>
                                                <!--<td><img src="../images/<?php //echo $productRow['picture']; ?>" width="100"></td>-->
                                                <td><a href="?page=desktop_edit&Kode=<?php echo $Kode; ?>" target="_self"alt="Edit Data"><button class="btn btn-primary btn-flat">-</button></a></td>
                                                <!--<td><a href="?page=desktop_delete&Kode=<?php// echo $Kode; ?>" target="_self" alt="Delete Data" onClick="return confirm('ANDA YAKIN INGIN MENGHAPUS DATA PENTING INI ... ?')"><button class="btn btn-primary btn-flat">X</button></td>-->
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
                 <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Desktop Apps Content Data Table</h3>
                                </div><!-- /.box-header -->
                                <a href="?page=sp_desktop_new"><button class="btn bg-maroon btn-flat margin">New Services Desktop</button></a>
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tittle</th>
                                                <th>Content(s)</th>
                                                <th>Picture(s)</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
										<?php
                                            $productSql = "SELECT * FROM pagedesktop ORDER BY desktopid ASC LIMIT $hal, $row";
                                            $productQry = mysql_query($productSql, $koneksi) or die ("Query product salah : ".mysql_error());
                                            $nomor = 0;
                                            while ($productRow = mysql_fetch_array($productQry)) {
												$nomor++;
												$Kode = $productRow['desktopid'];
                                        ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $productRow['tittle']; ?></td>
                                                <td><?php echo $productRow['content']; ?></td>
                                                <td><img src="../images/desktop/<?php echo $productRow['picture']; ?>" width="100"></td>
                                                <td><a href="?page=sp_desktop_edit&Kode=<?php echo $Kode; ?>" target="_self"alt="Edit Data"><button class="btn btn-primary btn-flat">-</button></a></td>
                                                <td><a href="?page=sp_desktop_delete&Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onClick="return confirm('ANDA YAKIN INGIN MENGHAPUS DATA PENTING INI ... ?')"><button class="btn btn-primary btn-flat">X</button></td>
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
