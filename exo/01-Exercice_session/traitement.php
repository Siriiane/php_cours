<?php
// $_POST

echo '<pre>'; 
var_dump($_POST);
echo '<pre>'; 
if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] === 'POST' && isset
($_POST ['submit_inscription'])){
    extract($_POST); 
}