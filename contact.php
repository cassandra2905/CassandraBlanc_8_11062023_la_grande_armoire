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
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/before_footer.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body>
    <?php require_once('./partials/header.php'); ?>
    <main>
        <h2 class="contact-us">Contactez-nous</h2>
        <?php if (!empty($_SESSION['success_contact'])) {?>
            <p class="success_confirmation"><?= $_SESSION['success_contact'] ?></p>
        <?php 
        $_SESSION['success_contact'] = "";
        } ?>

        <form class="form-contact-us" method="post" action="./form/contact.php">

            <div class="bloc-containers-form">

                <div class="container-input-form">
                    <label for="civility">*Civilité</label><br>
                    <select name="civility" id="civility" required>
                        <option value="F">Femme</option>
                        <option value="H">Homme</option>
                    </select>
    
                    <label for="nom">*Nom :</label>
                    <input type="text" name="nom" id="nom" size="30" maxlength="20" required>
        
                    <label for="country">*Pays :</label><br>
                    <select name="country" id="country" required>
                        <option value="france">France</option>
                    </select>
        
                    <label for="email">*E-mail :</label>
                    <input type="email" name="email" id="email" placeholder="monmail@mail" required>
                </div>
    
                <div class="container-input-form">
                    <label for="prenom">*Prénom :</label>
                    <input type="text" name="prenom" id="prenom" size="30" maxlength="20" required>
        
                    <label for="telephone">Téléphone :</label>
                    <input type="tel" id="telephone" name="telephone" required>
        
                </div>

            </div>

            <div class="container-input-form-text-area">
                <label for="demande">*Votre demande :</label>
                <textarea name="demande" id="demande" required></textarea>
            </div>

            <div class="bloc-button-send">
                <input class="send-button" type="submit" value="Envoyer">
            </div>
            
        </form>

        <section class="container-social-networks-newsletter">
            <div class="follow">
                <h3>Nous suivre</h3>
                <p>Venez nous suivre et découvrez en exclusivité tous nos produits</p>
                <nav>
                    <ul class="social-networks">
                        <li>
                            <a aria-label="Youtube" class="social" href="https://www.youtube.com/@Lagrande.armoire/featured"><span class="fa-brands fa-square-youtube"></span></a>
                        </li>
                        <li>
                            <a aria-label="Instagram" class="social" href="https://www.instagram.com/la.grandearmoire/"><span class="fa-brands fa-instagram"></span></a>
                        </li>
                        <li>
                            <a aria-label="Facebook" class="social" href="https://www.facebook.com/people/La-Grande-Armoire/100091585398447/"><span class="fa-brands fa-facebook"></span></a>
                        </li>
                        <li>
                            <a aria-label="Twitter" class="social" href="https://twitter.com/lagrandearmoire"><span class="fa-brands fa-twitter"></span></a>
                        </li>
                        <li>
                            <a aria-label="LinkedIn" class="social" href="https://www.linkedin.com/company/la-grande-armoire/"><span class="fa-brands fa-linkedin"></span></a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="newsletter">
                <h3>Newsletter</h3>
                <p>Inscrivez-vous à notre newsletter pour connaitre en exclusivité toute les nouveauté de La Grande Armoire.</p>
                <div class="container-civility">
                    <input type="radio" name="civility" value="Mme" id="Mme"> <label for="Mme">Mme</label>
                    <input type="radio" name="civility" value="M." id="M."> <label for="M.">M.</label>
                </div>
                <div class="container-mail">
                    <label for="email">*E-mail </label><br>
                    <input type="email" id="email" placeholder="ex : nom.prenom@gmail.com" required>
                </div>
            </div>
        </section>
    </main>
    <?php require_once('./partials/footer.php') ?>
</body>

</html>