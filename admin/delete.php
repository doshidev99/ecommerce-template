<?php require '../connect.php'; ?>

<?php

$flag = $_SESSION['ss-admin'];

if (!$flag) {
	header("Location: login.php");
}
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$delete = "DELETE FROM products WHERE id = $id";
	$conn->exec($delete);
	header('location: index.php');
}
?>