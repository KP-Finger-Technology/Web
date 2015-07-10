<!DOCTYPE html>
<?php
	include "conn.php";
?>
<html lang="en">
    <head>
        <title>FingerTech | Simplify Your Business</title>
		<link href="images/logo_2.png" rel="shortcut icon"></link>
        <meta name="keywords" content="mobile, mobile dev, developers, mobile developers, carrer, informatika" />
		<meta name="description" content="FingerTech is developers." />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/blog_style.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile_style.css" />
        <link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
                
		<script src="js/modernizr.custom.js"></script>
        
		<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
		
        <style type="text/css">
			#gkTab-392 .gkTabContainer0, #gkTab-392 .gkTabContainer1, #gkTab-392 .gkTabContainer2{
				height: 300px;
			}
			.gkTabContainer0 { clear: both; margin:0; }
			.gkTabContainer1 { overflow: hidden; }
			.gkTabContainer0,
			.gkTabContainer1,
			.gkTabContainer2 { position:relative; }
			.gkTabContainer0 { border-radius: 12px; border:#16c5fe;}
			.gkTabItem { float: left; overflow: hidden; padding: 0; }
			.gkTabItem { position: absolute; left: -999em; top: 0; width: 100%; }
			.gkTabItem.active { position: static; left: 0; }
			.gkTabItemSpace { padding: 24px 0; }
			.big .gkTabItemSpace { padding: 45px; }
			.gkTabItemSpace { padding: 24px 0; }
			.gkTab-1 {
				width: 200px; height: 200px; background: transparent url('images/tabs_big_icons.png') no-repeat 0 0; margin: 0 60px 0 0; float: left; text-indent: -9999px; background-position: 0 0; }
			.gkTab-2 {
				width: 200px; height: 200px; background: transparent url('images/tabs_big_icons.png') no-repeat 0 0; margin: 0 60px 0 0; float: left; text-indent: -9999px; background-position: -200px 0; }
			.gkTab-3 {
				width: 200px; height: 200px; background: transparent url('images/tabs_big_icons.png') no-repeat 0 0; margin: 0 60px 0 0; float: left; text-indent: -9999px; background-position: -400px 0 }
			div.tabImage { width: 200px; height: 200px; background: transparent url('images/tabs_big_icons.png') no-repeat 0 0; margin: 0 60px 0 0; float: left; text-indent: -9999px; }
			div.tabImage.gkTab-1 { background-position: 0 0; }
			div.tabImage.gkTab-2 { background-position: -200px 0; }
			div.tabImage.gkTab-3 { background-position: -400px 0; }
			div.tabImage.gkTab-4 { background-position: -600px 0; }
			div.tabImage.gkTab-5 { background-position: -800px 0; }
			div.tabImage.gkTab-6 { background-position: -1000px 0; }
			div.tabImage.gkTab-7 { background-position: -1200px 0; }
			div.tabImage.gkTab-8 { background-position: -1400px 0; }
			p.tabContent { font-size: 16px; color: #7d7b7a; }
			.big .gkTabContainer0 { background: #fff; border-radius: 12px; }
			.big .gkTabItemSpace { padding: 45px; }
			.big .gkTab ul.gkTabs li { height: 200px; width: 240px; line-height: 360px!important; margin: 0!important; padding: 0!important; background: url('../images/style1/tabs_small_icons.png') no-repeat 0 0; overflow: hidden; text-align: center; font-size: 32px!important; color: #fff; }
			.big .gkTab ul.gkTabs + .gkArrow { height: 29px; }
			.big .gkTab ul.gkTabs + .gkArrow div { height: 29px; margin-left: 100px; width: 33px; background: transparent url('../images/style1/tabs_arrow.png') no-repeat 0 0; }
			.big .gkTab ul.gkTabs { height: 200px; margin-bottom: 45px; }
			.big .gkTab ul.gkTabs li { border: none!important; }
			.big .gkTab ul.gkTabs li.gkTab-1 { background-position: 45px 0; }
			.big .gkTab ul.gkTabs li.gkTab-1:hover,
			.big .gkTab ul.gkTabs li.gkTab-1.active { background-position: 45px -200px; }
			.big .gkTab ul.gkTabs li.gkTab-2 { background-position: -155px 0; }
			.big .gkTab ul.gkTabs li.gkTab-2:hover, 
			.big .gkTab ul.gkTabs li.gkTab-2.active { background-position: -155px -200px; }
			.big .gkTab ul.gkTabs li.gkTab-3 { background-position: -355px 0; }
			.big .gkTab ul.gkTabs li.gkTab-3:hover, 
			.big .gkTab ul.gkTabs li.gkTab-3.active { background-position: -355px -200px; }
			.big .gkTab ul.gkTabs li.gkTab-4 { background-position: -555px 0; }
			.big .gkTab ul.gkTabs li.gkTab-4:hover,
			.big .gkTab ul.gkTabs li.gkTab-4.active { background-position: -555px -200px; }
			.big .gkTab ul.gkTabs li.gkTab-5 { background-position: -755px 0; }
			.big .gkTab ul.gkTabs li.gkTab-5:hover,
			.big .gkTab ul.gkTabs li.gkTab-5.active { background-position: -755px -200px; }
			.big .gkTab ul.gkTabs li.gkTab-6 { background-position: -955px 0; }
			.big .gkTab ul.gkTabs li.gkTab-6:hover,
			.big .gkTab ul.gkTabs li.gkTab-6.active { background-position: -955px -200px; }
			.big .gkTab ul.gkTabs li.gkTab-7 { background-position: -1155px 0; }
			.big .gkTab ul.gkTabs li.gkTab-7:hover,
			.big .gkTab ul.gkTabs li.gkTab-7.active { background-position: -1155px -200px; }
			.big .gkTab ul.gkTabs li.gkTab-8 { background-position: -1355px 0; }
			h2.tabTitle { color: #a6a6a6!important; font-size: 56px; line-height: 52px !important; margin: 0 0 26px; }
			h2.tabTitle span { color: #4da8e6!important; }
  		</style>
		
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		<script>
			$(document).ready(function(){
			  $("#btn1").hover(function(){
				document.getElementById("des").hidden=true;
				document.getElementById("mb").hidden=false;
				document.getElementById("wd").hidden=true;
			  });
			  $("#btn2").hover(function(){
				document.getElementById("des").hidden=false;
				document.getElementById("mb").hidden=true;
				document.getElementById("wd").hidden=true;
			  });
			  $("#btn3").hover(function(){
				document.getElementById("des").hidden=true;
				document.getElementById("mb").hidden=true;
				document.getElementById("wd").hidden=false;
			  });
			});
			function ajax(spanID,address)
			{
			
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					if(spanID!="")
						
						document.getElementById(spanID).innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET",address,true);
			xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xmlhttp.setRequestHeader("Connection", "close");
			xmlhttp.send();
			}
		</script>
		
		<link rel="stylesheet" href="colorbox_appspro/css/normalize.css" />
		<link rel="stylesheet" href="colorbox_appspro/css/template.css" />
		<link rel="stylesheet" href="colorbox_appspro/css/wp.css" />
		<link rel="stylesheet" href="colorbox_appspro/css/extensions.css" />
	
		<script type='text/javascript' src='colorbox_appspro/js/jquery.js?ver=1.11.1'></script>
		<script type='text/javascript' src='colorbox_appspro/js/jquery-migrate.min.js?ver=1.2.1'></script>
		<script type='text/javascript' src='colorbox_appspro/js/nsp.js?ver=4.0'></script>
		<script type='text/javascript' src='colorbox_appspro/js/tabs.js?ver=4.0'></script>
	
		<link href="colorbox_appspro/css/shortcodes.typography.css" rel="stylesheet" type="text/css" /><link href="colorbox_appspro/css/shortcodes.elements.css" rel="stylesheet" type="text/css" /><link href="colorbox_appspro/css/shortcodes.template.css" rel="stylesheet" type="text/css" />	<link href="colorbox_appspro/css/style1.css" rel="stylesheet" type="text/css" />		
	
		<style type="text/css">
			.gk-page { max-width: 980px; }
				#gk-mainbody-columns > section { width: 100%; }
		</style>

		<link rel="stylesheet" href="colorbox_appspro/css/tablet.css" media="(max-width: 920px)" />
		<link rel="stylesheet" href="colorbox_appspro/css/mobile.css" media="(max-width: 580px)" />

		<style type="text/css">
			@media (max-width: 970px ) {
				.box.big-tabs .gk-arrow { display: none!important; } 
			}
			
			@media (max-width: 970px ) and (min-width: 921px ) {
			.box.big-tabs .gk-tabs-wrap > ol li { margin: 0 35px 74px 40px !important; }
			}

			input[type="button"], button
			{
				margin:0;
				padding:0 10px;
				height: 32px;
				background-color: #D3D3D3;
				color:#000;
			}

			input[type="button"]:hover
			{
				
			}

			h3 {
				color: #000;
			}


			input[type="text"]
			{
				box-shadow:none;
			}
		</style>
	
		<script src="http://masonry.desandro.com/masonry.pkgd.js"></script>
		<script src="https://rawgithub.com/desandro/classie/master/classie.js"></script>
	
		<script>
			docReady( function() {

			  var container = document.querySelector('.masonry');
			  var msnry = new Masonry( container, {
				columnWidth: 60;
			  });

			  

			});
		</script>
		
		<script type="text/javascript">
			var thickboxL10n = {
				"next":"Next >",
				"prev":"< Prev",
				"image":"Image",
				"of":"of",
				"close":"Close",
				"noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.",
				"loadingAnimation":"http://www.gavick.com/demo/wordpress/appsprotech/wp-includes/js/thickbox/loadingAnimation.gif",
				"closeImage":"http://www.gavick.com/demo/wordpress/appsprotech/wp-includes/js/thickbox/tb-close.png"
			};
		</script>
		
		<link rel="stylesheet" href="colorbox_appspro/js/thickbox.css" media="all" />
		<script type="text/javascript" src="colorbox_appspro/js/thickbox.js"></script>
		<script type="text/javascript" src="colorbox_appspro/js/gk.scripts.js"></script>
		<script type="text/javascript" src="colorbox_appspro/js/gk.menu.js"></script>
		
		<style>
			body{font:12px/1.2 Verdana, sans-serif;}
			a:link, a:visited{text-decoration:none; color:#416CE5;}
			h2{font-size:135%; margin:15px 0 0 0;}
		</style>
		
		<link rel="stylesheet" href="colorbox_appspro/css/colorbox_1.css" />
		
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1', transition:"none"});
				$(".group2").colorbox({rel:'group2', transition:"none"});
				$(".group3").colorbox({rel:'group3', transition:"none"});
				//$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', transition:"none"});
				$(".group5").colorbox({rel:'group5', transition:"none"});
				$(".group6").colorbox({rel:'group6', transition:"none", height:"75%", display:"block"});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"95%", height:"95%"});
				$(".iframe2").colorbox({iframe:true, width:"350px", height:"500px"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
    </head>
    
    <body class="home blog custom-background" data-tablet-width="920">
		<!-- Menambahkan space kosong di atas static menu -->
		<!-- <div class="templatemo-top-bar" id="templatemo-top">
           <div class="container">
                <div class="subheader"></div>
            </div>
        </div> -->
		
        <div class="templatemo-top-menu" >
            <div class="container">
				<!-- Static navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
						<div class="navbar-header">
                                <!-- Logo Fingertech -->
								<a href="http://fingertechnology.mobi" rel="nofollow" >
									<img src="images/logo3.jpg"  style = "margin-top:8% ; width : 80% " alt="logo"/>
								</a>
                                
								<!-- Bundle menu-menu -->
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<!-- Menambahkan jumlah garis pada saat navbar-toggle aktif -->
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
                                </button>
                        </div>
						
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;margin-right:75px;">
                                <li><a href="#templatemo-top"><strong>HOME</strong></a></li>
                                <li><a href="#templatemo-welcome"><strong>ABOUT</strong></a></li>
                                <li><a href="#templatemo-products"><strong>PRODUCTS</strong></a></li>
                                <li><a href="#templatemo-about"><strong>SERVICES</strong></a></li>
                                <li><a href="#templatemo-career"><strong>CAREER</strong></a></li>
                                <li><a href="#templatemo-contact"><strong>CONTACT</strong></a></li>
                            	<li><a href="blog.php" class="external-link"><strong>BLOG</strong></a></li>
							</ul>
                        </div>
					</div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        
        <div id="templatemo-products" ><!-- /.product- -->
            <div class="container">
                <div class="row">
                    <div class="text-center tag-head">
                            <hr class="team_hr2 team_hr_left2 hr_gray"/>
                            <div class="txt_dark text-center">BLOGS</div>
                            <hr class="team_hr2 team_hr_right2 hr_gray"/>
                            <div class="clearfix"></div>
                        </div>
                </div> <!-- /.row -->
                
	            <div class="text-right" id="search_container">
	            	<form role="form" method="post" name="frmsearch" target="_self" id="frmsearch" enctype="multipart/form-data">
						<input type="text" name="search" id="search" placeholder="Search" value="<?php if(isset($_POST['search'])) echo $_POST['search']; ?>" />
						<button class="plus" type="submit">+</button>
	            	</form>
	            </div>
				
	            <div style="position:relative;">
					<div class="masonry">
						<?php
							$number = 1;
							if(isset($_POST['search'])) {
								$blogSql = "SELECT * FROM blog where title like '%".$_POST['search']."%' ORDER BY publish_on,blogid ASC";
							}

							else {
								if(isset($_GET)) {
									if(isset($_GET['category'])) {
										$blogSql = "SELECT * FROM blog where category='".$_GET['category']."' ORDER BY publish_on,blogid ASC";
									} else if(isset($_GET['year'])) {
										if(isset($_GET['month'])) {
											$blogSql = "SELECT * FROM blog where YEAR(publish_on)='".$_GET['year']."' and month(publish_on)='".$_GET['month']."' ORDER BY publish_on,blogid ASC";
										} else {
											$blogSql = "SELECT * FROM blog where YEAR(publish_on)='".$_GET['year']."' ORDER BY publish_on,blogid ASC";
										}
									} else {
										$blogSql = "SELECT * FROM blog ORDER BY publish_on,blogid ASC";

									}
								} else {
									$blogSql = "SELECT * FROM blog ORDER BY publish_on,blogid ASC";
								}
							}
							
							$blogQry = mysql_query($blogSql, $koneksi) or die ("Query products salah : ".mysql_error());
							echo "<div class=\"col-sm-9 col-xs-12 col-md-8 col-lg-8\">";

									while ($blogRow = mysql_fetch_array($blogQry)) {
										// if($number==1){
											// echo "<div class=\"item\">";
											// echo "<img src=\"images/blog/".$blogRow['image_name']."\" width=\"470px\">";
											// echo "<p><b>".$blogRow['title']."</b></p>";
											
											// $line=$blogRow['content'];
											// if (preg_match('/^.{1,300}\b/s', $blogRow['content'], $match))
											// {
												// $line=$match[0];
											// }
											// echo "<p class=\"blogcontent\">".$line."</p>";
										// } else {
												echo "<div class=\"item\">";
												echo "<a href=\"blog_detail.php?Kode=".$blogRow['blogid']."\">";
												echo "<img src=\"images/blog/".$blogRow['image_name']."\" width=\"270px\">";
												echo "<p><b>".$blogRow['title']."</b></p>";
												echo "</a>";
												
												$line=$blogRow['content'];
												if (preg_match('/^.{1,300}\b/s', $blogRow['content'], $match))
												{
													$line=$match[0];
												}
												echo "<p class=\"blogcontent\">".$line."</p>";
										// }
										
										echo "<div style=\"border-bottom:1px solid #f0f0f0; margin:15px;\"></div>";
										// echo "<p class=\"viewmore\"><i><a href=\"blog_detail.php?Kode=".$blogRow['blogid']."\">view more..</a></i></p>";
										echo "</div>";
										$number++;
									}
							echo "</div>";
						?>
					
								<!-- Update here-->
								<div class="col-sm-3 col-xs-12 col-md-4 col-lg-4" id="right_content">
									<div style="background-color:white;margin-bottom:5px;padding:20px 20px;">
										<h3>Latest Blogs</h3>
										<hr>                                    
										<?php
											$latestSql = "SELECT * FROM blog ORDER BY publish_on,blogid ASC limit 5";
											$latestQry = mysql_query($latestSql, $koneksi) or die ("Query products salah : ".mysql_error());
								
											while ($latestRow = mysql_fetch_array($latestQry)) {
												echo "<a href=\"blog_detail.php?Kode=".$latestRow['blogid']."\">".$latestRow['title']."</a>";
												echo "<br>";
											}
										?>
										<hr>
										
											
									<h3>Categories</h3>
									<hr>
										<?php
											$categorySql = "SELECT * FROM blog group by category ASC";
											$categoryQry = mysql_query($categorySql, $koneksi) or die ("Query products salah : ".mysql_error());
								
											while ($categoryRow = mysql_fetch_array($categoryQry)) {
												echo "<a href=\"blog.php?category=".$categoryRow['category']."\">".$categoryRow['category']."</a>";
												echo "<br>";
											}
										?>
									<hr>
											
									<br>
									
									<h3>Archives</h3>
									<hr>                                    
										<?php
											$tahun = 0;
											$bulan = 0;
											$arcSql = "SELECT YEAR(publish_on) AS yr, MONTH(publish_on) AS mnth, DATE_FORMAT(publish_on,'%M') AS mnth2 FROM blog GROUP BY YEAR(publish_on),MONTH(publish_on) ORDER BY yr,mnth DESC;";
											$arcQry = mysql_query($arcSql, $koneksi) or die ("Query products salah : ".mysql_error());
											
											echo "<ul class=\"archive\">";
											while ($arcRow = mysql_fetch_array($arcQry)) {
												if ($tahun == $arcRow['yr']) {
													if($bulan != $arcRow['mnth']) {
														$bulan = $arcRow['mnth'];
														echo "<li><a href=\"blog.php?year=".$arcRow['yr']."&month=".$arcRow['mnth']."\">".$arcRow['mnth2']."</a></li>";
													}
												} else {
													$tahun = $arcRow['yr'];
													echo "<a href=\"blog.php?year=".$arcRow['yr']."\">".$arcRow['yr']."</a>";

													$bulan = $arcRow['mnth'];
													echo "<li><a href=\"blog.php?year=".$arcRow['yr']."&month=".$arcRow['mnth']."\">".$arcRow['mnth2']."</a></li>";
												}
											}
											echo "</ul>";
										?>
									<hr>
								</div>
							</div>
						</div>
					</div>

					<div class="row text-center" id="reg_newsletter">
						<h3><b>Sign up to our email newsletter</b></h3> 
						<p>to get the latest news about fingertechnology</p>
						<a class="iframe2" href="subscribe.php" data-group="sub" title="">
							<button>Subscribe Now!</button>
						</a>
					</div>
				</div><!-- /.container -->
			</div> <!-- /.product-portfolio -->
               
        <div class="templatemo-footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">

                        <div class="footer_container">
                            <ul class="list-inline">
                                <li>
                                    <a href="https://www.facebook.com/Fingertechnology" target="_blank">
                                        <span class="social-icon-fb"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/Fingertechnology" target="_blank">
                                        <span class="social-icon-twitter"/>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <span class="social-icon-linkedin"/>
                                    </a>
                                </li>
                            </ul>
                            <div class="height30"></div>
                            	<a class="btn btn-lg btn-orange" href="#" role="button">Back To Top</a>
                        </div>
                        
						<div class="footer_bottom_content">
							Copyright © 2014 <a href="#">FingerTechnology</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
		<script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.gallery.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#dg-container').gallery();
				$('#dg-containers').gallery();
				$('#dg-container2').gallery();
				$('#dg-container3').gallery();
			});
		</script>
		<script type='text/javascript' src='colorbox_appspro/js/shortcodes.typography.js?ver=4.0'></script>
		<script type='text/javascript' src='colorbox_appspro/js/shortcodes.elements.js?ver=4.0'></script>
		<script type='text/javascript' src='colorbox_appspro/js/shortcodes.template.js?ver=4.0'></script>
		<script src="colorbox_appspro/js/jquery.colorbox_1.js"></script>
	</body>
<!-- </div> -->
</html>
