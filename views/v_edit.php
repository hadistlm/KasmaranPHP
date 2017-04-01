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
	
	<body>
		<div class="container-fluid">
			<div class="row header">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"> KASMARAN </a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="home.php">Home</a></li>	
							<li><a href="profile.php?id=<?php echo $username;?>">Profile</a></li>					
							<li><a href="chat.php">Chatting</a></li>					
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#/available#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									<?php echo $username;?> <span class="caret"></span>
								</a>
								<?php if($username != "Guest"){?>
								<ul class="dropdown-menu" role="menu">
									<li><a href="chat.php">Join Chat<span class="indicator"><i class="fa fa fa-comments-o"></i></span></a></li>
									<li class="divider" role="separator"></li>
									<li><a href="logout.php">Logout<span class="indicator"><i class="fa fa-sign-out"></i></span></a></li>
								</ul>
								<?php } ?>
							</li>
						</ul>
					</div>
				</nav>
				
				<div class="col-md-12 text-center">
					<h1 class="animated lightSpeedIn"> Change Profile </h1>
					<p class="animated fadeInLeftBig"> Become Your New One! </p>
				</div>
			</div>
		
			<div class="container">
			<div class="col-md-6 col-xs-12 col-md-offset-3 text-center form-edit">
						<form action="edit.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group">
										<input type="hidden" name="id_user">
								<div class="col-sm-10 col-sm-offset-1">
									<div class="input-group coba">
										
										<input type="text" name="username" class="form-control form-in hidden" placeholder="Username">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-1">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-key"></i></span>
										<input type="password" id="pwd"  name="password" class="form-control form-in" placeholder="* * * * * * * * * *" required>
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
										<input type="text" id="pwd" name="nama_lengkap" class="form-control form-in" value="<?php echo @$result->nama_lengkap?>" placeholder="Nama Lengkap">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-1">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										<input placeholder="yourname@yourmail.com" type="text" name="email" value="<?php echo @$result->email?>" class="form-control form-in">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-1">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
										<input type="date" name="tgl_lahir" value="<?php echo @$result->tgl_lahir?>" class="form-control form-in">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-1">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
										<input type="text" name="alamat" value="<?php echo @$result->alamat?>" class="form-control form-in">
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-10 col-sm-offset-1">
									<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
										<textarea name="desc" class="form-control form-in"> <?php echo @$result->intro?></textarea>
									</div>
								</div>
							</div>
							
							<div class="col-sm-8 col-sm-offset-2">
								<input type="submit" class="btn btn-success btn-submit" value="Edit">
							</div>
						</form>
					</div>
			</div>
			</div>
	</body>
</html>