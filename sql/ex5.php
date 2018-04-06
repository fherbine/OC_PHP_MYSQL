<?php
	include_once("../db_auth.php");
	$bdd = db_auth('localhost', 'test');
	$req0 = $bdd->query('SELECT titre FROM news');
	if ($_POST && isset($_POST['title']) && $_POST['submit'] === "remove")
	{
		$req1 = $bdd->prepare('DELETE FROM news WHERE titre = :title');
		$req1->execute(array('title' => $_POST['title']));
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
	<h1>Delete article</h1>
	<form method="post" action="ex5.php">
		<select name='title'>
			<?php
				while ($content1 = $req0->fetch())
				{
					echo '<option value="'. $content1['titre'] .'">'. $content1['titre'] .'</option>';
				}
				$req0->closeCursor();
			?>
		</select>
		<input type="submit" name="submit" value="remove" />
	</form>
</body>
</html>