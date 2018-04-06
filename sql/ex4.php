<?php
	include_once("../db_auth.php");
	$bdd = db_auth('localhost', 'test');
	$req0 = $bdd->query('SELECT titre FROM news');
	if ($_POST && isset($_POST['title']) && isset($_POST['nContent']) && $_POST['submit'] === "OK")
	{
		$new_c = htmlspecialchars($_POST['nContent']);
		$req1 = $bdd->prepare('UPDATE news SET contenu = :new_content WHERE titre = :title');
		$req1->execute(array('new_content' => $new_c, 'title' => $_POST['title']));
		$req1->closeCursor();
		header('Location: ex1.php');
	}
?>
<html>
<head>
	<meta charset="utf-8" />
	<title>Update db</title>
</head>
<body>
	<h1>Update article content</h1>
	<form method="post" action="ex4.php">
		<select name='title'>
			<?php
				while ($content1 = $req0->fetch())
				{
					echo '<option value="'. $content1['titre'] .'">'. $content1['titre'] .'</option>';
				}
				$req0->closeCursor();
			?>
		</select>
		<textarea name="nContent" placeholder="Type a new content for article..."></textarea>
		<input type="submit" name="submit" value="OK" />
	</form>
</body>
</html>