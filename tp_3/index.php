<?php
	include_once("../db_auth.php");
	$db = db_auth('localhost', 'test');

	$req0 = $db->query('SELECT titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%y à %Hh%imin%ss\') AS date FROM billets');
?>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>TP 3 - OC</title>
</head>
<body>
	<h1>Mon super blog</h1>
	<p>Derniers billets du blog :</p>
	<div class=".news">
		<h3><?php?></h3>
		<p><?php?></p>
		<a href=<?php echo '"commentaires.php?article="'. ;?>>Commentaires</a>
	</div>
</body>
</html>