<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>Admin Login</title>

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

<!-- php -->

<?php
$flag = $_SESSION['ss-admin'];

if ($flag) {
	header("Location: index.php");
}


if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$sql = "SELECT * FROM `admin` WHERE `email`=? AND `password`=? ";
	//PDO::prepare — Prepares a statement for execution and returns a statement object
	$query = $conn->prepare($sql);
	$query->execute(
		array($email, $pass)
	);
	// check when Truthy and Falsy
	$row = $query->rowCount();

	if ($row > 0) {
		echo " Đăng nhập thành công!";
		$_SESSION['ss-admin'] = $email;

		header("Location: admin/index.php");
	} else {
		// todo :
		echo " Đăng nhập thất bại vui lòng thử lại!";
		header("Location: login.php");
	}
}

?>

<!-- end php -->

<body>
	<div class="sign-inup" style="background:lightblue; height: 100vh">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-5">
					<div class="sign-form">
						<div class="sign-inner">
							<div class="sign-logo" id="logo">
								<a href="index.php"><img src="images/logo.svg" alt=""></a>
								<a href="index.php"><img class="logo-inverse" src="images/dark-logo.svg" alt=""></a>
							</div>
							<div class="">
								<div class="form-inpts checout-address-step">

									<!-- form -->
									<form method="POST" enctype="multipart/form-data">
										<div class="form-title">
											<h6>Login with admin</h6>
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
										<button class="login-btn hover-btn" name="submit" type="submit">Login</button>
									</form>


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

</html> -->