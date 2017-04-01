<?php
    session_start();
	
	$komentar = "<font color=#d32f2f>".$_SESSION['username']."</font> Telah Meninggalkan Ruangan";
	$foto = "./media/images/admin.gif";
	
	$fp = fopen("./lib/chatlogs.txt","a+");
		  fputs($fp,"|||Console|$foto|<i>$komentar.</i>\n");
		  fclose($fp);
	
    session_destroy();
    header('location: login.php');