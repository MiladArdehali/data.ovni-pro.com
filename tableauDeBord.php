<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Tableau de bord de <?php echo $_SESSION['login'] ?></title>
<meta charset="UTF-8">
<link rel="stylesheet" media="screen" type="text/css" title="page_web" href="css/style.css"/>
<?php include 'header.php'; ?>
</head>
<body>
<h3 align="center" style="color: green;">Bienvenue sur votre tableau de bord <?= $_SESSION['login']?></h3>

<form action="ConfirmForm.php" method="POST">
	<p align="center"><label for="date">Saisir la date du suivi : </label>
	<input type="date" name="date" id="date">*</p>
	<p align="center"><label for="time">Saisir l'heure actuelle : </label>
	<input type ="time" name="heure" id="heure">*</p>
	<p align="center"><label for="nomAnnexe">Y a qu'il un annexe? Si oui quel est son nom ? </label>
	<input type ="text" name="nomAnnexe" id="nomAnnexe"></p>
	<p align="center"><label for="commentaire">Saisir le ou les commentaires ici : </label>
	<textarea name="commentaire" rows="10" cols="50"></textarea>*
	<p align="center"><label for="projet">Quel est le theme du projet concerné ? </label>
	<input type ="text" name="projet" id="projet">*</p>
	<p align="center"><label for="techno">quel est la technologie concerné ? </label>
	<input type ="text" name="techno" id="techno"></p>
	<p align="center"><input type="submit" value="valider et transmettre à la base de donnée" id="button"></p>
</form>
<br>
<p align="center"><a href="index.php"><input type="button" value="Deconnection" id="button"></a></p>
</form>
</body>
<footer>
<h6><center><?php include 'piedDePage.php';?></center></h6>
</footer>
</html>