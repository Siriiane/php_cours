<?php

    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';

    if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'formulaire_post'){
        $prenom = htmlspecialchars($_POST['prenom']);
        $description = htmlspecialchars($_POST['description']);
    }