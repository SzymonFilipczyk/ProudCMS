<?php
if (!isset($include_security))
	die("Include security error");
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="ProudCMS - panel administratora">
		<meta name="author" content="Szymon Filipczyk">
		<meta name="Robots" content="noindex, nofollow">
		<title>Panel administracyjny </title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href="theme/css/bootstrap.css" rel="stylesheet">
		<link href="theme/css/style.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index"><span class="glyphicon glyphicon-th-large glyph-logo"></span> <span class="top-logo"><strong>ProudCMS</strong> Panel administracyjny</span></a>
				</div>
				
				<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['logged'])) { ?>
					<li><a href="#">Pomoc</a></li>
					<li><a href="#">Szymon Filipczyk - Wyloguj się</a></li>
				<?php } ?>
				</ul>

				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
			<?php if (isset($_SESSION['logged'])) { ?>
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar">
						<li><a href="index"><span class="glyphicon glyphicon-home glyph-nav"></span> Podsumowanie</a></li>
						<li><a href="special-help"><span class="glyphicon glyphicon-question-sign glyph-nav"></span> Pomoc</a></li>
						<li><a href="special-notes"><span class="glyphicon glyphicon-list-alt glyph-nav"></span> Notatki</a></li>
					</ul>
					
					<ul class="nav nav-sidebar">
						<li><a href="panel-seo-index"><span class="glyphicon glyphicon-bullhorn glyph-nav"></span> Panel SEO</a></li>
						<li><a href="panel-stats-index"><span class="glyphicon glyphicon-stats glyph-nav"></span> Statystyki</a></li>
						<li><a href="panel-info-index"><span class="glyphicon glyphicon-hdd glyph-nav"></span> Informacje</a></li>
					</ul>

					<ul class="nav nav-sidebar">
						<li><a href="edit-page-index"><span class="glyphicon glyphicon-file glyph-nav"></span> Modyfikacja stron</a></li>
						<li><a href="edit-menu-index"><span class="glyphicon glyphicon-align-justify glyph-nav"></span> Projektowanie menu</a></li>
						<li><a href="edit-gallery-index"><span class="glyphicon glyphicon-picture glyph-nav"></span> Zarządzanie galeriami</a></li>
						<li><a href="edit-form-index"><span class="glyphicon glyphicon-send glyph-nav"></span> Zarządzanie formularzami</a></li>
						<li><a href="edit-file-index"><span class="glyphicon glyphicon-folder-open glyph-nav"></span> Menadżer plików</a></li>
						<li><a href="edit-theme-index"><span class="glyphicon glyphicon-eye-open glyph-nav"></span> Edycja stylu</a></li>
					</ul>
					
					<ul class="nav nav-sidebar">
						<li><a href="admin-setting-index"><span class="glyphicon glyphicon-cog glyph-nav"></span> Ustawienia ProudCMS</a></li>
						<li><a href="admin-user-index"><span class="glyphicon glyphicon-user glyph-nav"></span> Administratorzy</a></li>
					</ul>
					
					<ul class="nav nav-sidebar">
						<li><a href="special-ad-content"><span class="glyphicon glyphicon-star-empty glyph-nav"></span><strong>Modyfikacja zawartości</strong></a></li>
						<li><a href="special-ad-seo"><span class="glyphicon glyphicon-star-empty glyph-nav"></span><strong>Pozycjonowanie</strong></a></li>
						<li><a href="special-ad-theme"><span class="glyphicon glyphicon-star-empty glyph-nav"></span><strong>Zmiana wyglądu graficznego</strong></a></li>
					</ul>

					
					<div class="list-group">
					  <a href="http://filipczyk.net/" target="_blank" class="list-group-item active">
						<h4 class="list-group-item-heading"><span class="glyphicon glyphicon-th-large"></span> <strong>ProudCMS</strong> wersja 1.0.1</h4>
						<p class="list-group-item-text">&copy; 2014 - Szymon Filipczyk</p>
					  </a>
					</div>

				</div>
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"> 
				<?php } else { ?>
				<div class="main">
				<?php } ?>
				