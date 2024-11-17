<?php
$host = "localhost";

$dbname = 'auth';

$username = 'root';

$password = '';

$pdo = new PDO(dsn: "mysql:host=$host;dbname=$dbname", username: $username, password: $password);
