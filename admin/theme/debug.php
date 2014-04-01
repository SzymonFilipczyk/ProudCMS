<?php
if (!isset($include_security))
	die("Include security error");
?>
<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Ostrzeżenie!</strong> Aktywny jest tryb debugowania. <?php echo session_id(); ?> (Polecania: <a href="&debugdata=logme">Zaloguj mnię</a>, <a href="&debugdata=sessiondestro">Zniszcz sesję</a>)
</div>


<div class="panel panel-default" style="overflow: auto; height:250px;">
  	<div class="panel-heading">
    	VAR DUMP:
  	</div>
  	<div class="panel-body">
		<?php echo '<pre>SESSION:' . print_r($_SESSION, TRUE) . '</pre>'; ?>
		<?php echo '<pre>GET:' . print_r($_GET, TRUE) . '</pre>'; ?>
		<?php echo '<pre>POST:' . print_r($_POST, TRUE) . '</pre>'; ?>
		<?php echo '<pre>SERVER:' . print_r($_SERVER, TRUE) . '</pre>'; ?>
	</div>
</div>


