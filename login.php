<?php
	include 'db/koneksi.php';
	
	sudahLogin();
	
	if($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM login_tbl WHERE username = '$username' AND password = SHA1('$password')";
        
        $data = $mysql->query($sql) or die($mysql->error);
        
        if($data->num_rows !=0) {
            $row = mysqli_fetch_object($data);
            $_SESSION['username'] = $row->username;
            $_SESSION['level'] = $row->level;
            header('location:home.php');
        } else {
            $error = "Username atau password salah";
        }

    }
		include 'views/v_index.php';