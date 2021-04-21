<?php
if(isset($_POST['quality']))
{
	if(empty($_POST['quality'])) { echo 1; }
	elseif(preg_match('/[^0-9]/',$_POST['quality'])) { echo 2; }
	elseif(intval($_POST['quality']) < 5) { echo 3; }
	elseif(intval($_POST['quality']) > 100) { echo 4; }
	else  { echo 5; }
	exit;
}
?>