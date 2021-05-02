<?php
require_once "./function.php";
$id = "";
$name = "";
$description = "";
$supplier = "";
$cost = "";
$category = "";
$img = "";
if (!empty($_POST)) {
	$id = '';

	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}
	if (isset($_POST['category'])) {
		$category = $_POST['category'];
	}

	if (isset($_POST['description'])) {
		$description = $_POST['description'];
	}

	if (isset($_POST['supplier'])) {
		$supplier = $_POST['supplier'];
	}
	if (isset($_FILES['img'])) {
		if ($_FILES['img']['error'] > 0){
        	echo "Upload lỗi rồi!";
		}else {
			$path = str_replace('\\', '/', dirname(getcwd(),1));
			move_uploaded_file($_FILES['img']['tmp_name'], $path.'/images/' . $_FILES['img']['name']);
			$img ='./images/' . $_FILES['img']['name'];
		}
	}

	if (isset($_POST['cost'])) {
		$cost = $_POST['cost'];
	}

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}

	$name = str_replace('\'', '\\\'', $name);
	$description = str_replace('\'', '\\\'', $description);
	$supplier = str_replace('\'', '\\\'', $supplier);
	$cost = str_replace('\'', '\\\'', $cost);

	if ($id != "") {
		$sql = "update product set `Tên sản phẩm` = '$name', `id category`='$category',`Img`='$img',Description = '$description', Supplier = '$supplier', Giá = '$cost' where id = " . $id;
	} else {
		$sql = "insert into `product` (`Tên sản phẩm`,`id category`,`Img` ,`Description`, `Supplier`,`Giá`) values ('$name','$category' ,'$img','$description', '$supplier','$cost')";
	}


	execute($sql);

	header("Location: ../page_admin.php");
	die();
}
