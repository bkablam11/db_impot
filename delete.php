<?php
	//connexion à la base de donnée
	include_once "connexion.php";
	//récupération de l'id dans le lien
	$id= $_GET['id'];
	//requête de suppression
	$req = mysqli_query($con, "DELETE FROM demande WHERE id = $id");
	//redirection vers la page display.php
	header("Location:display.php")
	?>
