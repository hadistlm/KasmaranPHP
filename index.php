<?php
	include 'db/koneksi.php';
	
	$level = @$_SESSION['level'];
	
	include 'views/v_index.php';
?>