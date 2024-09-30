<?php

include("../modele/modele.php");

// //inscription:

// //récupere les infos du formulaire

// // function insertUser($fname, $lname, $email, $pwd, $age, $genre, $city)
// //     {
// //         try {
// //             $sql = "INSERT INTO user (firstname, lastname, birthdate, city_id, id_genre, email, password)
// //                     VALUES (:firstname, :lastname, :birthdate, :city_id, :id_genre, :email, :password)";

// //             $stmt = $this->connect->prepare($sql);

// //             $stmt->bindParam(':fname', $fname);
// //             $stmt->bindParam(':lname', $lname);
// //             $stmt->bindParam(':email', $email);
// //             $stmt->bindParam(':pwd', $pwd);
// //             $stmt->bindParam(':age', $age);
// //             $stmt->bindParam(':genre', $genre);
// //             $stmt->bindParam(':city', $city);

// //             if ($stmt->execute()) {
// //                 echo "Vous êtes bien inscrit";
// //             } else {
// //                 echo "Erreur lors de l'enregistrement";
// //             }
// //         } catch (PDOException $e) {
// //             die("Erreur lors de l'insertion dans la base de données: " . $e->getMessage());
// //         }
// //     }


// // $fname = trim(htmlspecialchars($_POST["fname"]));
// // $lname = trim(htmlspecialchars($_POST["lname"]));
// // $email = trim(htmlspecialchars($_POST["email"]));
// // $pwd = trim(htmlspecialchars($_POST["pwd"]));
// // $repeat_pwd = trim(htmlspecialchars($_POST["repeat-pwd"]));
// // $age = $_POST["age"];
// // $genre = $_POST["genre"];
// // $city = $_POST["city"];
// // $hob_array = [];
// // $i = 0;


// //Gestion des erreurs
// if (isset($_POST["submit"])) {

//     if (!empty($_POST["fname"])) {
//         $regex_name = '/[a-zA-Z]/';


//         if (preg_match($regex_name, $_POST["fname"]) && strlen($_POST["fname"]) > 2) {

//             $valid_fname = "true";

//         } else {

//             $valid_fname = "false";
//         }

//     }

//     if (!empty($_POST["lname"])) {

//         $regex_name = '/[a-zA-Z]/';


//         if (preg_match($regex_name, $_POST["lname"]) && strlen($_POST["lname"]) > 2) {

//             $valid_lname = "true";

//         } else {

//             $valid_lname = "false";

//         }

//     }
//     return $valid_lname;

//     if (!empty($_POST["email"])) {

//         $regex_email = '/^[a-z][_a-z0-9-]+(\.[_a-z0-9-]+)*@([a-z0-9-]{2,})+(\.[a-z0-9-]{2,})*$/';

//         if (preg_match($regex_email, $_POST["email"]) && strlen($_POST["email"]) > 6) {

//             $valid_email = "true";

//         } else {

//             $valid_email = "false";

//         }

//     }
//     return $valid_email;

//     if (!empty($_POST["pwd"])) {

//         $regex_pwd = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/';

//         if (preg_match($regex_pwd, $_POST["pwd"]) && strlen($_POST["pwd"]) > 6) {

//             $valid_pwd = "true";

//             // $hash_pwd = password_hash(trim(htmlspecialchars($_POST["pwd"], PASSWORD_DEFAULT)));

//         } else {

//             $valid_pwd = "false";

//         }

//     }
//     return $valid_pwd;


//     if (!empty($_POST["repeat-pwd"])) {

//         if ($_POST["repeat-pwd"] == $_POST["pwd"]) {

//             $valid_repeat_pwd = "true";

//         } else {

//             $valid_repeat_pwd = "false";

//         }

//     }
//     return $valid_repeat_pwd;

//     if (!empty(_POST["age"])) {

//         if (_POST["age"] >= 18) {
//             $valid_age = "true";

//         } else {

//             $valid_age = "false";
//         }

//     }

//     if (!empty($_POST["genre"])) {

//         $valid_genre = "true";

//     } else {

//         $valid_genre = "false";

//     }
//     return $valid_genre;


//     if (!empty($city)) {

//         $valid_city = "true";

//     } else {

//         $valid_city = "false";
//     }
//     return $valid_city;


//     if (!empty($_POST["hobbies"]) && $_POST["hobbies"] >= 1) {

//         $valid_hobby = true;

//         $hob_array = [];

//         foreach ($_POST["hobbies"] as $check) {

//             array_push($hob_array, $check);

//         }

//         // foreach ($_POST[] as $post) {

//         //     array_push($hob_array, $post['$hobby["id"]']);

//         // }
//     } else {

//         $valid_hobby = false;    
//     }

// }


// if (
//     isset($_POST["submit"])
//     && $valid_fname == "true"
//     && $valid_lname == "true"
//     && $valid_email == "true"
//     && $valid_pwd == "true"
//     && $valid_repeat_pwd == "true"
//     && $valid_age == "true"
//     && $valid_genre == "true"
//     && $valid_city == "true"
//     // && $valid_hobby = "true"

// ) {


    $request = new Modele('localhost', 'my_meetic', 'sarah_luanda', 'admin');

    $new_user = $request->execute('INSERT INTO users
(email, mdp, firstname, lastname, birthdate, city_id, genres_id ) 
VALUES ($_POST["email"], 
$_POST["pwd"],
$_POST["fname"], 
$_POST["lname"], 
$_POST["age"], 
$_POST["city"], 
$_POST["genre"]
');
