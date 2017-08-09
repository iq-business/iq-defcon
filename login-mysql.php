<?php
require_once("config.php");

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_NAME, $link);

// Check if username and password match anything in the database
$query = 'SELECT 1 FROM user WHERE username = \'' . $_POST['username'] . '\' AND password = \'' . $_POST['password'] . '\';';

$result = mysql_query($query);
$value = mysql_result($result, 0);

if($value) {
    // Get the user id
    $query = 'SELECT id FROM user WHERE username = \'' . $_POST['username'] . '\';';
    $result = mysql_query($query);
    $id = mysql_result($result, 0);
    
    header('Location: comments.php?id=' . intval($id));
} else {
    header('Location: forbidden.html');
}

file_put_contents('query.log', date('Y-m-dTH:i:s.u') . " " . $query . PHP_EOL, FILE_APPEND); 

mysql_free_result($result);
mysql_close($link);
