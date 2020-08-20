<?php require 'connect.php'; ?>
<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM products WHERE id ='$id'";
	$result = $connection->query($sql);
	$rs = $result->fetch();



	$result = $conn->query($sql);

	// if (isset($_POST['edit'])) {
	// 	$masp = isset($_POST['id']);
	// 	$name = isset($_POST['name']);
	// 	$gia = isset($_POST['price']);
	// 	// if ($_FILES['file']['name'] != '') {
	// 	// 	$hinhanh = $_FILES['file']['name'];
	// 	// 	$linkup = 'img/';
	// 	// 	move_uploaded_file($_FILES['file']['tmp_name'], $linkup . $hinhanh);
	// 	// } else {
	// 	// 	$hinhanh = $_POST['HA'];
	// 	// }
	// 	$chitiet = isset($_POST['details']);
	// 	$update = "UPDATE products SET name = '" . $name . "', price = '" . $gia . "', details = '" . $chitiet . "' where id = '" . $masp . "'";
	// 	$conn->exec($update);

	// 	header("location:admin.php");
	// }
}
?>


<!doctype html>
<html lang="en">

<head>
	<title>Edit Products</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="Css/style.css"> -->
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

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

				<li class="nav-item">
					<a class="nav-link" href="gioithieu.html">
						<i class="fa fa-hand-o-up"></i>
						</i> Giới thiệu
					</a>
				</li>

			</ul>
			<ul class="navbar-nav ">

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



	<section class="claerfix-contenr">
		<div class="container ">
			<h2 class="row justify-content-center m-4 ">Sản phẩm</h2>


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

				<button class="btn btn-warning btn-block" name="edit">Cập nhập</button>
			</form>

			<!-- php -->

		</div>
	</section>




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>