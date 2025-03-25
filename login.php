<?php

$pdo = new PDO("mysql:host=172.16.30.129;dbname=injectione;", "root", "secret", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$username = $_POST['username'];
$password = $_POST['$password'];

$requete = "SELECT * FROM utilisateur WHERE username = '$username' AND password = '$password';";

$resultat = $pdo->query($requete);

if ($resultat->rowCount()>0){
    echo "Commande reussie";
} else {
    echo "marche pas"
}