<?php
$couleurs = [
    'Bleu' => '0000ff',
    'Vert' => '00ff00',
];

$couleur = $_POST['choix'] ?? $_COOKIE['theme'] ?? 'ffffff';

if (isset($_POST['choix'])) {
    setcookie('theme', $_POST['choix'], time() + 60 * 60 * 24 * 30);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body {
                background: #<?=$couleur?>;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            <select name="choix">
                <?php foreach ($couleurs as $libelle => $codeHexa) : ?>
                <option value="<?=$codeHexa?>"><?=$libelle?></option>
                <?php endforeach; ?>
            </select>
            <button>Changer la couleur</button>
        </form>
    </body>
</html>
