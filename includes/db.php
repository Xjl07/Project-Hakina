<?php
declare(strict_types=1);

function hakina_db(): mysqli
{
    static $connection = null;
    if ($connection instanceof mysqli) {
        return $connection;
    }

    $host = getenv('MYSQL_HOST') ?: getenv('MYSQLHOST') ?: '127.0.0.1';
    $port = (int) (getenv('MYSQL_PORT') ?: getenv('MYSQLPORT') ?: 3306);
    $database = getenv('MYSQL_DATABASE') ?: getenv('MYSQLDATABASE') ?: 'hakinadb';
    $username = getenv('MYSQL_USER') ?: getenv('MYSQLUSER') ?: 'root';
    $password = getenv('MYSQL_PASSWORD') ?: getenv('MYSQLPASSWORD') ?: '';

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connection = new mysqli($host, $username, $password, $database, $port);
    $connection->set_charset('utf8mb4');
    return $connection;
}

function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
