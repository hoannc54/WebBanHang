<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Website giới thiệu sản phẩm - Chi tiết sản phẩm</title>
</head>
<body>

<div style="padding:10px;">
    <p>
        <img src="<?php echo SITE_URL . '/userfile/' . $product_active['image']; ?>" />
    </p>
    <h4><?php echo $product_active['name']; ?></h4>
    <p><?php echo number_format($product_active['price'], 0, '', '.'); ?> VNĐ</p>
</div>

</body>
</html>