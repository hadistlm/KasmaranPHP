<?php
	include 'db/koneksi.php';
	
	$user_id = @$_GET['user'];
	$komentar = "<font color=#d32f2f><b>$user_id</b></font> Baru Saja Menjadi <i><b>Rakjat Jelata</b></i>";
	$foto = "./media/images/admin.gif";
	
	if(!empty ($user_id)){
		$sql = "UPDATE `login_tbl` SET level = 2 WHERE username = '$user_id'";
		$result = $mysql->query($sql) or die($mysql->error);
	}
	if($result) {
            flash('success',"Berhasil Demote Akun");
			$fp = fopen("./lib/chatlogs.txt","a+");
				  fputs($fp,"|||Console|$foto|<i>$komentar.</i>\n");
				  fclose($fp);
			header('location:admin.php');
        } else {
            flash('error',"Error : ".$mysql->error);
			header('location:admin.php');
        }
	
	include 'admin.php';
?>