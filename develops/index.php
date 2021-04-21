<?php
include('libs/index.php');
//delTree('uploads/thumbnail');
//delTree('uploads');
ini_set('memory_limit', '-1');
if(isset($_POST['save']))
{
	if($_POST['width-hidden'] == 1 && $_POST['height-hidden'] == 1 && $_POST['quality-hidden'])
	{
		unset($_POST['save'],$_POST['width-hidden'],$_POST['height-hidden'],$_POST['quality-hidden']);
		if(isset($_FILES['file']['name']) && $_FILES['file']['error'] == 0)
		{
			$image_info = getimagesize($_FILES["file"]["tmp_name"]);
			if($_POST['width'] == '' || $_POST['width'] == 0) $_POST['width'] = $image_info[0];
			if($_POST['height'] == '' || $_POST['height'] == 0) $_POST['height'] = $image_info[1];
			if($_POST['quality'] == '' || $_POST['quality'] == 0)
			{
				$_POST['quality'] = (101-(($image_info[0]*$image_info[1])*3)/$_FILES["file"]["size"]);			
				if($_POST['quality'] <= 0) $_POST['quality'] = 0;				
			}
			include('classes/ResizeImage.php');
			$image = upload_picture($_POST);
			if($image)
			{
				echo '<div style="color: green; text-align: center;"><h3>Congratulations !</h3></div>'; 
				echo '<div style="color: blue; text-align: center;"><h3><b><a href="download.php?image='.$image.'">Download</a></b></h3></div>';
			}
			else echo '<div style="color: red; text-align: center;"><h3>Sorry this is not Image !</h3></div>';
		}
		else echo '<div style="color: red; text-align: center;"><h3>Where is Your Image ?</h3></div>';
	}
	else echo '<div style="color: red; text-align: center;"><h3>Security Issue !</h3></div>';
}
?>