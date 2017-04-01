<?php
	include 'db/koneksi.php';
	
	@$username = $_SESSION['username'];
	
	$id = @$_GET['id'];
	
	/* if(empty ($username)){
		$username = "Guest";
		$sql = "SELECT * FROM `user_tbl`";
	} */	
	$sql = "SELECT * FROM user_tbl WHERE username = '$id'";
    $result = $mysql->query($sql) or die($mysql->error);
	
	include 'views/v_profile.php';
?>