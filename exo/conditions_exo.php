<?php

/** Exercice 1 : Vérifier la validité d'un âge
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)
 *  
 *  Afficher un message indiquant si l'âge est valide ou non 
 * 
 * petit bonus : vérifier que l'âge est un nombre entier et non un décimal (faire des recherches)
 */

 $age  = 0;
 if ( $age >= 0 && $age <= 120 && is_int($age)){
    echo 'valide';
 } else {
    echo 'non valide ';
 }


/** Exercice 2 : Calculer la réduction
 * 
 *  Objectif : Ecrire une condition qui applique une réduction de 10% si le montant est supérieur à 100 (créer une variable montant), et 5% si le montant est entre 50 et 100€, sinon, aucune réduction n'est appliquée
 * 
 * chercher comment calculer une réduction
 * 
 */
$montant = 40;

if ($montant >= 100){
   echo $montant*0.9;
}else if ($montant >= 50){
   echo $montant*0.95;
} else {
   echo 'change de magasin t\'es pauvre'; 
}


/** Exercice 3 : Afficher le jour de la semaine
 * 
 *  Objectif : Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...)
 * 
 * exemple : $lundi = 1;
 * $mardi = 2;
 * 
 */
 $jourSemaine = 2;

    switch ($jourSemaine) {
        case 1:
            echo 'Le jour est lundi<br>';
            break;
        case 2:
            echo 'Le jour est Mardi<br>';
            break;
        case 3:
            echo 'Le jour est Mercredi<br>';
            break;
        case 4:
            echo 'Le jour est Jeudi<br>';
            break;
        case 5:
            echo 'Le jour est Vendredi<br>';
            break;
        case 6:
            echo 'Le jour est Samedi<br>';
            break;
        case 7:
            echo 'Le jour est dimanche<br>';
            break;
        default:
            echo 'Aucun jour de la semaine trouvé<br>';
            break;
    }


/** Exercice 4 : Comparaison de chaines de caractères
 *  Objectif : Ecrire une condition qui compare si deux variables sont identiques, la condition doit vérifier le type ET la valeur 
 */

$chaine1 = "Hello";
$chaine2 = "Hello";

if ($chaine1 === $chaine2) {
    echo "R.A.S";
} else {
    echo "Tu ne sent pas bon Michel ";
}




/** Exercice 5 : Calcul de la moyenne
 *  
 *  Objectif : Ecrire un script qui vérifie si la moyenne trois notes est suffisante pour passer un examen, la moyenne doit être supérieure ou égale à 10 (afficher un message pour chacun des cas)
 * 
 */

$note1 = 17;
$note2 = 20;
$note3 = 14.5;


$moyenne = ($note1 + $note2 + $note3) / 3;

if ($moyenne >= 10) {
    echo "Félicitations ! Vous avez réussi l'examen avec une moyenne de " . $moyenne . ".";
} else {
    echo "Désolé, vous avez échoué. Votre moyenne est de " . $moyenne . ".";
}



/** Exercice 6 : Tester une variable indéfinie
 * 
 *  Objectif : Ecrire une condition qui utilisera 'isset()' pour vérifier si un variable $var est définie, si elle est définie, afficher sa valeur, sinon afficher un message indiquant qu'elle n'est pas définie
 * 
 * Tentez avec null, '', 0 
 */
$var = null; 

if (isset ($var)) {
    echo 'Cette variable est bein définie : ' . $var . ' : ' . gettype($var); 
} else {
    echo 'la variable n\'est pas définie';
}

/** Exercice 7 : Valider un formulaire
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable $nom est vide avec empty(), si c'est le cas, afficher un message qui demandera à l'utilisateur de remplir le champ
 * 
 * utiliser simplement une variable et vérifiez plusieurs cas possibles
 * 
 */


/** Exercice 8 : Vérification d'un numéro pair ou impair
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable a une valeur paire ou impaire (utiliser modulo)
 * 
 */
$num = 20 ; 

if ($num % 2 == 1 ){
    echo "$num est impair";
} else {
    echo "$num est pair ";
}

/** Exercice 9 : Catégoriser une personne selon son âge
 * 
 *  Objectif : Ecrire une/des condition(s) qui classe une personnee en 'enfant','adolescent','adulte' ou 'senior' selon son age
 */

$age = 21;
if($age <= 12) {
    echo 'vous êtes un enfant ';
}
/** Exercice 10 : Vérifier la cohérence des réponses avec l'opérateur XOR
 * 
 *  Objectif : Ecrire des conditions et vérifier la cohérence de ces réponses
 * 
 *  Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)
 * 
 *  xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, alors il retournera false
 *  contrairement à || (or) qui vérifiera si au moins l'une des deux conditions est vraie, même si les deux le sont
 * 
 */
