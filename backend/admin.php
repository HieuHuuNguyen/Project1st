<?php
require_once('../backend/dbhelper.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7592e4a38d.js" crossorigin="anonymous"></script>
</head>
<body>
    <a href="../backend/admin.php" style="font-size: 30px; text-decoration: none"><i class="fas fa-cog fa-spin"></i>Trang quản trị</a> 
    <a href="../backend/report.php" style="font-size: 30px; padding: 20px; text-decoration: none"><i class="fas fa-envelope"></i>Quản lý phản hồi</a>
    <a href="../Home/home1.html" style="font-size: 30px;  text-decoration: none"><i class="fas fa-house-user"></i>Trang chủ</a>
    <div class="container" style="padding: 30px;">
            <ul class="list-group">
                <li class="list-group-item active">Quản lý tài khoản</li>
                <li class="list-group-item">
                <table class="table table-bordered"> 
                    <thead>
                        <tr>
                            <th width="60px">STT</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Addrees</th>
                            <th>Phone</th>
                            <th width="60px"></th>
                        </tr>
                    </thead>
                    <tbody>
    <?php
    $spl = 'select * from users';
    $usersList = executeResult($spl);
    $index = 1;
    foreach ($usersList as $std) {
            echo '<tr>
                    <td>'.($index++).'</td>
                    <td>'.$std['username'].'</td>
                    <td>'.$std['email'].'</td>
                    <td>'.$std['address'].'</td>
                    <td>'.$std['phonenumber'].'</td>
                    <td><button class="btn btn-danger" onclick="deleteUsers('.$std['id'].')">Delete</button></td>
            </tr>';
    }
    ?>
                    </tbody>
            </table>
    </div>
   
</body> 
<script type="text/javascript">
	function deleteUsers(id) {
			option = confirm('Bạn có muốn xoá người dùng này không')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('../backend/delete_user.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>
</html>