<?php
$host = "localhost";
$dbname = "tesline_db";
$user = "root";
$pass = "";

try {
    $tesline_connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$pass);
    $tesline_connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("Erreur connexion DB");
}
?>
