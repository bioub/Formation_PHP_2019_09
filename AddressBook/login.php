<?php
    require_once './includes/model.php';
    if (isset($_POST['email'], $_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $link = dbConnect();
        
        $connectedUser = dbGetConnectedUser($link, $email, $password);
        
        var_dump($connectedUser);
        
        dbClose($link);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Login</h2>
        <form method="POST">
            <p>
                Email : <input name="email">
            </p>
            <p>
                Mot de passe : <input name="password">
            </p>
            <p>
                <button>Login</button>
            </p>
        </form>
    </body>
</html>
