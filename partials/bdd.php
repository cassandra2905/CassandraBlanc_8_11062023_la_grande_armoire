<?php
$bdd;
$serveur = "localhost"; // Adresse du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur MySQL
$motDePasse = ""; // Mot de passe MySQL
$baseDeDonnees = "armoire"; // Nom de la base de données

try {
    $bdd = new PDO("mysql:host=$serveur;dbname=$baseDeDonnees", $utilisateur, $motDePasse);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // // Exécuter des requêtes MySQL

    // // Exécution d'une requête SELECT
    // $requete = $bdd->query("SELECT * FROM user");

    // // Récupération des résultats
    // while ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
    //     // Utilisez les données récupérées ici
    //     $id = $row['id'];
    //     $nom = $row['nom'];
    //     $prenom = $row['prenom'];

    //     echo "ID: $id, Nom: $nom, Prénom: $prenom <br>";
    // }
} catch (PDOException $e) {
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}
?>