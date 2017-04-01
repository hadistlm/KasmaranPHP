<?php
	include 'lib/lib.php';
	
	$komentar = "<font color=#d32f2f><b>".$_SESSION['username']."</b> Sang Moderator</font> Merefresh Chat";
	$foto 	  = "./media/images/admin.gif";

	unlink('./lib/chatlogs.txt');
	$fp = fopen("./lib/chatlogs.txt","a+");
		  fputs($fp,"|||Console|$foto|<i>$komentar.</i>\n");
		  fclose($fp);
	header("location:chat.php");
?>