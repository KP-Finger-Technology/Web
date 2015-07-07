<?php
session_start(); 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">

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
<style>
.msgBoxBad {
		border: 2px solid red;
		color: red;
		margin :20px 0;
		padding :10px;
	}

	.msgBoxGood {
		border: 2px solid green;
		color: green;
		margin :2px 0;
		padding :10px;
	}
</style>


<?php
include "conn.php";

echo "<form role=\"form\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" name=\"frmsubscribe\" target=\"_self\" id=\"frmsubscribe\" enctype=\"multipart/form-data\">";
echo "<div style=\"text-align:left;margin:0px 20px; \">";
echo "<h3>Sign up to our Newsletter</h3>";
?>

<?php if (isset($_SESSION['FBID'])): ?>      <!--  After user login  -->
<div class="container">
<div class="hero-unit">
  <h1>Hello <?php echo $_SESSION['USERNAME']; ?></h1>
 <?php endif ?>

<?php
if(isset($_POST['btnSave'])) {
	$message = '';
	if (trim($_POST['email'])=="") {
		$message = $message."Email can't be empty !<br>";			
	}else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$message = $message."Email is not valid !<br>";
	}
	if (trim($_POST['name'])=="") {
		$message = $message."Name can't be empty !<br>";		
	}
	
	
	$txtname	= $_POST['name'];
	$txtname	= str_replace("'","&acute;",$txtname);
	$txtemail	= $_POST['email'];
	$txtemail	= str_replace("'","&acute;",$txtemail);

	
	// JIKA ADA PESAN ERROR DARI VALIDASI
	// (Form Kosong, atau Duplikat ada), Ditampilkan lewat kode ini
	if (! trim($message) == "" ){
		echo "<div class='msgBoxBad'>";
		echo $message; 
		echo "</div>"; 
	}else {
		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		# SIMPAN DATA KE DATABASE
		
		//$q = mysql_query("SELECT * from subscribe where email=".$txtemail, $koneksi);
		
		//if (mysql_num_rows($q) == 0){
			$qrySave=mysql_query("INSERT INTO subscribe SET name='$txtname', email='$txtemail'");
		//}
		//if($qrySave){
		//}

		$_POST['name']	= '';
		$_POST['email']	= '';
		echo "<div class='msgBoxGood'>";
		echo "Thanks for Subscribe Us."; 
		echo "</div>"; 
	}
}

									# MASUKKAN DATA KE VARIABEL
$txtname	= isset($_POST['name']) ? $_POST['name'] : '';
$txtemail	= isset($_POST['email']) ? $_POST['email'] : '';



echo "<br>";
echo "<input name=\"email\" type=\"text\" class=\"form-control\" placeholder=\"Your email..\" value=\"".$txtemail."\" />";
echo "<br>";
echo "<input name=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Your name..\"value=\"".$txtname."\" />";
echo "<div class=\"text-center tag-head\">";
echo "<hr class=\"team_hr2 team_hr_left2 hr_gray\"/>";
echo "<div class=\"txt_dark text-center\">OR</div>";
echo "<hr class=\"team_hr2 team_hr_right2 hr_gray\"/>";
echo "<div class=\"clearfix\"></div>";
echo "</div>";
echo "<a href=\"fbconfig.php\"><img src=\"images/login-fb.png\" width=\"100%\" alt=\"facebook-login\" /></a>";
echo "<button class=\"btn btn-lg btn-orange\" name=\"btnSave\" type=\"submit\" style=\"cursor:pointer;margin-top:20px;float:right;\">Subscribe</button>";

echo "</div>";

echo "</form>";

?>



    