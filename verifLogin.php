<?php 
session_start();

function verifIdentification(){
	try {

		$login = $_POST['login'];
		$pass = $_POST['motDePasse'];
		$serveur = "localhost";
		$loginBDD = "root";
		$password = "formation";
		$connexion = new PDO("mysql:host=$serveur;dbname=data",$loginBDD,$password);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$codeSQL = "SELECT password FROM user WHERE login="."'".$login."'";
		$motDePasseBDD = $connexion->query($codeSQL);
		$val = $motDePasseBDD->fetch();
		$valpass = $val['password'];
		if($valpass==$pass){
			$_SESSION["login"] = $login;
			echo "<h3>mot de passe correct.";
			echo "<p><form action=\"tableauDeBord.php\"><input type=\"submit\" value =\"Cliquez ici pour acceder au tableau de bord\"></form></p>";
		}else{
			echo "<h3>mot de passe incorrect.";
			echo "<p><form action=\"index.php\"><input type=\"submit\" value =\"Cliquez ici pour revenir a la page d'acceuil\"></form></p>";
		}
		
	} catch (Exception $e) {
		echo "erreur lors de la saisie de vos identifiants, pour recommancer cliquer <a href=\"index.php\">ici</a> <br>";
		echo "voici le code erreur SQL : ".$e->getMessage();
	}
}
if($_POST['login']!=null && $_POST['motDePasse']!=null){
	verifIdentification();	
	}else{
		echo "erreur lors de la saisie de vos identifiants, pour recommancer cliquer <a href=\"index.php\">ici</a> <br>";
	}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bienvenue <?php echo $_POST['login']?></title>
</head>
<body>
<br><br>



</body>
</html>