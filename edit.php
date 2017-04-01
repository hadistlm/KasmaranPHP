<?php
	include 'db/koneksi.php';
	
	@$usernames = $_SESSION['username'];
	
	$username = $_GET['usr'];
	
	
	if(!empty($username)){
		$sql = "SELECT * FROM user_tbl WHERE username = '$username'";
		$data = $mysql -> query($sql) or die($mysql->error);
		$result = mysqli_fetch_object($data);
	} else {
		header('location:edit.php');
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$password 		= $_POST['password'];
		$nama_lengkap 	= $_POST['nama_lengkap'];
		$email 			= $_POST['email'];
		$tgl_lahir 		= $_POST['tgl_lahir'];
		$alamat 		= $_POST['alamat'];
		$intro			= $_POST['desc'];
		
	$sql1 = "UPDATE user_tbl SET
				password = SHA1('$password'),
				nama_lengkap = '$nama_lengkap',
				email = '$email',
				tgl_lahir = '$tgl_lahir',
				intro = '$intro',
				alamat = '$alamat'
				WHERE username = '$usernames'";
	$sql2 = "UPDATE login_tbl set password = SHA1('$password') where username = '$usernames'";
			
	$result = $mysql->query($sql1);
	$result2 = $mysql->query($sql2);
	
		if($result && $result2){ 
			$success= "Data berhasil diubah";
			
		}else {
			$error = "Error : ".$mysql->error;
			echo "<script>alert('$sql1 dan $sql2');</script>";
		}
	header('location:home.php');
	}
	include 'views/v_edit.php'; 