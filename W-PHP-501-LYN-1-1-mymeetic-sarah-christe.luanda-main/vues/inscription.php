<?php
include("../controlers/controler.connexion.php");
include("../controlers/controlers/controler.insc.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="../insc.script.js" defer></script>
    <title>My meetic - Inscription</title>
</head>

<body>
    <section class="login-signup">
        <div class="signup">
            <h1>INSCRIPTON</h1>

            <form id="form" method="post" autocomplete="on">
                <div class="names">

                    <div class="fname_error">
                        <input type="text" id="fname" name="fname" placeholder="Prénom" required>

                        <!-- <?php
                        if ($valid_fname == false && !empty($fname)) {
                            ?>
                            <p class="error_form">Nom invalide</p>
                            <?php
                        }
                        ?> -->
                    </div>

                    <div class="lname_error">
                        <input type="text" id="lname" name="lname" placeholder="Nom" required>
                        <!-- <?php
                        if ($valid_lname == false && !empty($fname)) {
                            ?>
                            <p class="error_form">Nom invalide</p>
                            <?php
                        }
                        ?> -->
                    </div>
                </div>

                <input type="text" id="email" name="email" placeholder="E-mail" required>

                <div class="pswd">
                    <input type="text" id="pwd" name="pwd" placeholder="Mot de passe" required>
                    <input type="text" id="repeat-pwd" name="repeat-pwd" placeholder="Mot de passe" required>
                </div>

                <div class="genre-age">
                    <label>Age:
                    <input type="date" id="date" name="age" max="2005-12-31" min="1960-01-01" placeholder="E-mail"
                        required>
                        </label>

                    <select name="genre" id="genre" required>
                        <option value="">Genre</option>

                        <?php
                        foreach ($genres as $genre) {
                            ?>
                            <option value="<?= $genre['id'] ?>">
                                <?= $genre['name'] ?>

                            </option>

                            <?php
                        }

                        ?>

                    </select>
                </div>

                <select name="city" id="city" required>
                    <option value="">Ville</option>

                    <?php
                    foreach ($cities as $towns) {
                        ?>
                        <option value="<?= $towns['id'] ?>">
                            <?= $towns['name'] ?>
                        </option>

                        <?php
                    }

                    ?>
                </select>

                <div id="check">

                    <?php
                    foreach ($hobbies as $hobby) {
                        ?>
                        <input type="checkbox" name="hobbies[]" id="<?= $hobby['id'] ?>" value="<?= $hobby['id'] ?>" />
                        <label for="<?= $hobby['name'] ?>">
                            <?= $hobby['name'] ?>
                        </label>
                        <?php
                    }

                    ?>
                </div>


                <br>

                <button type="submit" id="submit" name="submit">INSCRIPTON</button>
            </form>

        </div>
    </section>
</body>

</html>