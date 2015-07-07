<?php
//echo $_SESSION['position'];
if($_SESSION['position']=="1"){
	# Menu untuk orang yang login sebagai Administrator
?>
	<section class="content">                    
		<div class="col-lg-3 col-xs-6">
        	<!-- small box -->
            	<div class="small-box bg-yellow">
                	<div class="inner">
                    	<h3>
                    		<?php echo $number; ?>
                        </h3>
                        <p>
                        	User Registrations
                        </p>
                  	</div>
                    <div class="icon">
                    	<i class="ion ion-person-add"></i>
                    </div>
                    <a href="?page=profile" class="small-box-footer">
                    	More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
             	</div>
      		</div><!-- ./col -->
        </div><!-- /.row -->

        <!-- top row -->
        <div class="row">
        	<div class="col-xs-12 connectedSortable">
            </div><!-- /.col -->
        </div>
        <!-- /.row -->
		<!-- Main row -->
        </section><!-- /.content -->
<?php	
}
elseif($_SESSION['position']=="2"){
?>
	<section class="content">                    
		<div class="col-lg-3 col-xs-6">
        	<!-- small box -->
            	<div class="small-box bg-yellow">
                	<div class="inner">
                    	<h3>
                    		<?php echo $name; ?>
                        </h3>
                        <p>
                        	Selamat Bekerja
                        </p>
                  	</div>
             	</div>
      		</div><!-- ./col -->
        </div><!-- /.row -->

        <!-- top row -->
        <div class="row">
        	<div class="col-xs-12 connectedSortable">
            </div><!-- /.col -->
        </div>
        <!-- /.row -->
		<!-- Main row -->
	</section><!-- /.content -->
<?php
}else {
	# Menu untuk orang yang belum login
	echo "<ul><li><a href='index.php' title='Login System'>Login System</a></li></ul>";	
}
?>
<!--<li><a href="home.php?page=welcome">Home</a></li>
<li><a href="home.php?page=transaksi">Transaksi</a></li>
<li><a href="home.php?page=master">Master Barang</a></li>
<li><a href="home.php?page=laporan_barang">Laporan Barang</a></li>
<li><a href="home.php?page=laporan_order">Laporan Order</a></li>
<li><a href="home.php?page=laporan_petugas">Laporan Petugas</a></li>
<li><a href="home.php?page=user">Master User</a></li>
<li><form method="post" action="export.php">
<input name="btnExport" type="submit" style="cursor:pointer;" value=" Export " />

</form></li>-->