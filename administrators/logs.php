<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;

$pageSql = "SELECT * FROM logs";
$pageQry = mysql_query($pageSql, $koneksi) or die ("error paging: ".mysql_error());
			$jml	 = mysql_num_rows($pageQry);
			$max	 = ceil($jml/$row);
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Logs Tables
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Logs tables</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Logs Data Table</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>User Id</th>
                                                <th>Transactions</th>
                                                <th>Table</th>
                                                <th>Description</th>
                                                <th>Service Time</th>
                                                <!--<th>Delete</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>  
										<?php
                                            $logSql = "SELECT * FROM logs ORDER BY logid ASC LIMIT $hal, $row";
                                            $logQry = mysql_query($logSql, $koneksi) or die ("Query log salah : ".mysql_error());
                                            $nomor = 0;
                                            while ($logRow = mysql_fetch_array($logQry)) {
												$nomor++;
												$Kode = $logRow['logid'];
                                        ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $logRow['userid']; ?></td>
                                                <td><?php echo $logRow['trans']; ?></td>
                                                <td><?php echo $logRow['tab']; ?></td>
                                                <td><?php echo $logRow['des']; ?></td>
                                                <td><?php echo $logRow['servicetime']; ?></td>
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
