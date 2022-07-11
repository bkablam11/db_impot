<?<?php  ?>
include "Connexion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulaire d'Ajout</title>
	<link rel="stylesheet"  href="style.css">
</head>
<body>
	<?php
		//vérifier  que le boutton ajouter a bien été cliqué
		if(isset($_POST['button'])) {
			//extraction des informations des variables par la méthode POST
			extract($_POST);
			//vérifier que tous les champs ont été remplis
			if (isset($NumTicket) && isset($DateDemande) && isset($Theme) && isset($Objet) && isset($Statut)) {
				//connexion à la base de donnéess
					include_once "connexion.php";
					//requête d'ajout
					$req = mysqli_query($con, "INSERT INTO demande VALUES(NULL, '$NumTicket', '$DateDemande', '$Theme', '$Objet', '$Statut')");
			if ($req) {//si la requête a bien été effectuée , on fait une redirection
				header("Location: display.php");
			}else {//si non
				$message = "Demande non ajoutée";
			}
		}else {
			//si non 
			$message = "Veuillez remplir tous les champs !";
		}
	}
	?>
		<div class="form">
			<a href="display.php" class="back_btn">Retour</a>
			<h2>Ajouter une demande : </h2>
			<p class="erreur_message">
				Veuillez remplir tous les champs !
				<?php
				// si la variable message existe, affichons son contenu
				if (isset($message)) {
					echo $message;
				}
				?>
			</p>
			<form action="" method="POST">
				<label>NuméroTicket</label>
				<input type="text" name="Numéro Demande" value="" placeholder="Entrer le numéro de la Demande">
				<label>Date de Demande</label>
				<input type="Date" name="DateDemande">
				<label>Theme</label>
				<input type="text" name="Theme">
				<label>Objet</label>
				<input type="text" name="objet">
				<label>Statut</label>
				<input type="text" name="statut">
				<label>commentaire</label>
				<textarea name="commentaire" value="" cols="5" placeholder="Entrer votre commentaire" style="padding: 5px; width: 90%"></textarea>
				<input type="submit" value="valider" name="button">
			</form>
		</div>
</body>
</html>