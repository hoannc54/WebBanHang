<?php
//Require các file cần thiết
require 'configs/config.php';
require 'libraries/connect.php';
require 'models/product.php';
require 'models/category.php';


$category_active_list = GetCategoryActiveList();
$product_latest_list = GetProductLatestList();
//Giao diện
//require 'views/front/common/menu.php';
//require 'views/front/v_home.php';
?>
<html>
<head>
    <title>Free Home Shoppe Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo SITE_URL.'/sites/templates/css/style.css'?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo SITE_URL.'/sites/templates/css/slider.css'?>" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="<?php echo SITE_URL.'/sites/templates/js/jquery-1.7.2.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo SITE_URL.'/sites/templates//js/move-top.js';?>"></script>
    <script type="text/javascript" src="<?php echo SITE_URL.'/sites/templates/js/easing.js';?>"></script>
    <script type="text/javascript" src="<?php echo SITE_URL.'/sites/templates/js/startstop-slider.js';?>"></script>
</head>
<body>
<div class="wrap">
    <?php include 'header.php'; ?>
    <?php include 'main.php';?>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
<?php include 'footer.php';?>
</body>
</html>

