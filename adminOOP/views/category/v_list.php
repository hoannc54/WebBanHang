<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/27/2015
 * Time: 11:52 PM
 *Giao diện của trang danh sách danh mục sản phẩm
 */
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị - Danh mục sản phẩm - Danh sách</title>
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
            <div class="panel-heading">Danh mục sảnh phẩm</div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Ngày chỉnh sửa</th>
                    <th>Tác vụ</th>
                    </thead>
                    <tbody>
                    <?php foreach($categoryList as $category): ?>
                        <tr>
                            <td><?php echo $category->getCategoryId(); ?></td>
                            <td><a href="<?php echo Config::SITE_URL.'/admin/controller/category/edit.php?category_id='.$category->getCategoryId(); ?>">
                                    <?php echo $category->getName()?></a></td>
                            <td><?php echo ($category->getStatus() == 1) ? 'Kích hoạt' : 'Không kích hoạt'; ?></td>
                            <td><?php echo $category->getCreated() ?></td>
                            <td><?php echo $category->getModified() ?></td>
                            <td><a href="<?php echo Config::SITE_URL.'/admin/controller/category/delete.php?category_id='.$category->getCategoryId(); ?>">Xóa</a> </td>
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