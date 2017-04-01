<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Project TA </title>
		
		<!-- Script & CSS -->
		<link rel="stylesheet" href="<?php echo base_url()?>/media/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>/media/css/onepage-scroll.css" />
		<link rel="stylesheet" href="<?php echo base_url()?>/media/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>/media/css/animate.css">
		<link rel="stylesheet" href="<?php echo base_url()?>/media/css/flexslider.css">
		<link rel="stylesheet" href="<?php echo base_url()?>/media/css/style.css">
		
		<script type="text/javascript" src="<?php echo base_url()?>/media/js/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>/media/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>/media/js/jquery.onepage-scroll.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>/media/js/jquery.flexslider.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>/media/js/script.js"></script>
	</head>
	
	<style>
		.loading {
			background: #262626 url("<?php echo base_url()?>/media/images/loading-gif.gif") no-repeat center center;
			width: 100%;
			height:auto;
		}
		
		.one{
			background-image: url("<?php echo base_url()?>/media/images/1.jpg");
			background-size:cover;
			width: 100%;
			height:auto;
		}
		
		.two{
			background: #e8b968 url("<?php echo base_url()?>/media/images/2.png") no-repeat right 65px;
			background-size:47%;
			width: 100%;
			height:auto;
		}
		
		.four{
			background: #5b6869 url("<?php echo base_url()?>/media/images/3.png") no-repeat center;
			background-size:cover;
			width: 100%;
			height:auto;
		}
		.five{
			background: #5b6869 url("<?php echo base_url()?>/media/images/4.jpg") no-repeat center;
			background-size:cover;
			width: 100%;
			height:auto;
		}
		.sec1{
			background: transparent url("<?php echo base_url()?>/media/images/sec1.jpg")no-repeat right;
		}
		.sec2{
			background: transparent url("<?php echo base_url()?>/media/images/sec2.jpg")no-repeat center;
		}
		.sec3{
			background: transparent url("<?php echo base_url()?>/media/images/sec3.jpg") no-repeat center;
		}
	</style>
	
	<body class="loading">
		<div class="navigation">
			<div class="container-fluid">
			  <div class="row">
				<div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2">
				  <nav class="pull">
					<ul class="nav-top">
					  <li><a href="#" id="start"> Get Started <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
					  <li><a href="#" id="feat"> Features <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
					  <li><a href="#" id="testi"> Testimonial <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
					  <li class="nav-last"><a href="#" id="about"> About <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
					</ul>
				  </nav>
				</div>
			  </div>
			</div>
        </div>
		
		<div class="login-tab">
			<div class="container-fluid">
				<div class="row login-head">
					<div class="col-sm-6">
						<h2> Login </h2>
					</div>
					<div class="col-sm-1 pull-right">
						<a href="#" id="close"><i class="fa fa-times-circle-o fa-2x"></i></a>
					</div>
				</div>
				<div class="row login-body">
					<form action="login.php" method="POST" class="form-horizontal">
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
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-1">
								<div class="input-group">
									<input type="text" name="username" class="form-control" placeholder="Username"/>
									<span class="input-group-addon"> <i class="fa fa-user fa-2x"> </i> </span>
								</div>	
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-1">
								<div class="input-group">
									<input type="password" name="password" class="form-control" placeholder="Password"/>
									<span class="input-group-addon"> <i class="fa fa-key fa-2x"> </i> </span>
								</div>
							</div>
						</div>
						<div class="form-group login-bottom">
							<div class="col-sm-6 col-sm-offset-3">
								<button type="submit" class="btn btn-lg btn-block btn-success"><i class="glyphicon glyphicon-log-in"></i> Login </button>
							</div>
							<a href="register.php" class="regis"> Register? </a>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<div class="main">
			<section class="one">
				<div class="page-container">
					<div class="row">
						<div class="col-md-12 col-xs-11 text-right">
						  <a href="#"><i class="fa cal fa-navicon fa-3x nav_slide"></i></a>
						</div>
					</div>
					
					<div class="row wait">
						<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1 text-center">
							<h1 class="animated bounceInDown delay"> Kasmaran </h1>
							<p class="animated fadeInUp delay1">"Lonely is No More, Bergabunglah disini dan berkumpul bersama kami di Kasmaran."</p>
						</div>
					</div>
			
					<div class="row">
						<div class="col-md-8 col-lg-offset-2 col-xs-10 col-xs-offset-1 text-center">
							<a href="#" id="login" class="login-btn">Login!</a>
						</div>
					</div>
				</div>
			</section>
			
			<section class="two" id="start">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1 class="wp1"> Temukan Pasangan Anda Dengan Cara Tak Terduga </h1>
							<p class="wp2">Bergabunglah hanya di <b>Kasmaran</b> dan cari Pasangan yang sesuai dengan kriteriamu. Sudah 
							saatnya anda berubah jangan hanya berdiam diri saja, 
							carilah pasanganmu disini paling tidak mulailah untuk berkenalan dan menjadi teman.</p>
							
							<p class="wp2"> Banyak orang diluar sana yang mungkin cocok untuk anda, cepat dan jangan terlambat. Buat orang disekitarmu bangga
							akan dirimu, jangan ragu dan percayalah pada dirimu sendiri.
							 <b>Tunggu apa lagi? Ayo bergabung!</b></p>
							<a href="register.php" class="join-btn"> Gabung Sekarang!</a>
						</div>
					</div>
				</div>
			</section>
		
			<section class="three" id="feat">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1> Temukan Fitur Menarik Lainnya Hanya Ada Disini! </h1>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-10 col-xs-10 sec">
							<span> What's New? </span>
							<div class="badan wp3">
								<div class="box1 text-center">
									<center><img src="<?php echo base_url()?>/media/images/chat.png" class="pic"/></center>
									<h3> Chatting <h3>
									<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
									incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
								</div>
								<div class="box text-center">
									<center><img src="<?php echo base_url()?>/media/images/mail.png" class="pic"/></center>
									<h3> Direct Mail <h3>
									<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
									incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
								</div>
								<div class="box text-center">
									<center><img src="<?php echo base_url()?>/media/images/force.png" class="pic"/></center>
									<h3> Meet The Stormtrooper <h3>
									<p> May The Force Be With You</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="four" id="#">
				<div class="page-container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="slider">
								<ul class="slides">
									<li>
										<center><img src="<?php echo base_url()?>/media/images/ryu.png" class="pho"/></center>
										<h1> "Wah Nu Kieu Mah Tos Sanes Banyol" </h1>
									</li>
									<li>
										<center><img src="<?php echo base_url()?>/media/images/dan.png" class="pho"/></center>
										<h1> "Aya Maraneh Mah Urang rek Cicing Weh, Moal Ngomong!" </h1>
									</li>
									<li>
										<center><img src="<?php echo base_url()?>/media/images/ram.png" class="pho"/></center>
										<h1> "Mengenang 40 Hari Sehatnya Akang Ramdan" </h1>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="five" id="#">
				<div class="container-fluid">
					<div class="row header">
						<div class="col-md-12 text-center">
							<h1> About Us </h1>
							<p> Work Hard & Play Harder</p>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="slider1">
							<ul class="slides">
								<li>
									<div class="col-md-6 col-md-4 about sec1">
										<div class="cap">
											<h2> Fauzan Abdurrahman</h2>
											<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
											<a href="#"><span class="fa fa-ge fa-2x"></span></a>
										</div>
									</div>
									<div class="col-md-6 col-md-4 about sec2">
										<div class="cap">
											<h2> Gema Zalfa</h2>
											<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
											<a href="#"><span class="fa fa-ge fa-2x"></span></a>
										</div>
									</div>
									<div class="col-md-6 col-md-4 about sec3">
										<div class="cap">
											<h2> Hadist Laroibafi</h2>
											<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
											<a href="#"><span class="fa fa-ge fa-2x"></span></a>
										</div>
									</div>
								</li>
								
								<li>
									<div class="col-md-5">
										<div class="box-flat">
											<div class="box-isi warna"></div>
											<div class="col-md-12 box-cap">
												<h3 class="title"> Kasmaran </h3>
												<p class="title-isi"> Lorem ipsum dolor sit amet </p>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-md-offset-2 ket-box">
										<h2> Dimulai Dari Tugas Akhir </h2>
										<p> Apa Itu <strong>KASMARAN</strong>?. Adalah sebuha kencan online diprakarsai oleh tugas akhir yang amat banyak,dikerjakan oleh 3 orang
										demi nilai rapot, Udah Ituu aja!</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-md-1 col-md-offset-11 text-right control">
							<a href="prev" class="prev"><i class="fa fa-angle-left fa-4x"></i></a>
							<a href="next" class="next"><i class="fa fa-angle-right fa-4x"></i></a>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-2 col-md-offset-5 text-center back">
							<a href="#" id="back"><i class="fa fa-arrow-circle-down fa-4x down"></i></a>
						</div>
					</div>
				</div>
			</section>
		</div>
	</body>
</html>