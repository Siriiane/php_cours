<?php

// ------------------------------
// PDO
// ------------------------------
// PHP Data Objects


// Connexion à la base de données 

// new PDO est une classe qui va permettre la connexion à la base de donnée précisée
// (mysql:host=localhost) : On lui dit qu'on utilise le SGBD (système de gestion de la base de données) qui est MySQL et qu'on l'utilise avec locahost
// dbname=societe : le nom de la base de donnée à laquelle se connecter
// 'root,'' : l'identifiant et le mot de passe de notre base de données (par defaut en local root)

$pdo = new PDO('mysql:host=localhost;dbname=societe', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8']);

// $employe1 = $pdo->exec("INSERT INTO employes (prenom,nom,sexe,service,date_embauche,salaire) VALUES ('Gerard','Bouchard','m','developpement','2007-06-27',3500)");

// Il va nous donner le nombre de lignes effectuées par la requête
// echo "Nombre de lignes affectées par le INSERT : $employe1 <br>";


// On peut récupérer le dernier id inseré dans la base de données
echo "Dernier id généré : " . $pdo->lastInsertId();

// On utilise le crud une fois connectés à la base de donnée

// On va supprimer gégé
// DELETE FROM fait partie du CRUD (Create - Read- Update - Delete)(create = insert into, read = select, update = update, delete = delete)

// exec() est une méthode utilisée pour les requêtes qui ne retournent pas de résultat (autre que select)
$employe1 = $pdo->exec("DELETE FROM employes WHERE id = 31");

// Si $employe 'reussi', alors il retournera le nombre de ligne affectées par la requête (ici 1), sinon il retournera false
if ($employe1) {
    echo $employe1;
} else {
    echo 'Erreur';
}

/* Valeur de retour :

    - Succès : Renvoie le nombre de ligne affectées par la requête
    - Echec : Retourne false 

*/

// Methode query(): 
// La méthode query() peut etre utilisée pour les requêtes qui retournent 1 ou plusieurs résultats (SELECT), mais on peut l'utiliser aussi avec Insert into, update, delete

// $employe2 = $pdo->exec("INSERT INTO employes (prenom,nom,sexe,service,date_embauche,salaire) VALUES ('Sirine','Ben','f','integratice','2023-01-15',40000)");

$resultat = $pdo->query('SELECT * FROM employes WHERE id=33');

// echo '<pre>';
// var_dump($resultat);
// echo '</pre>';

// $resultat est le resultat de la requête mais inexploitable pour le moment
//echo $resultat; // Impossible à afficher

// Pour récupérer les données de manière exploitables, on va utiliser la méthode fetch();

$sirine = $resultat->fetch(); // fetch renverra un tableau à la fois associatif et indéxé

// echo '<pre>';
// print_r($sirine);
// echo '</pre>';
// fetch-assoc :

//$sirine = $resultat->fetch(PDO::FETCH_ASSOC); //Renverra seulement un tableau associatif

//$sirine = $resultat->fetch(PDO::FETCH_NUM); // renverra seulement un tableau indéxé

//$sirine = $resultat->fetch(PDO::FETCH_OBJ); // Renverra un objet

// fetch() 



// echo '<pre>';
// var_dump($sirine);
// echo '</pre>';

// fetchAll()
// fetchAll va permettre de retourner plusieurs résultats à la fois 

$sql = $pdo->query('SELECT * FROM employes');

$all = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($all);
echo '</pre>';

echo '<ul>';

// Vu qu'on récupère un tableau (multidimensionnel ici) on peut boucler dessus pour afficher les éléments qui nous interessent
foreach ($all as $values) {
    echo "<li>$values[prenom]</li>";
    echo "<li>$values[date_embauche]</li>";
}
echo '</ul>';

// Requêtes préparées : 

// Préparation de la requête
// On prépare la requête avec notre requête SQL, sauf qu'on lui donne un paramètre à la place de la valeur attendue, la requête ne s'executera pas maintenant
$sirine2 = $pdo->prepare("SELECT * FROM employes WHERE prenom = :prenom");

// exemple de variable contenant un prenom
$prenom = 'Sirine';
// bindParam : 
// On fourni à la méthode ce qu'on veut comme valeur de paramètre, petite précision : On peut changer la valeur de la variable, bindParam prendra la nouvelle valeur

$sirine2->bindParam(':prenom', $prenom);

$prenom = 'gustave';
// On execute la méthode
$sirine2->execute();

// On n'oublie pas de fetch le resultat ! TOUJOURS FETCH avec une requête SELECT
$nouvelleSirine = $sirine2->fetchAll();

echo '<pre>';
print_r($nouvelleSirine);
echo '</pre>';

foreach ($nouvelleSirine as $value) {
    echo "<p> $value[prenom] </p>";
}

// bindValue()

$request = $pdo->prepare('SELECT * FROM employes WHERE nom = :nom AND prenom = :prenom');

$nom = 'Ben';
$prenom = 'Sirine';
$request->bindValue(':nom', $nom);
$request->bindValue(':prenom', $prenom);
$nom = "Autre chose";

$request->execute();

$resultat = $request->fetchAll();

// 3 eme façon 

$sql = $pdo->prepare('SELECT * FROM employes WHERE id=:id AND prenom = :prenom');

$id = 40;

// On peut mettre les paramètres directement dans la méthode(fonction) execute();

$sql->execute([$id, $prenom]);

$resultat = $sql->fetch(); // on récupère 1 resultat avec l'id donc on fetch() et non fetchAll()

// L'extension mySQLI :

// Connexion BDD
$mysqli = new mysqli('localhost', 'root', '', 'societe');

// Exemple de requête : 

$sirine3 = $mysqli->query('SELECT * FROM employes');
