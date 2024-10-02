<?php

$bonjour = 'Bonjour tout le monde';
$commentCaVa = 'Comment ça va ?';

echo '$bonjour' . '$commentCaVa'; // Ne prendra pas en compte les variables, il affichera juste ce qu'on lui dit d'afficher
echo '<br>';
echo "$bonjour" . " $commentCaVa"; 
echo "$bonjour $commentCaVa $bonjour"; // Prendra en compte les variables, il affichera le contenu de ces variables

$phrase = 'l\'affichage des apostrophes';

$prenom = 'Marie';
echo "$prenom <br> ";
echo "$prenom" . '<br>';
echo $prenom;
echo '<br>';
$prenom = 'Vincent';

