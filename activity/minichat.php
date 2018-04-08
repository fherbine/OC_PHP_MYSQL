<?php
	include_once("../db_auth.php");

	$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	$req0 = $db->query('SELECT pseudo, message, DATE_FORMAT(date_message, \'%d/%m/%Y à %Hh %imin et %ss\') AS date_msg FROM minichat ORDER BY id DESC LIMIT 0,10');
	$req1 = $db->query('SELECT pseudo FROM minichat ORDER BY id DESC');
	$ans1 = $req1->fetch();
?>
<html>
<head>
	<meta charset="utf-8" />
	<title>Minichat</title>
</head>
<body>
	<form method="post" action="minichat_post.php">
		<label for="pseudo">Pseudo :</label><input type="text" name="Pseudo" id="pseudo" value=<?php echo '"' . $ans1['pseudo'] . '"'; ?>/><br />
		<textarea name="message" placeholder="Type a message ... "></textarea><br />
		<input type="submit" name="submit" value="Envoyer" />
	</form>
	<?php
		$req1->closeCursor();
		while ($ans0 = $req0->fetch())
		{
			echo '<hr /><p>[Le ' . $ans0['date_msg'] . '] <b>' . $ans0['pseudo'] . ': </b>' . $ans0['message'] . '</p>';
		}
		$req0->closeCursor();
	?>
</body>
</html>