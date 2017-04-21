<!DOCTYPE html>
<html>
<head>
<title>Suivi</title>
<meta charset="utf-8">
<link rel="stylesheet" media="screen" type="text/css" title="page_web" href="css/style.css"/>
<?php include 'header.php'; ?>
</head>

<body>
<?php 
session_start();

function recupValeur(){
	try{

		$connexion = new PDO("mysql:host=localhost;dbname=data",'root','formation');
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$statement = 'SELECT id, date, heure, nomAnnexe, commentaire, projet, technologie FROM suivi';
		$tableauVal = $connexion -> query($statement);
		$val = $tableauVal->fetch();
		$date = $val['date'];
		$heure = $val['heure'];
		$nomAnnexe = $val['nomAnnexe'];
		$commentaire = $val['commentaire'];
		$projet = $val['projet'];
		$techno = $val['technologie'];


		echo $heure;

	}catch (Exception $e){
		echo "erreur lors de l'enregistrement dans la base de donnée, assurez vous d'avoir correctement rempli tous les informations ";
		echo "<br>voici le code erreur SQL : ".$e->getMessage();
	}
}

envoyerValeur();
?>

</body>
<footer>
<h6><center><?php include 'piedDePage.php';?></center></h6>
</footer>
</html>
