<?php
require_once './includes/model.php';
$link = dbConnect();
$users = dbFetchAllUsers($link);
dbClose($link);
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
                <td><?=htmlentities($user['prenom'])?> <?=htmlentities($user['nom'])?></td>
                <td>
                    <a href="user-details.php?id=<?=htmlentities($user['id'])?>">Afficher</a>
                </td>
            </tr>
            <?php endforeach; ?>
            
        </table>
        <p>
            <a href="user-create.php">Ajouter un nouvel utilisateur</a>
        </p>
    </body>
</html>
