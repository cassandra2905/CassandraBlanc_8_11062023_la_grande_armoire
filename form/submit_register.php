<?php
//chargement de la session

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Formulaire de création de compte
//Lien de connexion vers la bdd
require_once('./../partials/bdd.php');
//les champs "email, nom, prenom, statut et password" doivent être définis
//On sécurise le mot de passe en le chiffrant

if (isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['statut']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $statut = htmlspecialchars($_POST['statut']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    // Ecriture de la requête
    $sqlQuery = 'INSERT INTO user(email, nom, prenom, statut, mdp) VALUES (:email, :nom, :prenom, :statut, :mdp)';
    
    // Préparation
    $insertUser = $bdd->prepare($sqlQuery);
    
    // Exécution, l'utilisateur est maintenant en base de données
    $insertUser->execute([
        'email' => $email,
        'nom' => $nom,
        'prenom' => $prenom,
        'statut' => $statut,
        'mdp' => $password
    ]);

    // Redirection vers la page d'accueil
    header("Location: http://localhost/la_grande_armoire/");
    exit;
}

else {
    $_SESSION['error'] = 'Tous les champs obligatoires ne sont pas remplis';
    // Redirection vers la page de création de compte
    header("Location: http://localhost/la_grande_armoire/creer_compte/#create-an-account");
    exit;
}
?>