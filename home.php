<?php

	include 'db/koneksi.php';
	
	cekLogin();
	$username = $_SESSION['username'];
	
	$sql = "SELECT * FROM user_tbl ORDER BY RAND()";
    $result = $mysql->query($sql) or die($mysql->error);
	
	/* $sql2 = "SELECT * FROM user_tbl WHERE username = '$id'";
    $result2 = $mysql->query($sql2) or die($mysql->error);
	*/
    $level = @$_SESSION['level'];
	
	include 'views/v_home.php';
?>