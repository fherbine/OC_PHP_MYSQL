<?php
	header("Content-type: image/png");
	$image = imagecreate(200, 80);

	$lightgreen = imagecolorallocate($image, 125, 250, 100);
	$black = imagecolorallocate($image, 0, 0, 0);
	$white = imagecolorallocate($image, 255, 255, 255);
	$blue = imagecolorallocate($image, 0, 0, 255);
	$red = imagecolorallocate($image, 255, 0, 0);

	imagestring($image, 3, 5, 5, "Hello world !", $black);

	// Creating square (2x2 px) :
	imagesetpixel($image, 20, 20, $red);
	imagesetpixel($image, 21, 20, $red);
	imagesetpixel($image, 20, 21, $red);
	imagesetpixel($image, 21, 21, $red);

	// creating a line under our text
	imageline($image, 5, 18, 90, 18, $blue);

	// creating an ellipse
	imageellipse($image, 100, 40, 50, 10, $white);

	// creating a rectangle
	imagerectangle($image, 75, 30, 125, 50, $blue);
	imagepng($image);
?>
