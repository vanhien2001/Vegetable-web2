<?php
require_once "./config/function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vegetable adsgag</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,300;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/Signup_login.css">
    <link rel="stylesheet" href="./css/admin.css">


</head>

<body>
    <div class="main-content" id="MainContent">
        <header id="header">
            <div id="header-top">
                <div class="container">
                    <div class="row">
                        <div class="sayhi">
                            <h3>Cửa hàng chuyên cung cấp thực phẩm sạch!</h3>
                        </div>
                        <div class="others">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="./images/shipped.png" alt="shipped">
                                        <span>Kiểm tra đơn hàng</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="./images/plant.png" alt="plantCoin">
                                        <span>Xu</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div id="header-mid">
                        <a href="" style="z-index: -1;">
                            <div id="logo">
                                <img src="./images/logo.png" alt="Logo">
                            </div>
                        </a>

                        <form action="" class="search-form">
                            <input type="text" placeholder="Tìm kiếm: cà chua, thịt heo, rau cải,...">
                            <button type="submit">
                                <img src="./images/search.png" alt="search">
                                <span>Tìm kiếm</span>
                            </button>
                        </form>

                        <div id="groud-user-cart">
                            <div id="user">
                                <ul>
                                    <?php
                                    session_start();
                                    if(isset($_SESSION["sdt2"])){
                                        $name = $_SESSION["username"];
                                        if($_SESSION["admin"]==true){
                                            echo "<div class='username'>$name";
                                            echo "<div class='account'>";
                                            echo "<a href=''>Tài khoản</a>";
                                            echo "<a href='./cart.php'>Quản lí sản phẩm</a>";
                                            echo "<a href=''>Giỏ hàng</a>";
                                            echo "<a href='./config/logout.php'>Đăng xuất</a>";
                                            echo "</div>";
                                            echo "</div>";
                                        }else{
                                            echo "<div class='username'>$name";
                                            echo "<div class='account'>";
                                            echo "<a href=''>Tài khoản</a>";
                                            echo "<a href=''>Giỏ hàng</a>";
                                            echo "<a href='./config/logout.php'>Đăng xuất</a>";
                                            echo "</div>";
                                            echo "</div>";
                                        }
                                    }else{
                                        echo "<li><a href='#' id='login'>Đăng nhập</a></li>";
                                        echo "<li id='cheo'>/</li>";
                                        echo "<li><a href='#' id='signup'>Đăng ký</a></li>";
                                    }
                                    ?>

                                </ul>
                            </div>

                            <div id="cart">
                                <a href="">
                                    <img src="./images/shopping-cart.png" alt="shopping-cart">
                                    <span>2</span>
                                </a>
                            </div>

                        </div>

                    </div>
                    <nav id="menu-top">
                        <ul>
                            <li><a href="./index.php">Trang chủ</a></li>
                            <li><a href="">Nhà bán hàng</a></li>
                            <li class="product"><a href="">Gian hàng</a></li>
                            <li><a href="">Sự khác biệt</a></li>
                            <li><a href="">Tin tức</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Content -->
        <div id="content">
            <div class="section-1 section">
                <img src="./images/—Pngtree—fresh lemon fruit_3602986.png" style="position: absolute;top: 7%;right: -15%;width: 400px; z-index: -1;">
                <img src="./images/fruit-salad.png" style="position: absolute;width: 300px;top: -2%;right: 83%;z-index: -1;">
                <div class="container">
                    <div class="row">
                        <h2>Top Favorite Fruits</h2>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                        <div class="block col-md-12">
                            <div class="element col-md-2">
                                <a href="">
                                    <span class="b-img nv-mr-10">
                                        <img src="./images/b-img/icon-1_170x.png" alt="icon-1_170x.png">
                                    </span>
                                    <span class="name_link d-lock">Orange</span>
                                </a>
                            </div>
                            <div class="element col-md-2">
                                <a href="">
                                    <span class="b-img nv-mr-10">
                                        <img src="./images/b-img/icon-2_170x.png" alt="icon-2_170x.png">
                                    </span>
                                    <span class="name_link d-lock">Grape</span>
                                </a>
                            </div>
                            <div class="element col-md-2">
                                <a href="">
                                    <span class="b-img nv-mr-10">
                                        <img src="./images/b-img/icon-3_170x.png" alt="icon-3_170x.png">
                                    </span>
                                    <span class="name_link d-lock">Peach</span>
                                </a>
                            </div>
                            <div class="element col-md-2">
                                <a href="">
                                    <span class="b-img nv-mr-10">
                                        <img src="./images/b-img/icon-4_170x.png" alt="icon-4_170x.png">
                                    </span>
                                    <span class="name_link d-lock">Pineapple</span>
                                </a>
                            </div>

                            <div class="element col-md-2">
                                <a href="">
                                    <span class="b-img nv-mr-10">
                                        <img src="./images/b-img/icon-5_170x.png" alt="icon-5_170x.png">
                                    </span>
                                    <span class="name_link d-lock">Apple</span>
                                </a>
                            </div>

                            <div class="element col-md-2">
                                <a href="">
                                    <span class="b-img nv-mr-10">
                                        <img src="./images/b-img/icon-6_170x.png" alt="icon-6_170x.png">
                                    </span>
                                    <span class="name_link d-lock">Tomato</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="section-2 section" style="background-image: url(./images/img-8_1920x.webp);">
                <h3>Quản lý thông tin sản phẩm</h3>

                <div class="list_container">                  
                    <table class="table_list">
                        <tr>
                            <th width="5%">Stt</th>
                            <th width="10%">Hình ảnh</th>
                            <th width="25%">Tên sản phẩm</th>
                            <th width="20%">Loại</th>
                            <th width="25%">Nhà cung cấp</th>
                            <th width="10%">Giá</th>
                            <th width="5%">
                            </th>
                        </tr>
                        <?php
                        if (isset($_POST['id'])) {
                            $sql = 'delete from wishlist where id = '.$_POST['id'];
                            execute($sql);
                        }
                        if (isset($_GET['s']) && $_GET['s'] != '') {
                            $sql = 'select * from wishlist where `Tên sản phẩm` like "%' . $_GET['s'] . '%"';
                        } else {
                            $sql = 'SELECT p.*,c.`Tên danh mục` FROM `wishlist` as p LEFT JOIN `category` as c on p.`id category`=c.id';
                        }

                        $product_list = executeResult($sql);

                        $index = 1;
                        foreach ($product_list as $product) {
                           echo "<tr>
                                <td width='5%'>".$index++."</td>
                                <td width='10%'><img class='img_product' src='".$product['Img']."' alt='Ảnh sản phẩm'></td>
                                <td width='15%'>".$product['Tên sản phẩm']."</td>
                                <td width='20%'>".$product['Tên danh mục']."</td>
                                <td width='25%'>".$product['id']."</td>
                                <td width='10%'>".$product['Giá']."đ</td>
                                <td width='5%'>
                                    <form action='./cart.php?id=".$product['id']."' method='post'>
                                        <input type='checkbox' name='' id=''>
                                        <input id='' name='id' type='text' value='".$product['id']."'hidden>
                                        <button class='btn_tb btn_delete'>Xoá</button>
                                    </form>
                                </td>
                            </tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>

        </div>

        <footer id="footer">
            <div class="footer_newsletter" style="background-image: url(./images/img-9_1920x.webp);">
                <div class="container">
                    <div class="row">
                        <div class="b_news">
                            <img src="./images/icon-7_120x.webp" alt="icon-7" class="icon-7">
                            <h3 class="title-block">Đăng ký nhận tin khuyến mại</h3>
                            <form>
                                <div class="input-group">
                                    <input type="email" placeholder="Nhập email của bạn" class="email_footer">
                                    <button class="button_footer">Đăng ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="footer_policy" style="background-image: url(./images/img-10_1920x.webp)">
                    <div class="container">
                        <div class="row">
                            <div class="bgroup_policy col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="bicon_policy" style="background-image: url(./images/icon-policy/bicon_policy_85x.webp)">
                                    <img src="./images/icon-policy/p-1_45x.webp" class="icon_policy">
                                </div>
                                <h4 class="title_policy">Thanh toán khi giao hàng</h4>
                            </div>
                            <div class="bgroup_policy col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="bicon_policy" style="background-image: url(./images/icon-policy/bicon_policy_85x.webp)">
                                    <img src="./images/icon-policy/p-2_45x.webp" class="icon_policy-mid icon_policy">
                                </div>
                                <h4 class="title_policy">Giao hàng miễn phí</h4>
                            </div>
                            <div class="bgroup_policy col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="bicon_policy" style="background-image: url(./images/icon-policy/bicon_policy_85x.webp)">
                                    <img src="./images/icon-policy/p-3_45x.webp" class="icon_policy">
                                </div>
                                <h4 class="title_policy">Chính sách hoàn tiền</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-layout">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <a href="" class="system">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3 class="location">Hệ thống cửa hàng</h3>
                            </a>
                            <p class="address">Địa chỉ: <span>237 An Dương Vương, Quận 5, TpHCM.</span></p>
                            <p class="hotline">Hotline: <span>0962711xxx</span></p>
                            <p class="email">Email: <span>hiencute@gmail.com</span></p>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <h4 class="collapsed">Hỗ trợ khách hàng</h4>
                            <ul class="list-menu">
                                <li class="li_menu"><a href="">Trang chủ</a></li>
                                <li class="li_menu"><a href="">Giới thiệu</a></li>
                                <li class="li_menu"><a href="">Gian hàng</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <h4 class="collapsed">Chính sách</h4>
                            <ul class="list-menu">
                                <li class="li_menu"><a href="">Chính sách đổi hàng</a></li>
                                <li class="li_menu"><a href="">Chính sách bảo hành</a></li>
                                <li class="li_menu"><a href="">Chính sách hội viên</a></li>
                                <li class="li_menu"><a href="">Chính sách giao nhận</a></li>
                                <li class="li_menu"><a href="">Hướng dẫn mua hàng</a></li>
                                <li class="li_menu"><a href="">Hướng dẫn thanh toán</a></li>
                                <li class="li_menu"><a href="">Chính sách bảo mật thông tin</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <h4 class="collapsed">Kết nối với chúng tôi</h4>
                            <ul class="follow_option">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-google"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                <li><a href=""><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <div class="payment_methods">
                                <h4 class="collapsed">Phương thức thanh toán</h4>
                                <a href=""><img src="./images/i_payment.png" style="width: 92%; margin-left: -18px;"></a>
                                <a href=""><img src="./images/bct.png" style="margin-left: -18px;"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer_copyright pt-20 pb-20 pb-sm-80">
                <div class="container">
                    <span class="full_copyright">
                        <span class="mobile">
                            © 2021 DONGPHUONG <span class="hidden-xs">|</span>
                        </span>
                        <span class="opacity1">Thiết kế bởi</span>
                        <a href="index.html" title="Chợ Đông Phương">NHÓM 123</a>
                    </span>
                </div>
            </div>
        </footer>
    </div>

    <div id="_desktop_back_top" style="display: block;">
        <div id="back-top">
            <span><i class="fas fa-chevron-up"></i></span>
        </div>
    </div>
    <script src="./js/main.js"></script>
    <script src="./js/my_jquery_functions.js"></script>
</body>

</html>