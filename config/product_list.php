<?php
require_once "./function.php";
session_start();

if (isset($_GET["id"])) {
    $_SESSION["id_category"]=$_GET["id"];
}else{
    $_SESSION["id_category"]="";
}
header("Location: ../index.php");
