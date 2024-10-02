<?php

// Fonction hello affichera bonjour tout le monde dès qu'elle sera appelée

// Fonction sans paramètre sans valeur de retour
function hello()
{
    echo '<p>Bonjour tout le monde</p>';
}

hello(); // Appel de la fonction hello
hello();

// Fonction avec paramètres sans valeur de retour

function salut(string $name)
{
    echo "<p> Bien le bonjour $name </p>";
}

salut('Ilhem');
salut('Gregory');
salut('Jawad');

// Sans paramètre avec valeur de retour (valeur de retour = return)

function coucou()
{
    return 'Coucou';
}

$str = coucou();

echo $str; // affichera Coucou

// Avec paramètres et avec valeur de retour

function bienvenue($age)
{
    // Si l'age est supérieur ou égal à 16 alors on retourne true
    if ($age >= 16) {
        return true;
    } else {
        // Sinon on retourne false
        return false;
    }
}

$personne1 = bienvenue(30); // Return true
$personne2 = bienvenue(14); // Return false

// $personne1 et $personne 2 vont être de valeur true ou false
if ($personne2 == true) {
    echo 'Vous pouvez rentrer <br>';
} else {
    echo 'vous ne pouvez pas entrer <br>';
}

// Quelques fonctions prédéfinies 

$email = "test@site.fr";

echo "<p>" . strpos($email, '@') . "</p>";

echo '<p>' . strlen($email)  . '</p>';

$name = " Ilhem est la meilleure   ";

echo '<p>' . strlen(trim($name)) . '</p>';
