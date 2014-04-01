<?php
if (!isset($include_security))
	die("Include security error");
?>

<div class="panel panel-default login-form">
	<div class="panel-body">
		<h1 class="page-header">Logowanie<small> wprowadź swój adres e-mail oraz hasło</small></h1>
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
					<button type="submit" class="btn btn-primary">Zaloguj mnie</button>
					<button type="submit" class="btn btn-default">Przywracanie hasła</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Small modal -->
<button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
	// Append login style
	$("head").append("<link rel='stylesheet' type='text/css' href='theme/css/login.css' />");
});
</script>