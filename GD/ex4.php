<?php
	header("Content-type: image/png");
	$image = imagecreate(200, 80);

	$lightyellow = imagecolorallocate($image, 220, 250, 67);
	$black = imagecolorallocate($image, 0, 0, 0);

	imagestring($image, 5, 45, 30, "Hello world !", $black);

	imagepng($image);
?>
