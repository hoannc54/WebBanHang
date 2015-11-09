<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị - Sản phẩm - Thêm mới</title>
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
    <div class="col-md-5">
        <div class="panel panel-primary">
            <div class="panel-heading">Thêm mới sản phẩm</div>
            <div class="panel-body">
                <form class="form-horizontal" name="add" method="post" action="" enctype="multipart/form-data">
                    <p>
                        <label>Danh mục sản phẩm</label>
                        <select class="form-control" name="category_id">
                            <?php while($category_active = mysql_fetch_assoc($category_active_list)): ?>
                                <option value=" <?php echo $category_active['category_id'] ?>"> <?php echo $category_active['name']; ?></option>
                            <?php endwhile;?>
                        </select>

                    </p>
                    <p>
                        <label>Tên sản phẩm</label>
                        <input class="form-control" type="text" name="name" value="">
                    </p>
                    <p>
                        <label>Chi tiết </label>
                        <textarea class="form-control" name="detail"></textarea>
                    </p>
                    <p>
                        <label>Hình ảnh của sản phẩm</label>
                        <input type="file" name="image">
                    </p>
                    <p>
                        <label>Giá bán</label>
                        <input class="form-control" type="text" name="price" value="">
                    </p>
                    <p>
                        <label>Trạng thái</label>
                        <input type="checkbox" name="status" value="1">
                    </p>
                    <p>
                        <button class="btn btn-success" type="submit">Thêm mới</button>
                    </p>
                </form>
            </div>
        </div>

    </div>
</div>

</body>
</html>