<?php
	include_once("../db_auth.php");

	$db = db_auth('localhost', 'test');
	$req0 = $db->query('SELECT * FROM minichat ORDER BY id DESC LIMIT 0,10');
?>
<html>
<head>
	<meta charset="utf-8" />
	<title>Minichat</title>
</head>
<body>
	<form method="post" action="minichat_post.php">
		<label for="pseudo">Pseudo :</label><input type="text" name="Pseudo" id="pseudo" /><br />
		<textarea name="message" placeholder="Type a message ... "></textarea><br />
		<input type="submit" name="submit" value="Envoyer" />
	</form>
	<?php
		while ($ans0 = $req0->fetch())
		{
			echo '<hr /><p><b>' . $ans0['pseudo'] . ': </b>' . $ans0['message'] . '</p>';
		}
		$req0->closeCursor();
	?>
</body>
</html>