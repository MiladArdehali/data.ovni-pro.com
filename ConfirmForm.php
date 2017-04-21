<?php
session_start();

function envoyerValeur(){
	try{

		
		$serveur = $_SESSION['serveur'];
		$loginBDD = $_SESSION['loginBDD'];
		$password = $_SESSION['password'];
		$database = $_SESSION['database'];
		$connexion = new PDO("mysql:host=$serveur;dbname=data",$loginBDD,$password);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$statement = $connexion -> prepare("INSERT INTO suivi (id, date, heure, nomAnnexe, commentaire, projet, technologie) VALUES (null, ?,?, ?, ?, ?, ?)");
		$statement->bindParam(1, $_POST['date']);
		$statement->bindParam(2, $_POST['heure']);
		$statement->bindParam(3, $_POST['nomAnnexe']);
		$statement->bindParam(4, $_POST['commentaire']);
		$statement->bindParam(5, $_POST['projet']);
		$statement->bindParam(6, $_POST['techno']);

		$statement->execute();
		
		echo '<p align="center">Vos informations on bien ete transmis a la base de
		donnee</p>';

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
<title>Bonjour <?php echo $_SESSION['login']?></title>
<meta charset="UTF-8">
<link rel="stylesheet" media="screen" type="text/css" title="page_web" href="css/style.css"/>
<?php include 'header.php'; ?>
</head>
<body>
	<br>
	<br>
		<p align="center"><a href="tableauDeBord.php"><input type="button" value="Retour au tableau de bord" id="button"></a></p>
		<p align="center"><a href="index.php"><input type="button" value="Deconnexion" id="button"></a></p>
</body>
<footer>
<h6><center><?php include 'piedDePage.php';?></center></h6>
</footer>
</html>
