<?php
	header("Content-type: image/jpeg");
	$image = imagecreate(200, 80);

	$orange = imagecolorallocate($image, 255, 128, 0);
	$blue = imagecolorallocate($image, 0, 0, 255);
	$lightblue = imagecolorallocate($image, 156, 227, 254);
	$black = imagecolorallocate($image, 0, 0, 0);
	$white = imagecolorallocate($image, 255, 255, 255);

	imagejpeg($image);
?>
