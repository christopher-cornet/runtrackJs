<?php
session_start();

if (!empty($_SESSION['user'])) {
    $name = $_SESSION['user']; 
}

$db = new PDO ('mysql:host=localhost; dbname=utilisateurs', 'root', '');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ol>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="php/signin.php">Inscription</a></li>
                <li><a href="php/login.php">Connexion</a></li>
            </ol>
        </nav>
    </header>
    <main>
        <?php if ($_SESSION['user'] == true) {echo "Bonjour ", $name;} else {echo "<p class='notlogin'>", "Vous n'êtes pas connecté(e). Inscrivez-vous ou connectez vous.", "</p>";}?>
    </main>
</body>
</html>