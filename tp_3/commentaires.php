<?php
	include_once("../db_auth.php");
	$db = db_auth('localhost', 'test');
?>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>TP 3 - OC</title>
</head>
<body>
	<h1>Mon super blog</h1>
	<a href="index.php">Retour a la liste des billets</a>
	<div class=".news">
		<h3><?php?></h3>
		<p><?php?></p>
	</div>
	<h2>Commentaires:</h2>
	<p><b><?php ?></b><?php ?></p>
	<p><?php ?></p>
</body>
</html>