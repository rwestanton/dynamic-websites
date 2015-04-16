<?php include("assets/setup.php"); ?>

<!DOCTYPE html>
<html>

	<head>
		
		<!-- Time for some CONTENATION (which is done using a preriod: "." -->
		<!-- Produces the same result as <?php //echo $site_title ?> " | " <?php //echo $page_title; ?> -->
		<!-- only it is more efficient -->
		<title><?php echo $site_title. " | " .$page_title; ?></title>

		<meta charset="utf-8">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scake=1.0">
		<meta name="description" content="">
		<meta name="author" content="Robert Stanton">
	
		<?php include("assets/css/css-links.php"); ?>

		<?php include("assets/js/js-scripts.php"); ?>
	
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->

	</head>

	<body class='bgc1'>

		<!-- NAVBAR & MOBILE MENU -->
		<nav class="opacity navbar navbar-fixed-top yamm bgc2">
			<div class="container-fluid">
				<div class="navbar-header">
					<!-- Social media icons -->
					<div class="social pull-right">
						<a href="">
							<img src="assets/imgs/social/twitter.png" alt="">
						</a>
						<a href="">
							<img src="assets/imgs/social/facebook.png" alt="">
						</a>
						<a href="">
							<img src="assets/imgs/social/instagram.png" alt="">
						</a>
					</div>
					
					<!-- LOGO -->
					<a class="navbar-brand" href="index.php">
						<span class="big">Calcagno</span>
						<span class="slogan">Keeping dancers agile since 1965</span>
						<span class="small">C</span>
					</a>
				</div>

				<!-- MOBILE MENU BUTTON -->
				<div class="col-sm-12">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				
				<!-- NAVBAR (LARGE-SCREENS) -->
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav">
						<li class="active dropdown yamm-fw bc1"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">Women</a>
							<ul class="dropdown-menu list-inline">
								<li><a href="women-wear.html">Ballet Wear</a></li>
								<li><a href="women-shoes.html">Ballet Shoes</a></li>
								<li><a href="women-accessories.html">Ballet Accessories</a></li>
							</ul>
						</li>
						<li class="dropdown yamm-fw bc2"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">Men</a>
							<ul class="dropdown-menu list-inline">
								<li><a href="men-wear.php">Ballet Wear</a></li>
								<li><a href="men-shoes.php">Ballet Shoes</a></li>
								<li><a href="men-accessories.php">Ballet Accessories</a></li>
							</ul>
						</li>
						<li class="dropdown yamm-fw bc3"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">New</a></li>
						<li><a href="" role="button">Contact</a></li>
						<li><a href="" role="button">Our Story</a></li>
						<li><a href="" role="button">Blog</a></li>
					</ul>
				</div> <!-- navbar-collapse -->
			</div> <!-- navbar container -->
		</nav> <!-- navbar -->

		<!-- PAGE CONTENT -->
		<div class="container">
			<div id="landing-pages">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="col-md-4 margin-bottom">
							<div class="silo item1 margin-bottom">
								<a class="trans-opacity" href="">
									<h3>New</h3>
								</a>
							</div>
							<div class="silo item2">
								<a class="trans-opacity" href="">
									<h3>Shoes</h3>
								</a>
							</div>
						</div>
						<div class="col-md-8">
							<div class="silo item3">
								<a class="trans-opacity" href="">
									<h2>Performance of the week!</h2>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- page content -->
	
		<footer id="footer" class="bgc1">
			<div class="container-fluid">

				<!-- Social media icons -->
				<div class="social">
				    <div class="col-xs-3 pull-right">
				        <a href="">
				            <img src="assets/imgs/social/twitter.png" alt="">
				        </a>
				        <a href="">
				            <img src="assets/imgs/social/facebook.png" alt="">
				        </a>
				        <a href="">
				            <img src="assets/imgs/social/instagram.png" alt="">
				        </a>
				    </div>
				</div>

				<div class="col-sm-3">
					<div class="list-group">
						<h6>Fem. Shop</h6>
						<a href="" class="list-group-item active">Women</a>
						<a href="" class="list-group-item active">Women's Wear</a>
						<a href="" class="list-group-item active">Women's Shoes</a>
						<a href="" class="list-group-item active">Women's Accessories</a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="list-group">
						<h6>Male Shop</h6>
						<a href="" class="list-group-item active">Men</a>
						<a href="" class="list-group-item active">Men's Wear</a>
						<a href="" class="list-group-item active">Men's Shoes</a>
						<a href="" class="list-group-item active">Men's Accessories</a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="list-group">
						<h6>Purchases</h6>
						<a href="" class="list-group-item active">Order Status</a>
						<a href="" class="list-group-item active">Delivery Info.</a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="list-group">
						<h6>Contact</h6>
						<a href="" class="list-group-item active">Contact us</a>
						<a href="" class="list-group-item active">Stores</a>
						<a href="" class="list-group-item active">Careers</a>
						<a href="" class="list-group-item active">Sponsorship</a>
					</div>
				</div>

				<div class="col-lg-12 copyright">
                	<p>Copyright &copy; Calcagno 2015</p>
            	</div>
			</div>
		</footer> <!-- footer -->

		<!-- LIVE RELOAD -->
	    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

	</body>

</html>