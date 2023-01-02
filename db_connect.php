<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "1234";
$db_schema = "blog";

$pdo = new PDO("mysql:host={$db_host};dbname={$db_schema}", $db_user, $db_password);
?>