<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị - Thành viên - Thêm mới</title>
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
        <div class="panel panel-success">
            <div class="panel-heading">
                <h1 class="panel-title">Thêm thành viên mới</h1>
            </div>
            <div class="panel-body">
                <form name="add" method="post" action="http://localhost:8080/WebGioiThieuSanPham/admin/controller/user/add.php">
                    <?php if(isset($_SESSION['success'])):?>
                        <p style="color: green"> Thành viên được thêm mới thành công</p>
                        <?php unset($_SESSION['success']);?>
                    <?php endif; ?>

                    <div class="form-group">
                        <label>Tên tài khoản: </label>
                        <input class="form-control" type="text" name="username" placeholder="Nhập tên tài khoản" />
                        <?php if($flag == 1):?>
                        <p style="color: red">Trùng tên đăng nhập</p>
                        <?php endif;?>
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu: </label>
                        <input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-group">
                        <label>Họ tên: </label>
                        <input class="form-control" type="text" name="fullname" placeholder="Nhập họ tên đầy đủ">
                    </div>
                    <div class="form-group">
                        <label>Email: </label>
                        <input class="form-control" type="email" name="email" placeholder="Nhập địa chỉ email">
                        <?php if($flag == 2):?>
                            <p style="color: red">Trùng tên email đăng ký</p>
                        <?php endif;?>
                    </div>
                    <p>
                        <label>Trạng thái: </label>
                        <input type="checkbox" name="status" value="1">
                    </p>
                    <p>
                        <button class="btn btn-success" type="submit">Thêm mới</button>
                    </p>
                </form>
            </div>
        </div>
</div>

</body>
</html>