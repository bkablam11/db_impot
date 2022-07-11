<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>update</title>
	<title></title>
	<link rel="stylesheet"  href="style.css">
</head>
<body>
	<?php

		//connexion à la base de donées
		include_once "connexion.php";
		
		//vérifier que le boutton ajouter a bien été cliqué
		if (isset($_POST['button'])) {
			//extraction des informations envoyées dans des variables par la méthode POST
			extract($_POST);
			//vérifier que tous les champs ont été remplis
			if (isset($Numticket) && isset($Datedemande) && isset($theme) && isset($objet) && isset($statut)) {
				//requête de modification
				$req = myqli_fetch($con, "UPDATE demande SET NuméroTicket = '$NumTicket', DateDemande = '$Datedemande', Theme = '$theme', Objet = '$objet', Statut = '$statut'");
			if ($req) {//si la requête a été effectuée avec succes, on fait une redirection
				header("Location:display.php");
			 
			 }else {//si non
			 	$message = "Demande non modifiée";
			 }

			}else{
				//si non
				$message = "Veuillez remplir tous les champs !";
			}
				

		}

		
		?>



		<div class="form">
		<a href="display.php" class="back_btn">Retour</a>
		<h2>Modifier les coordonnées de la demande : </h2>
		<p class="erreur_message">
			
			<?php
				if (isset($message)) {
					echo $message;
				}

			?>
		</p>
		<form action="" method="POST">
			<label>Numéro Ticket</label>
			<input type="text" name="Numéro Ticket">
			<label>Date de Demande</label>
			<input type="Date" name="Date de Demande" >
			<label>Theme</label>
			<input type="text" name="Theme" >
			<label>Objet</label>
			<input type="text" name="Objet" >
			<label>Statut</label>
			<input type="text" name="Statut" >
			<input type="submit" value="UPDATE" name="button">
		</form>

	</div>
</body>
</html>