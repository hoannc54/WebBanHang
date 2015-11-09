<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị - Sản phẩm - Danh sách sản phẩm</title>
    <link rel="stylesheet" type="text/css" href="<?php echo Config::SITE_URL.'/admin/templates/css/bootstrap.min.css';?>">
    <script src="<?php echo Config::SITE_URL.'/admin/templates/js/bootstrap.js';?>"></script>
    <script src="<?php echo Config::SITE_URL.'/admin/templates/js/jquery.min.js';?>"></script>
</head>
<body>
<?php include '../../views/home/header.php';?>
<div class="container-fluid">
    <div class="col-md-3">
        <?php include '../../views/home/leftbar.php';?>
    </div>
    <div class="col-md-9">
        <div class="panel panel-primary">
            <div class="panel-heading">Danh mục sản phẩm</div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Thông tin sản phẩmi</th>
                    <th>Giá sản phẩm</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Ngày chỉnh sửa</th>
                    <th>Tác vụ</th>
                    </thead>
                    <tbody>
                    <?php foreach($productList as $product): ?>
                        <tr>
                            <td><?php echo $product->getProductId(); ?></td>
                            <td><a href="<?php echo Config::SITE_URL.'/adminOOP/controller/product/edit.php?product_id='.$product->getProductId(); ?>">
                                    <?php echo $product->getName();?></a></td>
                            <td><img src="<?php echo Config::SITE_URL.'/upload/product/'.$product->getCategoryId().'/'.$product->getImage(); ?>" width="70" height="70"></td>
                            <td><?php echo $product->getDetail(); ?></td>
                            <td><?php echo $product->getPrice(); ?></td>
                            <td><?php echo ($product->getStatus() == 1) ? 'Kích hoạt' : 'Không kích hoạt'; ?></td>
                            <td><?php echo $product->getCreated(); ?></td>
                            <td><?php echo $product->getModified(); ?></td>
                            <td><a href="<?php echo Config::SITE_URL.'/adminOOP/controller/product/delete.php?product_id='.$product->getProductId(); ?>">Xóa</a> </td>

                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>