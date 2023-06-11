<?php
    ini_set('display_errors', 1);

    session_start();
    //Lien de connexion vers la bdd
    require_once('./../partials/bdd.php');

    if (isset($_POST['email']) && isset($_POST['password'])) {

        if (strlen($_POST['email']) > 50) {
            $_SESSION['error'] = "Votre e-mail est trop long (50 caractères maximum)";
    
            // Redirection vers la page de connexion
            header("Location: http://localhost/la_grande_armoire/creer_compte");
            exit;
        }

        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        
        $requete = $bdd->prepare("SELECT * FROM user WHERE email = :email");
        $requete->bindParam(':email', $email);
        $requete->execute();
        $user = $requete->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Vérification du mot de passe
            if (password_verify($password, $user['mdp'])) {

                // Mot de passe correct, l'utilisateur est authentifié
                $_SESSION['user'] = $user;
        
                // Redirection vers la page protégée ou le tableau de bord de l'utilisateur
                header("Location: http://localhost/la_grande_armoire/");
                exit;
            } else {
                // Mot de passe incorrect
                $_SESSION['error'] = "Mot de passe incorrect.";
            }
        } else {
            // Utilisateur non trouvé
            $_SESSION['error'] = "Utilisateur non trouvé.";
        }
    }
?>
