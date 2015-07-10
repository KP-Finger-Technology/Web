<!DOCTYPE html>
<?php
	include "conn.php";
?>
<html lang="en">
    <head>
		<!-- Segala import, link, dan meta-->
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
        
		<!-- Jquery -->
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
		</style>
		
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
				$(".group4").colorbox({rel:'group4', transition:"none"});
				$(".group5").colorbox({rel:'group5', transition:"none"});
				$(".group6").colorbox({rel:'group6', transition:"none", height:"75%", display:"block"});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"95%", height:"95%"});
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
							<!-- Bundle menu-menu -->
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<!-- Menambahkan jumlah garis pada saat navbar-toggle aktif -->
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
                                </button>

								<a href="http://fingertechnology.mobi" rel="nofollow" >
									<img src="images/logo3.jpg"  style = "margin-top:8% ; width : 80% " alt="logo"/>
								</a>

                                <!-- Logo Fingertech -->
								<!--a class="navbar-brand" href="http://fingertechnology.mobi" rel="nofollow">
									<img src="images/logo3.jpg" style="width:80%" alt="logo"/>
								</a-->
                                
                        </div>
						
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-left" style="margin-top: 40px;">
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
        
        <div>
            <!-- Carousel -->
            <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
                <!-- Menambahkan indikator carousel di bagian bawah gambar-->
				<ol class="carousel-indicators">
                    <li data-target="#templatemo-carousel" data-slide-to="0" class="active"/>
                    <li data-target="#templatemo-carousel" data-slide-to="1"/>
                    <li data-target="#templatemo-carousel" data-slide-to="2"/>
                </ol>
				
				<!--  Gambar-gambar carousel -->
				<div class="carousel-inner">
					<div class="item active">
						<a href="#templatemo-welcome"><img class="img_carousel" src="images/slide_1.jpg"/></a>
					</div>
					
					<div class="item">
						<a href="#templatemo-products"><img class="img_carousel" src="images/slide_2.jpg"/></a>
					</div>
					
					<div class="item">
						<a href="#templatemo-about"><img class="img_carousel" src="images/slide_3.jpg"/></a>
					</div>
                </div>
				
                <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /#templatemo-carousel -->
        </div>
        
		<!-- Judul -->
        <div class="templatemo-welcome" id="templatemo-welcome">
            <div class="container">
                <div class="templatemo-slogan text-center">
                    <span class="txt_darkgrey">Welcome to </span>
					<span class="txt_orange">Finger Tech</span>
                    <p class="txt_slogan"><i>Simplify your business just a finger tap away.</i></p>
                </div>	
            </div>
        </div>
        
		<!-- Menu About -->
        <div class="templatemo-service">
            <div class="container">
                <div class="row">
					<?php
						$aboutSql = "SELECT * FROM pageabout ORDER BY aboutid ASC";
						$aboutQry = mysql_query($aboutSql, $koneksi) or die ("Query about salah : ".mysql_error());
						
						while ($aboutRow = mysql_fetch_array($aboutQry)) {
					?>
						<!-- Menambahkan kata pengantar Expertise, Fully Responsive, dan High Efficiency -->
							<div class="col-md-4">
								<div class="templatemo-service-item">
									<div>
										<img src="images/<?php echo $aboutRow['picture']; ?>" alt="icon"/>  <!-- Gambar -->
										<span class="templatemo-service-item-header"><?php echo $aboutRow['tittle']; ?></span> <!-- Judul gambar -->
									</div>
									
									<!-- Text -->
									<p><?php echo $aboutRow['content']; ?></p>
								</div>
							</div>
					<?php
						}
					?>
            	</div>
        	</div>

			<!-- Menu Products -->
			<div id="templatemo-products" >
				<div class="container">
					<!-- Judul -->
					<div class="row">
						<div class="templatemo-line-header" >
							<div class="text-center tag-head">
								<hr class="team_hr2 team_hr_left2 hr_gray"/>	
								<div class="txt_dark text-center">OUR PRODUCTS</div>
								<hr class="team_hr2 team_hr_right2 hr_gray"/>
							</div>
						</div>
					</div> <!-- /.row -->
					
					<!-- Isi -->
					<div class="row text-center">
						<!-- Carousel -->
						<section id="dg-container" class="dg-container">
							<div class="dg-wrapper">
								<?php
									$productsSql = "SELECT * FROM pageproducts ORDER BY productsid ASC";
									$productsQry = mysql_query($productsSql, $koneksi) or die ("Query products salah : ".mysql_error());
								
									while ($productsRow = mysql_fetch_array($productsQry)) {
								?>
										<a class="iframe" href="products.php?Product_id=<?php echo $productsRow['productsid']; ?>" data-group="gallery-graphic" title="<?php echo $productsRow['content']; ?>">
											<!-- Gambar -->
											<img src="images/<?php echo $productsRow['picture']; ?>" alt="image01" width="481px" height="316px">
											
											<!-- Judul gambar -->
											<div>
												<p style = "margin-bottom:-30px">
													<?php echo $productsRow['content'];?>
												</p>
											</div>
										</a>
								<?php
									}
								?>
							</div>
							
							<!-- Tombol navigasi kiri dan kanan -->
							<nav>	
								<span class="dg-prev">&lt;</span>
								<span class="dg-next">&gt;</span>
							</nav>
						</section>
					</div>
				</div><!-- /.container -->
			</div> <!-- /.product-portfolio -->
			
			<!-- Menu Services -->	
			<div class="templatemo-team" id="templatemo-about">
				<div class="container">
					<!-- Judul -->
					<div class="row">
						<div class="templatemo-line-header" >
							<div class="text-center tag-head">
								<hr class="team_hr2 team_hr_left2 hr_gray"/>
								<div class="txt_dark text-center">WHAT WE DO?</div>
								<hr class="team_hr2 team_hr_right2 hr_gray"/>
							</div>
						</div>
					</div>
					
					<!-- Isi -->
					<div class="container">
						<section id="set-1">
							<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
								<!-- Web -->
								<?php
									$wdSql = "SELECT * FROM pagewebs ORDER BY webid ASC limit 1";
									$wdQry = mysql_query($wdSql, $koneksi) or die ("Query desktop salah : ".mysql_error());
																		 
									while ($wdRow = mysql_fetch_array($wdQry)) {
								?>
										<a href="images/web/<?php echo $wdRow['picture'];?>" id="btn3" class="group3 hi-icon hi-icon-earth" title="<?php echo $wdRow['content'];?>">Web</a>
								<?php
									}
								?>
								
								<!-- Mobile -->
								<?php
									$pmSql = "SELECT * FROM pagemobiles ORDER BY mobileid ASC limit 1";
									$pmQry = mysql_query($pmSql, $koneksi) or die ("Query mobile salah : ".mysql_error());
																		 
									while ($pmRow = mysql_fetch_array($pmQry)) {
								?>
										<a href="images/mobile/<?php echo $pmRow['picture']; ?>" id="btn1" class="group1 hi-icon hi-icon-mobile" title="<?php echo $pmRow['content']; ?>">Mobile</a>
								<?php
									}
								?>
								
								<!-- Desktop -->
								<?php
									$desSql = "SELECT * FROM pagedesktop ORDER BY desktopid ASC limit 1";
									$desQry = mysql_query($desSql, $koneksi) or die ("Query desktop salah : ".mysql_error());
																		 
									while ($desRow = mysql_fetch_array($desQry)) {
								?>
										<a href="images/desktop/<?php echo $desRow['picture']; ?>" id="btn2" class="group2 hi-icon hi-icon-screen" title="<?php echo $desRow['content']; ?>">Desktop</a>
								<?php
									}
								?>
							</div>
						</section>
					</div>
					
					<!-- Isi submenu Mobile -->
					<div class="gkTabContainer0" id="mb">
						<div class="gkTabContainer1">
							<div class="gkTabContainer2">
								<div class="gkTabItem active">
									<div class="gkTabItemSpace">
										<div class="custom">
											<?php
												$mobileSql = "SELECT * FROM services WHERE tittle = 'Mobile'";
												$mobileQry = mysql_query($mobileSql, $koneksi) or die ("Query mobile salah : ".mysql_error());
												
												while ($mobileRow = mysql_fetch_array($mobileQry)) {
											?>									
													<div class="gkTab-1"></div>
													<h2 class="tabTitle">
														<span id="tet1x">
															<?php
																$pmSql = "SELECT * FROM pagemobiles ORDER BY mobileid ASC limit 1, 18446744073709551615";
																$pmQry = mysql_query($pmSql, $koneksi) or die ("Query mobile salah : ".mysql_error());
																			 
																while ($pmRow = mysql_fetch_array($pmQry)) {
															?>
																	<a class="group1" href="images/mobile/<?php echo $pmRow['picture']; ?>" data-group="gallery-inspiration" title="<?php echo $pmRow['content']; ?>">
															<?php
																}
															?>
																		Mobile
																	</a>
														</span>
													</h2><!-- </a> -->
													
													<!-- Deskripsi -->
													<p class="tabContent" id="test1">
														<?php echo $mobileRow['content']; ?>
													</p>
											<?php
												}
											?>
										</div>
									</div>
								</div>           
							</div>
						</div>
					</div>
					
					<!-- Isi submenu Desktop -->
					<div class="gkTabContainer0" id="des" hidden="true">
						<div class="gkTabContainer1">
							<div class="gkTabContainer2">
								<div class="gkTabItem active">
									<div class="gkTabItemSpace">
										<div class="custom">
											<?php
												$desktopSql = "SELECT * FROM services WHERE tittle = 'Desktop'";
												$desktopQry = mysql_query($desktopSql, $koneksi) or die ("Query mobile salah : ".mysql_error());
													
												while ($desktopRow = mysql_fetch_array($desktopQry)) {
											?>									
													
													<div class="gkTab-2"></div>
													<h2 class="tabTitle">
														<span id="tet1x">
															<?php
																$desSql = "SELECT * FROM pagedesktop ORDER BY desktopid ASC limit 1";
																$sql_des = "select count(*) as cek_des from pagedesktop";
												
																$ambil_data = mysql_query($sql_des);
																if ($data = mysql_fetch_array($ambil_data)) {
																	$cek_des = $data["cek_des"];
																}
																
																if($cek_des == 1) {
																	$desSql = "SELECT * FROM pagedesktop ORDER BY desktopid ASC limit 1";
																	$group = "group4";
																}
																else {
																	$desSql = "SELECT * FROM pagedesktop ORDER BY desktopid ASC limit 1, 18446744073709551615";
																	$group = "group2";
																}
																
																$desQry = mysql_query($desSql, $koneksi) or die ("Query desktop salah : ".mysql_error());
																				 
																while ($desRow = mysql_fetch_array($desQry)) {
															?>
																	<a class="<?php echo $group;?>" href="images/desktop/<?php echo $desRow['picture']; ?>" data-group="gallery-creative" title="<?php echo $desRow['content']; ?>">
															<?php
																}
															?>
																		Desktop
																	</a>
														</span>
													</h2><!-- </a> -->
													
													<!-- Deskripsi -->
													<p class="tabContent" id="test1">
														<?php echo $desktopRow['content']; ?>
													</p>
											<?php
												}
											?>
										</div>
									</div>
								</div>           
							</div>
						</div>
					</div>
					
					<!-- Isi submenu Web Design -->
					<div class="gkTabContainer0" id="wd" hidden="true">
						<div class="gkTabContainer1">
							<div class="gkTabContainer2">
								<div class="gkTabItem active">
									<div class="gkTabItemSpace">
										<div class="custom">
											<?php
												$websSql = "SELECT * FROM services WHERE tittle = 'Web Design'";
												$websQry = mysql_query($websSql, $koneksi) or die ("Query webs salah : ".mysql_error());
												
												while ($websRow = mysql_fetch_array($websQry)) {
											?>									
													<div class="gkTab-3"></div>
													<h2 class="tabTitle">
														<span id="tet1x">
															<?php
																$wdSql = "SELECT * FROM pagewebs ORDER BY webid ASC limit 1, 18446744073709551615";$wdQry = mysql_query($wdSql, $koneksi) or die ("Query desktop salah : ".mysql_error());
																			 
																while ($wdRow = mysql_fetch_array($wdQry)) {
															?>
																	<a class="group3" href="images/web/<?php echo $wdRow['picture']; ?>" title="<?php echo $wdRow['content']; ?>" data-group="gallery-design">
															<?php
																}
															?>
																		Web Design
																	</a>
														</span>
													</h2><!-- </a> -->
												
												<!-- Deskripsi -->
												<p class="tabContent" id="test1">
													<?php echo $websRow['content']; ?>
												</p>
											<?php
												}
											?>
										</div>
									</div>
								</div>           
							</div>
						</div>
					</div><!-- end of the .gk-page-wrap section -->	
				</div>
			</div>
		</div><!-- /.templatemo-team -->
		
		<!-- Menu Career -->
        <div class="templatemo-team2" id="templatemo-career">
			<div class="container">
				<!-- Judul -->
				<div class="row">
					<div class="templatemo-line-header" >
						<div class="text-center tag-head">
								<hr class="team_hr2 team_hr_left2 hr_gray"/>
								<div class="txt_dark text-center">CAREER</div>
								<hr class="team_hr2 team_hr_right2 hr_gray"/>
							</div>
					</div>
                </div>
				
				<!-- Deskripsi -->
				<div class="col-md-12">
					<div class="templatemo-service-items" >
						<p>
							We’re currently looking for a person to be part of our team. If you’re all about great tech, love new ideas and fast learner, maybe you’re the one we’re looking for.  Drop us an email of your resume & portfolio to
							<strong>hrd@finger-technology.com.</strong>
						</p>
					</div>
				</div>
            </div> <!-- /.row -->
			
			<!-- Job Position Available -->
			<div class="accordion-group">
				<!-- Judul -->
				<div class="accordion-heading accordionize">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionArea" href="#oneArea">
						JOB POSITION AVAILABLE
						<span class="font-icon-arrow-simple-down"/>
					</a>
				</div>
				
				<!-- Isi -->
				<div id="oneArea" class="accordion-body collapse">
					<div class="accordion-inner">
						<?php
						$juniorSql = "SELECT * FROM pagecareer ORDER BY careerid ASC";
						$juniorQry = mysql_query($juniorSql, $koneksi) or die ("Query career salah : ".mysql_error());
						
						while ($juniorRow = mysql_fetch_array($juniorQry)) {
							echo $juniorRow['content'];
						}
						?>
					</div>
				</div>
			</div>
                    
		</div>
	<!-- </div> -->

		<!-- Menu Contact -->
        <div id="templatemo-contact">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header head_contact">
                        <!-- Judul -->
						<div class="text-center tag-head">
                            <hr class="team_hr2 team_hr_left2 hr_gray"/>
                            <div class="txt_dark text-center">CONTACT US</div>
                            <hr class="team_hr2 team_hr_right2 hr_gray"/>
                        </div>
						
                        <div class="col-md-12">
                            <div class="templatemo-service-contact" >
                                <p style="font-size:22px;"><strong>HAVE A PROJECT IN MIND?</strong></p>
                                <p style="font-size:45px;"><strong>LET'S CHAT!</strong></p>
                            </div>
                        </div>			
                    </div>
					
					<!-- Isi -->
                    <div class="col-md-8">
                        <div class="templatemo-contact-map" id="map-canvas"> </div>  
                        <?php
							$contactSql = "SELECT * FROM pagecontact ORDER BY contactid ASC";
							$contactQry = mysql_query($contactSql, $koneksi) or die ("Query contact salah : ".mysql_error());
								
							while ($contactRow = mysql_fetch_array($contactQry)) {
						?>                   
								<i>
                    </div>
									<div class="col-md-4 contact_right">
										<p>You can find us on.</p>
										<p><img src="images/location.png" alt="icon 1" /> <?php echo $contactRow['address']; ?></p>
										<p><img src="images/phone1.png" alt="icon 2" /> <?php echo $contactRow['phone']; ?></p>
										<p><img src="images/globe.png" alt="icon 3" /><a class="link_orange" href="#">
											<span class="txt_orange"> <a href="mailto:<?php echo $contactRow['email']; ?>"><?php echo $contactRow['email']; ?></a></span>
										</p>
								</i>
						<?php
							}
						?>
										<form class="form-horizontal" role="form" action="?page=comment_new.php" method="post" name="frmedit" target="_self" id="frmedit" enctype="multipart/form-data">
											<div class="form-group">
												<input name="txtemail" type="txtemail" class="form-control" placeholder="Your Email..." maxlength="40" />
											</div>
											<div class="form-group">
												<input name="txtname" type="txtname" class="form-control" placeholder="Your Name..." maxlength="40" />
											</div>
											<div class="form-group">
												<textarea name="txtcontent" class="form-control" style="height: 130px;" placeholder="Write down your message..."></textarea>
											</div>
											<button class="btn btn-orange pull-right" name="btnSave" type="submit" style="cursor:pointer;">SEND</button>
										</form>
											
									</div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /#templatemo-contact -->

		<!-- Footer -->
        <div class="templatemo-footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <!-- Sosial Media -->
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
                        
						<!-- Copyright -->
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