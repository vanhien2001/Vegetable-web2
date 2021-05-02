<?php
require_once "./function.php";
session_start();
$id_user = $_GET["id_user"];
$id_product = $_GET["id_product"];

if (isset($id_user) && isset($id_product)) {
    $sql  = "INSERT INTO `wishlist`(`id user`, `id product`) VALUES ('$id_user', '$id_product')";
    $result = execute($sql);
}
header("Location: ../index.php");
