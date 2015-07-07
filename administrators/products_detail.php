<?php //session_start(); 
if ($_SESSION['userid'])
{
include "conn.php";

    if(isset($_GET['Kode']))
    {
        /*$row = 20;
        $hal = isset($_GET['hal']) ? $_GET['hal'] : 0;

        $pagedetSql = "SELECT * FROM pageproductsdetail where productsid=".$_GET['Kode'];
        $pagedetQry = mysql_query($pagedetSql, $koneksi) or die ("error paging: ".mysql_error());
        $jml	 = mysql_num_rows($pagedetQry);
        $max	 = ceil($jml/$row);
        */


        $pageSql = "SELECT * FROM pageproducts where productsid=".$_GET['Kode'];
        $pageQry = mysql_query($pageSql, $koneksi);
        while ($pageRow = mysql_fetch_array($pageQry)) {
            $title = $pageRow['tittle'];
        }
        ?>
                <!-- Right side column. Contains the navbar and content of the page -->
                <aside class="right-side">                
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            Product Detail Tables
                            <small>advanced tables</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#"><?php echo $title; ?></a></li>
                            <li class="active">Products Detail tables</li>
                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Products Detail Data Table : <?php echo $title; ?></h3>
                                    </div><!-- /.box-header -->
                                    <a href="?page=products_detail_new&Kode=<?php echo $_GET['Kode']; ?>&type=image"><button class="btn bg-maroon btn-flat margin">New Picture</button></a>
                                    <div class="box-body table-responsive">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Title</th>
                                                    <th>Content(s)</th>
                                                    <th>Picture(s)</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>  
    										<?php
                                                $productSql = "SELECT * FROM pageproductsdetail where productsid=".$_GET['Kode']." and m_type='image' ORDER BY productsdetailid ASC";
                                                $productQry = mysql_query($productSql, $koneksi) or die ("Query product salah : ".mysql_error());
                                                $nomor = 0;
                                                while ($productRow = mysql_fetch_array($productQry)) {
    												$nomor++;
    												$Kode = $productRow['productsdetailid'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $productRow['title']; ?></td>
                                                    <td><?php echo $productRow['content']; ?></td>
                                                    <td><img src="../images/product/<?php echo $productRow['picture']; ?>" width="100"></td>
                                                    <td><a href="home.php?page=products_detail_edit&pid=<?php echo $_GET['Kode']; ?>&Kode=<?php echo $Kode; ?>&type=image" target="_self"alt="Edit Data"><button class="btn btn-primary btn-flat">-</button></a></td>
                                                    <td><a href="home.php?page=products_detail_delete&pid=<?php echo $_GET['Kode']; ?>&Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onClick="return confirm('ANDA YAKIN INGIN MENGHAPUS DATA PENTING INI ... ?')"><button class="btn btn-primary btn-flat">X</button></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br><br>
                                    <a href="?page=products_detail_new&Kode=<?php echo $_GET['Kode']; ?>&type=video"><button class="btn bg-maroon btn-flat margin">New Video</button></a>
                                    <div class="box-body table-responsive">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Title</th>
                                                    <th>Content(s)</th>
                                                    <th>Video id</th>
                                                    <th>Video Thumb</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>  
                                            <?php
                                                $product2Sql = "SELECT * FROM pageproductsdetail where productsid=".$_GET['Kode']." and m_type='video' ORDER BY productsdetailid ASC";
                                                $product2Qry = mysql_query($product2Sql, $koneksi) or die ("Query product salah : ".mysql_error());
                                                $nomor = 0;
                                                while ($product2Row = mysql_fetch_array($product2Qry)) {
                                                    $nomor++;
                                                    $Kode2 = $product2Row['productsdetailid'];
                                            ?>
                                                <tr>
                                                    <td><?php echo $nomor; ?></td>
                                                    <td><?php echo $product2Row['title']; ?></td>
                                                    <td><?php echo $product2Row['content']; ?></td>
                                                    <td><?php echo $product2Row['video_id']; ?></td>
                                                    <td><img src="http://img.youtube.com/vi/<?php echo $product2Row['video_id']; ?>/0.jpg" width="100"></td>
                                                    <td><a href="home.php?page=products_detail_edit&pid=<?php echo $_GET['Kode']; ?>&Kode=<?php echo $Kode2; ?>&type=video" target="_self"alt="Edit Data"><button class="btn btn-primary btn-flat">-</button></a></td>
                                                    <td><a href="home.php?page=products_detail_delete&pid=<?php echo $_GET['Kode']; ?>&Kode=<?php echo $Kode2; ?>" target="_self" alt="Delete Data" onClick="return confirm('ANDA YAKIN INGIN MENGHAPUS DATA PENTING INI ... ?')"><button class="btn btn-primary btn-flat">X</button></td>
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

<?php
    }
 }else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>
