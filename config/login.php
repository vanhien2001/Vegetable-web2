<?php
require_once "./function.php";
session_start();
$sdt2 = $_POST["sdt2"];
$password2 = $_POST["password2"];

if (isset($sdt2) && isset($password2)) {
   $sql = "SELECT * FROM user where Sdt='$sdt2' AND password='$password2'";
   $result = getData($sql);
   if (isset($result)) {
      $_SESSION["sdt2"]=$sdt2;
      $_SESSION["id user"]=$result['id'];
      $_SESSION["username"]=$result["Họ tên"];
      $_SESSION["admin"]=$result["admin"];
      echo "ok";
      header("Location: ../index.php");
   } else {
      echo "fail";
      header("Location: ../index.php?kocodulieu");
   }
}

