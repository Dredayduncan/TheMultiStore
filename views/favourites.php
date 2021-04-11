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


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>


<?php

	// Get config file
	include '../auth/config.php';

	// write query
	session_start();

	if (isset($_GET['logout'])){
		session_destroy();
		header('Refresh: 0; url=index.php');
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
						<a class="dropdown-item" href="#">User Profile</a>
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
								<li class="nav-item ">
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


	<section class="section-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="search-result bg-gray">
					<h2>Favourites</h2>
						<!--// <?php
						//	if ($_POST['item']){
								//$item = str_replace(' ', '+', $_POST['item']);
								//echo "<h2>Results For ".$_POST['item']."</h2>";
							//}
						//	else{
							//	$product = $_GET['search'];
							//	echo "<h2>Results For ".$product."</h2>";
						//	}
						//?> -->
						
						
					</div>
				</div>
			</div>
			<div class="row">
				<!-- <div class="col-md-3">
					<div class="category-sidebar">
						<div class="widget category-list">
							<h4 class="widget-header">All Category</h4>
							<ul class="category-list">
								<li><a href="category.php">Amazon <span>93</span></a></li>
								<li><a href="category.php">Jumia <span>233</span></a></li>
								<li><a href="category.php">Tonaton  <span>183</span></a></li>
							</ul>
						</div>		
				</div> -->
			</div>
			<div class="col-md-9">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6">
							<strong>Sort</strong>
							<select>
								<option value="2">Lowest to Highest</option>
								<option value="3">Highest to Lowest</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<?php
				// Get the User favourites

				$sql = "SELECT * FROM Favourites WHERE username='".$_SESSION["username"]."' order by time desc";

				// execute query
				$result = mysqli_query($conn, $sql);

				if(!$result){
				  die("ERROR: Could not able to execute $sql. " . mysqli_error($conn));
				}else{

					while ($data = mysqli_fetch_array($result)){

						echo '<div class="ad-listing-list mt-20">
						<div class="row p-lg-3 p-sm-5 p-4">
							<div class="col-lg-4 align-self-center">
								
								<a href="'.$data['link'].'">
									<img src="'.$data['img'].'" class="img-fluid" alt="">
								</a>
							</div>
							<div class="col-lg-8">
								<div class="row">
									<div class="col-lg-6 col-md-10">
										<div class="ad-listing-content">
											<div>
												<a href="'.$data['link'].'" class="font-weight-bold">'.$data['name'].'</a>
												<div class="price">'.$data['price'].'</div>
											</div>
											<ul class="list-inline mt-2 mb-3">
												<li class="list-inline-item"><a class="store"  href="'.$data['link'].'"><i class="fa fa-tag">'.$data['store'].'</i></a></li>
												<a>
												<button type="button" id ="fav-button" class="btn  " style="margin-left:110px; cursor: pointer;  color: red; transition: 500ms linear ease-in; transform: scale(1.1);">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
													<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
													<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
											  	</svg>
												
												</a>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>';
					}
		
				}
			?>

				
<!-- 				
				<div class="product-grid-list">
					<div class="row mt-30"> -->
						<!-- Products -->

						<!--  -->
					<!-- </div>
				</div> -->

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
	// Delete from Favourites
	$(".btn").on('click', function(){
		var div = $(this).parent().parent();
		var name = div.find("div a").html();
		var price = div.find('.price').html().trim();
		var store = div.find(".store i").html();
		var img = div.parent().parent().parent().prev().find(".img-fluid").attr("src");
		var link = div.find("div a").attr("href");
		
		$.get("control.php", {choice: 'fav_delete', name: name, img: img,
		link: link, price: price, store: store}, function(data){
			location.reload();
		});
	});
</script>

</body>

</html>