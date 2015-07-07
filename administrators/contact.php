<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;

$pageSql = "SELECT * FROM pagecontact";
$pageQry = mysql_query($pageSql, $koneksi) or die ("error paging: ".mysql_error());
			$jml	 = mysql_num_rows($pageQry);
			$max	 = ceil($jml/$row);
?>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Contact Tables
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Contact tables</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Contact Data Table</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Address</th>
                                                <th>Phone(s)</th>
                                                <th>Email</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
										<?php
                                            $aboutSql = "SELECT * FROM pagecontact ORDER BY contactid ASC LIMIT $hal, $row";
                                            $aboutQry = mysql_query($aboutSql, $koneksi) or die ("Query about salah : ".mysql_error());
                                            $nomor = 0;
                                            while ($aboutRow = mysql_fetch_array($aboutQry)) {
												$nomor++;
												$Kode = $aboutRow['contactid'];
                                        ?>
                                            <tr>
                                                <td><?php echo $nomor; ?></td>
                                                <td><?php echo $aboutRow['address']; ?></td>
                                                <td><?php echo $aboutRow['phone']; ?></td>
                                                <td><?php echo $aboutRow['email']; ?></td>
                                                <td><a href="home.php?page=contact_edit&Kode=<?php echo $Kode; ?>" target="_self"alt="Edit Data"><button class="btn btn-primary btn-flat">-</button></a></td>
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
