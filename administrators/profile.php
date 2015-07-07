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
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Users Tables
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Users</a></li>
                        <li class="active">Users tables</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Users Data Table</h3>
                                </div><!-- /.box-header -->
                                <a href="?page=profile_new"><button class="btn bg-maroon btn-flat margin">New Users</button></a>
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Avatar</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
										<?php
                                            $productSql = "SELECT * FROM users ORDER BY userid ASC LIMIT $hal, $row";
                                            $productQry = mysql_query($productSql, $koneksi) or die ("Query product salah : ".mysql_error());
                                            $nomor = 0;
                                            while ($productRow = mysql_fetch_array($productQry)) {
												$nomor++;
												$Kode = $productRow['userid'];
                                        ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $productRow['name']; ?></td>
                                                <td><?php echo $productRow['username']; ?></td>
                                                <td><img src="img/<?php echo $productRow['avatar']; ?>" width="100"></td>
                                                <td><a href="home.php?page=profile_delete&Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onClick="return confirm('ANDA YAKIN INGIN MENGHAPUS DATA PENTING INI ... ?')"><button class="btn btn-primary btn-flat">X</button></td>
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
