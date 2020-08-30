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

<body>
	<?php require 'connect.php'; ?>

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

	<section class="section" style="padding-top: 140px">

		<div class="container px-3 py-4">

			<div class="row">
				<div class="col-md-4 order-md-2 mb-4">
					<h4 class="d-flex justify-content-between align-items-center mb-3">
						<span class="text-muted">Giỏ hàng</span>

					</h4>
					<ul class="list-group mb-3">
						<?php
						$n = 1;
						$tongtien = 0;
						$tongsoluong = 0;
						foreach ($product as $item) :
							$thanhtien = $item['price'] * $item['quantity'];
							$tongtien += $thanhtien;
							$tongsoluong += $item['quantity'];
						?>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div>
									<h6 class="my-0"><?php echo $item['name']; ?> |
										<?php echo $item['quantity']; ?>

									</h6>
									<small class="text-muted"><?php echo $item['status']; ?></small>
								</div>
								<span class="text-muted"><?php echo number_format($item['price']); ?></span>
							</li>
						<?php $n++;
						endforeach; ?>
						<li class="list-group-item d-flex justify-content-between">
							<span>Total (USD)</span>
							<strong><?php echo number_format($tongtien); ?></strong>
						</li>
					</ul>

					<!-- <form method="post" class="card p-2">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Promo code">
						<div class="input-group-append">
							<button type="submit" class="btn btn-secondary">Redeem</button>
						</div>
					</div>
				</form> -->
				</div>
				<div class="col-md-8 order-md-1">
					<h4 class="mb-3">Thông tin nơi nhận hàng</h4>
					<form class="needs-validation" novalidate method="post">
						<div class="row">
							<div class="col-md-4 mb-3">
								<label for="name">Tên của bạn</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php
																																																		echo isset($_SESSION['name-user']) ? $_SESSION['name-user'] : "";
																																																		?>" required>
								<div class="invalid-feedback">
									Valid first name is required.
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<label for="email">Email </label>
								<input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
								<div class="invalid-feedback">
									Please enter a valid email address for shipping updates.
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<label for="phone">Số điện thoại </label>
								<input type="tel" class="form-control" id="phone" name="phone" placeholder="">
							</div>
						</div>

						<div class="mb-3">
							<label for="address">Địa chỉ</label>
							<input type="text" class="form-control" id="address" name="address" placeholder="137 nguyễn thị thập" required>
							<div class="invalid-feedback">
								Please enter your shipping address.
							</div>
						</div>


						<div class="mb-3">
							<label for="note">Ghi chú</label>
							<input type="text" name="note" class="form-control" id="note" placeholder="...">

						</div>
						<hr class="mb-4">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="same-address">
							<label class="custom-control-label" for="same-address">Địa chỉ giao hàng giống với địa chỉ thanh toán của tôi</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="save-info">
							<label class="custom-control-label" for="save-info">Lưu thông tin này cho lần sau
							</label>
						</div>
						<hr class="mb-4">
						<button class="btn btn-primary btn-lg btn-block" type="submit" name="thanhtoan">Thanh Toán</button>
					</form>

					<?php
					if (isset($_POST['thanhtoan'])) {
						$name = $_POST["name"];
						$email = $_POST["email"];
						$note = $_POST['note'];
						$date = date("Y/m/d");
						$id = isset($_SESSION['idUser']) ? $_SESSION['idUser'] : "";

						$address = $_POST["address"];
						$phone = $_POST["phone"];

						$queryInsert = 	"INSERT INTO `bills`(`id_bills`, `name`, `email`, `total`, `note`, `phone`, `address`, `date_dat_hang`) VALUES ($id,'$name','$email' ,'$tongtien','$note','$phone','$address','$date')";
						$conn->exec($queryInsert);

						$id = $conn->lastInsertId();
						$queryToProducts = $conn->prepare("SELECT * FROM products");
						$queryToProducts->execute();

						foreach ($product as $item) :
							while ($response = $queryToProducts->fetch()) :
								$_nameProduct = $response['name'];
								$_priceProduct = $response['price'];

							endwhile;
							$queryInsertToDetailBills = "INSERT INTO billDetails(id_bills, name_product, price) VALUES('$id', '$_nameProduct', '$_priceProduct')";
							$conn->exec($queryInsertToDetailBills);
						endforeach;

						unset($_SESSION['cart']);
						echo "<script>alert('Đặt hàng thành công !')</script>";
						echo "<script>window.location.href='index.php';</script>";
					}

					?>
				</div>
			</div>
		</div>
	</section>

</body>

</html>