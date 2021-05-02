<?php

function execute($sql){
	$connect = new mysqli('localhost', 'NVH', 'vanhien735', 'web2');
	if (!$connect) {
		die("Connection failed: " . $connect->connect_error);
	 }
    $query = $connect->query($sql);
    $connect->close();
}


function getData($sql) {
	$connect = new mysqli('localhost', 'NVH', 'vanhien735', 'web2');
	if (!$connect) {
		die("Connection failed: " . $connect->connect_error);
	 }
	$result = $connect->query($sql) or die($connect->error);
	$row = $result->fetch_assoc();

	$connect->close();
	return $row ;
}


function executeResult($sql) {
	$connect = new mysqli('localhost', 'NVH', 'vanhien735', 'web2');
	$result = $connect->query($sql);
	$list      = [];
	while ($row = $result->fetch_assoc()) {
		$list[] = $row;
	}
	$connect->close();
	return $list;
}