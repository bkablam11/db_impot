<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-wçdth, initial-scale=1.0">
	<title>crud operation</title>
	<link rel="stylesheet"  href="style.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>
	 <link href="css/home_style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<a class="Btn_add" href="Ajout.php" >Ajouter une Demande</a>
			<table>
				<tr id="items">
						<th>n° Ticket</th>
						<th>Date de Demande</th>
						<th>Theme</th>
						<th>Objet</th>
						<th>Statut</th>
						<th>Action</th>
				</tr>
					<?php
						//inclure la page de connexion
						include_once "connexion.php";
						//requête pour afficher la liste des demandes
						$req = mysqli_query($con, "SELECT * FROM demande");
						if (mysqli_num_rows($req) == 0) {
							//s'il n'existe pas de demandes dans la base de données, alors on affiche ce message :
							echo "Il n'y a pas encore de demandes ajouter !";

						}else {
							//si non, affichons la liste de tous les employés
							while($row=mysqli_fetch_assoc($req)){
					?>
								<tr>
									<td><?=$row['NumTicket']?></td>
									<td><?=$row['Datedemande']?></td>
									<td><?=$row['theme']?></td>
									<td><?=$row['objet']?></td>
									<td><?=$row['statut']?></td>
									<td><a href="update.php?id=<?=$row['id']?>">update</a></td>
									<td><a href="delete.php?id=<?=$row['id']?>">Delete</a></td>
								</tr>
								<?php
							}
						}


					?>
						
					

					
			</table>
	</div>

</body>
</html>