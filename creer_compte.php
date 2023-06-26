<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/creer_compte.css">
    <link rel="stylesheet" href="./css/before_footer.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body>
    <?php require_once('./partials/header.php'); ?>
    <main>
        <h2 class="account">Mon compte</h2>

        <section class="container-button-account">
            <button id="connexion-clic" onclick="afficherConnexion();">Connexion</a>
            <button id="create-account" onclick="afficherInscription();">Créer un compte</a>
        </section>

        <?php
            if (isset($_SESSION['error'])) {
                echo ("<p>" . $_SESSION['error'] . "</p>");
                unset($_SESSION['error']);
            }
        ?>


        <form id="create-an-account" method="post" action="./form/submit_register.php">
            <p class="contain-specialized">Créez votre compte et découvrez un contenu spécialisé <br> pour vous</p>
            <div class="container-input">
                <div class="inputs">
                    <label for="email">*E-mail</label><br>
                    <input type="email" id="email" name="email" placeholder="ex : nom.prenom@gmail.com" required>
                </div>

                <div class="inputs">
                    <label for="nom">*Nom</label><br>
                    <input type="text" id="nom" name="nom" required>
                </div>

                <div class="inputs">
                    <label for="prenom">*Prénom</label><br>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
    
            </div>

            <div class="container-check-categorie">
                <label for="acheteur">Acheteur</label>
                <input type="radio" id="acheteur" name="statut" value="acheteur" required>

                <label for="vendeur">Vendeur</label>
                <input type="radio" id="vendeur" name="statut" value="vendeur" required>
            </div>

            <div class="container-input">
                <div class="inputs">
                    <label for="password">*Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Se souvenir de moi</label>
         
            </div>

            <div class="container-button-connexion">
                <input class="login-btn" type="submit" value="Inscription">
            </div>
        </form>


        <form id="connexion" method="post" action="./form/submit_login.php">

            
            <div class="container-input">
                <p class="contain-specialized">Connectez vous pour accéder à votre contenu spécialisé</p>
                
                <div class="inputs">
                    <label for="email">*E-mail</label>
                    <input type="email" id="email" name="email" placeholder="ex : nom.prenom@gmail.com" required>
                </div>

                <div class="inputs">
                    <label for="password">*Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                </div>

            </div>

            <input type="checkbox" name="session" id="session"> 
            <label for="session">Se souvenir de moi </label>

            <div class="container-button-connexion">
                <input class="login-btn" type="submit" value="Connexion">
            </div>
        </form>
    </main>
    <?php require_once('./partials/before_footer.php'); ?>
    <?php require_once('./partials/footer.php') ?>
</body>

</html>

<script>
    const formInscription = document.getElementById('create-an-account');
    const formConnexion = document.getElementById('connexion');

    // Animation javascript pour cacher/afficher les formulaires
    function afficherConnexion() {
        formInscription.style.display = 'none';
        formConnexion.style.display = 'block';
    }

    function afficherInscription() {
        formInscription.style.display = 'block';
        formConnexion.style.display = 'none';
    }    
</script>