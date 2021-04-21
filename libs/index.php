<?php

function delTree($dir)
{
	$files = array_diff(scandir($dir), array('.','..')); 
    foreach ($files as $file) { 
    (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
    }
    //rmdir($dir);
}

function upload_picture($arr)
{
	$file_extn = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	if($_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/gif" || $_FILES["file"]["type"] == "image/png")
	{
		$image_director = "uploads/";			
		//$image = rand().'.'.$file_extn;
		$image = $_FILES['file']['name'];
		move_uploaded_file($_FILES["file"]["tmp_name"], $image_director.'/'.$image);
		$resizeObj = new Resize($image_director.'/'.$image);
		$resizeObj -> resizeImage($arr['width'], $arr['height'], 'exact');
		$resizeObj -> saveImage($image_director.'/thumbnail/'.$image, $arr['quality']);
		unset($_FILES,$file_extn);
		return $image;
	}
	else return 0;
}

?>