<?php
	include 'db/koneksi.php';
	
	cekLogin();
	$username = $_SESSION['username'];
	$user = $_SESSION['username'];
	$level = @$_SESSION['level'];
	$pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache');
	
	$sql = "SELECT `foto` FROM `user_tbl` WHERE username = '$username'";
	$result = $mysql->query($sql) or die($mysql->error);
	$hsl = mysqli_fetch_object($result);
	$path = "./media/images/profile";
	
	$hr=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
	$hari_ini=date("w");
	$hari_ini=$hr[$hari_ini];
	$jam = date("H:i:s");

	$tgl=date("d/m/Y");
	@$foto = $path."/".$hsl->foto;
	@$komentar = $_POST["komentar"];
	
	if($level == 1 && !empty ($komentar)){
		$user = $_SESSION['username']."<font color=#d32f2f> Sang Moderator</font>";
		$komentar = "<font color=#d32f2f>".$_POST["komentar"]."</font>";
	}
	
	if($pageRefreshed == 0){
		if(isset($komentar) && !empty ($komentar)){
			$fp = fopen("./lib/chatlogs.txt","a+");
			fputs($fp,"$hari_ini|$tgl|$jam|$user|$foto|$komentar\n");
			fclose($fp);
		}
	} 
	
	include 'views/v_chat.php';
?>