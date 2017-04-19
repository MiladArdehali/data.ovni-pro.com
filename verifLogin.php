<?php 


function verifIdentification(){
	try {
		$login = $_POST['login'];
		$pass = $_POST['motDePasse'];
		$serveur = "mysql.hostinger.fr";
		$loginBDD = "u652047723_milad";
		$password = "bmw530d2002";
		$connexion = new PDO("mysql:host=$serveur;dbname=u652047723_data",$loginBDD,$password);
		$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$codeSQL = "SELECT password FROM user WHERE login="."'".$login."'";
		$motDePasseBDD = $connexion->query($codeSQL);
		$val = $motDePasseBDD->fetch();
		$valpass = $val['password'];
		if($valpass==$pass){
			echo "<h3>mot de passe correct. <a href=\"tableauDeBord.php\">Cliquez ici pour acceder au tableau de bord</a></h3>";
		}else{
			echo "<h3>mot de passe incorrect. <a href=\"index.php\">Cliquez ici pour acceder au tableau de bord</a></h3>";
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

</body>
</html>