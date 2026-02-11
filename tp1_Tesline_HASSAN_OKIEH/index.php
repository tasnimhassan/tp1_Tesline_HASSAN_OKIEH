<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Connexion Tesline</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="tesline1-box">
<img src="h.png" alt="Logo" class="tesline2">

<h2>Connexion sécurisée</h2>

<form action="connexion.php" method="POST">

<input class="tesline2-input" type="text" name="identifiant" placeholder="Identifiant" required>

<input class="tesline2-input" type="password" name="motdepasse" placeholder="Mot de passe" required>

<div class="tesline3-btns">

<button class="tesline4-reset" type="reset">Reset</button>

<button class="tesline5-valider" type="submit">Valider</button>

<button class="tesline6-ajout" type="button" onclick="window.location='ajout.php'">
Ajouter compte
</button>

</div>

</form>

<div class="tesline7-message">

<?php
if(isset($_GET['msg'])){
echo $_GET['msg'];
}
?>

</div>

</div>

</body>
</html>
