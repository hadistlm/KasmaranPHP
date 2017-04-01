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
	<?php if($level=="1") { ?>
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
							<li><a href="#">Admin Panel</a></li>					
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#/available#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									<?php echo $username;?> <span class="caret"></span>
								</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="chat.php">Join Chat<span class="indicator"><i class="fa fa fa-comments-o"></i></span></a></li>
									<li><a href="edit.php?usr=<?php echo $username;?>"> Edit Profile <span class="indicator"><i class="fa fa-edit"></i></span></a> </li>
									<li><a href="#">Admin Panel<span class="indicator"><i class="fa fa-gears"></i></span></a></li>
									<li class="divider" role="separator"></li>
									<li><a href="logout.php">Logout<span class="indicator"><i class="fa fa-sign-out"></i></span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			
				<div class="col-md-12 text-center">
					<hr width="80%" />
					<h1 class="animated tada"> WELCOME <?php echo $username;?> </h1>
					<hr width="80%" />
				</div>
			</div>
		</div>
		
		<div class="container table-isi">
			<?php if(!empty($success)) {?>
			<div class="col-lg-12">
				<div class="alert alert-success"><?php echo $success ?></div>
			</div>
			<?php } ?>
			
			<?php if(!empty($error)) {?>
			<div class="col-lg-12">
				<div class="alert alert-danger"><?php echo $error ?></div>
			</div>
			<?php } ?>
			<div class="row text-center">
				<div class="col-md-12 table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th><i class="fa fa-image fa-3x"></i></th>
								<th>ID User</th>
								<th>Username</th>
								<th>Nama Lengkap</th>
								<th>Email</th>
								<th>Tanggal Lahir</th>
								<th>Alamat</th>
								<th>Gender</th> 	
								<th><i class="fa fa-exclamation-triangle"></i></th>
							</tr>
						</thead>
						<tbody>
							<?php while($row = mysqli_fetch_object($result)) { ?>
							<tr>
								<td>
									<img class="img-rounded" src="<?php echo base_url();?>/media/images/profile/<?php echo $row->foto;?>" alt="" width="100" height="100"/>
								</td>
								<td><?php echo $row->id_user ?></td>
								<td><?php echo $row->username ?></td>
								<td><?php echo $row->nama_lengkap ?></td>
								<td><?php echo $row->email ?></td>
								<td><?php echo $row->tgl_lahir ?></td>
								<td><?php echo $row->alamat ?></td>
								<td><?php echo $row->gender ?></td>
								<td>
									<a href="promote.php?user=<?php echo $row->username ?>" class="btn btn-info"><i class="fa fa-level-up"></i></a>
									<a href="elect.php?user=<?php echo $row->username ?>" class="btn btn-warning"><i class="fa fa-level-down"></i></a>
									<a href="delete.php?id_user=<?php echo $row->id_user ?>" class="btn btn-danger"><i class="fa fa-ban"></i></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<div class="col-md-12 table-bottom">
						<p><i class="fa fa-copyright"></i> 2016 XI-RPL3</p>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</body>
</html>
			