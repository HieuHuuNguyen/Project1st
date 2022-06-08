<?php
require_once('../backend/config.php');

function execute($query){
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    mysqli_set_charset($conn, 'utf8');
    mysqli_query($conn, $query);
    mysqli_close($conn);
}

function executeResult($sql) {
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	$resultset = mysqli_query($conn, $sql);
	$list      = [];
	while ($row = mysqli_fetch_array($resultset, 1)) {
		$list[] = $row;
	}
	mysqli_close($conn);

	return $list;
}
