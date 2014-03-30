<?php
/*
*	Admin panel
*/
// Session start
session_start();

// Global configuration
$include_security;
$debug_mode = true;

// Load config file
require_once "../includes/config.inc.php";

// Rewrite (index.php?%%% or /%%%)
if (!isset($_GET["pageRequest"]) || ($_GET["pageRequest"] == "") || ($_GET["pageRequest"] == "index")) {
	$site_to_get = "pages/index.inc.php";
} else {
	$site_to_get = "pages/".$_GET["pageRequest"].".inc.php";
}
if (!file_exists($site_to_get))
	error404();

// Check admin is logged or no 401
if (!isset($_SESSION['logged']))
	if ($site_to_get != "pages/index.inc.php")
		error401();

// Include all classes
require_once "class/admin.class.php";
require_once "class/log.class.php";
require_once "class/page.class.php";
require_once "class/news.class.php";
require_once "class/gallery.class.php";
require_once "class/stat.class.php";
require_once "class/mail.class.php";

// Set admin object
new adminPage;
