<?php 
session_start();
$_SESSION['serveur'] = 'mysql.hostinger.fr';
$_SESSION['loginBDD'] = 'u652047723_milad';
$_SESSION['password'] = 'bmw530d2002';
$_SESSION['database'] = 'u652047723_data';

?>
<!DOCTYPE html>
<html>
<head>
<title>Page de login</title>
<meta charset="UTF-8">
<link rel="stylesheet" media="screen" type="text/css" title="page_web" href="css/style.css"/> 
</head>
<body>
<div id="cadre">
<form method="POST" action="verifLogin.php">
	<p align="center">
	<label for="login">Veuillez entrer votre login :</label>
	<input type="text" name="login" id="login">
	</p>
	<p align="center">
	<label for="motDePasse">Veuillez entrer votre mot de passe :</label>
	<input type="text" name="motDePasse" id="motDePasse">
	</p>
	<p align="center">
	<input type="submit" value="valider" id="button">
	</p>
</form>
</div>
</body>
</html>
