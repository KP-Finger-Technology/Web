<?php //session_start(); 

include "conn.php";

$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;

$q = mysql_query('SELECT COUNT(commentid) as commentid from `comment`');
$row = mysql_fetch_assoc($q);
$number = $row['commentid'];
?>
						<li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success"><?php echo $number; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have <?php echo $number; ?> messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                    <?php
                                            $commentSql = "SELECT * FROM comment ORDER BY commentid ASC";
                                            $commentQry = mysql_query($commentSql, $koneksi) or die ("Query product salah : ".mysql_error());
                                            while ($commentRow = mysql_fetch_array($commentQry)) {
												$Kode = $commentRow['commentid'];
                                        ?>
                                        <li><!-- start message -->
                                            <a href="#">
                                                <h4>
                                                    <?php echo $commentRow['name']; ?>
                                                </h4>
                                                <p><?php echo $commentRow['email']; ?></p>
                                                <p><?php echo $commentRow['content']; ?></p>
                                            </a>
                                        </li><!-- end message -->
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li class="footer"><a href="?page=comment_view">See All Messages</a></li>
                            </ul>
                        </li>
