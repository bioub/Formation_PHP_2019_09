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

function dbFetchUserById($link, $id) {
    $sql = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($link, $sql);
    return mysqli_fetch_assoc($result);
}

function dbInsertUser($link, $user) {
    // $user['prenom']
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