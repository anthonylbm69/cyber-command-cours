<?php
session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION['id'], $_SESSION['username'])) {
    header("Location: login.php"); // Redirige vers la page de connexion
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>
<div class="container">
    <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h2>
    <p>Vous êtes connecté.</p>
    <a href="">Déconnexion</a>
</div>
</body>
</html>