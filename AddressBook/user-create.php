<?php
require_once './includes/session.php';
checkConnectedOrRedirect();

if (isset(
    $_POST['prenom'], 
    $_POST['nom'],
    $_POST['email'],
    $_POST['telephone'],
    $_POST['password'],
   )) {
    // Le formulaire a été rempli
    $errors = [];
    
    if (empty($_POST['prenom'])) {
        $errors['prenom'] = 'Le prénom est obligatoire';
    }
    
    if (empty($_POST['nom'])) {
        $errors['nom'] = 'Le nom est obligatoire';
    }
    
    if (!empty($_FILES['photo']['name'])) {
        if ($_FILES['photo']['type'] !== 'image/jpeg') {
            $errors['photo'] = 'La photo doit être au format JPG';
        } else {
            move_uploaded_file($_FILES['photo']['tmp_name'], 'photos/' . $_FILES['photo']['name']);
            $img = imagecreatefromjpeg('photos/' . $_FILES['photo']['name']);
            
            $newLargeur = 200;
            $imgvignette = imagescale($img, $newLargeur);
            imagejpeg($imgvignette, 'photos/' . $_FILES['photo']['name']);
            imagedestroy($imgvignette);
            imagedestroy($img);
        }
    }
    
    if (empty($errors)) {
        require_once './includes/model.php';
        $link = dbConnect();

        $generatedId = dbInsertUser($link, [
            'prenom' => $_POST['prenom'],
            'nom' => $_POST['nom'],
            'email' => $_POST['email'],
            'telephone' => $_POST['telephone'],
            'password' => $_POST['password'],
            'photo' => $_FILES['photo']['name'],
        ]);
        dbClose($link);
        
        $urlDest = 'user-details.php?id=' . $generatedId;
        
        header('HTTP/1.1 302 Found');
        header("Location: $urlDest");
        exit;
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
        <form method="POST" enctype="multipart/form-data">
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
                Mot de passe :
                <input type="password" name="password" value="<?=$_POST['password']??''?>">
            </p>
            <p>
                Photo (jpeg) :
                <input type="file" name="photo">
                <?php if (isset($errors['photo'])) : ?>
                    <span><?=$errors['photo']?></span> 
                <?php endif; ?>
            </p>
            <p>
                <button>Ajouter</button>
            </p>
        </form>
    </body>
</html>
