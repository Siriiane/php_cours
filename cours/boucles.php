<?php

echo '<h2> La boucle WHILE </h2>';

// Compteur pour la boucle
$i = 0;

// TANT QUE $i est strictement inférieur à 10
while ($i < 10) {
    // On ecrit la valeur de $i
    echo $i . '<br>';
    // On incrémente $i à chaque tour, sinon boucle infinie car $i sera toujours à 0
    $i++;
}

echo '<h2>  do...while </h2>';

$j = 1;
// à la différence de while, do...while executera au moins une fois la boucle, et ce même si la condition n'est pas remplie
do {
    echo 'Je fais mon tour de boucle <br>';
    $j++;
} while ($j > 10);

echo '<h2> for </h2>';

// La boucle qu'on utilise le plus, elle est exactement comme la boucle while, seule la syntaxe change
for ($i = 0; $i <= 20; $i++) { // On peut très bien mettre un autre calcul à la place de $i++ ($i+=2 comptera $i 2 par 2)
    echo "$i <br>";
}

echo '<h2> Boucle foreach </h2>';

$tab = [30, 'bonjour', true, 3.05];

// reservée aux tableaux et aux objets pour parcourir les éléments à l'intérieur
foreach ($tab as $t) {
    echo "$t <br>";
}

echo '<h2> Boucles imbriquées </h2>';

// premiere boucle qui va s'executer
for ($i = 1; $i <= 10; $i++) {
    echo 'premiere boucle <br>';
    // seconde boucle, elle va parcourir 9 itérations à chaque tour de la premiere boucle
    for ($j = 1; $j <= 10; $j++) {
        echo 'seconde boucle <br>';
    }
}

/* Résultat
premiere boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
seconde boucle
*/
