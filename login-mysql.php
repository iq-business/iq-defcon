<?php
require_once("config.php");

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
mysql_select_db(DB_NAME, $link);

$query = 'SELECT COUNT(*) FROM user WHERE username = \'' . $_POST['username'] . '\' AND password = \'' . $_POST['password'] . '\';';

$result = mysql_query($query);
$value = mysql_result($result, 0);

if($value) {
    header('Location: comments.php');
} else {
    header('Location: forbidden.html');
}

file_put_contents('query.log', $query . PHP_EOL, FILE_APPEND); 

mysql_free_result($result);
mysql_close($link);
