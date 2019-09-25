<?php
if (empty($_GET['id'])) {
    header('HTTP/1.1 404 Not found');
    echo 'Erreur 404';
    exit;
}

$user = [
    'prenom' => 'Romain',
    'nom' => 'Bohdanowicz',
    'email' => 'romain.bohdanowicz@gmail.com',
    'telephone' => '',
];
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
            Prénom : <?=$user['prenom']?>
        </p>
        <p>
            Nom : <?=$user['nom']?>
        </p>
        <p>
            Email : <?=$user['email']?>
        </p>
        <?php if (!empty($user['telephone'])) : ?>
        <p>
            Téléphone : <?=$user['telephone']?>
        </p>
        <?php endif; ?>
    </body>
</html>
