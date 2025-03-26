<?php
$pdo = new PDO("mysql:host=172.16.30.129;dbname=injection", "root", "secret", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

$stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE username = :username AND password = :password");
$stmt->execute([
    'username' => $username,
    'password' => $password
]);
$resultat = $stmt->fetch();
//$requete = "SELECT * FROM utilisateurs WHERE username = '$username' AND password = '$password'";
//$resultat = $pdo->query($requete);

if ($resultat) {
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['username'] = $username;

    header('Location: home.php');

} else {
    echo "Mot de passe incorrect !";
}