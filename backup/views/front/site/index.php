<html>
<head>
    <title>
        Mobile Shop
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo SITE_URL.'/views/front/site/css/style.css'?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo SITE_URL.'/views/front/site/css/slider.css'?>" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="<?php echo SITE_URL.'/views/front/site/js/jquery-1.7.2.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo SITE_URL.'/views/front/site//js/move-top.js'?>"></script>
    <script type="text/javascript" src="<?php echo SITE_URL.'/views/front/site/js/easing.js'?>"></script>
    <script type="text/javascript" src="<?php echo SITE_URL.'/views/front/site/js/startstop-slider.js'?>"></script>
</head>
<body>
<!-- Header trang -->
<div class="wrap">
    <div class="header">
        <div class="header-1">
            <div class="call">
                <p><span>Need help</span>
                    Call us
                    <span> 01648998623</span>
                </p>
            </div>
            <div class="account">
                <ul>
                    <li><a href="#">Đăng ký</a> </li>
                    <li><a href="#">Đăng nhập</a> </li>
                </ul>
            </div>
        </div>
<!--        <div class="header-2">-->
<!--            <div class="logo">-->
<!--                <a href="#"><img src="images/logo.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="cart">-->
<!--                <p>Welcome to our Store!-->
<!--                    <span> Giỏ hàng: </span>-->
<!--                <div class="dropdown-cart">Số sản phẩm : 0 - 0 vnđ-->
<!--                    <ul>-->
<!--                        <li> Bạn chưa chọn sản phẩm nào</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </p>-->
<!---->
<!--        </div>-->
<!---->
<!--        </div>-->
        <div class="header-3">
            <div class="menu">
                <ul>
                    <li class="active"><a href="#">Trang chủ</a></li>
                    <li><a href="#">Thông tin</a></li>
                    <li><a href="#">Giao hàng</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Liên hệ</a></li>
                    <div style="clear: both"></div>
                </ul>
            </div>
            <div class="search_box">
                <form>
                    <input type="text" value="Search">
                    <input type="submit" value="">
                </form>
            </div>
        </div>

    </div>
<!--    Nội dung-->
    <div class="main">
        <div class="content">
            <div class="content1">
                <div class="heading">
                    <h2>Sản phẩm mới</h2>
                </div>
            </div>
<!--            Hiển thị 4 sản phẩm mới nhất-->
            <?php //while($product_latest=mysql_fetch_assoc($product_latest_list)):?>
            <div class="section group">
                <div class="grid_1_of_4">
                    <a href="#"><img src="<?php echo SITE_URL.'/views/front/site/images/feature-pic1.jpg'?>"></a>
                    <h2>Sản phẩm 1</h2>
                    <div class="price-details">
                        <div class="price-number">
                            3000000 vnđ
                        </div>
                        <div class="add-cart">
                            <h4><a href="#">Thêm vào giỏ</a> </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section group">
                <div class="grid_1_of_4">
                    <a href="#"><img src="<?php echo SITE_URL.'/views/front/site/images/feature-pic1.jpg'?>"></a>
                    <h2>Sản phẩm 1</h2>
                    <div class="price-details">
                        <div class="price-number">
                            3000000 vnđ
                        </div>
                        <div class="add-cart">
                            <h4><a href="#">Thêm vào giỏ</a> </h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>