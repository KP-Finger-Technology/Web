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
                                <li><a href="index.php#templatemo-top" class="external-link"><strong>HOME</strong></a></li>
                                <li><a href="index.php#templatemo-welcome" class="external-link"><strong>ABOUT</strong></a></li>
                                <li><a href="index.php#templatemo-products" class="external-link"><strong>PRODUCTS</strong></a></li>
                                <li><a href="index.php#templatemo-about" class="external-link"><strong>SERVICES</strong></a></li>
                                <li><a href="index.php#templatemo-career" class="external-link"><strong>CAREER</strong></a></li>
                                <li><a href="index.php#templatemo-contact" class="external-link"><strong>CONTACT</strong></a></li>
                            	<li><a href="" style="background-color: #16c5fe;color:#fff;"><strong>BLOG</strong></a></li>
							</ul>
                        </div>
                    
					</div><!--/.container-fluid -->
                </div><!--/.navbar -->
            </div> <!-- /container -->
        </div>
        
        <div id="templatemo-products" ><!-- /.product- -->
            <div class="container">
                <div class="row">
                    <!--div class="templatemo-line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BLOGS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div-->
                    <div class="text-center tag-head">
                            <hr class="team_hr2 team_hr_left2 hr_gray"/>
                            <!--span class="txt_darkgrey">CONTACT US</span-->	
                            <div class="txt_dark text-center">BLOGS</div>
                            <hr class="team_hr2 team_hr_right2 hr_gray"/>
                            <div class="clearfix"></div>
                        </div>
                </div> <!-- /.row -->              
                
	            <div class="text-right" style="margin-right:20px;" id="search_container">
	            	<form role="form" action="blog.php" method="post" name="frmsearch" target="_self" id="frmsearch" enctype="multipart/form-data">
						<input type="text" name="search" id="search" size="50" placeholder="Search" value="<?php if(isset($_POST['search'])) echo $_POST['search']; ?>" />
						<button class="plus" type="submit">+</button>
	            	</form>
	            </div>
				
	            <?php
                   	if(isset($_GET['Kode'])) {
                   		if(isset($_GET['category'])) {
							$blogSql = "SELECT * FROM blog where category ='".$_GET['period']."' ORDER BY publish_on,blogid ASC";
						} else if(isset($_GET['period'])) {}
                   		else {
                   			$blogSql = "SELECT * FROM blog where blogid=".$_GET['Kode'];
                  		}
                   	} else if (isset($_POST['search'])) {
                   		$blogSql = "SELECT * FROM blog where title like '%".$_POST['search']."%' ORDER BY publish_on,blogid ASC";
                   	} else {
						$blogSql = "SELECT * FROM blog ORDER BY publish_on,blogid ASC";
					}
					$blogQry = mysql_query($blogSql, $koneksi) or die ("Query products salah : ".mysql_error());
					
					if(isset($_GET['Kode'])) {
				?>
				
						<div class="row content" style="margin-top:30px;">
			            	<div class="col-sm-8" id="left_content">
			            		<?php 
									while ($blogRow = mysql_fetch_array($blogQry)) {
										echo "<img src=\"images/blog/".$blogRow['image_name']."\" width=\"100%\">";
										
										echo "<div style=\"background-color:white;margin-top:20px;padding:10px 20px;\">";
										echo "<p style=\"font-size:23px;margin-bottom:10px;\"><b>".$blogRow['title']."</b></p>";
										echo "<hr>";
										echo "<p class=\"blogcontent\">".nl2br($blogRow['content'])."</p>";

										echo "<a href=\"blog.php\">&lt Back to blogs</a>";
										echo "<div class=\"comment\">";
										echo "<p><b>Leave a Reply</b></p>";
										echo "<hr>";

										echo "<form role=\"form\" action=\"?page=blog_detail&Kode=".$_GET['Kode']."\" method=\"post\" name=\"frmcomment\" target=\"_self\" id=\"frmcomment\" enctype=\"multipart/form-data\">";
										
										if(isset($_POST['btnSave'])) {
											$message = '';
											if (trim($_POST['name'])=="") {
												$message = $message."Name can't be empty !<br>";		
											}
											
											if (trim($_POST['email'])=="") {
												$message = $message."Email can't be empty !<br>";			
											} else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
													$message = $message."Email is not valid !<br>";
											}
											
											if (trim($_POST['comment'])=="") {
												$message = $message."Comment can't be empty !<br>";
											}
											
											# Baca Variabel Form
											$txtid 		= $_POST['bid'];
											$txtname	= $_POST['name'];
											$txtname	= str_replace("'","&acute;",$txtname);
											$txtemail	= $_POST['email'];
											$txtemail	= str_replace("'","&acute;",$txtemail);

											$txtcomment	= $_POST['comment'];
											$txtcomment	= str_replace("'","&acute;",$txtcomment);
											$txtwebsite	= $_POST['website'];
											$txtwebsite	= str_replace("'","&acute;",$txtwebsite);

											//echo "<p style=\"border:#000 solid 1px;\">";
											//echo "Thanks for your comment.";
											//echo "</p>";

											// JIKA ADA PESAN ERROR DARI VALIDASI
											// (Form Kosong, atau Duplikat ada), Ditampilkan lewat kode ini
											if (! trim($message) == "" ){
												echo "<div class='msgBoxBad'>";
												echo $message; 
												echo "</div>"; 
											} else {
												# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
												# SIMPAN DATA KE DATABASE
												$qrySave=mysql_query("INSERT INTO blogcomment SET blogid='$txtid', name='$txtname', email='$txtemail', website='$txtwebsite', comment='$txtcomment'") or die ("Gagal query".mysql_error());
												if($qrySave){}

												echo "<div class='msgBoxGood'>";
												echo "Thanks for your comment."; 
												echo "</div>"; 
											}
										}

										# MASUKKAN DATA KE VARIABEL
										$txtname	= isset($_POST['name']) ? $_POST['name'] : '';
										$txtemail	= isset($_POST['email']) ? $_POST['email'] : '';
										$txtwebsite	= isset($_POST['website']) ? $_POST['website'] : '';
										$txtcomment	= isset($_POST['comment']) ? $_POST['comment'] : '';

										echo "<div class=\"form-group\">";
										echo "<label>Name (required)</label>";
										echo "<input name=\"name\" type=\"text\" class=\"form-control\" value=\"".$txtname."\" />";
										echo "<input name=\"bid\" type=\"hidden\" class=\"form-control\" value=\"".$_GET['Kode']."\"/>";
										echo "</div>";

										echo "<div class=\"form-group\">";
										echo "<label>Email (will not be published)(required)</label>";
										echo "<input name=\"email\" type=\"text\" class=\"form-control\" value=\"".$txtemail."\"/>";
										echo "</div>";

										echo "<div class=\"form-group\">";
										echo "<label>Website</label>";
										echo "<input name=\"website\" type=\"text\" class=\"form-control\" value=\"".$txtwebsite."\" />";
										echo "</div>";

										echo "<div class=\"form-group\">";
										echo "<label>Comment</label>";
										echo "<textarea name=\"comment\" class=\"form-control\" rows=\"3\">".$txtcomment." </textarea>";
										echo "</div>";

										echo "<button class=\"btn-flat\" name=\"btnSave\" type=\"submit\" style=\"cursor:pointer;\">Submit Comment</button>";

										echo "</form>";

										echo "</div>";

										echo "</div>";
									}
		            			?>
		            		</div>
							
		            		<div class="col-sm-4" id="right_content">
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
									
	                                <br>
									
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
					
				<?php
					} else {
				?>
						<div style="position:relative;left:50%;margin-left:-500px;">
							<div class="masonry">
								<?php
									$number = 1;
									while ($blogRow = mysql_fetch_array($blogQry)) {
										if($number==1) {
											echo "<div class=\"item w2 h2\">";
											echo "<img src=\"images/blog/".$blogRow['image_name']."\" width=\"470px\">";
											echo "<p><b>".$blogRow['title']."</b></p>";
											
											$line=$blogRow['content'];
											if (preg_match('/^.{1,300}\b/s', $blogRow['content'], $match)) {
												$line=$match[0];
											}
											echo "<p class=\"blogcontent\">".$line."</p>";
										} else {
											echo "<div class=\"item\">";
											echo "<img src=\"images/blog/".$blogRow['image_name']."\" width=\"270px\">";
											echo "<p><b>".$blogRow['title']."</b></p>";
											
											$line=$blogRow['content'];
											if (preg_match('/^.{1,300}\b/s', $blogRow['content'], $match)) {
												$line=$match[0];
											}
											echo "<p class=\"blogcontent\">".$line."</p>";
										}
										echo "<div style=\"border-bottom:1px solid #f0f0f0; margin:15px;\"></div>";
										echo "<p class=\"viewmore\"><i><a href=\"blog_detail.php?Kode=".$blogRow['blogid']."\">view more..</a></i></p>";
										echo "</div>";
										$number++;
									}
					}
								?>
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