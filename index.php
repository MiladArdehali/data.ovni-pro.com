<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page de login</title>
</head>
<body>
<form method="POST" action="verifLogin.php">
	<p>
	<label for="login">Veuillez entrer votre login :</label>
	<input type="text" name="login" id="login">
	</p>
	<p>
	<label for="motDePasse">Veuillez entrer votre mot de passe :</label>
	<input type="text" name="motDePasse" id="motDePasse">
	</p>
	<p>
	<input type="submit" name="valider">
	</p>
</form>
</body>
</html>