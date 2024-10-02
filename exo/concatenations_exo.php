<?php

/** Exercice 1 : Opérateurs de base
 *  Objectif : calculer des variables avec les opérateurs de base
 * 
 * 1 . Déclarer deuxvariables $a et $b avec des valeurs de votre choix (int)
 * 
 * 2 . Utilisez les opérateurs arithmétiques pour calculer les variables avec les opérateurs suivants (addition +, soustraction -, multiplication * , division / et modulo %), puis afficher le résultat
 */

echo '<h2> Exercice 1 </h2>';
$a = 2;
$b = 6;

echo '$a + $b = ' . $a + $b . '<br>';
echo '$a - $b = ' . $a - $b . '<br>';
echo '$a * $b = ' . $a * $b . '<br>';
echo '$a / $b = ' . $a / $b . '<br>';
echo '$a % $b = ' . $a % $b . '<br>';

/** Exercice 2 : Opération combinées
 *  Objectif : Reinitialiser et calculer ces même variables en utilisant la syntaxe des opérateur d'affectation combinés (+=)
 */
echo '<h2> Exercice 2 </h2>';
echo '$a += $b = ' . ($a += $b) . '<br>';
echo '$a -= $b = ' . ($a -= $b) . '<br>';
echo '$a *= $b = ' . ($a *= $b) . '<br>';
echo '$a /= $b = ' . ($a /= $b) . '<br>';
echo '$a %= $b = ' . ($a %= $b) . '<br>';

/** Exercice 3 : Incrémentation et décrémentation (préfixe = ++$variable)
 * Objectif : Calculer une variable avec l'incrémentation et la décrémentation en préfixe
 *
 * 1 . Déclarer une variable $counter initialisée à 10;
 * 
 * 2 . incrémenter cette valeur de 1;
 * 
 * 3 . Réinitialiser $counter à 10 et décrémenter de 1
 * 
 * Afficher tous les résultats
 */
echo '<h2> Exercice 3 </h2>';
$counter = 10;

echo ++$counter; // 11 directement car la valeur est incrémentée avant d'être affichée

$counter = 10;

echo --$counter; // 9 pour la même raison que ++$counter;

/** Exercice 4 : Incrémentation et décrémentation (postfixe = $variable++)
 * Objectif : Calculer une variable avec l'incrémentation et la décrémentation en postfixe
 * 
 * 1 . Déclarer une variable $num initialisée à 10;
 * 
 * 2 . incrémenter cette valeur de 1;
 * 
 * 3 . réinitialiser $num à 10 et décrémenter de 1
 * 
 * Afficher tous les résultats
 */
echo '<h2> Exercice 4 </h2>';

$num = 10;

echo '$num++ = ' . $num++ . '<br>'; // sera égal à 10 car on affiche avant d'incrémenter
echo 'la valeur de $num après incrémentation =' . $num . '<br>'; // $num sera égal à 11 après incrémentation

$num = 10;

echo '$num-- = ' . $num-- . '<br>';
echo 'la valeur de $num après décrémentation = ' . $num . '<br>';


/** Exercice 5 : Calcul des Ages
 *  Objectif : Simuler un anniversaire
 * 
 * 1 . Déclarer une variable $age initialisée à votre age;
 * 
 * 2 . Simuler le passage d'une année en incrémentant votre âge de 1; (postfixe)
 * 
 * 3 . Remontez le temps et réduisez votre âge pour revenir à son état d'origine (postfixe)
 */
echo '<h2> Exercice 5 </h2>';
$age = 54;
echo 'l\'age d\'Ilhem pendant l\'incrementation est de : ' . $age++ . 'ans <br>';
echo "L'age d'Ilhem après l'incrémentation est de : $age ans <br>";

echo 'l\'age d\'Ilhem pendant la décrémentation est de : ' . $age-- . 'ans <br>';
echo "L'age d'Ilhem après la décrémentation est de : $age ans <br>";


/** Exercice 6 : Calcul d'une moyenne
 *  Objectif : Calculer la moyenne de trois variables différentes
 * 
 * 1 . Déclarer 3 variables $note1,$note2,$note3 avec des valeurs entre 1 et 20 ;
 * 
 *  2 . Calculer la moyenne des trois notes en utilisant les opérateurs arithmétiques (afficher le résultat);
 * 
 * 3 . utiliser l'opérateur d'affectation combiné pour ajouter une nouvelle note à la moyenne et afficher le résultat
 */

echo '<h2> Exercice 6 </h2>';

$note1 = 12;
$note2 = 17;
$note3 = 8;

$note = round(($note1 + $note2 + $note3) / 3); // La fonction round arrondis le résultat à l'entier le plus proche 

echo "La moyenne des notes est : $note <br>";

echo ($note += 16) . '<br>';


/** Exercice 7 : Modulo
 *  Objectif : Calculer avec l'opérateur modulo
 * 
 * 1 . Déclarer une variable $total initialisée à 37;
 * 
 * 2 . Utiliser l'opérateur modulo pour vérifier si $total est pair ou impair
 * 
 * 3 . Afficher un message qui dit si $total est pair ou impair
 * 
 */

echo '<h2> Exercice 7 </h2>';

$total = 37;

if ($total % 2 == 1) {
    echo "$total est impair";
} else {
    echo "$total est pair";
}

/** Exercice 8 : Panier d'achats 
 *  Objectif : Gérer les quantités d'un panier d'articles
 * 
 *  1 . Déclarer une variabler $quantity initialisée à 5;
 * 
 *  2 . L'utilisateur ajoute 3 articles à son panier, la quantité augmentera donc de 3;
 * 
 *  3 . L'utilisateur change d'avis sur 2 des articles et décide de les retirer
 * 
 * Afficher le résultat
 */

echo '<h2> Exercice 8 </h2>';

$quantity = 5;

echo ($quantity += 3 ). '<br>';
echo ($quantity -= 2) . '<br>';

echo $quantity;

/** Exercice 9 : Conversion d'unités
 *  Objectif : Convertir des KM en Miles
 * 
 *  1 . Déclarer une variable $kilometres initialisée à 100;
 * 
 *  2 . Convertir les KM en miles (1km = environ 0.621371), le calcul sera donc $kilometres * 0.621371
 * 
 */
echo '<h2> Exercice 9 </h2>';
$kilometres = 100;

$kilometres *= 0.621371;

echo $kilometres;

/** Exercice 10 : Jeu
 *  Objectif : Calculer les points dans un jeu en incrémentant et décrémentant
 * 
 *  1 . Déclarer une variable $score initialisée à 50;
 * 
 *  2 . Ajouter 10 points à $score;
 * 
 *  3 . Retirer 5 points à score
 */
echo '<h2> Exercice 10 </h2>';
$score = 50;

echo ($score += 10) . '<br>';
echo ($score -= 5) . '<br>';

echo $score;
