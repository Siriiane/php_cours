<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo 'Ceci est mon PHP dans mon html'; ?></h2>
</body>
</html>

<?php

echo 'Bonjour, je m\'appelle Sirine';
echo '<br>';
print 'Bonjour, je m\'appelle Chayma';
echo '<br>';
// echo accepte plusieurs arguments
echo 'bonjour', 'comment', 'ça', 'va';
echo '<br>';

// print n'accepte qu'un seul argument (une seule chaine de caractères)
// print 'bonjour','comment','ça','va'; fera une erreur

// var_dump();
// print_r();

// Commentaire sur une seule ligne

/* Commentaires sur plusieurs lignes
*/

/** Même qu'au dessus, la différence c'est qu'il va rajouter une
 *  étoile à chaque 
 *  retour à la ligne
 */

echo '<br>';
echo '<hr>';

echo '<h1> Ceci est mon premier script PHP </h1><h2> premiere partie </h2> <p> je suis un paragraphe </p>';
