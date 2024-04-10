<?php
$pages = ["homepage", "info", "photos"];
if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]){
    array_push($pages, "logout");
    array_push($pages, "admin");
}else {
    array_push($pages, "login");
}
?>
<h1><?= $title ?></h1>
<nav>
    <ul>
        <?php foreach ($pages as $page) : ?>
            <li>
                <a href="./<?= $page ?>.php"><?= $page ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>