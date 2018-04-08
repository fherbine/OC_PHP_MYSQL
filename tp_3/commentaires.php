<?php
	include_once("../db_auth.php");
	$db = db_auth('localhost', 'test');
	$id_article = htmlspecialchars($_GET['article']);
	$req0 = $db->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh%imin%ss\') AS date_com FROM commentaires WHERE id_billet = ? ORDER BY id');
	$req0->execute(array($id_article));
	$req1 = $db->prepare('SELECT titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_bi FROM billets WHERE id = ?');
	$req1->execute(array($id_article));
	$ans_billet = $req1->fetch();
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
	<div class="news">
		<h3><?php echo $ans_billet['titre'] . ' le ' . $ans_billet['date_bi']; ?></h3>
		<p><?php echo $ans_billet['contenu']; ?></p>
	</div>
	<h2>Commentaires:</h2>
	<?php while ($ans0 = $req0->fetch()): ?>
	<p><b><?php echo $ans0['auteur']; ?></b><?php echo ' le ' . $ans0['date_com'];?></p>
	<p><?php echo $ans0['commentaire'];?></p>
	<?php endwhile;?>
</body>
</html>
<?php
	$req0->closeCursor();
	$req1->closeCursor();
?>