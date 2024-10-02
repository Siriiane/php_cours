<?php session_start();
session_destroy(); // session_destroy détruit la session 
unset($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION)) {
        echo 'La déconnexion a échoué';
    } else {
        echo 'La déconnexion a reussie';
    } ?>
</body>
<?php if (isset($_SESSION)) {
    print_r($_SESSION);
} else {
    echo 'La session a totalement été détruite';
} ?>

</html>