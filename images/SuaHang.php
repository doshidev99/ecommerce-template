<!DOCTYPE html>
<html lang="en">
<?php

if(isset($_GET['id']))
	{
        $id = $_GET['id'];
        $connection = new PDO("mysql:host=localhost;dbname=QLHH1","root","");
        $sql = "SELECT * FROM SanPham WHERE MaSP ='".$id."'";
		$result = $connection->query($sql);
		$rs = $result->fetch();

        if (isset($_POST['SuaHang'])) {
            $masp = isset($_POST['id']) ? $_POST['id'] : "Failed"; 
            $name = isset($_POST['name']) ? $_POST['name'] : "Failed";  
            $gia = isset($_POST['gia']) ? $_POST['gia'] : "Failed";
            if($_FILES['file']['name']!=''){
                $hinhanh = $_FILES['file']['name'];
                $linkup='img/';
                move_uploaded_file($_FILES['file']['tmp_name'], $linkup.$hinhanh);
            }else
            {
                $hinhanh = $_POST['HA'];
            }
            $chitiet = isset($_POST['chitiet']) ? $_POST['chitiet'] : "Failed";
            
            $update = $connection->prepare("UPDATE SanPham SET TenSanPham = '".$name."', Gia = '".$gia."', HinhAnh = '".$hinhanh."', ChiTietSP = '".$chitiet."' where MaSP = '".$masp."'");
            $update->execute();

            header("location:XemHang.php");
        }  
    }
?>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sửa Hàng</title>
        <link href="style.css" rel="stylesheet" />
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <link type="text/css" rel="stylesheet" href="css/slick.css" />
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
        <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
    		    <!-- HEADER -->
			<header>
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="KhachHang.php" class="logo">
                                <img src="./img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-3">
                    </div>
                    <!-- /SEARCH BAR -->

                    <!-- ACCOUNT -->
                    <div class="col-md-6">
					<div class="header-search">
                            <form>
                                <input class="input" placeholder="Nhập nội dung tìm kiếm" style="border-radius: 30px 0 0 30px;">
                                <button class="search-btn">Tìm</button>
                            </form>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- /MAIN HEADER -->
    </header>
	<!-- /HEADER -->
    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li><a href="KhachHang.php"><i class="fas fa-house-user"></i> Trang chủ</a></li>
                    <li class="active"><a href="HangHoa.php"><i class="fas fa-sync-alt"></i> Cập nhập</a></li>
                    <li><a href="XemHang.php"><i class="fas fa-box-open"></i> Sản phẩm</a></li>
                    <li><a href="DanhsachKH.php"><i class="fas fa-address-book"></i> Khách hàng</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <div class="container panel panel-default" style="background-color: #74b9ff; margin-top: 50px;">
        <div class="panel-heading" style="background-color: #487eb0;">
            <h2>Cập Nhập Thông Tin Hàng</h2>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="col-md-4 panel-body">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $rs['MaSP']?>">
                <label for="name">Tên sản phẩm</label>
                <input type="text" class="form-control" id="input" placeholder="Tên sản phẩm" name="name" value="<?php echo $rs['TenSanPham']?>">
            </div>
            <div class="form-group">
                <label for="name">Giá</label>
                <input type="text" class="form-control" id="input" placeholder=".......... VNĐ" name="gia" value="<?php echo $rs['Gia']?>">
            </div>
        </div>
        <div class="col-md-4 panel-body">
            <div class="form-group">
                <label for="name">Hình ảnh sản phẩm</label>
                <input type="hidden" name="HA" value="<?php echo $rs['HinhAnh'] ?>"/>
                <input type="file" class="form-control" id="input" name="file">
            </div>
            <div class="form-group">
                <label for="">Ảnh cũ </label>
                <img src="img/<?php echo $rs['HinhAnh']?>" style="width: 190px; height: 150px;">
            </div>
        </div>
        <div class="col-md-4 panel-body">
            <div class="form-group">
                <label for="name">Chi tiết sản phẩm</label>
                <input type="text" class="form-control" id="input" placeholder=".........." name="chitiet" value="<?php echo $rs['ChiTietSP']?>">
            </div>
        </div>
        <div class="container">
        <div class="col-md-3 buttom2">
            <button type="submit" class="btn btn-primary btn-block" id="buttom" name="SuaHang">Cập nhập</button>
        </div>
        </div>
        </form>
    </div>
</body>
</html>