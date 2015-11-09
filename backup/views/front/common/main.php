<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Sản phẩm mới</h3>
            </div>
            <div class="see">
                <p><a href="#">See all Products</a></p>
            </div>
            <div class="clear"></div>
        </div>

        <div class="section group">
<!--            Hiển thị danh sách 4 sản phẩm mới nhất-->
            <?php while($product_latest = mysql_fetch_assoc($product_latest_list)):?>
            <div class="grid_1_of_4 images_1_of_4">
                <a href="preview.html"><img src="<?php echo SITE_URL.'/userfile/'.$product_latest['image']?>" alt="" /></a>
                <h2><?php echo $product_latest['name']; ?></h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees"><?php echo $product_latest['price'];?></span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="preview.html">Add to Cart</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>
            <?php endwhile;?>
        <div class="content_bottom">
            <div class="heading">
                <h3>Điện lạnh</h3>
            </div>
            <div class="see">
                <p><a href="#">See all Products</a></p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <div class="grid_1_of_4 images_1_of_4">
                <a href="preview.html"><img src="images/new-pic1.jpg" alt="" /></a>
                <h2>Lorem Ipsum is simply </h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">$849.99</span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="preview.html">Add to Cart</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <a href="preview.html"><img src="images/new-pic2.jpg" alt="" /></a>
                <h2>Lorem Ipsum is simply </h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">$599.99</span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="preview.html">Add to Cart</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <a href="preview.html"><img src="images/new-pic4.jpg" alt="" /></a>
                <h2>Lorem Ipsum is simply </h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">$799.99</span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="preview.html">Add to Cart</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="grid_1_of_4 images_1_of_4">
                <a href="preview.html"><img src="images/new-pic3.jpg" alt="" /></a>
                <h2>Lorem Ipsum is simply </h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">$899.99</span></p>
                    </div>
                    <div class="add-cart">
                        <h4><a href="preview.html">Add to Cart</a></h4>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>