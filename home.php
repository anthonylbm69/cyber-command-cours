<?php
session_start();

if (isset($_SESSION['id'], $_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
<h1>Connexion</h1>
<h2>Bienvenue <?php echo htmlspecialchars($_SESSION['username']) ?></h2>
<p>vous etes co</p>
<p>déco</p>
</body>
</html>
