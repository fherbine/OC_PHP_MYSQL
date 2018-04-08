<?php
	include_once("../db_auth.php");
	$db = db_auth('localhost', 'test');

	$req0 = $db->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_billet FROM billets ORDER by id DESC LIMIT 0, 5');
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
	<?php while ($ans0 = $req0->fetch()): ?>
		<div class="news">
			<h3><?php echo $ans0['titre'] . ' le ' . $ans0['date_billet'];?></h3>
			<p><?php echo $ans0['contenu'];?><br /><a href=<?php echo '"commentaires.php?article='. $ans0['id'] . '"';?>>Commentaires</a></p>
		</div>
	<?php endwhile; ?>
</body>
</html>
<?php $req0->closeCursor(); ?>
