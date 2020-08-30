<?php require 'connect.php'; ?>

<?php
$id = !empty($_GET['id']) ? (int)$_GET['id'] : 0;
$quantity = !empty($_GET['quantity']) ? (int)$_GET['quantity'] : 1;
$action = !empty($_GET['action']) ? $_GET['action'] : 'add';
$query = "SELECT * FROM products where id = $id";
$result = $conn->query($query);
$pro = $result->fetch();

if ($pro && $action == 'add') {
	if (isset($_SESSION['cart'][$id])) {
		$_SESSION['cart'][$id]['quantity'] += $quantity;
	} else {
		$item = [
			'id' => $pro['id'],
			'name' => $pro['name'],
			'price' => $pro['price'],
			'details' => $pro['details'],
			'status' => $pro['status'],
			'images' => $pro['images'],
			'quantity' => $quantity
		];
		$_SESSION['cart'][$id] = $item;
	}
}
if ($pro && $action ==  'delete') {
	if (isset($_SESSION['cart'][$id])) {
		unset($_SESSION['cart'][$id]);
	}
}

echo '<pre>';
print_r($_SESSION['cart'][$id]);
header('location: checkout.php');
