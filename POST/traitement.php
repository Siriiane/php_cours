<?php 

echo '<pre>';
print_r($_POST);
echo '</pre>';

if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_post'])){
    $prenom = htmlspecialchars($_POST['prenom']);
    $description = htmlspecialchars($_POST['description']);

    if(strlen($prenom) > 10){
        echo 'erreur: le prenom est trop long';
    }
    if(strlen($description) > 200){
        echo 'Erreur : La description est trop longue';
    }

}