<?php
require_once("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $opt);

$query = $pdo->prepare('SELECT 1 FROM user WHERE username = :username AND password=:password;');
$query->execute(['username' => $username, 'password' => $password]);
$value = $query->fetchColumn();

// $query->debugDumpParams();
// exit();

if($value) {
    header('Location: comments.php');
} else {
    header('Location: forbidden.html');
}

// file_put_contents('query.log', $query . PHP_EOL, FILE_APPEND); 
