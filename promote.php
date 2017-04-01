<?php
	include 'db/koneksi.php';
	
	$user_id = @$_GET['user'];
	$komentar = "<font color=#d32f2f><b>".$_SESSION['username']."</b></font> Baru Saja Mengangkat <font color=#d32f2f>$user_id</font> Sebagai Utusan Dewa, Ucapin Selamat Kepadanya";
	$foto = "./media/images/admin.gif";
	
	if(!empty ($user_id)){
		$sql = "UPDATE `login_tbl` SET level = 1 WHERE username = '$user_id'";
		$result = $mysql->query($sql) or die($mysql->error);
	}
	if($result) {
            flash('success',"Berhasil Promote Akun");
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