<?php
    require_once './includes/model.php';
    require_once './includes/session.php';
    session_start_once();
    
    if (isset($_POST['email'], $_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $link = dbConnect();
        
        $connectedUser = dbGetConnectedUser($link, $email, $password);
        dbClose($link);
        
        if ($connectedUser) {
            session_log_user($connectedUser);
            header('HTTP/1.1 302 Found');
            header('Location: index.php');
            exit;
        }
        
        $error = 'Mauvais login/password';
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
        <?php if (isset($error)) : ?>
        <p><?=$error?></p>
        <?php endif; ?>
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
