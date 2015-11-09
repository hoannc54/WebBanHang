<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 10/15/2015
 * Time: 12:58 AM
 */
//require '../../config/Config.php';
?>

<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
    <title>Quản trị - Đăng nhập </title>
    <link rel="stylesheet" type="text/css" href="../../templates/css/bootstrap.min.css">
    <script src="../../templates/js/bootstrap.js"></script>
    <script src="../../templates/js/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h1 class="panel-title">Trang đăng nhập</h1>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" name="login" method="POST" action="">
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </span>
                            <input class="form-control" type="text" name="username" placeholder="Tên đăng nhập">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="glyphicon glyphicon-lock"></i> </span>
                            <input class="form-control" type="password" name="password" placeholder="Mật khẩu">
                        </div>
                        <p>
                            <?php
                            if(isset($error) && $error == TRUE): ?>
                        <p style="color: red"> Tài khoản hoặc Mật khẩu không đúng </p>
                        <?php endif;?>
                        </p>

                            <button class="btn btn-success" type="submit">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>