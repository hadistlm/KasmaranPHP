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
							<?php if($level=="1") { ?>
								<li><a href="admin.php">Admin Panel</a></li>
							<?php } ?>							
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#/available#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									<?php echo $username;?> <span class="caret"></span>
								</a>
								<?php if($username != "Guest"){?>
								<ul class="dropdown-menu" role="menu">
									<li><a href="chat.php">Join Chat<span class="indicator"><i class="fa fa fa-comments-o"></i></span></a></li>
									<li><a href="edit.php?usr=<?php echo $username;?>"> Edit Profile <span class="indicator"><i class="fa fa-edit"></i></span></a> </li>
									<?php if($level=="1"){ ?>
										<li><a href="admin.php">Admin Panel<span class="indicator"><i class="fa fa-gears"></i></span></a></li>
									<?php } ?>
									<li class="divider" role="separator"></li>
									<li><a href="logout.php">Logout<span class="indicator"><i class="fa fa-sign-out"></i></span></a></li>
								</ul>
								<?php } ?>
							</li>
						</ul>
					</div>
				</nav>
				
				<div class="col-md-12 text-center">
					<h1 class="animated flipInX"> Profile </h1>
					<p class="animated flipInY"> Costumize Your Page Here! </p>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-4 col-lg-offset-1">
					<div class="col-md-12">
					<?php while($row = mysqli_fetch_object($result)){ ?>
						<div class="jumbotron" style="margin-top:8%;">
							<div class="text-center">
								<img src="<?php echo base_url()?>/media/images/profile/<?php echo $row->foto?>" alt="" class="img-circle" height="192px" width="200px"/>
								<h2> <?php echo $row->nama_lengkap;?> </h2>
								<?php if(!empty($row->intro)){?>
									<p><i>"<?php echo $row->intro;?>"</i></p>
								<?php } ?>
								<?php if(empty($row->intro)){?>
									<p><i>"Agan Ini Masih Malu-malu untuk perkenalin Dirinya"</i></p>
								<?php } ?>
							</div>
							<p> <i class="fa fa-envelope-o"> </i> <?php echo $row->email;?> </p>	
							<p> <i class="fa fa-home"> </i> <?php echo $row->alamat;?> </p>
							<p> <i class="fa fa-venus-mars"> </i> <?php echo $row->gender;?> </p>
							<?php if($username == ($row->username)){?>
							<center><a href="edit.php?usr=<?php echo $username;?>" class="btn btn-primary" role="button"> Edit Profile </a></center>
							<?php } ?>
						</div>
					<?php } ?>
					</div>
				</div>
				
				<div class="col-lg-6">
					<div class="row" style="margin-top:5%;">
						<form action="comment.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
							<div class="form-group com">
								<div class="label-group">
									<label for="comment">Comment:</label>
									<textarea class="form-control" rows="5" name="comment" style="resize: none;" placeholder="Apa Yang Anda Pikirkan?"></textarea>
								</div>
								
								<div class="btn-group">
									<button type="submit" class="btn btn-info btn-md"> Post <span class="glyphicon glyphicon-send"></span></button>
									<button type="reset" class="btn btn-warning btn-md"> Batal <span class="glyphicon glyphicon-refresh"></span></button>
								</div>
							</div>
						</form>
					</div>
					
					<div class="row com">
					adakwjdnakwdnajw
					</div>
				</div>
			</div>
		</div>
	</body>
</html>