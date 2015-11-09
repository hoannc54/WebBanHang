<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị - Danh mục sản phẩm - Chỉnh sửa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL.'/templates/css/bootstrap.min.css';?>">
    <script src="<?php echo SITE_URL.'/templates/js/bootstrap.js';?>"></script>
    <script src="<?php echo SITE_URL.'/templates/js/jquery.min.js';?>"></script>
</head>
<body>
<?php include '../../views/admin/home/header.php';?>
<div class="container-fluid">
    <div class="col-md-3">
        <?php include '../../views/admin/home/leftbar.php';?>
    </div>
    <div class="col-md-5">
        <div class="panel panel-primary">
            <div class="panel-heading">Chỉnh sửa danh mục sản phẩm</div>
            <div class="panel-body">
                <form class="form-horizontal" name="edit" method="post" action="">
                    <?php if(isset($_SESSION['success'])): ?>
                        <p style="color:green;">Danh mục sản phẩm đã được chỉnh sửa thành công!</p>
                        <?php unset($_SESSION['success']); ?>
                    <?php endif; ?>

                    <p>
                        <label>Tên danh mục:</label>
                        <input class="form-control" type="text" name="name" value="<?php echo $category['name']; ?>" />
                    </p>
                    <p>
                        <label>Trạng thái:</label>
                        <input type="checkbox" name="status" value="1" <?php echo ($category['status'] == 1) ? 'checked="checked"' : ''; ?> />
                    </p>
                    <p>
                        <button class="btn btn-success" type="submit">Chỉnh sửa</button>
                    </p>
                </form>
            </div>
        </div>

    </div>
</div>

</body>
</html>