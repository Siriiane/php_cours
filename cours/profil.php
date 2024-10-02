<?php session_start(); // Toujours session_start() si besoin de la session 
// Pour changer la valeur d'une clé de la session 
// $_SESSION['prenom'] = 'Gustave';

// Pour supprimer une clé de session, on utilise : 
// unset($_SESSION['prenom']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>

<body>
    <?php // <?php echo 'blabla', <?= 'blabla'
    print_r($_SESSION) ?>
    <h1>Bienvenue sur le profil de <?= isset($_SESSION['prenom']) ? htmlspecialchars($_SESSION['prenom']) : 'Aucun prenom renseigné'; ?></h1>

    <p>Elle a : <?= isset($_SESSION['age']) ? htmlspecialchars($_SESSION['age']) . ' ans' : 'Elle n\'a pas renseigné son age'; ?></p>

    <p>Son animal préféré est : <?= isset($_SESSION['animal_prefere']) ? htmlspecialchars($_SESSION['animal_prefere']) : 'aucun'; ?></p>
    <?php // Détruire une session 
    ?>
    <a href="deconnexion.php">Se déconnecter</a>
</body>

</html>