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
	
	<!--
	<script>
		function auto_load(){
			$.ajax({
			  url: "./lib/chatlogs.txt",
			  cache: false,
			  success: function(data){
				 $(".komentar").html(data);
			  } 
			});
		}
		$(document).ready(function(){
			auto_load();
		});
		setInterval(auto_load,2000);
	</script>
	-->
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
							<li><a href="#">Chatting</a></li>
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
									<li><a href="#">Join Chat<span class="indicator"><i class="fa fa-comments-o"></i></span></a></li>
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
					<h1 class="animated rotateInDownRight"> Chatting Lounge </h1>
					<p class="animated rotateInUpLeft"> Chat With Your Own Risk! </p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="col-md-6 col-md-offset-3 kolom-komentar">
				<div class="row">
					<div class="col-md-12 head-komentar">
						<h3>Made With <i class="fa fa-heart"></i> By </h3>
					</div>
					<div class="col-md-12 komentar">
					<?php
						$fp = fopen("./lib/chatlogs.txt","r");
	
						while ($isi = fgets($fp,250)){
							$pisah = explode("|",$isi);
					?>
						<div class="col-md-12 chat-tab">
						<hr>
							<?php
							$senyumlebar = str_replace(":D", "<img src='./media/images/emoticons/smile.png' width='19' height='19'>", $pisah[5]);
							$pacman = str_replace(":v", "<img src='./media/images/emoticons/pacman.png' width='19' height='19'>", $senyumlebar);
							$koala = str_replace(":of", "<img src='./media/images/emoticons/koala.png' width='19' height='19'>", $pacman);
							$wink = str_replace(";)", "<img src='./media/images/emoticons/wink.png' width='19' height='19'>", $koala);
							$kiss = str_replace(":*", "<img src='./media/images/emoticons/kiss.png' width='19' height='19'>", $wink);
							$angry = str_replace(":[", "<img src='./media/images/emoticons/angry.png' width='19' height='19'>", $kiss);
							$tongue = str_replace(":p", "<img src='./media/images/emoticons/tongue.png' width='19' height='19'>", $angry);
							
							// End harus ada di paling bawah!
							$end = str_replace(":end", "<img src='./media/images/emoticons/end.png' width='19' height='19'>", $tongue);
							?>
							<div class="col-md-4 pull-right"><?php echo $pisah[0]?> <?php echo $pisah[1]?> <?php echo $pisah[2]?><br></div>
							<div class="col-md-3">
								<img class="img-rounded" width="100" src="<?php echo $pisah[4]?>" /></img>
							</div>
							<div class="col-md-9 col-offset-3">
								<div class="chat-box">
									<font color="#9e9e9e"><?php echo $pisah[3]?></font>, Bilang : <br />
									<font color="black"><?php echo $end;?> </font>
								</div>
							</div>
						</div>
					<?php } ?>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12">
						<form method="post" action="chat.php"/>
							<div class="form-group">
								<input type="text" name="komentar" size="30" class="form-control" placeholder="Komentar Anda" required />
							</div>
							
							<div class="btn-group">
								<button type="submit" class="btn btn-info btn-md">Kirim <span class="glyphicon glyphicon-send"></span></button>
								<button type="reset" class="btn btn-warning btn-md">batal <span class="glyphicon glyphicon-refresh"></span></button>
								<?php if($level == 1){?>
									<a href="refresh.php" class="btn btn-danger btn-md pull-right"><i class="fa fa-refresh"></i></a>
								<?php } ?>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</body>
</html>
			