<?php
    include 'db/koneksi.php';
	
    @$level = @$_SESSION['level'];
	
    $id_user = @$_GET['id_user'];
    
    if(!empty ($id_user)){
    $sql = "DELETE FROM user_tbl WHERE id_user = '$id_user'";
        
    $data = $mysql->query($sql) or die($mysql->error);
    if($data) {
            flash('success',"Data Berhasil Dihapus");
        } else {
            flash('error',"Error : ".$mysql->error);
        }
        header('location:admin.php');
    } else {
        header('location:admin.php');
    }

    include 'admin.php';