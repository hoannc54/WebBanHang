<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
    <title>Danh sách thành viên</title>
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
    <div class="col-md-9">
        <div class="panel panel-primary">
            <div class="panel-heading">Danh sách thành viên</div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <th> ID </th>
                    <th> Tài khoản </th>
                    <th> Họ tên </th>
                    <th> Trạng thái </th>
                    <th> Ngày tạo </th>
                    <th> Ngày chỉnh sửa</th>
                    <th> Tác vụ </th>
                    </thead>
                    <tbody>
                    <?php while($user = mysql_fetch_assoc($user_list)):?>
                        <tr>
                            <td><?php echo $user['user_id'];?></td>
                            <td>
                                <a href="<?php echo SITE_URL.'/admin/controller/user/edit.php?user_id='.$user['user_id']; ?>">
                                    <?php echo $user['username'];?></a>
                            </td>
                            <td><?php echo $user['fullname'];?></td>
                            <td><?php echo ($user['status'] == 1) ? 'Kích hoạt' : 'Không kích hoạt';?></td>
                            <td><?php echo $user['created'];?></td>
                            <td><?php echo $user['modified'];?></td>
                            <td>
                                <a href="<?php echo SITE_URL.'/admin/controller/user/delete.php?user_id='.$user['user_id'];?>">Xóa</a>
                            </td>

                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




</body>
</html>