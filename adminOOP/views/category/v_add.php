<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/28/2015
 * Time: 12:57 AM
 */
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị - Thêm danh mục sản phẩm - Danh sách</title>
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
            <div class="panel-heading">Thêm mới danh mục sản phẩm</div>
            <div class="panel-body">
                <form name="add" method="post">
                    <?php if(isset($_SESSION['success'])): ?>

                        <p style="color: green">Thêm mới danh mục sản phẩm thành công</p>
                        <?php unset($_SESSION['success']);?>
                    <?php endif;?>

                    <p>
                        <label>Tên danh mục</label>
                        <input class="form-control" type="text" name="name">
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