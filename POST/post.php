<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <!-- La balise <a> sera de type GET, on lui passe un paramètre prenom ainsi qu'une valeur 'Sirine' -->
    <a href="inscription.php?prenom=Sirine">page d'inscription</a>
    <!-- Alors que le formulaire est de type POST, on ne verra ses paramètres qu'en les traitant dans la partie serveur -->
    <form action="traitement.php" method="POST">
        <input type="hidden" name="id" value="30">
        <label for="prenom">prenom</label>
        <input type="text" id="prenom" name="prenom">

        <label for="description">description</label>
        <textarea name="description" id="description"></textarea>

        <input type="submit" value="Envoyer le formulaire" name="form_post">
    </form>
</body>

</html>