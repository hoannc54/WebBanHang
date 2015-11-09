<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
    <title>Free Home Shoppe Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="<?php echo SITE_URL.'/views/front/templates/css/style.css'?>" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo SITE_URL.'/views/front/templates/css/slider.css'?>" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="<?php echo SITE_URL.'/views/front/templates/js/jquery-1.7.2.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo SITE_URL.'/views/front/templates//js/move-top.js'?>"></script>
    <script type="text/javascript" src="<?php echo SITE_URL.'/views/front/templates/js/easing.js'?>"></script>
    <script type="text/javascript" src="<?php echo SITE_URL.'/views/front/templates/js/startstop-slider.js'?>"></script>
</head>
<body>
<div class="wrap">
    <?php include 'views/front/common/header.php'; ?>
    <?php include 'views/front/common/main.php';?>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
<?php include 'views/front/common/footer.php';?>
</body>
</html>

