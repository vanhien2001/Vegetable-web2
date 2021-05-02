<?php
require_once "./function.php";
$id = "";
$name = "";

if (!empty($_POST)) {
	$id = '';

	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}

	$name = str_replace('\'', '\\\'', $name);

	if ($id != "") {
		$sql = "update category set `Tên danh mục` = '$name' where id = " . $id;
	} else {
		$sql = "insert into `category` (`Tên danh mục`) values ('$name')";
	}


	execute($sql);

	header("Location: ../page_admin.php");
	die();
}
