<?php
session_start();

if (!empty($_SESSION['user'])) {
    $name = $_SESSION['user']; 
}

$db = new PDO ('mysql:host=localhost; dbname=utilisateurs', 'root', '');

if(isset($_POST['login'])){
    if(!empty($_POST['user_login']) || !empty($_POST['password'])){
        $user_login = $_POST['user_login'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM utilisateurs WHERE nom=? AND password=? ";
        $query = $db->prepare($sql);
        $query->execute(array($user_login, $password));
        $row = $query->rowCount();
        $fetch = $query->fetch();
        if($row > 0) {
            $_SESSION['user'] = $user_login;
            header("location: ../index.php");
        }
    else {
        echo "User can't login";
    }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="../css/signin.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ol>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="signin.php">Inscription</a></li>
                <li><a href="login.php">Connexion</a></li>
            </ol>
        </nav>
    </header>
    <main>
        <form action="" method="post">
            <input type="text" placeholder="Nom d'utilisateur" name="user_login" required>
            <input type="password" placeholder="Mot de passe" name="password" required>
            <button class="login" type="submit" name="login" value="Se connecter">Se connecter</button>
        </form>
    </main>
</body>
</html>