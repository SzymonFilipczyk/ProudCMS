<?php
/*
*	Admin page
*/
// Session start
session_start();

// Global configuration
$include_security;
$debug_mode = true;

//
require_once "../includes/config.inc.php";

// RE
if (!isset($_GET["pageRequest"]))
	error404();

	require_once "class/page.class.php";
	
	$strona = new page();
	$strona->createPage();
	$strona->removePage();
	$strona->getPagesList();
	
?>