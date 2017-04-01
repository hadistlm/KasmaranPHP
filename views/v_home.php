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
		<script type="text/javascript" src="<?php echo base_url()?>/media/js/masonry.pkgd.min.js"></script>
	</head>
	
	<script type="text/javascript">
	$(document).ready(function() {
		$('.grid').masonry({
			itemSelector: '.grid-item',
			columnWidth: 400
		});
	});
	</script>

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
							<li><a href="#">Home</a></li>	
							<li><a href="profile.php?id=<?php echo $username;?>">Profile</a></li>										
							<li><a href="chat.php">Chatting</a></li>
							<?php if($level=="1") { ?>
								<li><a href="admin.php">Admin Panel</a></li>
							<?php } ?>
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#/available#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									<?php echo $username;?> <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="chat.php">Join Chat<span class="indicator"><i class="fa fa fa-comments-o"></i></span></a></li>
									<li><a href="edit.php?usr=<?php echo $username;?>"> Edit Profile <span class="indicator"><i class="fa fa-edit"></i></span></a> </li>
									<?php if($level=="1"){ ?>
										<li><a href="admin.php">Admin Panel<span class="indicator"><i class="fa fa-gears"></i></span></a></li>
									<?php } ?>
									<li class="divider" role="separator"></li>
									<li><a href="logout.php">Logout<span class="indicator"><i class="fa fa-sign-out"></i></span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			
				<div class="col-md-12 text-center">
					<h1 class="animated bounceInRight"> Home </h1>
					<p class="animated bounceInLeft"> Find Your Passion Here </p>
				</div>
			</div>
		</div>
		
		<div class="grid gr">
		  <div class="grid-item">
			<?php while($row = mysqli_fetch_object($result)){ ?>
				<div class="grid-item grid-item--width2">
					<div class="data-profil">
						<div class="data-caption">
							<h3><?php echo $row->nama_lengkap?></h3>
							<p> <?php echo $row->intro;?></p>
							<a href="profile.php?id=<?php echo $row->username ?>"><span class="fa fa-user fa-2x"></span></a>
							<a href="#"><span class="fa fa-envelope fa-2x"></span></a>
						</div>
						<img src="<?php echo base_url()?>/media/images/profile/<?php echo $row->foto?>" width="100px"/>
					</div>
				</div>
			<?php } ?>
		  </div>
		</div>
	</body>
</html>
			