<?php
if(isset($_POST['width']))
{
	if(empty($_POST['width'])) { echo 1; }
	elseif(preg_match('/[^0-9]/',$_POST['width'])) { echo 2; }
	elseif(intval($_POST['width']) < 5) { echo 3; }
	elseif(intval($_POST['width']) > 10000) { echo 4; }
	else  { echo 5; }
	exit;
}
?>