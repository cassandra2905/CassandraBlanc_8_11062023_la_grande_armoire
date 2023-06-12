<?php 
session_start();
//Lien de connexion vers la bdd
require_once('./../partials/bdd.php');

// Vérifier si la requête est de type POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Vérifier la présence et la taille de chaque variable du formulaire
    $civility = isset($_POST["civility"]) ? htmlspecialchars($_POST["civility"]) : "";
    $name = isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : "";
    $country = isset($_POST["country"]) ? htmlspecialchars($_POST["country"]) : "";
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
    $firstname = isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : "";
    $phone = isset($_POST["telephone"]) ? htmlspecialchars($_POST["telephone"]) : "";
    $message = isset($_POST["demande"]) ? htmlspecialchars($_POST["demande"]) : "";

    // Vérifier si une des variables est vide
    if (empty($civility) || empty($name) || empty($country) || empty($email) || empty($firstname) || empty($message)) {
        echo "Erreur : Tous les champs du formulaire sont obligatoires.";
        exit();
    }

    // Vérifier la taille de chaque champ
    if (
        strlen($civility) > 1 ||
        strlen($name) > 20 ||
        strlen($country) > 40 ||
        strlen($email) > 40 ||
        strlen($firstname) > 20 ||
        strlen($phone) > 15 ||
        strlen($message) > 3000
    ) {
        echo "Erreur : Taille maximale dépassée pour un ou plusieurs champs.";
        exit();
    }

    try {
        // Requête préparée pour l'insertion des données
        $sql = "INSERT INTO ask (civility, name, country, email, firstname, phone, message) 
                VALUES (:civility, :name, :country, :email, :firstname, :phone, :message)";
        $stmt = $bdd->prepare($sql);

        // Liaison des valeurs des paramètres
        $stmt->bindParam(":civility", $civility);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":country", $country);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":firstname", $firstname);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":message", $message);

        // Exécution de la requête préparée
        $stmt->execute();

        $_SESSION['success_contact'] = "Votre message a bien été envoyé !";
        // Redirection après l'insertion
        header("Location: ./../contact.php");
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
} 

?>