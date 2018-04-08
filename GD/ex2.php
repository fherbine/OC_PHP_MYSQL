<?php
	header("Content-type: image/png");
	$image = imagecreatefrompng("./src/42.png");

	imagepng($image);
?>
