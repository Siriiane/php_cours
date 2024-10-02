<?php

// Syntaxe des tableaux
$tab = ['Amine', 'Maxime', 'Gustave', 'Jawad', 'Ilhem', 'Gregory', 'Patrick', 'Kevine', 'Nolann', 'Sirine', 'Chayma', 'Enzo'];
$tab1 = array('Amine', 'Maxime', 'Gustave', 'Jawad', 'Ilhem', 'Gregory', 'Patrick', 'Kevine', 'Nolann', 'Sirine', 'Chayma', 'Enzo');

// var_dump affiche le contenu du tableau avec tous les details
echo '<pre>';
var_dump($tab);
echo '</pre>';

echo '<br>';
// print_r affiche le contenu du tableau sans les details
print_r($tab);

echo '<br>';
// gettype($tab) = array
echo gettype($tab);

// Ajouter au tableau
$tab[] = 'Mitra';
// ou array_push()

echo '<pre>';
var_dump($tab);
echo '</pre>';

echo '<br>';
echo $tab[4];

$tab[4] = 'Ilhem2';

echo '<pre>';
var_dump($tab);
echo '</pre>';

// Retirer les elements du tableau

// la fonction unset permet de retirer l'element ciblé du tableau (attention, unset() laisse les clés originales intactes, il faut réindexer le tableau pour éviter les erreurs avec array_values())

// Ajouter au début du tableau 
array_unshift($tab, 'Lisa');

unset($tab[2]); // supprimera Gustave (l'element avec l'index 2)
array_values($tab); // unset() risque de laisser l'index tel quel même apres suppression, array_values() permet de réindexer le tableau
// Retirer le premier element : array_shift()

array_shift($tab); // retirera Amine

// Retirer le dernier element : array_pop()

array_pop($tab); // Retirera Enzo


// Les tableaux associatifs

// le tableau associatif prend en guise d'index des mots (aussi appelés clés) 
$eleve = [
    'nom' => 'X',
    'prenom' => 'Gustave',
    'age' => 22,
    'estContentAujourd\'hui' => true
];

// $eleve ['X','Gustave',22, true];

$eleve2 = ['nom' => 'X', 'prenom' => 'Gustave', 'age' => 22, 'estContentAujourd\'hui' => true];

// On vise directement la clé du tableau pour l'afficher
echo $eleve['prenom'];
echo $eleve['age'];

// On peut compter le nombre d'elements dans le tableau avec count() ou sizeof().
echo '<br>';
echo 'La taille du tableau $tab avec count est de : ' . count($tab) . '<br>';
echo 'La taille du tableau $tab avec sizeof est de ' . sizeof($tab) . '<br>';

// Tableau multidimensionnel :

$multiTab = [
    0 => [
        'prenom' => 'Sirine',
        'nom' => 'Y',
        'telephone' => '0766557733'
    ],
    1 => [
        'prenom' => 'Gustave',
        'nom' => 'X',
        'telephone' => '555-992-3261'
    ],
    2 => [
        'prenom' => 'Patrick',
        'nom' => 'I',
    ]
]; // Le nom des index(clés) est libre

echo $multiTab[1]['nom']; // On récupère le nom qui se trouve dans le tableau ayant la clé 1 dans notre tableau multiTab


// Pour afficher tous les prenoms par exemple de notre tableau multiTab, on va boucler avec for

echo '<h2> Boucle FOR </h2>';

// On boucle sur le tableau multiTab, $i = 0, $i < à la taille du tableau (count() renvoit un number; on incrémente à chaque itération $i de 1)

for ($i = 0; $i < count($multiTab); $i++) {
    // à chaque tour, il affichera le prenom du tableau dans lequel il se trouve
    echo $multiTab[$i]['prenom'] . '<br>';
}

// Boucle foreach 

foreach ($multiTab as $tableau) {
    echo $tableau['prenom'] . '<br>';
}
