<?php
if ($_SESSION['userid'])
{
include "conn.php";
	if($_GET) {
		if(empty($_GET['Kode'])){
			echo "<b>Data yang dihapus tidak ada</b>";
		}
		else {
			$sqlDelete = "DELETE FROM blog WHERE blogid='".$_GET['Kode']."'";
			$qryDelete = mysql_query($sqlDelete, $koneksi) or die ("Eror hapus data".mysql_error());
			if($qryDelete){
				$qryLogs=mysql_query("INSERT INTO logs SET logid='', userid='".$_SESSION['userid']."', trans='DELETE', tab='Blog', des='Data telah dihapus', servicetime='".$tanggal."'");
				echo "<meta http-equiv='refresh' content='0; url=?page=blog'>";
			}
		}
	}
}else{
	echo "<script> document.location.href='akses.php?go=session'; </script>";
}
?>