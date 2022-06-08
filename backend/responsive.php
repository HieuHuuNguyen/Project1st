<?php
require_once('../backend/dbhelper.php');

if(!empty($_POST)){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $title  = $_POST['title'];
        $content = $_POST['content'];
    $sql = "select * from users where email = '$email'";
	$data = executeResult($sql);
	    if($data != null && count($data) > 0) {
            $sql = "insert into reports(name, email,title, content) values ('$username',  '$email', '$title'  ,  '$content')";
            execute($sql);
            header('Location:../Home/home1.html');
		    
        } else {
            echo "<script>alert('Tài khoản chưa đăng ký.')</script>";
            header('Location: ../backend/register_form.php');
        }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phản hồi</title>
    <link rel="stylesheet" href="../responsive/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7592e4a38d.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #0d192e;">
    <div class="container">
        <div class="formBox">
            <form method="POST">
                <h2>Liên hệ với chúng tôi</h2>
                <div class="inputBox">   
                    <input type="text" name="username" required="required" >
                    <span>Họ và tên</span>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" required="required" >
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="title" required="required" >
                    <span>Tiêu đề phản hồi</span>
                </div>
                <div class="inputBox">
                    <textarea required="required" name="content" ></textarea>
                    <span>Nội dung phản hồi</span>
                </div>
                <div class="inputBox">
                    <button class="btn btn-danger ">SEND</button>
                </div>
            </form>
        </div>
        <div class="imgBox"></div>
    </div>
    <div class="header-scroll">
        <a  title="Go to home" href="../Home/home.html"><img src="../pictures/menu/home.jpg" width="30px"></a>
    </div>
</body>

</html>