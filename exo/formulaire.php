<?php

$pdo = new mysqli('localhost', 'root', '', 'societe');

$error = '';

if (!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_form'])) {

    if (empty($_POST['prenom']) || strlen($_POST['prenom']) < 2) {
        $error .= '<p> Le prénom doit comporter plus de 2 caractères .</p>';
    }

    if (empty($_POST['nom']) || strlen($_POST['nom']) < 2) {
        $error .= '<p> Le nom doit comporter plus de 2 caractères .</p>';
    }

    if (empty($_POST['service']) || strlen($_POST['service']) < 2) {
        $error .= '<p> Le service doit comporter plus de 2 caractères .</p>';
    }

    if (empty($_POST['sexe']) || ($_POST['sexe'] != 'm' && $_POST['sexe'] != 'f')) {
        $error .= '<p> Le sexe n\'est pas valide .</p>';
    }

    if (empty($_POST['date_embauche'])) {
        $error .= '<p> La date d\'embauche doit être remplie .</p>';
    }

    if (empty($_POST['salaire']) || !is_numeric($_POST['salaire']) || $_POST['salaire'] <= 0) {
        $error .= '<p> Le salaire est invalide .</p>';
    }

    if (empty($error)) {
        $date = new DateTime($_POST['date_embauche']);
        $date_embauche = $date->format('Y-m-d'); // On reformate la date récupérée dans le formulaire dans le format compris par SQL ( year - month - date )

        // On prépare notre requête 
        $request = $pdo->prepare("INSERT INTO employes (prenom, nom, sexe, service, date_embauche,salaire) VALUES (?, ?, ?, ?, ?, ?)");

        try {
            $resultat = $request->execute([$_POST['prenom'], $_POST['nom'], $_POST['sexe'], $_POST['service'], $date_embauche, $_POST['salaire']]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            height: 100vh;
            margin-top: 200px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 100%;
            margin: auto;
        }

        h1 {
            color: #cc0000;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #cc0000;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #cc0000;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        .radio-group {
            margin-bottom: 15px;
        }

        .radio-group label {
            font-weight: normal;
            display: inline;
            margin-right: 10px;
            color: #cc0000;
        }

        input[type="submit"] {
            background-color: #cc0000;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: black;
        }

        .message {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            color: #fff;
        }

        .success {
            background-color: #2ecc71;
        }

        .error {
            background-color: #e74c3c;
        }

        .header-img {
            width: 200px;
            margin: 30px auto;

        }

        .header-img img {
            height: auto;
            width: 100%;
        }
    </style>
</head>

<body>
    <form action="" method="POST">

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom">

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">

        <div>
            <label for="sexe">Sexe</label>
            <input type="radio" name="sexe" value="m"> Homme
            <input type="radio" name="sexe" value="f"> Femme
        </div>
        <label for="service">Service</label>
        <input type="text" id="service" name="service">

        <label for="date_embauche">Date d'embauche</label>
        <input type="text" id="date_embauche" name="date_embauche" placeholder="dd-mm-yyyy">

        <label for="salaire">Salaire</label>
        <input type="text" id="salaire" name="salaire">

        <input type="submit" name="submit_form" value="Ajouter le nouvel employé">
    </form>

    <div>
        <?php
        if (!empty($error)) {
            echo $error;
        }
        ?>
    </div>


</body>

</html>
