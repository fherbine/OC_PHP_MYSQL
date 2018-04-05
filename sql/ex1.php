<?php
	include("../db_auth.php");

	// The following function call a new PDO object adding the db_password to the args gave ($host, $db_name)
	$bdd = db_auth('localhost', 'test'); // authentification -> get bdd

	$answer = $bdd->query('SELECT * FROM news'); // try to get the content of the tab news

	var_dump($answer);
	echo '<br />';
	$datas = $answer->fetch();
	var_dump($datas);
	echo '<br /><br />';

	echo '<table>';
	while ($datas)
	{
?>
<tr>
<td><?php echo $datas['id'];?></td>
<td><?php echo $datas['titre'];?></td>
<td><?php echo $datas['contenu'];?></td>
</tr>
<?php
		$datas = $answer->fetch();
	}
	echo '</table>';

	$answer->closeCursor(); // Close the request
?>
