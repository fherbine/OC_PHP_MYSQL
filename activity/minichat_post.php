<?php
	include_once("../db_auth.php");

	$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
	if ($_POST && isset($_POST['Pseudo']) && isset($_POST['message']) && $_POST['submit'] === "Envoyer")
	{
		$pseudo = htmlspecialchars($_POST['Pseudo']);
		$content = htmlspecialchars($_POST['message']);

		$req0 = $db->prepare('INSERT INTO minichat(pseudo, message, date_message) VALUES (:uid, :content, NOW())');
		$req0->execute(array('uid' => $pseudo, 'content' => $content));

		$req0->closeCursor();

		header('Location: minichat.php');
	}
?>