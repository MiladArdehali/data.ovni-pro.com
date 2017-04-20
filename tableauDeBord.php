<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tableau de bord de <?php echo $_SESSION['login'] ?></title>
</head>
<body>
<h3 align="center" style="color: green;">Bienvenue sur votre tableau de bord</h3>

<form action="ConfirmForm.php" method="POST">
	<p align="center"><label for="date">Saisir la date du suivi : </label>
	<input type="date" name="date" id="date">*</p>
	<p align="center"><label for="time">Saisir l'heure actuelle : </label>
	<input type ="time" name="heure" id="heure">*</p>
	<p align="center"><label for="nomAnnexe">Y a qu'il un annexe? Si oui quel est son nom ? </label>
	<input type ="text" name="nomAnnexe" id="nomAnnexe"></p>
	<p align="center"><label for="commentaire">Saisir le ou les commentaires ici : </label>
	<input type ="text" name="commentaire" id="commentaire">*</p>
	<p align="center"><label for="projet">Quel est le theme du projet concerné ? </label>
	<input type ="text" name="projet" id="projet">*</p>
	<p align="center"><label for="techno">quel est la technologie concerné ? </label>
	<input type ="text" name="techno" id="techno"></p>
	<p align="center"><input type="submit" value="valider et transmettre à la base de donnée"></p>
</form>
<br>
<form action="index.php"><p align="center"><input type="submit" value="Deconnection"></p>
	<br><p align="center" style="color: orange;">* Champs obligatoire</p>
</form>
</body>
</html>