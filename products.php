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
		
		<link rel="stylesheet" href="colorbox_appspro/css/colorbox_1.css" />
		<link rel="stylesheet" href="products/style.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="colorbox_appspro/js/jquery.colorbox_1.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1', transition:"none"});
				$(".group2").colorbox({rel:'group2', transition:"none"});
				$(".group3").colorbox({rel:'group3', transition:"none"});
				//$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', transition:"none", height:"90%"});
				$(".group5").colorbox({rel:'group5', transition:"none", height:"75%", display:"block"});
				$(".group6").colorbox({rel:'group6', transition:"none", height:"75%", display:"block"});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"90%", height:"90%"});
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
		<link rel="stylesheet" href="colorbox_appspro/css/normalize_1.css" />
	<link rel="stylesheet" href="colorbox_appspro/css/template.css" />
	<link rel="stylesheet" href="colorbox_appspro/css/wp.css" />
	<link rel="stylesheet" href="colorbox_appspro/css/extensions_1.css" />
	
<script type='text/javascript' src='colorbox_appspro/js/jquery.js?ver=1.11.1'></script>
<script type='text/javascript' src='colorbox_appspro/js/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='colorbox_appspro/js/nsp.js?ver=4.0'></script>
<script type='text/javascript' src='colorbox_appspro/js/tabs.js?ver=4.0'></script>

	
	<link href="colorbox_appspro/css/shortcodes.typography.css" rel="stylesheet" type="text/css" /><link href="colorbox_appspro/css/shortcodes.elements.css" rel="stylesheet" type="text/css" /><link href="colorbox_appspro/css/shortcodes.template.css" rel="stylesheet" type="text/css" />	<link href="colorbox_appspro/css/style1_1.css" rel="stylesheet" type="text/css" />		
	
		
	
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
	
	</head>
	<body class="home blog custom-background">	
	<div class="container">
	<?php
	if(isset($_GET['Product_id']))
	{
	?>
	<section>

			<div id="content-container">
					<?php
	$product_id = $_GET['Product_id'];
	$sql = "select tittle, content, picture from pageproducts where productsid='$product_id'";
	$ambil_data = mysql_query($sql);
while ($data = mysql_fetch_array($ambil_data))
{
?>
<div id="gk-bg">
		<!--[if IE 8]><div><div><![endif]-->

<section class="gk-page-wrap">
	<section class="gk-page">
<section id="gk-mainbody-columns">
		
			<section id="gk-mainbody-wrap">
				<!-- Mainbody, breadcrumbs -->	
								
										
		
			<section id="gk-mainbody">
			<div id="widget_gk_tabs-4" class="box  big-tabs all widget_gk_tabs">
			<div>
			<div class="gk-tabs" data-event="click" data-autoanim="disabled" data-speed="" data-interval="">
			<div class="gk-tabs-wrap"><ol class="gk-tabs-nav"><li class="active gk-tab-1">Picture</li><li class="gk-tab-2">Video</li></ol>
			<div class="gk-arrow">
			<div style="margin-left: 216.5px;"></div>
			</div>
			<div class="gk-tabs-container">
		<div class="gk-tabs-item active"><div id="gallery">
		<?php
$Sql_p = "SELECT * FROM pageproductsdetail where productsid='$product_id' and m_type='image' ORDER BY productsid, productsdetailid ASC";
$Qry_p = mysql_query($Sql_p, $koneksi) or die ("Query Sql salah : ".mysql_error());
while ($data1 = mysql_fetch_array($Qry_p))
{
echo "<a class='group4' href='images/product/"  .$data1["picture"]. "'><img src='images/product/" .$data1["picture"]. "' width='206px' height='206px' /></a>";
}
?>
		</div></div>
		
		<div class="gk-tabs-item"><div id="gallery">
		<?php
$Sql_p1 = "SELECT * FROM pageproductsdetail where productsid='$product_id' and m_type='video' ORDER BY productsid, productsdetailid ASC";
$Qry_p1 = mysql_query($Sql_p1, $koneksi) or die ("Query Sql salah : ".mysql_error());
while ($data2 = mysql_fetch_array($Qry_p1))
{
echo "<a class='youtube' href='http://www.youtube.com/embed/" . $data2["video_id"] ."?rel=0&amp;wmode=transparent'><img src='http://img.youtube.com/vi/" . $data2["video_id"] ."/default.jpg' width='206px' height='206px' /></a>";
}
?>
		</div></div>
		
		<div class="gk-tabs-item"><div id="text-37" class="box widget_text"><div><div class="textwidget"><div class="gk-tab" data-style="style3"></div><h2 class="gk-tab" data-style="style3"><span style="padding-left:15px !important;"><?php
													$desSql = "SELECT * FROM pagedesktop ORDER BY desktopid ASC";
                                                    $desQry = mysql_query($desSql, $koneksi) or die ("Query desktop salah : ".mysql_error());
                                                                 
                                                    while ($desRow = mysql_fetch_array($desQry)) {
                                                ?>
                                                        	<a class="group3" href="images/desktop/<?php echo $desRow['picture']; ?>" data-group="gallery-creative" title="<?php echo $desRow['content']; ?>">
                                                            <?php
																}
															?>
                                                            Desktop</a></span></h2>
															<p class="gk-tab" style="text-align:justify"><?php
										$desktopSql = "SELECT * FROM services WHERE tittle = 'Desktop'";
										$desktopQry = mysql_query($desktopSql, $koneksi) or die ("Query mobile salah : ".mysql_error());
										
										while ($desktopRow = mysql_fetch_array($desktopQry)) {
										echo $desktopRow['content'];
										}
									?></p></div>
		</div></div></div>
		
		</div>
		</div>
		</div>
		</div>
		</div>		</section>
					
							
					
	</section><!-- end of the mainbody section -->
				
				
		</section><!-- end of the #gk-mainbody-columns -->
	</section><!-- end of the .gk-page section -->
</section><!-- end of the .gk-page-wrap section -->	
<!--[if IE 8]>
<div class="ie8clear"></div>
<![endif]-->

</div>	
					
<?php
}
?>
			
		</div>
		</section>
<?php
	}
	else
	{
	$sql = "select tittle, content, picture from pageproducts";
	$ambil_data = mysql_query($sql);
	while ($data = mysql_fetch_array($ambil_data))
{
echo $data["content"];
echo "<br/>";
echo $data["tittle"];
echo "<br/><br/>";

}
	}
	?>
	</div>
	</div></div>
	<script type='text/javascript' src='colorbox_appspro/js/shortcodes.typography.js?ver=4.0'></script>
<script type='text/javascript' src='colorbox_appspro/js/shortcodes.elements.js?ver=4.0'></script>
<script type='text/javascript' src='colorbox_appspro/js/shortcodes.template.js?ver=4.0'></script>
	</body>
</html>