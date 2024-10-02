<?php

// Les superglobales : $_GET 
// Les superglobales sont toujours szq tableaux associatifs, $_GET a été remplie lors 
var_dump($_GET)

echo '<br>'
// Si $_GET n'est pas vide ET que la requête est bien GET 
if (!empty($_GET)&& $_SERVER ['REQUEST_METHOD']== "GET") {
    $color = $_GET[0]
}