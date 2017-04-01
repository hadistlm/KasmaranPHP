<?php
	include 'db/koneksi.php';
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id_user		 = $_POST['id_user'];
        $username        = $_POST['username'];
        $password        = $_POST['password'];
        $nama_lengkap    = $_POST['nama_lengkap'];
        $email      	 = $_POST['email'];
        $tgl_lahir       = $_POST['tgl_lahir'];
        $alamat          = $_POST['alamat'];
        $gender          = $_POST['gender'];
		
		$foto			 = $_FILES['foto'];
		
		if(!empty($foto) AND $foto['error'] == 0) {
			$path = './media/images/profile/';
			$upload = move_uploaded_file($foto['tmp_name'], $path . $foto['name']);
			
			if(!$upload){
				flash('error', "Upload file gagal");
				header('location:register.php');
			}
			
			$file = $foto['name'];
		}
		
		// $sql = "INSERT INTO user_tbl (username,password,nama_lengkap,email,tgl_lahir,alamat,gender,foto) VALUES 
        // ('$username',SHA1('$password'),'$nama_lengkap','$email','$tgl_lahir','$alamat', '$gender' , '$file')";
		
		$sql1 = "INSERT INTO user_tbl (id_user,username,password,nama_lengkap,email,tgl_lahir,alamat,gender,foto) VALUES 
        ('$id_user','$username',SHA1('$password'),'$nama_lengkap','$email','$tgl_lahir','$alamat', '$gender', '$file')";
		
		$sql2 = "INSERT INTO login_tbl(username,password,id_user,level) values('$username',SHA1('$password'),'$id_user','2')";
		
		
		$result = $mysql->query($sql1);
		$result2 = $mysql->query($sql2);
        
        if($result && $result2) {
            $success = "Data Berhasil Ditambahkan";
        }
        else {
            $error = "Error : ".$mysql->error;
        }
		header("location:home.php");
    }
	
	include 'views/v_reg.php';
?>