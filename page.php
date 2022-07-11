<body bgcolor=orange>
<div style="width: 50%; margin: 0 auto; border: 2px double #FF0000;
	background-color: white; box-shadow: 1px 1px 10px 1px;">
	<h3 align="center">Add</h3>
<form>
	<fieldset>
		<div style="padding: 10px; text-align: center;">
			<input type="text" name="Numéro Demande" value="" placeholder="Entrer le numéro de la Demande" style="padding: 5px; width: 90%">
		</div>
		<div style="padding: 10px; text-align: center;">
		<input type="Date" name="Date de la Demande" value="" placeholder="Entrer la date de la Demande" style="padding: 5px; width: 90%">
		</div>
		<div style="padding: 10px; text-align: center;">
		<input type="text" name="Theme" value="" placeholder="Entrer le Theme de la Demande" style="padding: 5px; width: 90%">
		</div>
		<div style="padding: 10px; text-align: center;">
		<input type="text" name="Objet" value="" placeholder="Entrer l'objet de la Demande" style="padding: 5px; width: 90%">
		</div>
		<div style="padding: 10px; text-align: center;">		<input type="text" name="Statut Demande" value="" placeholder="Entrer le Statut de la Demande" style="padding: 5px; width: 90%">
		</div>
		<div style="padding: 10px; text-align: center;">
			<textarea name="commentaire" value="" cols="5" placeholder="Entrer votre commentaire" style="padding: 5px; width: 90%"></textarea>
		</div>
			<div style="padding: 10px; text-align: center;">
				<input type="submit" name="insérer" value="Valider" style="padding: 5px; width: 50%">
			</div>
	</fieldset>	
</form>
<?php
if (isset($_POST['ins'])) 
	{
		//connection
	 	$con = mysqli_connect("localhost","root","","crud_gestion");
	 	//variable and value passing here 
	 	$numéroTicket = $_POST['NumTicket'];
	 	$DateDemande = $_POST['Datedemande'];
	 	$Theme = $_POST['theme'];
	 	$Objet = $_POST['objet'];
	 	$Statut = $_POST['Statut'];

	 	// insert a data here
	 	mysqli_query($conn,"insert into demande(numéroTicket,DateDemande,Theme,Objet,statut) values('$NumTicket','$Datedemande','$theme','$objet','$statut')");

	 	//id not apply because thats AutoIncreament
	 	echo "<div style='box-shadow:1px 1px rgb(255,90,40);'>Data AddSuccess Fully....<div>";
	}
	?>
</div>	
<center><a href="display.php">view</a></center>
<!-- crate File fetch -->
</body>