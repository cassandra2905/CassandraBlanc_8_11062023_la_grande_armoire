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
    <link rel="stylesheet" href="./css/acheteur.css">
    <link rel="stylesheet" href="./css/before_footer.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body>
    <?php require_once('./partials/header.php'); ?>
    <main>

        <video id="background-buyer" autoplay muted loop>
            <source src="./img/video-acheteur.mp4" type="video/mp4">
        </video>

        <div class="block-text-buyer">

            <h2>Du luxe de seconde main à<br>votre portée</h2>
    
            <p class="shop-popup-store">Rendez-vous en boutique et découvrez nos pièces de seconde <br> main !</p>
    
            <div class="container-button-contact">
                <a href="http://localhost/la_grande_armoire/contact" class="button-contact-us">Contactez-nous</a>
            </div>
    
            <h3 class="title-suscribe">Inscrivez-vous pour assister à <br> notre pop-up</h3>

        </div>
        <section class="container-form">
            <div class="container-background-image-form"></div>
            <div class="container-form-inscription-popup">
                <h2>Inscrivez-vous et profitez d’une<br>remise de 10% en boutique</h2>
                <p>Envoyez nous un message et nous vous transmettrons les coordonnées et informations sur l’évênement.</p>
                <form class="newsletter" method="get" action="">
                    <label for="mail">*Email</label>
                    <input type="mail" id="mail" placeholder="*(Champs obligatoires)" required>
                    
                    <div class="container-button-contact">
                        <button class="contact-us">Contactez-nous</button>
                    </div>
                </form>
            </div>
        </section>
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