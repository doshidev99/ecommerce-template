<?php require 'connect.php'; ?>


<?php
$numberpage = 6;
$countsql = $connect->prepare("SELECT count(ID) from SanPham");
$countsql->execute();
$rows = $countsql->fetch();
$numrecords = $rows[0];
$numlinks = ceil($numrecords / $numberpage);
$page = isset($_GET['start']) ? $_GET['start'] : '0';
$start = $page * $numberpage;
$select = "SELECT*FROM SanPham LIMIT $start,$numberpage ";
$result = $connect->query($select);
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Page Title</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
	<!--GOOGLE FONT -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!--Slide Show Css -->
	<link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
	<!-- custom CSS here -->
	<link href="assets/css/style.css" rel="stylesheet" />
	<style>
		table {
			text-align: center;
		}

		table tr th {
			text-align: center;
		}
	</style>
</head>

<body>
	<?php
	session_start();
	require_once './connect.php';
	?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 60px">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="qlhd.php">Quản lý hóa đơn</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Quản lý sản phẩm
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="add_product.php">Cập nhật sản phẩm</a>
						<a class="dropdown-item" href="product_table.php">Thông tin sản phẩm</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="qlkh.php" tabindex="-1" aria-disabled="true">Quản lý khách hàng</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
	<!-- /.row -->
	<div class="col-md-10">
		<div class="col-md-6" style="margin-left: 20%; margin-top: 5%;">
			<div class="alert alert-danger" role="alert">
				Quản lý sản phẩm
			</div>
		</div>
		<!-- /.row -->
		<div class="row " style="margin-left: 20%; margin-top: 5%;">
			<div class="col-md-12">
				<table style="width: 100%;" border="1">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên</th>
							<th>Giá</th>
							<th>Loại</th>
							<th>Tình trạng</th>
							<th>Hình ảnh</th>
							<th>Hành Động</th>
						</tr>
					</thead>
					<?php
					$dem = 0;
					while ($rs = $result->fetch()) {
						$dem++;
					?>
						<tr>
							<td><?php echo $rs['ID'] ?></td>
							<td><?php echo $rs['Ten'] ?></td>
							<td><?php echo number_format($rs['Gia']); ?></td>
							<td><?php echo $rs['Loai'] ?></td>
							<td><?php echo $rs['TinhTrang'] ?> </td>
							<td><img src="assets/img/<?php echo $rs['HinhAnh'] ?> " alt="" style="width: 50px; height: 50px;" /> </p>
							</td>
							<td><a href="update.php?id= <?php echo $rs['ID'] ?>" style="border-radius: 0;" class="btn btn-success"><i class="fa fa-pencil-square" aria-hidden="true"></i> &nbsp;Sửa</a> <a style="border-radius: 0;" href="delete.php?id= <?php echo $rs['ID'] ?>" class="btn btn-warning"> <i class="fa fa-trash-o" aria-hidden="true"></i> &nbsp; Xóa</a></td>
						</tr>
					<?php } ?>
				</table>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
		<div class="container">
			<div class="row">
				<div class="col-xl-6" style="margin-left: 17%;">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item"><a class="page-link" href="#">Previous</a></li>
							<?php
							for ($i = 0; $i < $numlinks; $i++) {
								$y = $i + 1;
							?>
								<li class="page-item"><a class="page-link" href="product_table.php?start= <?php echo $i; ?>"><?php echo $y ?></a></li>
							<?php } ?>
							<li class="page-item"><a class="page-link" href="#">Next</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- /.row -->
		<!-- /.div -->
		<!-- /.row -->
		<!-- /.row -->
	</div>
	<!-- /.col -->
	</div>
	<!-- /.row -->
	</div>
	<!-- /.container -->
	<!--Footer -->
	<!-- /.col -->
	<!--Footer end -->
	<!--Core JavaScript file  -->
	<script src="assets/js/jquery-1.10.2.js"></script>
	<!--bootstrap JavaScript file  -->
	<script src="assets/js/bootstrap.js"></script>
	<!--Slider JavaScript file  -->
	<script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
	<script src="assets/ItemSlider/js/jquery.catslider.js"></script>
	<script>
		$(function() {
			$('#mi-slider').catslider();
		});
	</script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
<?php
$id = !empty($_GET['id']) ? (int)$_GET['id'] : 0;
$quantity = !empty($_GET['quantity']) ? (int)$_GET['quantity'] : 1;
$action = !empty($_GET['action']) ? (int)$_GET['action'] : 'add';
$query = "Select*from sanpham where ID = $id";
$result = $connect->query($query);
$pro = $result->fetch();
if ($pro && $action == 'add') {
	if (isset($_SESSION['cart'][$id])) {
		$_SESSION['cart'][$id]['quanity'] += $quantity;
	} else {
		$item = [
			'id' => $pro['ID'],
			'ten' => $pro['Ten'],
			'gia' => $pro['Gia'],
			'chitiet' => $pro['Chitiet'],
			'loai' => $pro['Loai'],
			'tinhtrang' => $pro['TinhTrang'],
			'hinhanh' => $pro['HinhAnh'],
			'quanity' => $quantity
		];
		$_SESSION['cart'][$id] = $item;
	}
}


if ($pro && $action ==  'delete') {
	if (isset($_SESSION['cart'][$id])) {
		unset($_SESSION['cart'][$id]);
	}
}

echo $_SESSION['cart'];
header('location: viewcart.php');
