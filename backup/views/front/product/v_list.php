<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/30/2015
 * Time: 2:32 PM
 */



?>

<htm>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Website giới thiệu sản phẩm - Danh sách sản phẩm</title>
    </head>
    <body>
    <?php while($product_active = mysql_fetch_assoc($product_active_list)):  ?>
    <div>
        <p>
            <img src="<?php echo SITE_URL.'/userfile/'.$product_active['image']; ?>">
        </p>
        <h3>
            <a href="<?php echo SITE_URL.'/product-detail.php?product_id='.$product_active['product_id']; ?>"><?php echo $product_active['name']; ?></a>
        </h3>
        <p>
            <?php echo number_format($product_active['price'],0,'','.'); ?>
        </p>
    </div>
    <?php endwhile;?>
    </body>
</htm>