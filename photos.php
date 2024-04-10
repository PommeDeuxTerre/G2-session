<?php

if (!session_start()){
    echo "echec de l'ouverture de la session";
    die;
}

$_SESSION["id"] = session_id();

$title = "Photos";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("./menu.inc.php");?>
</body>
</html>