

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 10;
    $b = 5;
    $c = 2;

    echo '<h2> Les conditions </h2>';
    // Si $a est supérieur à $b alors on affiche le echo à l'intérieur, sinon ça veut dire que $b est supérieur a $a alors on a juste à mettre un else
    if ($a > $b) {
        echo "$a est supérieur à $b <br>";
    } else {
        echo "$b est supérieur à $a <br>";
    }

    if ($a < $c) {
        echo "$a est inférieur à $c <br>";
    } else if ($b < $a) {
        echo "$b est inférieur à $a <br>";
    } else if ($b < $c) {
        echo "$b est inférieur à $c <br>";
    } else {
        echo "Aucune des conditions n'a été remplie <br>";
    }

    // Pareil pour $b et $c
    if ($b > $c) {
        echo "$b est supérieur à $c <br>";
    } else {
        echo "$c est supérieur à $b <br>";
    }

    // L'opérateur && vérifie que les DEUX conditions sont vraies, si une est fausse, il rentre dans le else
    if ($a > $b && $b > $c) {
        echo "$a est supérieur à $b ET $b est supérieur à $c <br>";
    } else {
        echo "L'une ou les deux conditions ne sont pas respectées <br>";
    }

    // L'opérateur || vérifie que au moins l'UNE des conditions est vraie, si une seule est vrai, alors il rentre 

    if ($a == 10 || $c > $b || $a < $c || $b > $c) {
        echo "Une des conditions (ou les deux sont vraies) <br>";
    } else {
        echo "Aucune des conditions n'est vraie <br>";
    }

    // L'opérateur XOR  : opérateur exclusif
    // Seulement UNE des deux conditions doit être vraie (soit l'une soit l'autre)

    if ($a == 10 xor $b == 5) {
        echo "l'une des deux est vraie <br>";
    } else {
        echo "les deux sont vraies ou fausses <br>";
    }

    // On peut faire XOR sur plusieurs conditions à la fois
    if ($a == 10 xor $b == 1 xor $c == 7) {
        // Seule la variable $a est vraie, alors il rentrera
        echo '$a est vraie, les autres sont fausses';
    } else {
        echo 'Elles sont toutes vraies ou fausses';
    }

    // Les ternaires : 
    // ($a == 10) = 
    // if ($a == 10){
    // echo "$a est égal à 10";
    //} else {
    //  echo "$a n'est pas égal à 10";   
    //}

    // l'utiliser pour les conditions courtes
    echo ($a == 10) ? '$a est égal à 10' : '$a n\'est pas égal à 10';

    $condition = ($a == 10) ? '$a est égal à 10' : 11;

    echo "$condition <br>";

    // = Affectation d'une valeur à une variable (exemple $a = 10);
    // == Comparaison des valeurs (variable ou non)
    // === Comparaison stricte (valeurs et types)

    $dix = 10; // affectation de valeur (on affecte 10 à la variable $dix)
    $dixStr = '10';

    if ($dix == $dixStr) {
        // Il rentre ici car == ne compare QUE la valeur (les deux ont une valeur de 10)
        echo 'oui <br>';
    } else {
        echo 'non <br>';
    }

    if ($dix === $dixStr) {
        echo 'oui <br>';
    } else {
        // cette fois ci il rentre dans le else car === compare la valeur ET le type ($dix est de type integer alors que $dixStr est de type string même s'il a 10 en valeur)
        echo 'non <br>';
    }

    // isset() et empty():
    // isset() vérifie qu'une variable est définie, peu importe la valeur SAUF null
    // On l'utilise principalement pour vérifier qu'une variable est non null
    $prenom = null;
    $nom = 'quelquechose';
    $zero = 0;

    if (isset($prenom)) {
        echo 'prenom existe <br>';
    } else {
        // il rentrera ici car $prenom vaut null
        echo 'prenom n\'existe pas <br>';
    }

    if (isset($zero)) {

        echo '$zero existe <br>';
    } else {
        echo '$zero n\'existe pas <br>';
    }

    echo (isset($prenom)) ? 'prenom existe <br>' : 'prenom n\'existe pas <br>';


    // empty()
    $zero1 = 0;
    $str = '';
    $false = false;
    $tab = [];
    $prenom = null;

    echo (empty($zero1)) ? 'zero1 est vide <br>' : 'zero1 n\'est pas vide <br>';
    echo (empty($str)) ? 'str est vide <br>' : 'str est rempli <br>';
    echo (empty($false)) ? 'false est vide <br>' : 'false est rempli <br>';
    echo (empty($tab)) ? 'tab est vide <br>' : 'tab est rempli <br>';
    echo (empty($prenom)) ? 'prenom est vide <br>' : 'prenom est rempli <br>';

    // ! indique la négation 

    if (!$false) {
        echo 'on rentre dans cette condition (if) <br>';
    } else {
        echo 'On rentre dans le else <br>';
    }

    // ?? opérateur de  
    // 
    $var1 = $variableInexistante ?? $prenom ?? '';
    echo "$var1 <br>";


    // SWITCH : 

    $jourSemaine = 'dimanche';

    switch ($jourSemaine) {
        case 'lundi':
            echo 'Le jour est lundi<br>';
            break;
        case 'mardi':
            echo 'Le jour est Mardi<br>';
            break;
        case 'mercredi':
            echo 'Le jour est Mercredi<br>';
            break;
        case 'jeudi':
            echo 'Le jour est Jeudi<br>';
            break;
        case 'vendredi':
            echo 'Le jour est Vendredi<br>';
            break;
        case 'samedi':
            echo 'Le jour est Samedi<br>';
            break;
        case 'dimanche':
            echo 'Le jour est dimanche<br>';
            break;
        default:
            echo 'Aucun jour de la semaine trouvé<br>';
            break;
    }

    // Même chose que le switch mais en if
    if ($jourSemaine == 'lundi') {
        echo 'Le jour est lundi<br>';
    } else if ($jourSemaine == 'mardi') {
        echo 'Le jour est mardi<br>';
    } else if ($jourSemaine == 'mercredi') {
        echo 'Le jour est mercredi<br>';
    } else if ($jourSemaine == 'jeudi') {
        echo 'Le jour est jeudi<br>';
    } else if ($jourSemaine == 'vendredi') {
        echo 'Le jour est vendredi<br>';
    } else if ($jourSemaine == 'samedi') {
        echo 'Le jour est samedi<br>';
    } else if ($jourSemaine == 'dimanche') {
        echo 'Le jour est dimanche<br>';
    } else {
        echo 'Aucun jour de la semaine trouvé <br>';
    }
    ?>
</body>

</html>

<!-- 
 
revoir :
$var1 = $variableinexistante ?? 'valeur par defaut'; 
echo "$
 (!) 
 (isset)
 (??)
 
 
 
 -->