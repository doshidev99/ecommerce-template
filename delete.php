<?php require 'connect.php'; ?>

<?php


if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$delete = "DELETE FROM products WHERE id = $id";
	$conn->exec($delete);
	header('location: products.php');
}
?>