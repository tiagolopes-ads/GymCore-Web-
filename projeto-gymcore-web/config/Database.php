<?php

class Database
{
    private static $connection = null;

    public static function connect(): PDO
    {
        if (self::$connection === null) {
            try {
                $host = 'localhost';
                $dbname = 'gymcore_db';
                $user = 'root';
                $password = ''; // Coloque a senha do seu MySQL se houver

                self::$connection = new PDO(
                    "mysql:host={$host};dbname={$dbname};charset=utf8mb4",
                    $user,
                    $password,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    ]
                );
            } catch (PDOException $e) {
                die("Erro de conexão com o banco de dados: " . $e->getMessage());
            }
        }
        return self::$connection;
    }
}