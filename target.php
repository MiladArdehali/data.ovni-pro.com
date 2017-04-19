<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Page target</title>

	</head>
	<body>
	<h1>Nous sommes sur la page target</h1>
	<?php
	
		$prenom = $nom = $pseudo = "";	
		function securisation($donnee){
			$donnee = trim($donnee);
			$donnee = stripslashes($donnee);
			$donnee = strip_tags($donnee);
			return $donnee;
		}	
		$prenom = securisation($_POST['prenom']);
		$nom = securisation($_POST['nom']);
		$pseudo = securisation($_POST['pseudo']);
		
		echo $_COOKIE['milad'];
		
		?>

	</body>

</html>
