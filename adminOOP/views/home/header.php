<nav class="navbar navbar-default" >
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo Config::SITE_URL.'/adminOOP/index.php';?>">Trang quản trị </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li> <a href="#">Giới thiệu dự án </a> </li>
            <li> <a href="#">Xin chào <?php //echo $user['username'];?></a></li>
            <li> <a href="<?php echo Config::SITE_URL.'/adminOOP/controller/user/logout.php'?>">Đăng xuất</a> </li>
        </ul>
    </div>
</nav>