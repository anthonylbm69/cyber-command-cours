<?php
session_start();
session_regenerate_id(true);
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
    <title>Faille xss</title>
</head>
<body>
<div class="container">
    <h2>Test faille xss</h2>
    <form action="xss.php" method="post">
        <label for="email">Email</label>
        <input id="email" name="email" type="text" >
        <button type="submit">valider</button>
    </form>
    <a href="logout.php">Déconnexion</a>
</div>
</body>
</html>

<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    echo "Votre email est " . $email;
}