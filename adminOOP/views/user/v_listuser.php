<!DOCTYPE html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
    <title>Danh sách thành viên</title>
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
                    <?php foreach($userList as $user):?>
                        <tr>
                            <td><?php echo $user->getUserId();?></td>
                            <td>
                                <a href="<?php echo 'edit.php?user_id='.$user->getUserId(); ?>">
                                    <?php echo $user->getUsername();?></a>
                            </td>
                            <td><?php echo $user->getFullname();?></td>
                            <td><?php echo ($user->getStatus() == 1) ? 'Kích hoạt' : 'Không kích hoạt';?></td>
                            <td><?php echo $user->getCreated();?></td>
                            <td><?php echo $user->getModified();?></td>
                            <td>
                                <a href="<?php echo 'delete.php?user_id='.$user->getUserId();?>">Xóa</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




</body>
</html>