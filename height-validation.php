<?php
if(isset($_POST['height']))
{
	if(empty($_POST['height'])) { echo 1; }
	elseif(preg_match('/[^0-9]/',$_POST['height'])) { echo 2; }
	elseif(intval($_POST['height']) < 5) { echo 3; }
	elseif(intval($_POST['height']) > 10000) { echo 4; }
	else  { echo 5; }
	exit;
}
?>