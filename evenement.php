<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/evenement.css">
    <link rel="stylesheet" href="./css/before_footer.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body>
    <?php require_once('./partials/header.php'); ?>
    <main>
        <video id="container-banner" autoplay muted loop>
            <source src="./img/popup_store.mp4" type="video/mp4">
        </video>
        <section class="our-idea">
            <div class="image">
                <img src="./img/popup-store.png" alt="notre popup store">
            </div>
            <div class="text">
                <h2>Notre Idée</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </section>
        <section class="our-project">
            <div class="text">
                <h2>Notre projet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="image">
                <img src="./img/projet.png" alt="notre projet">
            </div>
        </section>
        <div class="container-our-products">
            <h2>Nos produits</h2>
            <div class="container-our-benefits">
                <section class="benefits">
                    <img src="./img/sac.png" alt="sac">
                    <p>Des pièces de seconde main de luxe</p>
                </section>
                <section class="benefits">
                    <div>
                        <img src="./img/controle-qualite.png" alt="contrôle qualité">
                    </div>
                    <p>De nombreuses marques certifiées authentiques par notre expert contrôle qualité</p>
                </section>
                <section class="benefits">
                    <div>
                        <img src="./img/estimation.png" alt="estimations">
                    </div>
                    <p>Des prix fixés avec le vendeur en fonction de la marque du produit ainsi que la qualité et l’âge.</p>
                </section>
            </div>
        </div>
        <h2 class="hashtag">#Lagrandearmoire</h2>
        <section id="container-collection">
            <div class="image-collection collection1"></div>
            <div class="image-collection collection2"></div>
            <div class="image-collection collection3"></div>
        </section>

        <div class="container-button-instagram">
            <a href="https://www.instagram.com/la.grandearmoire/" class="see-you-on-instagram">Rendez-vous sur Insta</a>
        </div>



    </main>
    <?php require_once('./partials/before_footer.php'); ?>
    <?php require_once('./partials/footer.php') ?>
</body>

</html>