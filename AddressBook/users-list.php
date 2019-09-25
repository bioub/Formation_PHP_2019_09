<?php
$users = [
    [
        'prenom' => 'Romain',
        'nom' => 'Bohdanowicz',
    ],
    [
        'prenom' => 'Michel',
        'nom' => 'Dupond',
    ],
];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Liste des utilisateurs</h2>
        <table>
            <!-- mon commentaire -->
            <?php // mon commentaire ?>
            <?php foreach ($users as $user) : ?>
            <tr>
                <td><?=$user['prenom']?> <?=$user['nom']?></td>
                <td>
                    <a href="user-details.php">Afficher</a>
                </td>
            </tr>
            <?php endforeach; ?>
            
        </table>
        <p>
            <a href="user-create.php">Ajouter un nouvel utilisateur</a>
        </p>
    </body>
</html>
