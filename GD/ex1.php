<?php
	header("Content-type: image/jpeg"); // The following web page will be an image
	$image = imagecreate(200, 50); // creating an image (width, height)

	imagejpeg($image); // display image
?>
