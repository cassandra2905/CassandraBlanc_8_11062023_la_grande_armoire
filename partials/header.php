<?php
    ini_set('display_errors', 0);
    session_start();
    require_once('./partials/bdd.php');
?>

<header>
    <img class="logo" src="./img/logo.png" alt="Logo la grande armoire">
    <div class="menu">
        <nav>
            <ul>
                <li><a href="http://localhost/la_grande_armoire/">Accueil</a></li>
                <li><a href="http://localhost/la_grande_armoire/evenement">Evenement</a></li>
                <li><a href="http://localhost/la_grande_armoire/a_propos">A propos</a></li>
                <li><a href="http://localhost/la_grande_armoire/contact">Contact</a></li>
                <?php if (!empty($_SESSION['user'])) { ?>
                    <li><a href="http://localhost/la_grande_armoire/form/disconnect.php">Déconnexion</a></li>
                    <li><a href="#" class="msgLogged"><?= $_SESSION['user']['prenom']; ?> (<?= $_SESSION['user']['statut'] ?>)</a></li>
                <?php } else { ?>
                    <li><a href="http://localhost/la_grande_armoire/creer_compte">Connexion</a></li>
                <?php } ?>
            </ul>
        </nav>
        <div class="search">
            <label for="site-search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </label>
            <input type="search" id="site-search" name="q">
        </div>
    </div>
</header>