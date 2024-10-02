<?php
/** Exercice 1 : Créer un tableau simple */
// Créez un tableau avec vos films préférés
$films = ["harry potter", "bad boys", "beauty and the beast", "pirates des caraibes", "the conjuring"];

// Affichez chaque film sur une ligne séparée
foreach ($films as $film) {
    echo $film . "<br>";
}



/** Exercice 2 : Ajouter et supprimer des éléments d'un tableau */
// Créez un tableau avec quelques fruits
$fruits = ["Pomme", "Banane", "Orange"];

// Ajoutez un fruit à la fin du tableau
$fruits[] = "Mangue";

// Supprimez le premier fruit du tableau
array_shift($fruits);

// Affichez le tableau modifié
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}


/** Exercice 3 : Créer et afficher un tableau associatif */
// Créez un tableau associatif avec des informations
$personne = ["prénom" => "Jean", "nom" => "Dupont", "âge" => 25];

// Affichez chaque information avec une phrase descriptive
echo "Prénom : " . $personne["prénom"] . "<br>";
echo "Nom : " . $personne["nom"] . "<br>";
echo "Âge : " . $personne["âge"] . " ans<br>";



/** Exercice 4 : Compter les éléments d'un tableau */
// Créez un tableau avec plusieurs villes
$villes = ["Paris", "Londres", "Tokyo", "New York"];

// Affichez le nombre d'éléments dans le tableau
echo "Nombre de villes : " . count($villes) . "<br>";



/** Exercice 5 : Créer un tableau multidimensionnel */
// Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants
$etudiants = [
    ["prénom" => "Alice", "nom" => "Martin", "note" => 15],
    ["prénom" => "Bob", "nom" => "Dupont", "note" => 12],
    ["prénom" => "Charlie", "nom" => "Durand", "note" => 18]
];

// Affichez la note du premier étudiant
echo "Note du premier étudiant : " . $etudiants[0]["note"] . "<br>";


/** Exercice 6 : Modifier un tableau multidimensionnel */
// Changez la note du deuxième étudiant
$etudiants[1]["note"] = 14;

// Affichez toutes les informations du tableau modifié
foreach ($etudiants as $etudiant) {
    echo "Prénom : " . $etudiant["prénom"] . ", Nom : " . $etudiant["nom"] . ", Note : " . $etudiant["note"] . "<br>";
}



/** Exercice 7 : Boucle for pour parcourir un tableau */
// Créez un tableau avec les mois de l'année
$mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];

// Utilisez une boucle for pour afficher chaque mois



/** Exercice 8 : Boucle foreach pour parcourir un tableau associatif */
// Créez un tableau associatif avec des noms d'animaux et leurs bruits


// Utilisez une boucle foreach pour afficher chaque animal et son bruit

/** Exercice 9 : Rechercher une valeur dans un tableau */
// Créez un tableau avec des numéros aléatoires


// Recherchez si un numéro spécifique est présent dans le tableau


/** Exercice 10 : Fusionner deux tableaux (Bonus) */
// Créez deux tableaux : prénoms et noms de famille

// Fusionnez ces deux tableaux pour créer un tableau de noms complets

// Affichez chaque nom complet sur une ligne

?>
