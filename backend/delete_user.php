<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once ('../backend/dbhelper.php');
	$sql = 'delete from users where id = '.$id;
	execute($sql);

	echo 'Xoá người dùng thành công';
}