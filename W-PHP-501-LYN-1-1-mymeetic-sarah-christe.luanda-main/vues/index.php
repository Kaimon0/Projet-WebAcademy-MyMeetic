<?php

include("../controlers/controler.connexion.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Protest+Riot&display=swap"
        rel="stylesheet">
    <script src="../con.script.js" defer></script>
    <title>My meetic - Accueil</title>
</head>

<body>

    <header>

        <nav>
            <a href="../vues/index.php">
                <div class="logo">
                    <h1>My meetic</h1>
                    <img src="../img/rsz_heart2.png" alt="logo" class="heart">
                </div>
            </a>


            <a href="../vues/rencontrez.php">
                <h2 class="meet">Rencontrez</h2>
            </a>

            <div class="log">
                <a href="../vues/inscription.php">
                    <h2>Inscription</h2>
                </a>

                <a href="../vues/connexion.php">
                    <h2>Connexion</h2>
                </a>

            </div>
        </nav>

    </header>

    <main>

        <section class="slogan">
            <h3> Rencontrer n'a jamais été aussi simple </h3>

            <img class="bike" src="../img/bike2.png" alt="Amoureux en vélo">

            <a href="../vues/rencontrez.php">
                <button class="button-slogan">Vous aussi rencontrez</button>
            </a>
        </section>


        <section class="login-signup">
            <div class="login">
                <h4>CONNEXION</h4>

                <form id="connect" method="post" autocomplete="on">
                    <input id="mail" type="text" name="email" placeholder="E-mail">
                    <input id="pswd" type="text" name="pwd" placeholder="Mot de passe">
                    <br>
                    <button type="submit" name="submit">CONNEXION</button>
                </form>

                <div class="no-account">
                    <p>Pas de compte?</p>
                    <a href="../vues/inscription.php">
                        <button> Inscrivez-vous ici !</button>
                    </a>

                </div>
            </div>
        </section>
    </main>
</body>

</html>