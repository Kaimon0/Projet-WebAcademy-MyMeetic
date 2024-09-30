<?php

include("../controlers/controler.connexion.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/./style.css">
    <script src="../con.script.js" defer></script>
    <title>My meetic - Connexion</title>
</head>

<body>
    <section class="login-signup">
        <div class="login">
            <h1>CONNEXION</h1>

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
</body>

</html>