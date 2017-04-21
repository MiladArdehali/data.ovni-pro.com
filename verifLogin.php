<!DOCTYPE html>
<html>
<head>
<title>Bienvenue <?php echo $_POST['login']?></title>
<meta charset="UTF-8">
<link rel="stylesheet" media="screen" type="text/css" title="page_web" href="css/style.css"/> 
<?php include 'header.php'; ?>
</head>
<body>
<br><br>
<div id="cadre">
<?php 
session_start();

function verifIdentification(){
	try {

		$login = $_POST['login'];
		$pass = $_POST['motDePasse'];
		$serveur = $_SESSION['serveur'];
		$loginBDD = $_SESSION['loginBDD'];
		$password = $_SESSION['password'];
		$database = $_SESSION['database'];
		$connexion = new PDO("mysql:host=$serveur;dbname=$database",$loginBDD,$password);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$codeSQL = "SELECT password FROM user WHERE login="."'".$login."'";
		$motDePasseBDD = $connexion->query($codeSQL);
		$val = $motDePasseBDD->fetch();
		$valpass = $val['password'];
		if($valpass==$pass){
			$_SESSION["login"] = $login;
			echo "<h3><center>mot de passe correct.</center></h3>";
			echo "<p><center><a href=\"tableauDeBord.php\"><input type=\"button\" value=\"Cliquez ici pour acceder au tableau de bord\" id=\"button\"></a></center></p>";
		}else{
			echo "<h3><center>mot de passe incorrect.</center><h3>";
			echo "<p><center><a href=\"index.php\"><input type=\"button\" value=\"Cliquez ici pour revenir a la page d'acceuil\" id=\"button\"></a></center></p>";
		}
		
	} catch (Exception $e) {
		echo "<center>erreur lors de la saisie de vos identifiants, pour recommancer cliquer <a href=\"index.php\">ici</a></center> <br>";
		echo "<center>voici le code erreur SQL : </center>".$e->getMessage();
	}
}
if($_POST['login']!=null && $_POST['motDePasse']!=null){
	verifIdentification();	
	}else{
		echo "<center>erreur lors de la saisie de vos identifiants, pour recommancer cliquer <a href=\"index.php\">ici</a></center> <br>";
	}

?>
</div>
</body>
<footer>
<h6><center><?php include 'piedDePage.php';?></center></h6>
</footer>
</html>