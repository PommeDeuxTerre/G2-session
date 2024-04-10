<?php

if (!session_start()){
    echo "echec de l'ouverture de la session";
    die;
}

$_SESSION["id"] = session_id();

$title = "Login";

//check password
if (isset($_POST["password"], $_POST["username"])){
    $user = "pomme";
    $password = "pomme";
    if ($_POST["username"]===$user && $_POST["password"]===$password){
        $_SESSION["is_admin"] = true;
        header("Location: ./admin.php");
    }
}

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
    <form action="" name="login" method="POST">
        <input type="text" name="username" placeholder="username" requierd>
        <input type="password" name="password" placeholder="password" requierd>
        <input type="submit" value="se connecter">
    </form>
</body>
</html>