<?php
$host = 'localhost';
$username = 'root';
$passwd = '';
$dbname = 'addressbook';
$link = mysqli_connect($host, $username, $passwd, $dbname);

if (!$link) {
    // TODO ERREUR 500
}

$sql = "SELECT * FROM user";

$result = mysqli_query($link, $sql);

if (!$result) {
    // TODO ERREUR 500
}

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
var_dump($users);
exit;
mysqli_close($link);
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
                    <a href="user-details.php?id=<?=$user['id']?>">Afficher</a>
                </td>
            </tr>
            <?php endforeach; ?>
            
        </table>
        <p>
            <a href="user-create.php">Ajouter un nouvel utilisateur</a>
        </p>
    </body>
</html>
