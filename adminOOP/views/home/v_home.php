<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Quản trị</title>
    <link rel="stylesheet" type="text/css" href="<?php echo Config::SITE_URL.'/adminOOP/templates/css/bootstrap.min.css';?>">
    <script src="<?php echo Config::SITE_URL.'/adminOOP/templates/js/bootstrap.js';?>"></script>
    <script src="<?php echo Config::SITE_URL.'/adminOOP/templates/js/jquery.min.js';?>"></script>
    <link rel="shortcut icon" href="<?php echo Config::SITE_URL.'/adminOOP/images/icon/admin.ico';?>">
</head>
<body>
<?php include 'header.php'?>
<div class="container-fluid">
    <div class="col-md-3">
        <?php include 'leftbar.php'?>
    </div>
    <div class="col-md-9">
        <?php
        /*if($menu == 'listuser'){
            include SITE_URL.'/admin/user/list';
        }
        */
        ?>
    </div>
</div>
</body>
</html>