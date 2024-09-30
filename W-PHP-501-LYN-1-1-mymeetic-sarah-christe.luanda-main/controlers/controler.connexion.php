<?php

include("../modele/modele.php");

$request = new Modele('localhost', 'my_meetic', 'sarah_luanda', 'admin');
//afficher éléments form
$users = $request->execute("SELECT * FROM users");
$genres = $request->execute(
    "SELECT * FROM genres 
    ORDER BY name DESC
"
);

$cities = $request->execute("SELECT * FROM city");

$hobbies = $request->execute("SELECT * FROM hobbies");


//instancie la classe
// include("./controler.inscription.class.php");

// $inscription = new signUpCtrl($fname, $lname, $email, $pwd, $repeat_pwd, $age, $city);

// $caca = $inscription->emptyInput();
