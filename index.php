<?php
include "connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SGPATP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/2.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<script>

		function validateForm(){
            name = document.getElementById("name").value;
            pass = document.getElementById("pass").value;
            if ( ( name.trim().length == 0 ) || ( pass.length == 0 ) )
                {alert("veuillez remplir tous les champs");
            }
            else {
                window.location.href ="accueil.php";
                return false ;
            }
		}

	</script>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/A.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" name="myForm"  method="POST">
					<span class="login100-form-logo">
						<img src="2.png" alt="" width="125" height="117">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						SE CONNECTER
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" id="name" name="username" placeholder="login" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" id="pass" name="pass" placeholder="mot de passe" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="mb-3" style="position: relative;left: 1rem">
					<div class="form-check">
						<input class="form-check-input" id="flexRadioDefault1" type="radio" name="flexRadioDefault">
						<label class="form-check-label mb-0" for="flexRadioDefault1">ADMINISTRATEUR</label>
					</div>
						
					<div class="form-check">
						<input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault" checked="checked">
						  <label class="form-check-label mb-0" for="flexRadioDefault2">UTILISATEUR</label>
					</div>
						
		
					</div>
	
					<div class="container-login100-form-btn">
						<button onClick="return validateForm();"
								 class="login100-form-btn"> connexion</button>
					</div> 
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script><!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
</body>
</html>