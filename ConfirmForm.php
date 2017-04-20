<?php
session_start();

function envoyerValeur(){
	try{

		$connexion = new PDO("mysql:host=localhost;dbname=data",'root','formation');
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$statement = $connexion -> prepare("INSERT INTO suivi (id, date, heure, nomAnnexe, commentaire, projet, technologie) VALUES (null, ?,?, ?, ?, ?, ?)");
		$statement->bindParam(1, $_POST['date']);
		$statement->bindParam(2, $_POST['heure']);
		$statement->bindParam(3, $_POST['nomAnnexe']);
		$statement->bindParam(4, $_POST['commentaire']);
		$statement->bindParam(5, $_POST['projet']);
		$statement->bindParam(6, $_POST['techno']);

		$statement->execute();
		
		echo '<p align="center">Vos informations on bien ete transmis à la base de
		donnée</p>';

	}catch (Exception $e){
		echo "erreur lors de l'enregistrement dans la base de donnée, assurez vous d'avoir correctement rempli tous les informations ";
		echo "<br>voici le code erreur SQL : ".$e->getMessage();
	}
}

envoyerValeur();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bonjour <?php echo $_SESSION['login']?>
</title>
</head>
<body>
	<br>
	<br>
	<br>
	<form action="tableauDeBord.php">
		<p align="center">
			<input type="submit" value="Retour au menu">
		</p>

	</form>


	<form action="index.php">
		<p align="center">
			<input type="submit" value="Deconnexion">
		</p>
		

	</form>



</body>
</html>
