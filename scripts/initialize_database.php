<?php
declare(strict_types=1);

$host = getenv('MYSQL_HOST') ?: getenv('MYSQLHOST');
$port = getenv('MYSQL_PORT') ?: getenv('MYSQLPORT') ?: '3306';
$database = getenv('MYSQL_DATABASE') ?: getenv('MYSQLDATABASE');
$user = getenv('MYSQL_USER') ?: getenv('MYSQLUSER');
$password = getenv('MYSQL_PASSWORD') ?: getenv('MYSQLPASSWORD') ?: '';

if (!$host || !$database || !$user) {
    fwrite(STDERR, "Database variables are not configured; skipping initialization.\n");
    exit(0);
}

$pdo = null;
for ($attempt = 1; $attempt <= 30; $attempt++) {
    try {
        $pdo = new PDO(
            "mysql:host={$host};port={$port};dbname={$database};charset=utf8mb4",
            $user,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_MULTI_STATEMENTS => true]
        );
        break;
    } catch (PDOException $exception) {
        if ($attempt === 30) {
            fwrite(STDERR, "Database was not ready after 30 attempts.\n");
            exit(1);
        }
        sleep(2);
    }
}

$schema = file_get_contents(dirname(__DIR__) . '/database.sql');
if ($schema === false) {
    fwrite(STDERR, "Unable to read database schema.\n");
    exit(1);
}

$pdo->exec($schema);
fwrite(STDOUT, "Hakina database schema is ready.\n");
