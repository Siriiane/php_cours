<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <form action="traitement.php" method="post">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom">

        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>

        <input type="submit" name="formulaire_post" value="Envoyer le formulaire">
    </form>
</body>
</html>