<?php
	include("./config.php");
	include("./actions.php");
	$auth->authentificate();

	function abort($code, $message)
	{
		http_response_code($code);
		exit($message);
	}

	if(!isset($_GET["do"]))
		abort(404, "Nothing to do!");

	$do = actions[$_GET["do"]];
	$parameter = array();
	foreach ($_GET as $key => $value)
	{
		if($key != "do" && isset($value) && $value != "")
			$parameter[$key] = $value;
	}
	do($parameter);
?>