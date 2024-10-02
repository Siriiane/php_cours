<?php

// la fonction date retpurne la date d'aujourd'hui selon le format indiiqué 
$date = date('d-m-Y H:i:s');// 'd-m-y ( jour-mois-année / y = 24, Y = 2024), 'H:i:s' (heure, minutes, secondes)

echo $date; 

// Le timestamp 
// Le timestamp estr le nombre de secondes écoulées depuis le 1er janvier 1970 à 00:00:00

echo "<p>" . time() . "</p>"; // retourne l'heure actuelle en timestamp 

$dateAleatoire = strtotime('12_03_1998');// convertir une date en timestamp 
echo $dateAleatoire . '<br>'; // affichera 889657200

$dateAnterieur = strtotime('01-12-1964'); // On peut qaund même récupérer les dates avant 1970 
echo $dateAnterieur . '<br>'; 

// strtotime vérifie que la date est valide 

$dateValide = strtotime ('35-12-2003'); 

echo $dateAnterieur; 

// Methode procédurale

$date = date('d-m-Y');

$dateJournee = strtotime('27-09-2020');

$dateFormat = date('Y-m-d', $dateJournee); // reconverti Les secondes de $dateJournee en nouveau format de date (2020-09-27)

// Methode objet 

$dateObjet = new DateTime(); 
echo '<p>'.  $dateObjet->format('Y-m-d') . '</p>';  