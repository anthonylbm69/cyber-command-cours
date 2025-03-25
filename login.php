<?php

$pdo = new PDO("mysql:host=172.16.30.129;dbname=injection;", "root", "secret", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$username = $_POST['username'];
$password = $_POST['password'];

$requete = "SELECT * FROM utilisateurs WHERE username = '$username' AND password = '$password';";

$resultat = $pdo->query($requete);

if ($resultat->rowCount()>0){
    session_start();
    $_SESSION["id"] = $resultat["id"];
    $_SESSION["username"] = $username;
    echo "Commande reussie";
} else {
    echo "marche pas";
}