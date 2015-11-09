<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị - Sản phẩm - Danh sách sản phẩm</title>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL.'/admin/templates/css/bootstrap.min.css';?>">
    <script src="<?php echo SITE_URL.'/admin/templates/js/bootstrap.js';?>"></script>
    <script src="<?php echo SITE_URL.'/admin/templates/js/jquery.min.js';?>"></script>
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
                    <?php while($product = mysql_fetch_assoc($product_list)): ?>
                        <tr>
                            <td><?php echo $product['product_id']; ?></td>
                            <td><a href="<?php echo SITE_URL.'/admin/controller/product/edit.php?product_id='.$product['product_id']; ?>">
                                    <?php echo $product['name']?></a></td>
                            <td><img src="<?php echo SITE_URL.'/upload/product/'.$product['category_id'].'/'.$product['image']; ?>" width="70" height="70"></td>
                            <td><?php echo $product['detail'] ?></td>
                            <td><?php echo $product['price'] ?></td>
                            <td><?php echo ($product['status'] == 1) ? 'Kích hoạt' : 'Không kích hoạt'; ?></td>
                            <td><?php echo $product['created'] ?></td>
                            <td><?php echo $product['modified'] ?></td>
                            <td><a href="<?php echo SITE_URL.'/admin/controller/product/delete.php?product_id='.$product['product_id']; ?>">Xóa</a> </td>
                        </tr>
                    <?php endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>