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


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

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
								<li class="nav-item ">
									<a class="nav-link"  href="favourites.php">Favourites<span><i class=""></i></span>
									</a>

									
								</li>
								<li class="nav-item">
									<a class="nav-link"  href="History.php">History<span><i class=""></i></span>
									</a>

									
								</li>
								<li class="nav-item dropdown dropdown-slide">
									<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span><i class=""></i></span>
									</a>
									
								</li>
							</ul>
							<ul class="navbar-nav ml-auto mt-10">
								<li class="nav-item ">
									<a class="nav-link login-button border border-success bg-success text-white" href="auth/login.php">Login</a>
								</li>

							</ul>
							<ul>
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
											<a class="dropdown-item" href="#">User Profile</a>
											<a class="dropdown-item" href="#">Log out</a>
											
										</div>
									</div>
									
								</li>
							</ul>
								
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
						<p>Join the millions who rely on us <br> to provide the appropriate results for their enquiries</p>
						
						
					</div>
					<!-- Advance Search -->
					<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-6 col-md-12 align-content-center">
									<form action='category.php' method='post'>
										<div class="form-row">
											<div class="form-group col-md-10">
												<input type="text" class="form-control my-2 my-lg-1" id="inputtext4" name='item' placeholder="What are you looking for">
											</div>
											<!-- <div class="form-group col-md-3">
												<select class="w-100 form-control mt-lg-1 mt-md-2">
													<option>Category</option>
													<option value="1">Top rated</option>
													<option value="2">Lowest Price</option>
													<option value="4">Highest Price</option>
												</select>
											</div>
											<div class="form-group col-md-3">
												<input type="text" class="form-control my-2 my-lg-1" id="inputLocation4" placeholder="Location">
											</div> -->
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
						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid" src="assets/images/products/products-1.jpg" alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">11inch Macbook Air</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid" src="assets/images/products/products-2.jpg" alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">Full Study Table Combo</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Furnitures</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid" src="assets/images/products/products-3.jpg" alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">11inch Macbook Air</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-lg-4">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid" src="assets/images/products/products-2.jpg" alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">Full Study Table Combo</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Furnitures</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-calendar"></i>26th December</a>
											</li>
										</ul>
										<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
										<div class="product-ratings">
											<ul class="list-inline">
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
												<li class="list-inline-item"><i class="fa fa-star"></i></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</section>






<!--============================
=            Footer            =
=============================-->

	<footer class="footer section section-sm">
		<!-- Container Start -->
		<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
			<!-- About -->
			<div class="block about">
				<!-- footer logo -->
				<img src="images/logo-footer.png" alt="">
				<!-- description -->
				<p class="alt-color">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
				incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
				laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			</div>
			<!-- Link list -->
			<div class="col-lg-2 offset-lg-1 col-md-3">
			<div class="block">
				<h4>Site Pages</h4>
				<ul>
				<li><a href="#">Boston</a></li>
				<li><a href="#">How It works</a></li>
				<li><a href="#">Deals & Coupons</a></li>
				<li><a href="#">Articls & Tips</a></li>
				
				</ul>
			</div>
			</div>
			<!-- Link list -->
			<div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
			<div class="block">
				<h4>Admin Pages</h4>
				<ul>
				<li><a >Category</a></li>
				<li><a >Single Page</a></li>
				<li><a >Store Single</a></li>
				<li><a >Single Post</a>
				</li>
				<li><a>Blog</a></li>
	
	
	
				</ul>
			</div>
			</div>
			
		</div>
	<!-- Container End -->
  </footer>

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



