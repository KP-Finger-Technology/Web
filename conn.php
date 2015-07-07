<?php
//ini_set('display_errors',FALSE);
$host="localhost";
$user="root";
$pass=""; //vW8GCFRyNXyScKLp
$db="k1254269_fingertech";
//$entries=3;

$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);

$tanggal=date("d-m-Y H:i:s", time()+60*60*5);
if (!$koneksi)
{
	echo "Gagal Koneksi Database MySQL!";
}

?>
