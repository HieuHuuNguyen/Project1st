<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once ('../backend/dbhelper.php');
	$sql = 'delete from reports where id = '.$id;
	execute($sql);

	echo 'Xoá phản hồi thành công';
}