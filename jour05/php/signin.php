<?php
session_start();

if (!empty($_SESSION['user'])) {
    $name = $_SESSION['user']; 
}

$db = new PDO ('mysql:host=localhost; dbname=utilisateurs', 'root', '');

if (isset($_POST['register_name'])) {
    if (!empty($_POST['user_login']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['password']) && !empty($_POST['confirmpassword'])) {
        $nom = $_POST['user_login'];
        $prenom = $_POST['firstname'];
        $email = $_POST['lastname'];
        $password = $_POST['password'];
        // Check if the password is secure
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        $special_chars = preg_match('@[^\w]@', $password);
        if (!$uppercase) {
            echo 'Le mot de passe doit inclure au moins 1 lettre majuscule.';
            if (!$lowercase) {
                echo 'Le mot de passe doit inclure au moins 1 lettre minuscule.';
            }
                if (!$number) {
                    echo 'Le mot de passe doit inclure au moins 1 chiffre.';
                }
                    if (!$special_chars) {
                        echo 'Le mot de passe doit inclure au moins 1 caractère spécial.';
                    }
                        if (strlen($password) < 8) {
                            echo 'Le mot de passe doit inclure au moins 8 caractères.';
                        }
                        else {
                            echo 'Mot de passe valide.';
                            $query = "INSERT INTO utilisateurs (id, nom, prenom, email, password) VALUES ('', '$nom', '$prenom', '$email', '$password')";
                            $db->query($query);
                            header('Location: connexion.php');
                        }
        }
        else {
            echo 'Mot de passe invalide.';
        }
    }
    else {
        echo "Informations manquantes. Vous ne pouvez pas vous inscrire.";
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
        <form action="inscription.php" method="post">
            <input type="text" placeholder="Nom d'utilisateur*" name="user_login" required>
            <input type="text" placeholder="Prenom*" name="firstname" required>
            <input type="text" placeholder="Nom*" name="lastname" required>
            <input type="password" placeholder="Mot de passe*" name="password" required>
            <input type="password" placeholder="Confirmation mot de passe*" name="confirmpassword" required>
            <input class="register" type="submit" name="register_name" value="S'inscrire">
        </form>
    </main>
</body>
</html>