<?php

if (!session_start()){
    echo "echec de l'ouverture de la session";
    die;
}

$_SESSION = [];

header("Location: ./admin.php");
die;