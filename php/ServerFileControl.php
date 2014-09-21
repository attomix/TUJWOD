<?php
	interface iServerFileControl
	{
		public function getFiles($dir);

		public function uploadFile($path, $content);
		public function downloadFile($path);

		public function deleteFile($path);
		public function deleteDirectory($path);

		public function createDirectory($path);
	}
?>