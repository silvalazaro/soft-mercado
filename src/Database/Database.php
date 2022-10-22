<?php

namespace App\Database;

use Exception;
use PDO;
use PDOException;

class Database
{
    private const HOST = 'localhost';
    private const DB = 'soft-mercado';
    private const USER = 'postgres';
    private const PASSWORD = 'example';
    private static ?Database $instance = null;
    private ?PDO $pdo = null;

    private function __construct()
    {
        try {
            $dsn = 'pgsql:host=' . self::HOST .';port=5432;dbname='. self::DB .';';
            // make a database connection
            $this->pdo = new PDO($dsn, self::USER, self::PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
           
        } catch (PDOException $e) {
            throw new Exception('Falha ao conectar ao banco de dados. ' . $e->getMessage());
        } 
    }

    public static function getPdo()
    {
        if (!self::$instance) self::$instance = new static;
        return self::$instance->pdo;
    }

    public function getConfig()
    {
    }
}
