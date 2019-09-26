<?php
if (empty($_GET['id'])) {
    header('HTTP/1.1 404 Not found');
    require_once './includes/404.php';
    exit;
}

require_once './includes/model.php';
$link = dbConnect();
$user = dbFetchUserById($link, $_GET['id']);
if (!$user) {
    header('HTTP/1.1 404 Not found');
    require_once './includes/404.php';
    exit;
}

dbClose($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Détails sur un utilisateur</h2>
        <p>
            Prénom : <?=htmlentities($user['prenom'])?>
        </p>
        <p>
            Nom : <?=htmlentities($user['nom'])?>
        </p>
        <?php if (!empty($user['email'])) : ?>
        <p>
            Email : <?=htmlentities($user['email'])?>
        </p>
        <?php endif; ?>
        <?php if (!empty($user['telephone'])) : ?>
        <p>
            Téléphone : <?=htmlentities($user['telephone'])?>
        </p>
        <?php endif; ?>
    </body>
</html>
