display_errors = On
<?php
$mysqlConnection = new PDO(
	'mysql:host=localhost;dbname=crud_gestion;charset=utf8',,
	'root',
	'root',
);
try
{
	$db = new PDO('mysql:host=localhost;dbname=crud_gestion;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

SELECT * FROM demande
$demandeStatement = $db->prepare('SELECT * FROM demande');
$demandeStatement->execute();
$demande = $demandeStatement->fetchAll();