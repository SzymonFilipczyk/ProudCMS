<?php
/*
*	Admin panel
*/
// Session start
session_start();

// Global configuration
$include_security = true;
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
	if ($site_to_get == "pages/index.inc.php") {
		// Log-in form
		$site_to_get = "pages/index-login.inc.php";
	} else {
		error401();
	}

// Include all classes
require_once "class/admin.class.php";
require_once "class/log.class.php";
require_once "class/page.class.php";
require_once "class/news.class.php";
require_once "class/gallery.class.php";
require_once "class/stat.class.php";
require_once "class/mail.class.php";

// Set admin object
$admin = new adminControler;

// Get page

	//header
	require_once "theme/header.php";
	//content
	require_once $site_to_get;
	//debug warn
	if ($debug_mode == true)
		require_once "theme/debug.php";
	//footer
	require_once "theme/footer.php";
