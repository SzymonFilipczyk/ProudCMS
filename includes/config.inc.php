<?php
/*
*	Global config and check security c
*/
if (!isset($include_security))
	die("Include security error");

if ($debug_mode == true) {
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
}

function error404() {
	header("Status: 404 Not Found");
	header("HTTP/1.0 404 Not Found");
	require_once "../404.php";
	die();
}

function error401() {
	header("Status: 401 Unauthorized");
	header("HTTP/1.0 401 Unauthorized");
	require_once "../401.php";
	die();
}