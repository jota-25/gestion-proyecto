<?php

namespace App\Config;

use PDO;
use PDOException;

class Database
{
    private string $host;
    private string $dbname;
    private string $user;
    private string $pass;

    public function __construct()
    {
        $this->loadEnv();

        $this->host = $_ENV['DB_HOST'];
        $this->dbname = $_ENV['DB_NAME'];
        $this->user = $_ENV['DB_USER'];
        $this->pass = $_ENV['DB_PASS'];
    }

    private function loadEnv(): void
    {
        $envPath = dirname(__DIR__, 2) . '/.env';

        $lines = file($envPath, FILE_IGNORE_NEW_LINES);

        foreach ($lines as $line) {

            if (trim($line) === '') {
                continue;
            }

            [$key, $value] = explode('=', $line, 2);

            $_ENV[$key] = $value;
        }
    }

    public function connect(): PDO
    {
        try {

            return new PDO(
                "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                $this->user,
                $this->pass,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );

        } catch (PDOException $e) {

            die("Error de conexión: " . $e->getMessage());

        }
    }
}