<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from gambolthemes.net/html-items/gambo_supermarket_demo/sign_in.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jun 2020 14:12:38 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>Gambo - Sign In</title>

	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="images/fav.png">

	<!-- Stylesheets -->
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
	<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/night-mode.css" rel="stylesheet">
	<link href="css/step-wizard.css" rel="stylesheet">

	<!-- Vendor Stylesheets -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">

</head>
<?php require 'connect.php'; ?>

<?php
session_start();
// $error = "abc";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (isset($_POST["submit"])) {
		$email = $_POST["email"];
		$password = $_POST["password"];
		if ($email != "" || $password != "") {

			$sql = "SELECT * FROM `users` WHERE `email`=? AND `password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($email, $password));

			$row = $query->rowCount();

			if ($row > 0) {
				header("Location: products.php");
			} else {
				echo "
				<script>alert('Email or password incorrect. Please again!')</script>
				";
				header("Location: login.php");
				exit();
			}

			exit();
		}
	}
}

?>

<body>
	<div class="sign-inup">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-5">
					<div class="sign-form">
						<div class="sign-inner">
							<div class="sign-logo" id="logo">
								<a href="index.php"><img src="images/logo.svg" alt=""></a>
								<a href="index.php"><img class="logo-inverse" src="images/dark-logo.svg" alt=""></a>
							</div>
							<div class="form-dt">
								<div class="form-inpts checout-address-step">
									<form method="post">
										<div class="form-title">
											<h6>Sign In</h6>
										</div>
										<div class="form-group pos_rel">
											<input name="email" type="email" placeholder="Enter your email" class="form-control lgn_input" required="">
											<i class="uil uil-mobile-android-alt lgn_icon"></i>
										</div>
										<div class="form-group pos_rel">
											<input name="password" type="password" placeholder="Enter Password" class="form-control lgn_input" required="">
											<i class="uil uil-padlock lgn_icon"></i>
										</div>
										<div>
											<?php echo $error; ?>
										</div>
										<button class="login-btn hover-btn" name="submit" type="submit">Sign In Now</button>
									</form>
								</div>
								<div class="signup-link">
									<p>Don't have an account? - <a href="sign_up.php">Sign Up Now</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Javascripts -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/semantic/semantic.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/product.thumbnail.slider.js"></script>
	<script src="js/offset_overlay.js"></script>
	<script src="js/night-mode.js"></script>


</body>

</html>