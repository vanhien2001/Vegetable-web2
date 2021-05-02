<?php
require_once "./config/function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Page admin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/Signup_login.css">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/edit.css">
    <link rel="stylesheet" href="css/page_admin.css">
</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="header-flex">
                        <span class="logo">
                            <a href="./index.php" class="logo-text">DONGPHUONG<span>ADMIN</span></a>
                        </span>

                        <span class="sayhi">
                            <i class="fas fa-user-check"></i>
                            <span>Xin chào, <span id="username">Thành viên</span></span>
                            <i class="fas fa-caret-down"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="col-left" style="border-right: 2px solid #222;">
                <div class="div-input_search">
                    <form class="form-input_search">
                        <input type="text" class="input_search" placeholder="Tìm kiếm">
                        <button type="submit" class="button_search"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="clear"></div>
                <hr>
                <div class="menu_control">
                    <ul>
                        <li><a href="./page_admin.php"><i class="fas fa-tachometer-alt"></i>Trang chủ quản trị</a></li>
                        <li><a><i class="fas fa-check-circle"></i>Quản lý thành viên</a></li>
                        <li class="category"><a><i class="fas fa-check-circle"></i>Quản lý danh mục</a></li>
                        <li class="product"><a><i class="fab fa-product-hunt"></i>Quản lý sản phẩm</a></li>
                        <li><a><i class="fas fa-comments"></i>Quản lý bình luận</a></li>
                        <li><a><i class="fas fa-ad"></i>Quản lý quảng cáo</a></li>
                        <li><a><i class="fas fa-cog"></i>Cấu hình</a></li>
                    </ul>
                </div>
                <hr>

                <div class="logout">
                    <ul>
                        <li><a><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-right">
                <div class="section-2 section list_category list" style="background-image: url(./images/img-8_1920x.webp);">
                    <h3>Quản lý thông tin danh mục</h3>

                    <div class="list_container">
                        <div class="list_search">
                            <form action="./page_admin.php?" method="geadmin.phpt">
                                <input class="" name="s_c" type="text">
                                <button class="btn search">Tìm kiếm</button>
                            </form>
                            <a href="./page_admin.php?id_category=" class="btn add_category">+ Thêm mới</a>
                        </div>

                        <table class="table_list">
                            <tr>
                                <th width="5%">Stt</th>
                                <th width="30%">Tên danh mục</th>
                                <th width="20%">Số lượng sản phẩm</th>
                                <th width="40%">Sản phẩm</th>
                                <th width="5%">
                                </th>
                            </tr>
                            <?php
                            if (isset($_POST['id_category'])) {
                                $sql = 'SELECT * FROM product WHERE `id category` ='. $_POST['id_category'];
                                $list_delete = executeResult($sql);
                                foreach($list_delete as $delete){
                                    $sql = 'DELETE FROM wishlist WHERE `id product` ='. $delete['id'];
                                    execute($sql);
                                }
                                $sql = 'delete from product where `id category`= ' . $_POST['id_category'];
                                execute($sql);
                                $sql = 'delete from category where id = ' . $_POST['id_category'];
                                execute($sql);
                            }
                            if (isset($_GET['s_c']) && $_GET['s_c'] != '') {
                                echo "<style>
                                    .list_category{
                                        display: block;
                                    }";
                                $sql = "select * from category where `Tên danh mục` like '%" . $_GET['s_c'] . "%'";
                            } else {
                                $sql = 'SELECT * FROM `category`';
                            }
                            
                            $category_list = executeResult($sql);

                            $index = 1;
                            foreach ($category_list as $category) {
                                $sql = "SELECT count(*) quantity FROM `product` p where p.`id category`=" . $category['id'];
                                $quantity = getData($sql);
                                $sql = "SELECT * FROM `product` p where p.`id category`=" . $category['id'];
                                $product_list = executeResult($sql);
                                echo "<tr>
                                            <td width='5%' >" . $index++ . "</td>
                                            <td width='30%' >" . $category['Tên danh mục'] . "</td>
                                            <td width='20%' >" . $quantity['quantity'] . "</td>
                                            <td width='40%'>";
                                foreach ($product_list as $product) {
                                    echo "<div class='link_product'><a href=''>".$product['Tên sản phẩm']."</a></div>";
                                    }
                                echo "</td>
                                    <td class='category_btn' width='5%'>
                                    <a href='./page_admin.php?id_category=" . $category['id'] . "' class='btn_tb btn_edit'>Sửa</a>
                                    <form action='./page_admin.php' method='post'>
                                    <input id='' name='id_category' type='text' value='" . $category['id'] . "'hidden>
                                    <button class='btn_tb btn_delete'>Xoá</button>
                                    </form>
                                    </td>
                                    </tr>";
                            }
                            ?>
                        </table>
                    </div>

                </div>
                
                <div class="section-2 section edit_container edit_category" style="background-image: url(./images/img-8_1920x.webp);">
                    <?php
                    $id = "";
                    $name = "";
                    if (isset($_GET["id_category"])) {
                        echo "<style>
                        .edit_category{
                            display: flex;
                        }
                    </style>";
                        $id = $_GET["id_category"];
                        $sql = "SELECT * FROM category where id='$id'";
                        $category = getData($sql);
                        if ($category) {
                            echo "<h3>Sửa thông tin danh mục</h3>";
                            $name = $category["Tên danh mục"];
                        } else {
                            echo "<h3>Thêm danh mục</h3>";
                        }
                    }
                    echo "<form action='./config/edit_category.php' method='POST' class='form_edit'>

                                <div class='form-group'>
                                    <input id='' name='id' type='text' value='" . $id . "'hidden>
                                    <label for='sdt2' class='form-label'>Tên danh mục</label>
                                    <input id='sdt2' name='name' type='text' value='" . $name . "' class='form-control'>
                                </div>
                                <button class='form-submit'>Xác nhận</button>
                            </form> ";

                    ?>

                </div>

                <div class="section-2 section list_product list" style="background-image: url(./images/img-8_1920x.webp);">
                    <h3>Quản lý thông tin sản phẩm</h3>

                    <div class="list_container">
                        <div class="list_search">
                            <form action="./page_admin.php" method="geadmin.phpt">
                                <input class="" name="s" type="text">
                                <button class="btn search">Tìm kiếm</button>
                            </form>
                            <a href="./page_admin.php?id=" class="btn add_product">+ Thêm mới</a>
                        </div>

                        <table class="table_list">
                            <tr>
                                <th width="5%">Stt</th>
                                <th width="10%">Hình ảnh</th>
                                <th width="15%">Tên sản phẩm</th>
                                <th width="10%">Loại</th>
                                <th width="30%">Mô tả</th>
                                <th width="15%">Nhà cung cấp</th>
                                <th width="10%">Giá</th>
                                <th width="5%">
                                </th>
                            </tr>
                            <?php
                            if (isset($_POST['id'])) {
                                $sql = 'DELETE FROM wishlist WHERE `id product` ='. $_POST['id'];
                                execute($sql);
                                $sql = 'delete from product where id = ' . $_POST['id'];
                                execute($sql);
                            }
                            if (isset($_GET['s']) && $_GET['s'] != '') {
                                echo "<style>
                                    .list_product{
                                        display: block;
                                    }";
                                $sql = 'SELECT p.*,c.`Tên danh mục` FROM `product` as p LEFT JOIN `category` as c on p.`id category`=c.id where p.`Tên sản phẩm` like "%' . $_GET['s'] . '%"';
                            } else {
                                $sql = 'SELECT p.*,c.`Tên danh mục` FROM `product` as p LEFT JOIN `category` as c on p.`id category`=c.id';
                            }

                            $product_list = executeResult($sql);

                            $index = 1;
                            foreach ($product_list as $product) {
                                echo "<tr>
                                    <td width='5%'>" . $index++ . "</td>
                                    <td width='10%'><img class='img_product' src='" . $product['Img'] . "' alt='Ảnh sản phẩm'></td>
                                    <td width='15%'>" . $product['Tên sản phẩm'] . "</td>
                                    <td width='10%'>" . $product['Tên danh mục'] . "</td>
                                    <td width='30%'>" . $product['Description'] . "</td>
                                    <td width='15%'>" . $product['Supplier'] . "</td>
                                    <td width='10%'>" . $product['Giá'] . "đ</td>
                                    <td width='5%'>
                                        <a href='./page_admin.php?id=" . $product['id'] . "' class='btn_tb btn_edit'>Sửa</a>
                                        <form action='./page_admin.php' method='post'>
                                            <input id='' name='id' type='text' value='" . $product['id'] . "'hidden>
                                            <button class='btn_tb btn_delete'>Xoá</button>
                                        </form>
                                    </td>
                                </tr>";
                            }
                            ?>
                        </table>
                    </div>

                </div>

                <div class="section-2 section edit_container edit_product" style="background-image: url(./images/img-8_1920x.webp);">
                    <?php
                    $id = "";
                    $name = "";
                    $description = "";
                    $supplier = "";
                    $cost = "";
                    $img = "";
                    if (isset($_GET["id"])) {
                        echo "<style>
                        .edit_product{
                            display: flex;
                        }
                    </style>";
                        $id = $_GET["id"];
                        $sql = "SELECT * FROM product where id='$id'";
                        $product = getData($sql);
                        if ($product) {
                            echo "<h3>Sửa thông tin sản phẩm</h3>";
                            $name = $product["Tên sản phẩm"];
                            $description = $product["Description"];
                            $supplier = $product["Supplier"];
                            $img = $product["Img"];
                            $cost = $product["Giá"];
                        }
                    } else {
                        echo "<h3>Thêm sản phẩm</h3>";
                    }
                    $string = "";
                    $sql1 = "SELECT * FROM category";
                    $category = executeResult($sql1);
                    foreach ($category as $value) {
                        $string .= "<option value='" . $value['id'] . "'>" . $value['Tên danh mục'] . "</option>";
                    }
                    echo "<form action='./config/edit.php' method='POST' class='form_edit' enctype='multipart/form-data'>

                                <div class='form-group'>
                                    <input id='' name='id' type='text' value='" . $id . "'hidden>
                                    <label for='sdt2' class='form-label'>Tên sản phẩm</label>
                                    <input id='sdt2' name='name' type='text' value='" . $name . "' class='form-control'>
                                </div>

                                <div class='form-group'>
                                    <label for='img' class='form-label'>Chọn ảnh :</label>
                                    <input type='file' name='img' value='" . $img . "'>
                                </div>

                                <div class='form-group'>
                                    <label class='form-label' for='category'>Loại sản phẩm:</label>
                                    <select name='category' id='category' class='form-control'>" . $string
                        . "</select>
                                </div>
                                <div class='form-group'>
                                    <label for='password2' class='form-label'>Mô tả</label>
                                    <textarea id='password2' rows='5' name='description' type='text' class='form-control'>" . $description . "</textarea>
                                </div>
                                <div class='form-group'>
                                    <label for='password2' class='form-label'>Nhà cung cấp</label>
                                    <input id='password2' name='supplier' type='text' value='" . $supplier . "' class='form-control'>
                                </div>
                                <div class='form-group'>
                                    <label for='password2' class='form-label'>Giá</label>
                                    <input id='password2' name='cost' type='text' value='" . $cost . "' class='form-control'>
                                </div>
                                <button class='form-submit'>Xác nhận</button>
                            </form> ";

                    ?>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <script>
        var noneActive = () => {
            document.querySelectorAll(".menu_control li").forEach((li)=>{
                li.classList.remove("active");
            })
        } 
        var noneList = () => {
            document.querySelectorAll(".list").forEach((section)=>{
                section.style.display="none";
            })
        } 
        
        var noneEdit = () => {
            document.querySelectorAll(".edit_container").forEach((edit)=>{
                edit.style.display="none";
            })
        } 
        var category = document.querySelector(".menu_control .category")
        category.onclick = () => {
            noneActive();
            category.classList.add("active");
            noneList();
            noneEdit();
            document.querySelector(".list_category").style.display = "block";
        }
        document.querySelector(".add_category").onclick = () => {
            noneList();
            noneEdit();
            document.querySelector(".edit_category").style.display = "flex";
        }


        var product = document.querySelector(".menu_control .product")
        product.onclick = () => {
            noneActive();
            product.classList.add("active");
            noneList();
            noneEdit();
            document.querySelector(".list_product").style.display = "block";
        }
        document.querySelector(".add_product").onclick = () => {
            noneList();
            noneEdit();
            document.querySelector(".edit_product").style.display = "flex";
        }
    </script>
</body>

</html>