<?php
session_start();




if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION["name"] = $_POST["name"] ?? '';
    $_SESSION["firstname"] = $_POST["firstname"] ?? '';
    $_SESSION["age"] = $_POST["age"] ?? '';
    $_SESSION["email"] = $_POST["email"] ?? '';

    echo "Bonjour " . $_SESSION["name"] , $_SESSION["firstname"] . ". Vous avez " . $_SESSION["age"] . "ans et votre adresse e-mail est : " . $_SESSION["email"];

    $errors = [];
    if (empty($_SESSION["name"]) || ($_SESSION["firstname"]) || ($_SESSION["age"]) || ($_SESSION["email"])) {
        $errors[] = "ERREUR !!! Vous n'avez pas renseigné tous les champs requis pour la validation";
    }
    var_dump($errors);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include "../includes/header.php"; ?>
    <main>
        <div class="formulaire">
            <form action="" method="post">
                <label for="name">Nom</label>
                <input name ="name" id ="name" type="text" placeholder="Merci de renseigner votre nom">

                <label for="firstname">Prenom</label>
                <input name="firstname" id = "firstname" type="text" placeholder="Merci de renseigner votre prénom">

                <label for="age">Age</label>
                <input name="age" id ="age" type="number" placeholder="Merci de renseigner votre âge">

                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Merci de renseigner votre e-mail">

                <input class="submit" type="submit"></input>
            </form>
        </div>


    </main>
    <?php include "../includes/footer.php"; ?>
</body>
</html>

