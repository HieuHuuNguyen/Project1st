<?php
require_once('../backend/dbhelper.php');

if(!empty($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from users where username = '$username' and password = '$password'";
	$data = executeResult($sql);
	if($data != null && count($data) > 0) {
		echo "<script>alert('Wow! User Login Completed.')</script>";
        header('Location:../home/home1.html');
    } else {
        echo "<script>alert('Please check username and password .')</script>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Trang chủ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/7592e4a38d.js" crossorigin="anonymous"></script>
        <style rel="stylesheet" type="text/css">
            body {
				background-image: url('../pictures/backend/form-background.jpg');
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                font-family: 'poppins';
                color: white;
            }

            .card {
                width: 400px;
                border-radius: 10px;
                overflow: hidden;
                margin: auto;
            }

			.login-register-text {
    			color: #111;
    			font-weight: 600;
			}

			.login-register-text a {
    			text-decoration: none;
    			color: #6c5ce7;
			}

			.btn {
   				display: block;
    			width: 100%;
    			padding: 15px 20px;
    			text-align: center;
    			border: none;
    			background: #a29bfe;
    			outline: none;
    			border-radius: 30px;
    			font-size: 1.2rem;
    			color: #FFF;
    			cursor: pointer;
    			transition: .3s;
			}
        </style>
    </head>
    <body>

        </div class="main">
            <div class="container">
                <div class="card border-primary">
			        <div class="card-body text-dark">
				        <form method="post">
                        <p class="d-flex justify-content-center" style="font-size: 2rem; font-weight: 800;">Đăng nhập</p>
					        <div class="form-group">								  	
				                <input required="true" type="text" placeholder="Username" name="username" class="form-control" >
					        </div>
                            <br>
					        <div class="form-group">							  	
				                <input required="true" type="password" placeholder="Password" name="password" class="form-control">
					        </div>
                            <br>
                            <div class="form-group">
					            <button class="btn btn-info text-white">Đăng Nhập</button>
				            </div>
                            <br>
                            <p class="login-register-text">Bạn chưa có tài khoản?  <a href="../backend/register_form.php">Đăng kí tài khoản mới</a></p>
                            <p class="login-register-text">Bạn muốn quay lại trang chủ?  <a href="../home/home.html">Quay lại trang chủ</a></p> 
				        </form>
			        </div>
                </div>
            </div>
        </div>
    </body>
</html>