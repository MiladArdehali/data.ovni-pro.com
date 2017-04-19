<?php
$serveur = "localhost";
$login = "root";
$password = "root";

try {
	$connexion = new PDO("mysql:host=$serveur;dbname=test",$login,$password);
	$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$codeSQL = "CREATE TABLE visiteurs(
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nom VARCHAR(50),
	prenom VARCHAR(50),
	email VARCHAR(70)
)";
	$connexion -> exec($codeSQL);
	echo "table visiteurs créer";
	echo "creation de la base de donnée faite avec succes";
} catch (Exception $e) {
	echo "erreur de connection, voici le code erreur :".$e->getMessage();
}