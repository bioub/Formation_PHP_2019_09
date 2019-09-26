<?php
if (isset(
    $_POST['prenom'], 
    $_POST['nom'],
    $_POST['email'],
    $_POST['telephone'],
   )) {
    // Le formulaire a été rempli
    // TODO insérer en base de données
    
    // isset($errors) permet de savoir si $errors
    
    $errors = [];
    
    if (empty($_POST['prenom'])) {
        $errors['prenom'] = 'Le prénom est obligatoire';
    }
    
    if (empty($_POST['nom'])) {
        $errors['nom'] = 'Le nom est obligatoire';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Créer un utilisateur</h2>
        <?php if (!empty($errors)) : ?>
            <p>Il y a des erreurs dans le formulaire</p>
        <?php endif; ?>
        <form method="POST">
            <p>
                Prénom :
                <input type="text" name="prenom" value="<?=$_POST['prenom']??''?>">
                <?php if (isset($errors['prenom'])) : ?>
                    <span><?=$errors['prenom']?></span> 
                <?php endif; ?>
            </p>
            <p>
                Nom :
                <input type="text" name="nom" value="<?=$_POST['nom']??''?>">
                <?php if (isset($errors['nom'])) : ?>
                    <span><?=$errors['nom']?></span> 
                <?php endif; ?>
            </p>
            <p>
                Email :
                <input type="email" name="email" value="<?=$_POST['email']??''?>">
            </p>
            <p>
                Téléphone :
                <input type="tel" name="telephone" value="<?=$_POST['telephone']??''?>">
            </p>
            <p>
                <button>Ajouter</button>
            </p>
        </form>
    </body>
</html>
