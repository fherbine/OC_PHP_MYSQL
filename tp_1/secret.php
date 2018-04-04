<?php
	if ($_POST && isset($_POST['passwd']) && $_POST['submit'])
	{
		if(htmlspecialchars($_POST['passwd']) === "kangourou")
			echo "Welcome !";
		else
			header('Location: formulaire.php');
	}
	else
			header('Location: formulaire.php');
?>