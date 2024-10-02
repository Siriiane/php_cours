<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Page d'inscription de <?= isset($_GET['prenom']) ? htmlspecialchars($_GET['prenom']) : '' ?></h1>
    <form action="traitement.php" method="POST">
        <label for="nom">votre nom</label>
        <input type="text" name="nom">
        <label for="prenom">Votre prenom</label>
        <input type="text" name="prenom">
        <label for="naissance">date de naissance</label>
        <input type="date" name="birthday">
        <input type="submit" name="inscription_form">
    </form>
</body>

</html>