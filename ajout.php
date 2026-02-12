<?php include "config.php"; ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Ajouter compte</title>
</head>
<body>

<div class="tesline1-box">

<h2>Créer un compte</h2>

<form method="POST">

<input class="tesline2-input" name="identifiant" placeholder="Identifiant" required>
<input class="tesline2-input" name="motdepasse" type="password" placeholder="Mot de passe" required>

<button class="tesline6-ajout">Créer</button>

</form>

<?php
if($_POST){

$id=$_POST['identifiant'];
$pass=password_hash($_POST['motdepasse'],PASSWORD_DEFAULT);

$req=$tesline_connexion->prepare("INSERT INTO utilisateurs(identifiant,motdepasse) VALUES(?,?)");

try{
$req->execute([$id,$pass]);
echo "<p class='success'>Compte créé</p>";
}catch(Exception $e){
echo "<p class='error'>Identifiant déjà utilisé</p>";
}
}
?>

<a href="index.php">⬅ Retour connexion</a>

</div>
</body>
</html>
