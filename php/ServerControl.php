<?php
	interface iServerControl
	{
		public function startServer();
		public function stopServer();
		public function runCommand($command);
		public function getStatus();
	}
?>