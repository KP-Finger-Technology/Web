<?php //session_start(); 
//echo 'a';
include "conn.php";
if($_GET) {
	if(isset($_POST['btnSave'])){
		echo 'b';
		# Validasi form, jika kosong sampaikan pesan error
		$message = array();
		if (trim($_POST['txtname'])=="BLANK") {
			$message[] = "can't be empty !";		
		}
		if (trim($_POST['txtemail'])=="BLANK") {
			$message[] = "can't be empty !";		
		}
		if (trim($_POST['txtcontent'])=="BLANK") {
			$message[] = "can't be empty !";		
		}
		
		# Baca Variabel Form
		$txtname	= $_POST['txtname'];
		$txtname	= str_replace("'","&acute;",$txtname);
		$txtemail	= $_POST['txtemail'];
		$txtemail	= str_replace("'","&acute;",$txtemail);
		$txtcontent	= $_POST['txtcontent'];
		$txtcontent	= str_replace("'","&acute;",$txtcontent);
									
		# TIDAK ADA ERROR, Jika jumlah error message tidak ada, simpan datanya
		# SIMPAN DATA KE DATABASE
		if(count($message)==0){			
			$qrySave=mysql_query("INSERT INTO comment SET commentid='', name='$txtname', email='$txtemail', content='$txtcontent'")
				or die ("Gagal query".mysql_error());
			if($qrySave){
				echo 'c';
				echo "<meta http-equiv='refresh' content='0; url=index.php'>";
			}
			exit;
		}
		# JIKA ADA PESAN ERROR DARI VALIDASI
		// (Form Kosong, atau Duplikat ada), Ditampilkan lewat kode ini
		if (! count($message)==0 ){
            echo "<div class='mssgBox'>";
			echo "<img src='img/attention.png' class='imgBox'> <hr>";
				$Num=0;
				foreach ($message as $indeks=>$pesan_tampil) { 
				$Num++;
					echo "&nbsp;&nbsp;$Num. $pesan_tampil<br>";	
				} 
			echo "</div> <br>"; 
		}
	} // Penutup POST
}

?>