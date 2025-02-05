<?php

namespace Core;

use Exception;
use PDO;
use PDOException;

class Database {
    public $connection;

    public function __construct($config, $username = 'root', $password = '') {
        $dsn = "mysql:" . http_build_query($config, "", ';');
        try {
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (Exception $e) {
            die("connection failed " . $e->getMessage());
        }
    }

    public function query($query, $params = []) {
        $statment= $this->connection->prepare($query);
        $statment->execute($params);

        return $statment;
    }
}