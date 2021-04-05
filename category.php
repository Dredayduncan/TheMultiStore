<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TheMultiStore</title>
  
  <link href="assets/images/MultistoreIcon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
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
								<li class="nav-item dropdown dropdown-slide">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Favourites<span><i class=""></i></span>
									</a>
	
									
								</li>
								<li class="nav-item dropdown dropdown-slide">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">History<span><i class=""></i></span>
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
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<section class="page-search">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Advance Search -->
					<div class="advance-search">
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
	</section>

	<section class="section-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="search-result bg-gray">
						<?php
							if ($_POST['item']){
								$item = str_replace(' ', '+', $_POST['item']);
								echo "<h2>Results For ".$_POST['item']."</h2>";
							}
							else{
								$product = $_GET['search'];
								echo "<h2>Results For ".$product."</h2>";
							}
						?>
						
						<p>123 Results on 12 December, 2017</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="category-sidebar">
						<div class="widget category-list">
							<h4 class="widget-header">All Category</h4>
							<ul class="category-list">
								<li><a href="category.php">Amazon <span>93</span></a></li>
								<li><a href="category.php">Jumia <span>233</span></a></li>
								<li><a href="category.php">Tonaton  <span>183</span></a></li>
							</ul>
						</div>

<!-- <div class="widget category-list">
	<h4 class="widget-header">Nearby</h4>
	<ul class="category-list">
		<li><a href="category.php">New York <span>93</span></a></li>
		<li><a href="category.php">New Jersy <span>233</span></a></li>
		<li><a href="category.php">Florida  <span>183</span></a></li>
		<li><a href="category.php">California <span>120</span></a></li>
		<li><a href="category.php">Texas <span>40</span></a></li>
		<li><a href="category.php">Alaska <span>81</span></a></li>
	</ul>
</div> -->

						<div class="widget filter">
							<h4 class="widget-header">Show Produts</h4>
							<select>
								<option>Popularity</option>
								<option value="1">Top rated</option>
								<option value="2">Lowest Price</option>
								<option value="4">Highest Price</option>
							</select>
						</div>

						<div class="widget price-range w-100">
							<h4 class="widget-header">Price Range</h4>
							<div class="block">
								<input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="5"
								data-slider-value="[0,5000]">
								<div class="d-flex justify-content-between mt-2">
										<span class="value">$10 - $5000</span>
								</div>
							</div>
						</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6">
							<strong>Sort</strong>
							<select>
								<option>Most Recent</option>
								<option value="1">Most Popular</option>
								<option value="2">Lowest to Highest</option>
								<option value="3">Highest to Lowest</option>
							</select>
						</div>
						<div class="col-md-6">
							<div class="view">
								<strong>Views</strong>
								<ul class="list-inline view-switcher">
									<li class="list-inline-item">
										<a href="#" onclick="event.preventDefault();" class="text-info"><i class="fa fa-th-large"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="ad-list-view.php?search=<? echo $item; ?>"><i class="fa fa-reorder"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Products -->

				<?php
					require 'simple_html_dom.php';

					// Get the seacrh results from Jumia
					function JumiaResults($searchTerm){
						$context = stream_context_create(array(
							'http' => array(
								'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
							),
						));

						$html = file_get_html('https://www.jumia.com.gh/catalog/?q='.$searchTerm, false, $context);
						$results = '';

						for ($i = 0; $i < 15; $i++){
							$name = $html->find(".info", $i)->find('h3', 0);
							$img = $html->find(".img-c", $i)->find('img', 0)->getAttribute('data-src');
							$price = $html->find('.core', $i)->find('.prc', 0);
							$link = 'https://www.jumia.com.gh'. $html->find('.core', $i)->href;

							$results.='<div class="col-sm-12 col-lg-4 col-md-6">
											<!-- product card -->
											<div class="product-item bg-light">
												<div class="card">
													<div class="thumb-content">
														<div class="price">'.$price.'</div>
														<a href="'.$link.'" target="_blank">
															<img class="card-img-top img-fluid" src='.$img.' alt="Card image cap">
														</a>
													</div>
													<div class="card-body">
														<h4 class="card-title"><a href="'.$link.'" target="_blank">'.$name.'</a></h4>
														<ul class="list-inline product-meta">
															<li class="list-inline-item">
																<a href="'.$link.'"><i class="fa fa-tag"></i>Jumia</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>';
						}
						return $results;
					}

					// Get search results from Amazon
					function AmazonResults($searchTerm){
						$context = stream_context_create(array(
							'http' => array(
								'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
							),
						));

						$html = file_get_html('https://www.amazon.com/s?k='.$searchTerm.'&ref=nb_sb_noss_2', false, $context);
						$results = '';

						for ($i = 0; $i < 15; $i++){
							$name = $html->find(".a-size-base-plus", $i);
							$img = $html->find(".s-image", $i)->getAttribute('src');
							$price = $html->find('.a-price .a-offscreen', $i);
							$link = 'https://www.amazon.com'. $html->find('div[data-component-type="s-search-result"]', $i)->find('h2', 0)->find('a', 0)->href;

							$results.='<div class="col-sm-12 col-lg-4 col-md-6">
											<!-- product card -->
											<div class="product-item bg-light">
												<div class="card">
													<div class="thumb-content">
														<div class="price">'.$price.'</div>
														<a href="'.$link.'" target="_blank">
															<img class="card-img-top img-fluid" src='.$img.' alt="Card image cap">
														</a>
													</div>
													<div class="card-body">
														<h4 class="card-title"><a href="'.$link.'" target="_blank">'.$name.'</a></h4>
														<ul class="list-inline product-meta">
															<li class="list-inline-item">
																<a href="'.$link.'"><i class="fa fa-tag"></i>Amazon</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>';
						}
						return $results;
					}

					// Get search results from Amazon
					function tonatonResults($searchTerm){
						$context = stream_context_create(array(
							'http' => array(
								'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
							),
						));

						$html = file_get_html('https://tonaton.com/en/ads/ghana?sort=relevance&buy_now=0&urgent=0&query='.$searchTerm, false, $context);
						$results = '';

						for ($i = 0; $i < 15; $i++){
							$card = $html->find('.normal--2QYVk', $i);
							$name = $card->find("a", 0)->find('.content--3JNQz', 0)->find('h2', 0);
							$img = $html->find(".normal-ad--1TyjD", $i)->getAttribute('src');
							$price = $card->find("a", 0)->find('.content--3JNQz', 0)->find('.price--3SnqI', 0)->find('span', 0);
	
							$link = 'https://tonaton.com'. $card->find('.card-link--3ssYv', 0)->href;
							$results.='<div class="col-sm-12 col-lg-4 col-md-6">
											<!-- product card -->
											<div class="product-item bg-light">
												<div class="card">
													<div class="thumb-content">
														<div class="price">'.$price.'</div>
														<a href="'.$link.'" target="_blank">
															<img class="card-img-top img-fluid" src='.$img.' alt="Card image cap">
														</a>
													</div>
													<div class="card-body">
														<h4 class="card-title"><a href="'.$link.'" target="_blank">'.$name.'</a></h4>
														<ul class="list-inline product-meta">
															<li class="list-inline-item">
																<a href="'.$link.'"><i class="fa fa-tag"></i>Tonaton</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>';
						}
						return $results;
					}

					if ($_POST['item']){
						echo JumiaResults($item);
						echo AmazonResults($item);
						echo tonatonResults($item);
					}
					else{
						$item = str_replace(' ', '+', $_GET['search']);
						echo JumiaResults($item);
						echo AmazonResults($item);
						echo tonatonResults($item);
					}
					
					
					
					die;
				?>
				<div class="product-grid-list">
					<div class="row mt-30">
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid" src="images/products/products-1.jpg" alt="Card image cap">
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

						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid" src="images/products/products-2.jpg" alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">Study Table Combo</a></h4>
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

						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid" src="images/products/products-3.jpg" alt="Card image cap">
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

						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid" src="images/products/products-1.jpg" alt="Card image cap">
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

						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid" src="images/products/products-2.jpg" alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">Study Table Combo</a></h4>
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

						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid" src="images/products/products-3.jpg" alt="Card image cap">
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

						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid" src="images/products/products-1.jpg" alt="Card image cap">
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

						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid" src="images/products/products-2.jpg" alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">Study Table Combo</a></h4>
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

						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<!-- <div class="price">$200</div> -->
										<a href="single.html">
											<img class="card-img-top img-fluid" src="images/products/products-3.jpg" alt="Card image cap">
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
					</div>
				</div>

				<!-- Pagination -->
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
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
            <li><a >Terms & Conditions</a></li>
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
            <li><a >Blog</a></li>



          </ul>
        </div>
      </div>
      
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. All Rights Reserved, theme by <a class="text-primary" href="https://themefisher.com" target="_blank">themefisher.com</a></p>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
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
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="assets/js/script.js"></script>

</body>

</html>