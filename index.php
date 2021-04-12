<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TheMultiStore</title>
  
   <!-- FAVICON -->
   <link href="assets/images/MultistoreIcon.png" rel="shortcut icon">
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="assets/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="assets/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="assets/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="assets/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<?php

	// write query
	session_start();

	if (isset($_GET['logout'])){
		session_destroy();
		header('Refresh: 0; url=index.php');
	}

	// Menu to display if a user is logged in
	$login = '<ul class="navbar-nav ml-auto mt-10">
		<li class="nav-item ">
			<a class="nav-link login-button border border-success bg-success text-white" href="auth/login.php">Login</a>
		</li>

	</ul>';

	$logMenu = '';

	if (isset($_SESSION['username'])){
		$login = '<ul>
			<li class="nav-item dropdown show">
				<div class="drop">
					<a class="nav-link text-black dropdown-toggle "href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
						<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
						<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
						</svg>
						
					</a>

					<!-- Dropdown menu for user profile -->
					<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
						<a class="dropdown-item" href="index.php?logout=yes">Log out</a>
						
					</div>
				</div>
				
			</li>
		</ul>';

	$logMenu = '<li class="nav-item ">
			<a class="nav-link"  href="views/favourites.php">Favourites<span><i class=""></i></span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link"  href="views/History.php">History<span><i class=""></i></span>
			</a>
		</li>';
	}


?>

<body class="body-wrapper">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light navigation">
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="index.php">Home</a>
								</li>
								
								<?php echo $logMenu; ?>
								
							</ul>
							<?php echo $login; ?>
								
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>

	<!--===============================
	=            Hero Area            =
	================================-->

	<section class="hero-area bg-1 text-center overly">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Header Contetnt -->
					<div class="content-block">
						<h1>Search Anywhere & Everywhere </h1>
						<p>Where All Your Shops Are In One Place</p>
						
						
					</div>
					<!-- Advance Search -->
					<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-6 col-md-12 align-content-center">
									<form action='views/category.php' method='post'>
										<div class="form-row">
											<div class="form-group col-md-10">
												<input type="text" class="form-control my-2 my-lg-1" id="inputtext4" name='item' placeholder="What are you looking for">
											</div>
											
											<div class="form-group col-md-2 align-self-center">
												<!-- <a id='homeSearch' class="nav-link login-button border border-primary bg-primary text-white" href="category.php">Search</a> -->
												<button type="submit" class="btn btn-primary">Search</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>



<!--===========================================
=            Popular deals section            =
============================================-->

	<section class="popular-deals section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Trending Searches</h2>
						<p>Have a look at what others have been searching</p>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- offer 01 -->
				<div class="col-lg-12">
					<div class="trending-ads-slide">
					<?php
						// Get the History
						include "auth/config.php";

						$sql = "SELECT * FROM History order by time desc LIMIT 4";

						// execute query
						$result = mysqli_query($conn, $sql);

						if(!$result){
							die("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
						}else{

							while ($data = mysqli_fetch_array($result)){

								echo '<div class="col-sm-12 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card">
										<div class="thumb-content">
											<div class="price">'.$data['price'].'</div>
											<a href="'.$data['link'].'">
												<img class="card-img-top img-fluid" src="'.$data['img'].'" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="'.$data['link'].'">'.$data['name'].'</a></h4>
											<ul class="list-inline product-meta">
												<li class="list-inline-item">
													<a href="'.$data['link'].'"><i class="fa fa-tag">'.$data['store'].'</i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>';
							}
				
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- JAVASCRIPTS -->
	<script src="assets/plugins/jQuery/jquery.min.js"></script>
	<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap-slider.js"></script>
	<!-- tether js -->
	<script src="assets/plugins/tether/js/tether.min.js"></script>
	<script src="assets/plugins/raty/jquery.raty-fa.js"></script>
	<script src="assets/plugins/slick-carousel/slick/slick.min.js"></script>
	<script src="assets/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="assets/plugins/fancybox/jquery.fancybox.pack.js"></script>
	<script src="assets/plugins/smoothscroll/SmoothScroll.min.js"></script>
	
	<script src="assets/js/script.js"></script>

	<script>

	</script>

</body>

</html>



