<?php 
$nom_cookie = "milad";
$valeur_cookie = "premier cookie";
setcookie($nom_cookie, $valeur_cookie, time()+20);
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Bonjour !</title>
	<meta charset="utf-8"></meta>
	</head>
		
	<body>
	<h1>je suis le premier titre</h1>
	<br>
	<h3>Voici le formulaire</h3>
	--------------------------------
	<br>
		<form method = "POST" action = "target.php">
			<p>
				<label for = "prenom">Entrer votre prenom : </label>
				<input type = "text" name = "prenom" id = "prenom"/>
			</p><p>
				<label for = "nom">Entrer votre nom : </label>
				<input type = "text" name = "nom" id = "nom"/>
			</p><p>
				<label for = "pseudo">Entrer votre pseudo : </label>
				<input type = "text" name = "pseudo" id = "pseudo"/>
			</p>
			<p>
				<input type = "submit" value = "envoyer"/>
			</p>
	
	</form>
	
	<a href="connexion.php">Cliquez ici pour acceder a la base de donnée</a><br>
	
	--------------------------------
	<br>
	<?php 
	$text = fopen("exemple-de-text.txt", "r+");
	$affichageText = fread($text,100);
	echo $affichageText;
	fclose($text);
	?>
	<br>
	---------------------------------
	<br>
	<?php 
	echo 'Voici le nom du serveur : '.$_SERVER['SERVER_NAME'].'<br>';
	$variable=5;
	if($variable<18){
		echo "moins que 18";
	}elseif ($variable>18){
		echo "plus que 18";
	}else{
		echo 'je suis egale a '.$variable.' ';
	}
	
	echo "<br> et voici un text en php <br>";
	
	switch($variable){
		case 17:
			echo 'c\'est pas bien';
			break;
		case 18:
			echo 'c\'est tres bien';
			break;
		default:
			echo 'je sais pas';
			break;
	}
	
	for($i=1;$i<=$variable;$i++){
		switch($i){
			case 1:
				echo '<br> voici la premiere fois';
				break;
			default:
				echo '<br> voici la '.$i.'eme fois';
				break;
		}
	}
	
	?><br><?php
	
	$prenom = array('maman','sina','elahe');
	
	$prenom[3]='milad';
	
	for($i=0;$i<=3;$i++){
	echo $prenom[$i].' ';
	}
	
	$age = array ('milad'=>31, 'sina'=>28, 'elahe'=>31);
	
	echo '<br>'.$age['milad'];
	
	foreach($age as $value){
		echo '<br>'.$value;
	}
	foreach($age as $key=>$value){
		echo '<br>'.$key.' a '.$value.' an cette année';
	}
	
	sort ($prenom);
	print_r ($prenom);
	rsort ($prenom);
	print_r ($prenom);
	echo '<br>';
	ksort ($age);
	print_r ($age);
	echo '<br>';
	asort ($age);
	print_r ($age);	
	echo '<br>';
	echo date("d/m/Y").'<br>';
	echo date("l").'<br>';
	
	define('BIENVENUE','Bienvue sur mon site');
	echo BIENVENUE.'<br>';
	echo __line__;
	
	function test(){
	echo __FUNCTION__.'<br>';
	echo __FILE__.'<br>';
	echo __DIR__.'<br>';
	
	}
	test();
	?>
	
	
	
	
	<br>
	<?php include "piedPage.php"?>
	
	</body>
</html>