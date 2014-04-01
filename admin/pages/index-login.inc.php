<?php
if (!isset($include_security))
	die("Include security error");
?>

<div class="login-form">
	<h1 class="page-header">Logowanie<small> wprowadź swoje dane aby zarządzać</small></h1>
	<form class="form-horizontal" role="form">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Adres e-mail</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Hasło</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Sign in</button>
			</div>
		</div>
	</form>
</div>
<script>
$(document).ready(function() {
	// Append login style
	$("head").append("<link rel='stylesheet' type='text/css' href='theme/js/login.css' />");
});
</script>