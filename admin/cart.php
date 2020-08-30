<?php require '../connect.php'; ?>
<?php

$flag = $_SESSION['ss-admin'];

if (!$flag) {
	header("Location: login.php");
}

$sql = "select * from bills ";
$result = $conn->query($sql);


?>
<?php require 'logout.php'; ?>

<!doctype html>
<html lang="en">

<head>
	<title>Chi tiết hóa đơn</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="Css/style.css"> -->
	<style>
		@import url("//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

		th,
		td {
			vertical-align: middle !important;
			text-align: center;
		}

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
					<a class="nav-link" href="index.php">
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
					<a class="nav-link" href="cart.php">
						<i class="fa fa-truck"></i>
						</i> Quản lý đơn hàng
					</a>
				</li>

			</ul>


			<ul class="navbar-nav ">

				<li class="nav-item text-white">
					Admin
				</li>
			</ul>

			<ul class="navbar-nav px-2">

				<li class="nav-item text-white">



					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						Logout
					</button>


				</li>
			</ul>

		</div>
	</nav>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Bạn có chắc muốn thoát

				</div>
				<div class="modal-footer">

					<form>
						<button type="submit" class="btn btn-danger" name="logout">
							Đồng Ý
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<section class="claerfix-contenr">
		<div class="container ">
			<h2 class="row justify-content-center m-4 ">
				Danh sách đơn hàng
			</h2>


			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">STT</th>
						<th scope="col">Tên khách hàng</th>
						<th scope="col">Email</th>
						<th scope="col">Ngày đặt hàng</th>
						<th scope="col">Số điện thoại</th>
						<th scope="col">Địa chỉ nhận hàng</th>
						<th scope="col">Tổng tiền</th>
						<th scope="col">Xem</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$dem = 0;
					while ($rs = $result->fetch()) {
						$dem++;
					?>
						<tr>
							<th scope="row"><?php echo $dem; ?></th>
							<td><?php echo $rs['name'] ?></td>
							<td><?php echo $rs['email'] ?></td>
							<td><?php echo $rs['date_dat_hang'] ?></td>
							<td><?php echo $rs['phone'] ?></td>
							<td><?php echo $rs['address'] ?></td>
							<td><?php echo $rs['total'] ?>đ</td>
							<td>
								<a href="detail.php?id=<?php echo $rs['idBills'] ?>" class="btn btn-warning">Xem chi tiết</a>
							</td>
						</tr>
					<?php } ?>

				</tbody>
			</table>

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