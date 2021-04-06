<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Sign Up</title>
	<!-- FAVICON -->
	<link href="../assets/images/MultistoreIcon.png" rel="shortcut icon">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../assets/css/my-login.css">

</head>
<body  class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						
					
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form action='signupBack.php' method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="name"> First name</label>
									<input id="name" type="text" class="form-control" name="fname" required autofocus>
									<div class="invalid-feedback">
										What's your First name?
									</div>
								</div>
								<div class="form-group">
									<label for="name">Last Name</label>
									<input id="name" type="text" class="form-control" name="lname" required autofocus>
									<div class="invalid-feedback">
										What's your Last name?
									</div>
								</div>
								<div class="form-group">
									<label for="name">Username</label>
									<input id="name" type="text" class="form-control" name="uname" required autofocus>
									<div class="invalid-feedback">
										What's your username?
									</div>
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" required>
									<div class="invalid-feedback">
										Your email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>
								<div class="form-group">
									<label for="name">Date of birth</label>
									<input id="name" type="date" class="form-control" name="dob" required autofocus>
									<div class="invalid-feedback">
										What's your date of birth?
									</div>
								</div>

								<!-- <div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div> -->

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="login.php">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2021 &mdash; TheMultiStore
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="../assets/js/my-login.js"></script>
</body>
</html>