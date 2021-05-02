<?php
session_start();
$fullname = $_POST['fullname'];
$sdt = $_POST['sdt'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];
$connect = new mysqli('localhost', 'NVH', 'vanhien735', 'web2');
function SdtExist($connect,$Sdt){
    $sql = "SELECT * FROM user where sdt='$Sdt';";
    $query = $connect->query($sql);
    $data = $query->fetch_assoc();
    if($data){
        return true;
    }
    return false;
}

function password_match($password,$password_confirmation){
    if($password===$password_confirmation){
        return true;
    }
    return false;
}
if (!$connect) {
    die("Connection failed: " . $connect->connect_error);
}
if (SdtExist($connect,$sdt)) {
    $_SESSION["erorr"]="Số điện thoại đã tồn tại";
    header("Location: ../index.php?erorr=Số điện thoại đã tồn tại");
}elseif($fullname==""){
    $_SESSION["erorr"]="Tên không được bỏ trống";
    header("Location: ../index.php?erorr=Tên không được bỏ trống");
}elseif(password_match($password,$password_confirmation)){
    $sql_1  = "INSERT INTO `user`(`Họ tên`, `Sdt`,`password`) VALUES ('$fullname', '$sdt','$password');";
    if ($connect->query($sql_1)) {
        header("Location: ../index.php?Signup_sucessfully");
    } else {
        echo "Error: <br>" . $connect->error;
    }
}else{
    $_SESSION["erorr"]="Mật khẩu không khớp";
    header("Location: ../index.php?erorr=Mật khẩu không khớp");
}

$connect->close();
