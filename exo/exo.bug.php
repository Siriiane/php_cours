<?php 

/*
Les exercices suivants sont déjà faits, il y a des erreurs intentionnelles qui se sont glissées dedans, à vous de les retrouver
*/

// exercice 1
function sommeTableau($tableau) {
    $somme = 0;
    for ($i = 0; $i < count($tableau); $i++) { 
        $somme += $tableau[$i];
    }
    return $somme;
}

$tableau = [1, 2, 3, 4, 5];
echo "La somme des valeurs du tableau est : " . sommeTableau($tableau) . "\n"; 

// Exercice 2 :
function concatenerNoms($noms) {
    $resultat = "";
    for ($i = 0; $i < count($noms); $i++) {
        $resultat .= $noms[$i] . " ";
    }
    return $resultat;
}

$noms = ["Alice", "Bob", "Charlie"];
echo "Noms concaténés : " . concatenerNoms($noms) . "\n";

// Exercice 3 :
function contientNombre($tableau, $nombre) {
    foreach ($tableau as $valeur) {
        if ($valeur == $nombre) { 
            return true;
        }
    }
    return false;
}

$tableau = [10, 20, 30, 40];
$nombre = 30;
echo contientNombre($tableau, $nombre) ? "Le nombre est dans le tableau.\n" : "Le nombre n'est pas dans le tableau.\n";

// Exercice 4 : 
define("PI", 3.14159);

function calculerSurface($rayon) {
    return PI * $rayon * $rayon; 
}

$rayon = 5;
echo "La surface d'un cercle de rayon " . $rayon . " est : " . calculerSurface($rayon) . "\n";

// Exercice 5 : 
function nouveauTableau($tableau) {
    $nouveauTableau = [];  
    foreach ($tableau as $cle => $valeur) {
        $nouveauTableau[$valeur] = $cle; 
    }
    return $nouveauTableau;
}

$tableau = ["a" => 1, "b" => 2, "c" => 3];
print_r(nouveauTableau($tableau)); 

// Exercice 6 : 
function filtrerTableau($tableau, $limite) {
    $resultat = [];
    foreach ($tableau as $valeur) {
        if ($valeur > $limite) { 
            $resultat[] = $valeur;
        }
    }
    return $resultat;
}

$tableau = [5, 10, 15, 20, 25];
$limite = 15;
print_r(filtrerTableau($tableau, $limite)); 

// Exercice 7 :
function calculerMoyenne($tableau) {
    $somme = 0;
    $nombreElements = count($tableau); 
    
    foreach ($tableau as $valeur) {
        $somme += $valeur; 
    }
    
    return $somme / $nombreElements; 
}

$tableau = [4, 8, 15, 16, 23, 42];
echo "La moyenne est : " . calculerMoyenne($tableau) . "\n";

// Exercice 8 :
function remplacerVoyelles($chaine, $remplacement) {
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
    foreach ($voyelles as $voyelle) { 
        $chaine = str_replace($voyelle, $remplacement, $chaine); 
    }
    return $chaine;
}

$texte = "Bonjour tout le monde";
echo remplacerVoyelles($texte, "*") . "\n";

// Exercice 9 :
function compterOccurrences($tableau) {
    $resultat = [];
    foreach ($tableau as $element) { 
        if (isset($resultat[$element])) {
            $resultat[$element]++;
        } else {
            $resultat[$element] = 1;  
        }
    }
    return $resultat;
}

$tableau = [1, 2, 2, 3, 3, 3, 4, 4, 4, 4];
print_r(compterOccurrences($tableau));

// Exercice 10 :
function creerTableauAssociatif($cles, $valeurs) {
    $tableauAssociatif = [];
    for ($i = 0; $i < count($cles); $i++) {
        $tableauAssociatif[$cles[$i]] = $valeurs[$i]; 
    }
    return $tableauAssociatif;
}

$cles = ["nom", "prenom", "age"];
$valeurs = ["Dupont", "Jean", 30];
print_r(creerTableauAssociatif($cles, $valeurs)); 

// Exercice 11 : 
function melangerTableaux($tableau1, $tableau2) {
    $resultat = [];
    $longueur = max(count($tableau1), count($tableau2)); 
    
    for ($i = 0; $i < $longueur; $i++) {
        if (isset($tableau1[$i])) $resultat[] = $tableau1[$i]; 
        if (isset($tableau2[$i])) $resultat[] = $tableau2[$i];
    }
    
    return $resultat;
}

$tableau1 = [1, 2, 3];
$tableau2 = ["a", "b", "c", "d"];
print_r(melangerTableaux($tableau1, $tableau2));

// Exercice 12 : 
function remplacerEspaces($chaine) {
    return str_replace(' ', '_', $chaine); 
}

$texte = "Bonjour tout le monde";
echo remplacerEspaces($texte) . "\n";

// Exercice 13 : 
function trierParLongueur($tableau) {
    usort($tableau, function($a, $b) {
        return strlen($a) - strlen($b); 
    });
    return $tableau;
}

$tableau = ["banane", "pomme", "cerise", "kiwi"];
print_r(trierParLongueur($tableau)); 
