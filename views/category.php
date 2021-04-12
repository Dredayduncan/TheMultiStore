<?php

	// write query
	session_start();

	if (isset($_GET['logout'])){
		session_destroy();
		header('Refresh: 0; url=../index.php');
	}

	// Menu to display if a user is logged in
	$login = '<ul class="navbar-nav ml-auto mt-10">
		<li class="nav-item ">
			<a class="nav-link login-button border border-success bg-success text-white" href="../auth/login.php">Login</a>
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

						<a class="dropdown-item" href="../index.php?logout=yes">Log out</a>
						
					</div>
				</div>
				
			</li>
		</ul>';

	$logMenu = '<li class="nav-item ">
			<a class="nav-link"  href="favourites.php">Favourites<span><i class=""></i></span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link"  href="History.php">History<span><i class=""></i></span>
			</a>
		</li>';
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TheMultiStore</title>
  
  <link href="../assets/images/MultistoreIcon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="../assets/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="../assets/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="../assets/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="../assets/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="../assets/css/style.css" rel="stylesheet">

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
									<a class="nav-link" href="../index.php">Home</a>
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
							if (isset($_POST['item'])){
								$item = str_replace(' ', '+', $_POST['item']);
								echo "<h2>Results For ".$_POST['item']."</h2>";
							}
							else{
								$product = $_GET['search'];
								echo "<h2>Results For ".$product."</h2>";
							}
						?>
						
					</div>
				</div>
			</div>
			<div class="row d-flex justify-content-center">
				
			<div class="col-md-9 ">
				<div class="category-search-filter">
					<div class="row">
					
						<div class="col-md-6">
							<div class="view">
								<strong>Views</strong>
								<ul class="list-inline view-switcher">
									<li class="list-inline-item">
										<a href="#" onclick="event.preventDefault();" class="text-info"><i class="fa fa-th-large"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="ad-list-view.php?search=<?php echo $item; ?>"><i class="fa fa-reorder"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				
				<div class="product-grid-list">
					<div class="row mt-30">
						<!-- Products -->

						<?php
							require 'simple_html_dom.php';

							// Get the seacrh results from Jumia
							function JumiaResults($searchTerm, $context){
								

								$html = file_get_html('https://www.jumia.com.gh/catalog/?q='.$searchTerm, false, $context);
								$results = '';

								for ($i = 0; $i < 15; $i++){
									$name = $html->find(".info", $i)->find('h3', 0)->text();
									$img = $html->find(".img-c", $i)->find('img', 0)->getAttribute('data-src');
									$price = $html->find('.core', $i)->find('.prc', 0)->text();
									$link = 'https://www.jumia.com.gh'. $html->find('.core', $i)->href;

									$button = '<a>
									<button type="button" id="fav-button" class="btn" style="margin-left:110px; cursor: pointer;  color: red; transition: 500ms linear ease-in; transform: scale(1.1);">
										<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
											<path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
										</svg>
									
									</a>';


									if (!isset($_SESSION['username'])){
										$button = '';
									}

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
																		<a class="store"  href="'.$link.'"><i class="fa fa-tag">Jumia</i></a>
																		'.$button.'
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
							function AmazonResults($searchTerm, $context){
								
								$html = file_get_html('https://www.amazon.com/s?k='.$searchTerm.'&ref=nb_sb_noss', false, $context);
								$results = '';

								for ($i = 0; $i < 15; $i++){
									$name = $html->find(".a-size-base-plus", $i)->text();
									$img = $html->find(".s-image", $i)->getAttribute('src');
									$price = $html->find('.a-price .a-offscreen', $i)->text();
									$link = 'https://www.amazon.com'. $html->find('div[data-component-type="s-search-result"]', $i)->find('h2', 0)->find('a', 0)->href;

									$button = '<a>
									<button type="button" id="fav-button" class="btn" style="margin-left:110px; cursor: pointer;  color: red; transition: 500ms linear ease-in; transform: scale(1.1);">
										<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
											<path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
										</svg>
									
									</a>';


									if (!isset($_SESSION['username'])){
										$button = '';
									}

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
																		<a class="store"  href="'.$link.'"><i class="fa fa-tag">Amazon</i></a>
																		'.$button.'
							
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>';
								}
								return $results;
							}

							// Get search results from Tonaton
							function tonatonResults($searchTerm, $context){
								
								$html = file_get_html('https://tonaton.com/en/ads/ghana?sort=relevance&buy_now=0&urgent=0&query='.$searchTerm, false, $context);
								$results = '';

								for ($i = 0; $i < 15; $i++){
									try{
										$card = $html->find('.normal--2QYVk', $i);
									}
									catch(Error $e){
										return '';
									}
									try{
										$name = $card->find("a", 0)->find('.content--3JNQz', 0)->find('h2', 0)->text();
									}
									catch(Error $e){
										return '';
									}
									try{
										$img = $html->find(".normal-ad--1TyjD", $i)->getAttribute('src');
									}
									catch(Error $e){
										return '';
									}
									try{
										$price = $card->find("a", 0)->find('.content--3JNQz', 0)->find('.price--3SnqI', 0)->find('span', 0)->text();
									}
									catch(Error $e){
										return '';
									}
									try{
										$link = 'https://tonaton.com'. $card->find('.card-link--3ssYv', 0)->href;
									}
									catch(Error $e){
										return '';
									}

									$button = '<a>
									<button type="button" id="fav-button" class="btn" style="margin-left:110px; cursor: pointer;  color: red; transition: 500ms linear ease-in; transform: scale(1.1);">
										<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
											<path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
										</svg>
									
									</a>';


									if (!isset($_SESSION['username'])){
										$button = '';
									}
									
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
																	<li class="d-flex list-inline-item justify-content-between">
																		<a class="store" href="'.$link.'"><i class="fa fa-tag">Tonaton</i></a>
																		
																		'.$button.'
																		
																		
																	</li>
																</ul>

																
															</div>
														</div>
													</div>
												</div>';
								}
								return $results;
							}

							$context = stream_context_create(array(
								'http' => array(
									'header' => array('User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; rv:2.2) Gecko/20110201'),
								),
							));

							if (isset($_POST['item'])){
								echo JumiaResults($item, $context);
								echo AmazonResults($item, $context);
								echo tonatonResults($item, $context);
							}
							else{
								$item = str_replace(' ', '+', $_GET['search']);
								echo JumiaResults($item, $context);
								echo AmazonResults($item, $context);
								echo tonatonResults($item, $context);
							}
							
						?>
					</div>
				</div>

				<!-- Pagination
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
				</div> -->
			</div>
		</div>
	</div>
</section>

<!-- JAVASCRIPTS -->
<script src="../assets/plugins/jQuery/jquery.min.js"></script>
<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="../assets/plugins/tether/js/tether.min.js"></script>
<script src="../assets/plugins/raty/jquery.raty-fa.js"></script>
<script src="../assets/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="../assets/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="../assets/plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="../assets/plugins/smoothscroll/SmoothScroll.min.js"></script>
<script src="../assets/js/script.js"></script>

<script>
	// Add to favorites
	$(".card-body #fav-button").on('click', function(){
		var div = $(this).parent().parent().parent().parent();
		var name = div.find(".card-body .card-title a").html();
		var price = div.find('.price').html().trim();
		var store = div.find(".store i").html();
		var img = div.find(".card-img-top").attr("src");
		var link = div.find(".card-body .card-title a").attr("href");
		
		$.get("control.php", {choice: 'favourite', name: name, img: img,
		link: link, price: price, store: store}, function(data){
			alert(data);
		});
	});

	// Add to history
	$( ".product-item" ).click(function( event ) {
		var target = $( event.target );
		
		if ( target.is( ".card-img-top" )){ 
			var div = target.parent().parent();
			var name = div.next().find(".card-title a").html();
			var price = div.find('.price').html().trim();
			var store = div.next().find(".store i").html();
			var img = div.find("a img").attr("src");
			var link = div.find("a").attr("href");
			
			
			$.get("control.php", {choice: 'history', name: name, img: img,
			link: link, price: price, store: store}, function(data){
				return data;
			});
		}
		else if (target.is(".card-body .card-title a")) {
			var div = target.parent().parent();
			var name = div.find(".card-title a").html();
			var price = div.prev().find('.price').html().trim();
			var store = div.find(".store i").html();
			var img = div.prev().find(".card-img-top").attr("src");
			var link = div.find(".card-title a").attr("href");
			
			$.get("control.php", {choice: 'history', name: name, img: img,
			link: link, price: price, store: store}, function(data){
				$(".search-result").append(data);
				// return data;
			});
		}
	});
</script>

</body>

</html>