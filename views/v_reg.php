<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Project TA </title>
		
		<!-- Script & CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>/media/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>/media/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>/media/css/animate.css">
		<link rel="stylesheet" href="<?php echo base_url()?>/media/css/style.css">
		
		<script type="text/javascript" src="<?php echo base_url()?>/media/js/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>/media/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>/media/js/script.js"></script>
	</head>
	
	<style>
		.reg{
			background-image: url("<?php echo base_url()?>/media/images/2015.png") no-repeat;
			background-size:cover;
			width: 100%;
			height:auto;
		}
	</style>
	
	<body class="reg">
		<div class="navbar">
			<div class="container-fluid">
				<div class="col-md-1 col-xs-1 top-left text-center">
					<a href="index.php"><i class="fa fa-angle-left fa-5x"></i></a>
				</div>
				<div class="col-md-4 col-xs-4 left">
					<h1 class="animated bounceInDown"> Kasmaran </h1>
				</div>
				<div class="col-md-4 right text-center animated bounceInDown">
				<h3 class="left"> Follow Us On </h3>
					<div class="sosial-media">
						<a href="#"><i class="fa fa-steam-square fa-2x"></i></a> 
						<a href="#"><i class="fa fa-facebook-official fa-2x"></i></a> 
						<a href="#"><i class="fa fa-envelope fa-2x"></i></a> 
						<a href="#"><i class="fa fa-skype fa-2x"></i></a>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row in-top">
				<div class="col-md-8 col-md-offset-2 text-center desc">
					<h1 class="animated slideInLeft"><strong>Kasmaran</strong> Registration Form</h1>
					<p class="animated slideInRight"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. </p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6">
					<img/>
				</div>
				
				<div class="col-sm-6 form-bag animated zoomIn">
					<div class="col-md-12 form-top">
						<div class="col-md-8 col-xs-8">
							<h2 class="text-left" style="margin-bottom:25px;">Register Here</h2>
							<p> Gabung Sekarang Juga Bersama yang Lain </p>
						</div>
						<div class="col-md-4 col-xs-4 form-top-right">
							<i class="fa fa-pencil fa-3x"></i>
						</div>
					</div>
					
					<div class="col-md-12 col-xs-12 text-center">
					<hr>
						<form action="register.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
										<input type="hidden" name="id_user">
								<div class="col-sm-10 col-sm-offset-1">
									<div class="input-group coba">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" name="username" class="form-control form-in" placeholder="Username">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-1">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-key"></i></span>
										<input type="password" id="pwd" name="password" class="form-control form-in" placeholder="Password">
										<span class="input-group-btn" id="basic-addon2">
											<button class="btn btn-default form-in passthru" type="button" onclick="if(password.type=='text')password.type='password'; else password.type='text';"><i class="glyphicon glyphicon-eye-open"> </i></button>
										</span>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-1">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-tag"></i></span>
										<input type="text" id="pwd" name="nama_lengkap" class="form-control form-in" placeholder="Nama Lengkap">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-1">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										<input placeholder="yourname@yourmail.com" type="text" name="email" class="form-control form-in">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-1">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
										<input type="date" name="tgl_lahir" class="form-control form-in">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-1">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
										<input type="text" name="alamat" class="form-control form-in">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-1">
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-venus-mars"></i></span>
										<select name="gender" class="form-control form-in" id="sel1">
											<option value="NULL"></option>
											<option value="Pria">Male</option>
											<option value="Wanita">Female</option>
										</select>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2">Photo</label>
								<div class="col-sm-10">
									<input type="file" name="foto">
								</div>
							</div>
							
							<div class="col-sm-8 col-sm-offset-2">
								<input type="submit" class="btn btn-success btn-submit" value="Sign Up">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>