<?php
	require_once "tasks/Task.php";
	$users = [
		'Vasya' => 25,
		'Misha' => 35,
		'Konstantin' => 45
	];
	echo who_is_who($users);