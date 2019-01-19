<?php 
require 'core/model/main.php';

function data_db ($table) {
	$query = "SELECT * FROM $table";
	$data = select_data($query);

	return $data;
}