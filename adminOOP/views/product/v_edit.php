<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị - Sản phẩm - Chỉnh sửa</title>
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
    <div class="col-md-5">
        <div class="panel panel-primary">
            <div class="panel-heading">Chỉnh sửa sản phẩm sản phẩm</div>
            <div class="panel-body">
                <form class="form-horizontal" name="edit" method="post" enctype="multipart/form-data" action="">
                    <p>
                        <label>Danh mục:</label>
                        <select class="form-control" name="category_id">
                            <?php foreach($category_active_list as $category_active ): ?>
                                <option value="<?php echo $category_active->getCategoryId(); ?>"
                                    <?php echo ($product->getCategoryId() == $category_active->getCategoryId()) ? 'selected="selected"' : ''; ?>>
                                    <?php echo $category_active->getName(); ?>
                                </option>
                            <?php endforeach;?>
                        </select>
                    </p>
                    <p>
                        <label>Tên sản phẩm:</label>
                        <input class="form-control" type="text" name="name" value="<?php echo $product->getName(); ?>" />
                    </p>
                    <p>
                        <label>Chi tiết:</label>
                        <textarea class="form-control" name="detail"><?php echo $product->getDetail(); ?></textarea>
                    </p>
                    <p>
                        <label>Hình ảnh:</label>
                        <input type="file" name="image" />
                    </p>
                    <p>
                        <label>Giá bán:</label>
                        <input class="form-control" type="text" name="price" value=" <?php echo $product->getPrice(); ?>" />
                    </p>
                    <p>
                        <label>Trạng thái:</label>
                        <input type="checkbox" name="status" value="1" <?php echo ($product->getStatus() == 1) ? 'checked="checked"' : ''; ?> />
                    </p>
                    <p>
                        <button class="btn btn-success">Chỉnh sửa</button>
                    </p>

                </form>
            </div>
        </div>

    </div>
</div>
</body>
</html>