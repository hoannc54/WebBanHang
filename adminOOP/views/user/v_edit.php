
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị - Thành viên - Chỉnh sửa</title>
    <link rel="stylesheet" type="text/css" href="../../templates/css/bootstrap.min.css">
    <script src="../../templates/js/bootstrap.js"></script>
    <script src="../../templates/js/jquery.min.js"></script>
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
                <h1 class="panel-title">Thông tin thành viên</h1>
            </div>
            <div class="panel-body">
                <form name="edit" method="post" action="">
                    <?php
                    if(isset($_SESSION['success'])){
                        echo "<p style='color: green;'>Thành viên đã được chỉnh sửa thành công</p>";
                        unset($_SESSION['success']);
                    }
                    ?>
                    <div class="form-group">
                        <label>Tài khoản: </label>
                        <input class="form-control" type="text" name="username" value="<?php echo $user->getUsername();?>">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu: </label>
                        <input class="form-control" type="password" name="password" value="">
                    </div>
                    <div class="form-group">
                        <label>Họ tên: </label>
                        <input class="form-control" type="text" name="fullname" value="<?php echo $user->getFullname();?>">
                    </div>
                    <div class="form-group">
                        <label>Email: </label>
                        <input class="form-control" type="email" name="email" value="<?php echo $user->getEmail();?>">
                    </div>
                    <p>
                        <label>Trạng thái</label>
                        <input type="checkbox" name="status" value="1" <?php echo ($user->getStatus() == 1) ? 'checked="checked"' : ''; ?>
                            >
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