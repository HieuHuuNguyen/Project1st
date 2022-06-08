<?php
if(!empty($_POST)){
    require_once('../backend/dbhelper.php');
    execute(SQL_CREATE_TABLE_USERS);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Khởi tạo dữ liệu người dùng</title>
        <style type="text/css">
            .container{
                width: 500px;
                background-color: orange;
                margin: 0px auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1 style="text-align: center;">Khởi tạo dữ liệu người dùng</h1>
            <form method="post">
                <button style="width:100%" name="action" value="init">Khoi tao</button>
            </form>
        </div>
    </body>
</html>