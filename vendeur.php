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
    <link rel="stylesheet" href="./css/vendeur.css">
    <link rel="stylesheet" href="./css/before_footer.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body>
    <?php require_once('./partials/header.php'); ?>
    <main>
        <div class="block-text-seller">
            <h2 class="title-seller">Pourquoi vendre avec <br> La Grande Armoire ?</h2>
    
            <p class="seller">Vous souhaitez vendre vos vetements pour faire partager <br> vos pièces ?</p>
    
            <h3 class="section-title">Vendez en un clic</h3>
    
            <li><a href="#tuto">Commencez à vendre</a></li>
    
            <h3 class="section-title">Notre processus</h3>
        </div>

        <section class="container-process">

            <div class="container-steps">
                <div class="steps process1"></div>
                <p>Déposez vos articles</p>
            </div>
            <div class="container-steps">
                <div class="steps process2"></div>
                <p>Nous procedons à <br> l’expertise</p>
            </div>
            <div class="container-steps">
                <div class="steps process3"></div>
                <p>Nous vendons vos pièces</p>
            </div>

        </section>

        <h3 class="section-title">Comment faire ?</h3>

        <section id="tuto">
            <div class="background-image-seller"></div>
            <div class="container-steps-seller">
                <ol class="steps-seller">
                    <li>Rendez-vous en boutique trois semaines avant l’ouverture du pop-up pour nous apporter vos pièces.</li>
                    <li>Nous récupérons vos pièces afin qu’elles soient authentifiées et nettoyées.</li>
                    <li>Nous convenons ensembles d’un prix de vente et nous installons vos pièces pour la vente.</li>
                    <li>Une fois la vente effectué, vous récupéré votre argent.</li>
                </ol>
                <li class="register"><a class="button-register" href="http://localhost/la_grande_armoire/creer_compte">Inscrivez-vous</a></li>
            </div>
        </section>

        <h3 class="section-title">Nos engagements</h3>

        <section class="our-engagements">
            <div class="all-engagements">
                <ul class="engagements">
                    <li> Nous garantissons l’authenticité des pièces.</li>
                    <li>Notre commission sur le prix de vente est de ... </li>
                    <li>Chaque pièces seras garantie en cas de vol ou de perte</li>
                    <li> En cas de pièces trop abimées et de contre-façon, nous refusons toute responsabilité et nous refuserons la vente.</li>
                </ul>
                <li class="about-engagements"><a class="button-engagements" href="http://localhost/la_grande_armoire/a_propos#container-our-engagements">En savoir plus</a></li>
            </div>
            <div class="background-image-engagements"></div>
        </section>

        <h3 class="section-title">Nos ventes</h3>

        <section class="container-our-sales">
            <div class="container-sales">
                <div class="piece img1"></div>
                <p>Echarpe Burberry</p>
            </div>
            <div class="container-sales">
                <div class="piece img2"></div>
                <p>Sac à main Chloé</p>
            </div>
            <div class="container-sales">
                <div class="piece img3"></div>
                <p>Tennis Chanel</p>
            </div>
        </section>
        <div class="container-button-our-pieces">
            <button class="button-our-pieces">Découvrez nos pièces</button>
        </div>
    </main>
    <?php require_once('./partials/before_footer.php'); ?>
    <?php require_once('./partials/footer.php') ?>
</body>

</html>