<?php

function dbConnect() {
    $host = 'localhost';
    $username = 'root';
    $passwd = '';
    $dbname = 'addressbook';
    return mysqli_connect($host, $username, $passwd, $dbname);
}

function dbFetchAllUsers($link) {
    $sql = "SELECT * FROM user";
    $result = mysqli_query($link, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

//function dbFetchUserById($link, $id) {
//    $sql = "SELECT prenom, nom, email, telephone FROM user WHERE id = ?";
//    $stmt = mysqli_prepare($link, $sql);
//    
//    mysqli_stmt_bind_param($stmt, 'i', $id);
//    mysqli_stmt_execute($stmt);
//    mysqli_stmt_bind_result($stmt, $prenom, $nom, $email, $telephone);
//    mysqli_stmt_fetch($stmt);
//    
//    return [
//        'prenom' => $prenom,
//        'nom' => $nom,
//        'email' => $email,
//        'telephone' => $telephone,
//    ];
//}
function dbFetchUserById($link, $id) {
    $id = (int) $id;
    $sql = "SELECT prenom, nom, email, telephone FROM user WHERE id = $id";
    $result = mysqli_query($link, $sql);
    return mysqli_fetch_array($result);
}

function dbInsertUser($link, $user) {
    $user['prenom'] = addslashes($user['prenom']);
    $user['nom'] = addslashes($user['nom']);
    $user['email'] = addslashes($user['email']);
    $user['telephone'] = addslashes($user['telephone']);
    $sql = <<<SQL
INSERT INTO user (prenom, nom, email, telephone)
VALUES ('$user[prenom]', '$user[nom]', '$user[email]', '$user[telephone]')
SQL;
    
    mysqli_query($link, $sql);
    
    return mysqli_insert_id($link);
}

function dbClose($link) {
    mysqli_close($link);
}