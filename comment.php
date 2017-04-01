<?php
	include'db/koneksi.php';
	
	@$username = $_SESSION['username'];
	$id = @$_GET['id'];
	
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$comment= $_POST['comment'];
		
		$sqli="INSERT INTO `profil_tbl`(`username`, `comment`) VALUES('$username','$comment')";
		$result = $mysql->query($sqli);
		
		if($result){
			$success = "Berhasil Memperbarui";
			header('location:home.php');
		}else{
			$error = "Error : ".$mysql->error;
			header('location:home.php');
		}
	}
?>