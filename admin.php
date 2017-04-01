<?php

	include 'db/koneksi.php';
	
	cekLogin();
	$username = $_SESSION['username'];
	
	$sql = "SELECT * FROM user_tbl";
    $result = $mysql->query($sql) or die($mysql->error);

    $success = flash('success');
    $error = flash('error');
		
    @$level = @$_SESSION['level'];
	
	include 'views/v_admin_index.php';
?>