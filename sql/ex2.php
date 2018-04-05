<?php
include_once("../db_auth.php");

$bdd = db_auth('localhost', 'test');
$req0 = $bdd->query('SELECT titre FROM news');
var_dump($req0);
echo '<ul>';
while ($datas0 = $req0->fetch())
{
?>
	<li><?php echo $datas0['titre']; ?></li>
<?php
}
echo '</ul><br />';
$req0->closeCursor();
?>
