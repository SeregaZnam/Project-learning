<?php 

function connect_database () {
	$config = require 'core/config/database.php';
	$link = mysqli_connect($config['host'], $config['user'], $config['password'], $config['db_name']);

	if(!$link){
		echo 'Database connect error';
		die();
	}

	return $link;
}

function select_data ($sql) {
	$link = connect_database();
	$res = mysqli_query($link, $sql);

	if(!$res){
		die(mysqli_error($link));
	}
	for($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

	return $data;
}

function insertUpdateDelete ($sql) {
	$link = connect_database();
	$res = mysqli_query($link, $sql);

	if(!$res){
		die(mysqli_error($link));
	}

	return $res;
}