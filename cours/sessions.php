<?php

// Une session ($_SESSION) permet de stocker des informations sur ce que fait l'utilisateur.

// On démarre une session avec la fonction session_start();
session_start();
echo '<pre>';
var_dump($_SESSION); // var_dump permet de vérifier l'interieur d'une variable précisement (le type et les valeurs (ainsi que les tailles))
echo '</pre>';

echo '<pre>';
print_r($_SESSION); // print_r fait la même chose que var_dump en moins détaillé
echo '</pre>';
// Lorsqu'on démarre une session, PHP va créer un petit fichier temporaire sur le serveur, avec un identifiant unique (généralement stocké dans un cookie qui s'appelle 'PHPSESSID').

// Stocker les données dans une session 
$_SESSION['prenom'] = 'Sirine';
$_SESSION['age'] = 24;
$_SESSION['est_majeure'] = true;
$_SESSION['animal_prefere'] = "panthère noire";

// On va plutôt utiliser un tableau avec une clé pour chaque element de la session (exemple avec l'utilisateur)
$_SESSION['utilisateur']['prenom'] = 'Sirine';
$_SESSION['utilisateur']['age'] = 24;
$_SESSION['utilisateur']['animal_prefere'] = 'Panthère noire';

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
// Les données qu'on stocke dans notre session sont disponible partout dans notre code TANT que la session est active 

?>

<a href="profil.php">Aller sur le profil <?= isset($_SESSION['prenom']) ? $_SESSION['prenom'] : 'rien'; ?></a>
