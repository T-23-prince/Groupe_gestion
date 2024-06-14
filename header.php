<?php
session_start();

if (isset($_SESSION['utilisateur'])) {
    $_utilisateur = $_SESSION['utilisateur'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEIC</title>
    <style>
        header {
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #007bff;
        }
        nav a:hover {
            text-decoration: underline;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Bienvenue</a>
            <a href="page2.php">Voir les groupes</a>
            <a href="login2.php">Se connecter</a>
            <a href="page1.php">S'inscrire</a>
        </nav>
    </header>
</body>
</html>
