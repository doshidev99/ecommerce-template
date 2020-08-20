<?php
require_once('./connect.php');

if (isset($_POST['add'])) {

	$name =  $_POST['name'];
	$price =  $_POST['price'];
	$images = $_FILES['file']['name'];
	$linkup = 'Images/';
	move_uploaded_file($_FILES['file']['tmp_name'], $linkup . $images);
	$details =  $_POST['details'];
	$status =  $_POST['status'];

	$insert = "INSERT INTO products(name, price, details, status, images)
	VALUES ('$name', '$price', '$details', '$status', '$images')";
	$conn->exec($insert);
	header("Location: products.php");
}

?>

<!doctype html>
<html lang="en">

<head>
	<title>Thêm sản phẩm</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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

	<style>
		@import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

		.navbar-icon-top .navbar-nav .nav-link>.fa {
			position: relative;
			width: 36px;
			font-size: 24px;
		}

		.navbar-icon-top .navbar-nav .nav-link>.fa>.badge {
			font-size: 0.75rem;
			position: absolute;
			right: 0;
			font-family: sans-serif;
		}

		.navbar-icon-top .navbar-nav .nav-link>.fa {
			top: 3px;
			line-height: 12px;
		}

		.navbar-icon-top .navbar-nav .nav-link>.fa>.badge {
			top: -10px;
		}

		@media (min-width: 576px) {
			.navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
				text-align: center;
				display: table-cell;
				height: 70px;
				vertical-align: middle;
				padding-top: 0;
				padding-bottom: 0;
			}

			.navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link>.fa {
				display: block;
				width: 48px;
				margin: 2px auto 4px auto;
				top: 0;
				line-height: 24px;
			}

			.navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link>.fa>.badge {
				top: -7px;
			}
		}

		@media (min-width: 768px) {
			.navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
				text-align: center;
				display: table-cell;
				height: 70px;
				vertical-align: middle;
				padding-top: 0;
				padding-bottom: 0;
			}

			.navbar-icon-top.navbar-expand-md .navbar-nav .nav-link>.fa {
				display: block;
				width: 48px;
				margin: 2px auto 4px auto;
				top: 0;
				line-height: 24px;
			}

			.navbar-icon-top.navbar-expand-md .navbar-nav .nav-link>.fa>.badge {
				top: -7px;
			}
		}

		@media (min-width: 992px) {
			.navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
				text-align: center;
				display: table-cell;
				height: 70px;
				vertical-align: middle;
				padding-top: 0;
				padding-bottom: 0;
			}

			.navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link>.fa {
				display: block;
				width: 48px;
				margin: 2px auto 4px auto;
				top: 0;
				line-height: 24px;
			}

			.navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link>.fa>.badge {
				top: -7px;
			}
		}

		@media (min-width: 1200px) {
			.navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
				text-align: center;
				display: table-cell;
				height: 70px;
				vertical-align: middle;
				padding-top: 0;
				padding-bottom: 0;
			}

			.navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link>.fa {
				display: block;
				width: 48px;
				margin: 2px auto 4px auto;
				top: 0;
				line-height: 24px;
			}

			.navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link>.fa>.badge {
				top: -7px;
			}
		}

		.navbar-brand img {
			width: 50px;
			height: 50px;
		}

		.p-0 li {
			list-style-type: none;
		}

		.p-0 li a:hover {
			text-decoration: none;
		}
	</style>

</head>

<body>

	<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark ">
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="products.php">
						<i class="fa fa-home"></i>Trang chủ
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="add-product.php">
						<i class="fa fa-hand-o-up"></i>
						</i> Tạo Sản phẩm
					</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="gioithieu.html">
						<i class="fa fa-hand-o-up"></i>
						</i> Giới thiệu
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="lienhe.html">
						<i class="fa fa-envelope-o">
						</i> Liên hệ
					</a>
				</li> -->
				<!-- <li class="nav-item dropdown"> -->
				<!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-list"></i>
						</i> Danh mục sản phẩm
					</a> -->
				<!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="Cuahang.html">Nước hoa</a>
						<a class="dropdown-item" href="Cuahang1.html">Son môi</a>
						<a class="dropdown-item" href="Cuahang2.html">Mỹ phẩm</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="Cuahang3.html">Mặt nạ </a>
						<a class="dropdown-item" href="Cuahang4.html">phấn </a>
					</div> -->
				<!-- </li> -->
			</ul>
			<ul class="navbar-nav ">
				<li class="nav-item">
					<a class="nav-link" href="login.php">
						<i class="fa fa-bell">
							<span class="badge badge-info"><i class="fa fa-user"></i></span>
						</i> Đăng nhập
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="sign-up.php">
						<i class="fa fa-globe">
							<span class="badge badge-success"><i class="fa fa-registered"></i></span>
						</i> Đăng ký
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="Shop.html">
						<i class="fa fa-shopping-bag">
							<span class="badge badge-success"><i class="fa fa-shopping-bag"></i></span>
						</i> Giỏ hàng
					</a>
				</li>
			</ul>

		</div>
	</nav>
	<div class="container">
		<h1 class="py-5 text-center">THÊM SẢN PHẨM</h1>
		<div class="row justify-content-center">
			<div class="col-6">
				<div class="">
					<form action="" method="post" enctype="multipart/form-data">

						<div class="form-group">
							<label for="">Tên</label>
							<input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
						</div>
						<div class="form-group">
							<label for="">Giá</label>
							<input type="text" name="price" id="" class="form-control" placeholder="" aria-describedby="helpId">
						</div>
						<div class="form-group">
							<label for="">Hình Ảnh</label>
							<input type="file" name="file" id="" placeholder="" aria-describedby="helpId">
						</div>
						<div class="form-group">
							<label for="">Chi tiết</label>
							<input type="text" name="details" id="" class="form-control" placeholder="" aria-describedby="helpId">
						</div>
						<div class="form-group">
							<label for="">Tình Trạng</label>
							<input type="text" name="status" id="" class="form-control" placeholder="" aria-describedby="helpId">
						</div>

						<button class="btn btn-warning btn-block" name="add">Thêm</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</html>