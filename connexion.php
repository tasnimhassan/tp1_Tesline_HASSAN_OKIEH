<?php
include "config.php";

$id = $_POST['identifiant'];
$pass = $_POST['motdepasse'];

$req = $tesline_connexion->prepare("SELECT * FROM utilisateurs WHERE identifiant=?");
$req->execute([$id]);
$user = $req->fetch();

if($user && password_verify($pass,$user['motdepasse'])){
    header("Location:index.php?msg=Vous êtes connecté");
}else{
    header("Location:index.php?msg=Erreur. Recommencez");
}
?>
