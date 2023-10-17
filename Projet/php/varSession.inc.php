<?php
    //Chargement des données JSON
    $data = file_get_contents('json/categories.json');
    $categories = json_decode($data,true);

    //Enregistrement de la variable de session
    $_SESSION['categories'] = $categories;
?>