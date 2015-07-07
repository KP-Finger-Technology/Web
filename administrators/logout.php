<?php session_start();
if ($_SESSION['userid'])
{
	/*$_SESSION['userid'];
	$_SESSION['username'];
	$_SESSION['tanggal'];
	$_SESSION['password'];
	$_SESSION['position'];*/
	session_destroy();
	echo "<script> document.location.href='index.php'; </script>";
	
}else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>