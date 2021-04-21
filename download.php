<?php
if(isset($_GET['image']) && ($_GET['image'] != '' && $_GET['image'] != '0'))
{
	//$file_url = 'http://www.myremoteserver.com/file.exe';
	$file_url = 'uploads/thumbnail/'.$_GET['image'];
	header('Content-Type: application/octet-stream');
	header("Content-Transfer-Encoding: Binary"); 
	header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
	readfile($file_url); // do the double-download-dance (dirty but worky)
	
	unlink('uploads/thumbnail/'.$_GET['image']);
	unlink('uploads/'.$_GET['image']);
}
?>