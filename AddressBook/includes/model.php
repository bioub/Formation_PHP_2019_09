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

function dbClose($link) {
    mysqli_close($link);
}