<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>Gambo - Index</title>
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="images/fav.png">
	<!-- Stylesheets -->
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
	<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/night-mode.css" rel="stylesheet">

	<!-- Vendor Stylesheets -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">

</head>

<body class="goto-here">
	<?php require 'connect.php'; ?>

	<?php

	$flag = $_SESSION['username'];

	if (!$flag) {
		header("Location: login.php");
	}

	?>
	<?php
	$product  = !empty($_SESSION['cart']) ? $_SESSION['cart'] : [];
	?>


	<header class="header clearfix">
		<div class="top-header-group">
			<div class="top-header">
				<div class="res_main_logo">
					<a href="index.php"><img src="images/dark-logo-1.svg" alt=""></a>
				</div>
				<div class="main_logo" id="logo">
					<a href="index.php"><img src="images/logo.svg" alt=""></a>
					<a href="index.php"><img class="logo-inverse" src="images/dark-logo.svg" alt=""></a>
				</div>
				<div class="select_location">
					<div class="ui inline dropdown loc-title">
						<div class="text">
							<i class="uil uil-location-point"></i>
							Gurugram
						</div>
						<i class="uil uil-angle-down icon__14"></i>
						<div class="menu dropdown_loc">
							<div class="item channel_item">
								<i class="uil uil-location-point"></i>
								Gurugram
							</div>
							<div class="item channel_item">
								<i class="uil uil-location-point"></i>
								New Delhi
							</div>
							<div class="item channel_item">
								<i class="uil uil-location-point"></i>
								Bangaluru
							</div>
							<div class="item channel_item">
								<i class="uil uil-location-point"></i>
								Mumbai
							</div>
							<div class="item channel_item">
								<i class="uil uil-location-point"></i>
								Hyderabad
							</div>
							<div class="item channel_item">
								<i class="uil uil-location-point"></i>
								Kolkata
							</div>
							<div class="item channel_item">
								<i class="uil uil-location-point"></i>
								Ludhiana
							</div>
							<div class="item channel_item">
								<i class="uil uil-location-point"></i>
								Chandigrah
							</div>
						</div>
					</div>
				</div>
				<div class="search120">
					<div class="ui search">
						<div class="ui left icon input swdh10">
							<input class="prompt srch10" type="text" placeholder="Search for products..">
							<i class='uil uil-search-alt icon icon1'></i>
						</div>
					</div>
				</div>
				<div class="header_right">
					<ul>
						<li class="ui dropdown">
							<a href="#" class="opts_account">
								<img src="images/avatar/img-5.jpg" alt="">
								<span class="user__name">
									<?php

									echo $_SESSION['name-user'];
									?>
								</span>
								<i class="uil uil-angle-down"></i>
							</a>
							<div class="menu dropdown_account">
								<div class="night_mode_switch__btn">
									<a href="#" id="night-mode" class="btn-night-mode">
										<i class="uil uil-moon"></i> Night mode
										<span class="btn-night-mode-switch">
											<span class="uk-switch-button"></span>
										</span>
									</a>
								</div>
								<a href="login.php" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>


		<!-- // log out -->
		<div class="sub-header-group">
			<div class="sub-header">
				<div class="ui dropdown">
					<a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i><span class="cate__icon">Select
							Category</span></a>
				</div>
				<nav class="navbar navbar-expand-lg navbar-light py-3">
					<div class="container-fluid">
						<button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
						<div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
							<ul class="navbar-nav main_nav align-self-stretch">
								<li class="nav-item"><a href="index.php" class="nav-link active" title="Home">Home</a></li>
								<li class="nav-item"><a href="shop_grid.php" class="nav-link new_item" title="New Products">New
										Products</a></li>
								<li class="nav-item"><a href="shop_grid.html" class="nav-link" title="Featured Products">Featured Products</a></li>
								<li class="nav-item">
									<div class="ui icon top left dropdown nav__menu">
										<a class="nav-link" title="Pages">Pages <i class="uil uil-angle-down"></i></a>
										<div class="menu dropdown_page">
											<a href="dashboard_overview.html" class="item channel_item page__links">Account</a>
											<a href="about_us.html" class="item channel_item page__links">About Us</a>
											<a href="shop_grid.html" class="item channel_item page__links">Shop Grid</a>
											<a href="single_product_view.html" class="item channel_item page__links">Single Product
												View</a>
											<a href="checkout.html" class="item channel_item page__links">Checkout</a>
											<a href="request_product.html" class="item channel_item page__links">Product
												Request</a>
											<a href="order_placed.html" class="item channel_item page__links">Order Placed</a>
											<a href="bill.html" class="item channel_item page__links">Bill Slip</a>
											<a href="sign_in.html" class="item channel_item page__links">Sign In</a>
											<a href="sign_up.html" class="item channel_item page__links">Sign Up</a>
											<a href="forgot_password.html" class="item channel_item page__links">Forgot
												Password</a>
											<a href="contact_us.html" class="item channel_item page__links">Contact Us</a>
										</div>
									</div>
								</li>
								<li class="nav-item">
									<div class="ui icon top left dropdown nav__menu">
										<a class="nav-link" title="Blog">Blog <i class="uil uil-angle-down"></i></a>
										<div class="menu dropdown_page">
											<a href="our_blog.html" class="item channel_item page__links">Our Blog</a>
											<a href="blog_detail_view.html" class="item channel_item page__links">Blog Detail
												View</a>
										</div>
									</div>
								</li>
								<li class="nav-item"><a href="contact_us.html" class="nav-link" title="Contact">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</nav>
				<div class="header_cart order-1">
					<a href="checkout.php" class="cart__btn hover-btn pull-bs-canvas-left"><i class="uil uil-shopping-cart-alt"></i><span>Cart</span>

						<?php
						$product  = !empty($_SESSION['cart']) ? $_SESSION['cart'] : [];
						?>
						<?php
						echo count($product);
						?>

					</a>
				</div>
			</div>
		</div>
	</header>
	<div class="wrapper">

		<section class="ftco-section pt-5 mt-3">

			<div class="container">
				<div class="row">

					<div class="col-8 mx-auto">
						<table class="table">
							<thead>
								<tr>
									<th>Tên</th>
									<th> Giá </th>
									<th> Số lượng</th>
									<th> Tình Trạng</th>
									<th> Thành tiền</th>
									<th> Hình ảnh</th>
									<th> Hành động</th>
								</tr>
							</thead>
							<tbody>
								<form action="" method="POST">
									<?php
									$n = 1;
									$tongtien = 0;
									$tongsoluong = 0;
									foreach ($product as $item) :
										$thanhtien = $item['price'] * $item['quantity'];
										$tongtien += $thanhtien;
										$tongsoluong += $item['quantity'];
									?>
										<tr>
											<td><?php echo $item['name']; ?></td>
											<td><?php echo number_format($item['price']); ?></td>
											<td><?php echo $item['quantity']; ?></td>
											<td><?php echo $item['status']; ?></td>
											<td><?php echo number_format($thanhtien); ?></td>
											<td> <img style="width: 50px; height: 50px;" src="images/<?php echo $item['images'] ?> " alt="" /></td>
											<td><a href="cart.php?id=<?php echo $item['id']; ?>&action=delete" class="btn btn-danger">Xóa</a></td>
										</tr>

									<?php $n++;
									endforeach; ?>
									<td colspan="6"><strong>Thành tiền</strong></td>
									<td colspan="3"><strong><?php echo number_format($tongtien); ?></strong></td>

							</tbody>
						</table>
						<div style="margin-top: 40px;" class="d-flex justify-content-end">
							<button class="btn btn-success">
								<a href="confirm.php" class="text-white"> Tiến hành thanh toán</a>
							</button>
						</div>
						</form>
					</div>



				</div>

			</div>

		</section>

	</div>

	<!-- /// thanh toans -->
	<footer class="footer">
		<div class="footer-first-row">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<ul class="call-email-alt">
							<li><a href="#" class="callemail"><i class="uil uil-dialpad-alt"></i>1800-000-000</a></li>
							<li><a href="#" class="callemail"><i class="uil uil-envelope-alt"></i>info@gambosupermarket.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="social-links-footer">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-last-row">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-bottom-links">
							<ul>
								<li><a href="about_us.html">About</a></li>
								<li><a href="contact_us.html">Contact</a></li>
								<li><a href="privacy_policy.html">Privacy Policy</a></li>
								<li><a href="term_and_conditions.html">Term & Conditions</a>
								</li>
								<li><a href="refund_and_return_policy.html">Refund & Return
										Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- .section -->

	<!-- Javascripts -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/semantic/semantic.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/night-mode.js"></script>

</body>

</html>