<?php
require_once './includes/model.php';
$link = dbConnect();
$users = dbFetchAllUsers($link);
dbClose($link);

header('Content-type: application/json');
echo json_encode($users);
