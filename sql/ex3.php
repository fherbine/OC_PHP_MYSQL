<?php
	include_once("../db_auth.php");
	$bdd = db_auth('localhost', 'test');
	if ($_POST && isset($_POST['title']) && isset($_POST['content']) && $_POST['submit'] === "OK")
	{
		$req0 = $bdd->prepare('INSERT INTO news(titre, contenu) VALUES (:titre, :contenu)');
		$req0->execute(array('titre' => htmlspecialchars($_POST['title']), 'contenu' => htmlspecialchars($_POST['content'])));
		header('Location: ex1.php');
	}
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Add an article</title>
	</head>
	<body>
		<form method="post" action="ex3.php">
			<input type="text" name="title" placeholder="Title" required/>
			<textarea name="content" placeholder="Content of the article ..." required></textarea>
			<input type="submit" name="submit" value="OK"/>
		</form>
	</body>
</html>
<?php $req0->closeCursor() ?>
