<?php
require_once('../backend/dbhelper.php');

if(!empty($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $verifypassword = $_POST['verifypassword'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phonenumber = $_POST['phonenumber'];

    $sql = "select * from users where username = '$username'";
	$data = executeResult($sql);
    if($password != $verifypassword){
		echo "<script>alert('Password Not Matched.')</script>";
    } else {
	    if($data != null && count($data) > 0) {
		    echo "<script>alert('Woops! Username Already Exists.')</script>";
        } else {
			echo "<script>alert('Wow! User Registration Completed.')</script>";
            $sql = "insert into users(username, password, email, address, phonenumber) values ('$username', '$password', '$email', '$address', '$phonenumber')";
            execute($sql);
            header('Location: ../backend/login_form.php');
    }
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Đăng ký</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/7592e4a38d.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
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
        <div class="container">
            <div class="card border-primary">
				<div class="card-body bg-white text-dark" >
					<form  method="post">
					<p class="d-flex justify-content-center" style="font-size: 2rem; font-weight: 800;">Đăng ký tài khoản</p>
						<div class="form-group">
                        	<input type="number" name="id" value="<?=$id?>" style="display: none;">	   							  	
				        	<input required="true" type="text" placeholder="Username" name="username" id="username" class="form-control" >
						</div>
                    	<br>
						<div class="form-group">							  	
				        	<input required="true" type="password" placeholder="Password" name="password" id="password" class="form-control" onChange="onChange()">
						</div>
                    	<br>
						<div class="form-group">							  	
				        	<input required="true" type="password" placeholder="Verify Password" name="verifypassword" id="verifypassword" class="form-control" onChange="onChange()">
						</div>
                    	<br>
                    	<div class="form-group">								  	
				        	<input required="true" type="text" placeholder="Email" name="email" id="email" class="form-control">
						</div>
                    	<br>
                    	<div class="form-group">								  	
				        	<input required="true" type="text" placeholder="Address" name="address" id="address" class="form-control">
						</div>
                    	<br>
                    	<div class="form-group">								  	
				        	<input required="true" type="text" placeholder="Phonenumber" name="phonenumber" id="phonenumber" class="form-control">
						</div>
                    	<br>
						<button class="btn btn-success" id="register">Đăng ký</button>
						<br>
                    	<p class="login-register-text">Bạn đã có tài khoản?  <a href="../backend/login_form.php" >Đăng nhập tại đây</a></p>
						<p class="login-register-text">Bạn muốn quay lại trang chủ?  <a href="../home/home.html">Quay lại trang chủ</a></p> 
					</form>
				</div> 
        	</div>
		</div>
    </body>
</html>