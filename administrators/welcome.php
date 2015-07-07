<?php //session_start(); 

include "conn.php";

$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;

$q = mysql_query('SELECT MAX(userid) as userid from `users`');
$row = mysql_fetch_assoc($q);
$number = $row['userid'];
?>
	<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <?php include "menu.php"; ?>
            </aside><!-- /.right-side -->