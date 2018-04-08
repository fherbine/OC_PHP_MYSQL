<?php
	include_once("../db_auth.php");

	$db = db_auth('localhost', 'test');
	if ($_POST && isset($_POST['Pseudo']) && isset($_POST['message']) && $_POST['submit'] === "Envoyer")
	{
		$pseudo = htmlspecialchars($_POST['Pseudo']);
		$content = htmlspecialchars($_POST['message']);

		$req0 = $db->prepare('INSERT INTO minichat(pseudo, message) VALUES (:uid, :content)');
		$req0->execute(array('uid' => $pseudo, 'content' => $content));

		$req0->closeCursor();

		header('Location: minichat.php');
	}
?>