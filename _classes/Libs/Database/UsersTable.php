<?php


namespace Libs\Database;

use PDO;
use PDOException;

class UsersTable
{
    private $db;
    public function __construct(MySQL $mysql)
    {
        $this->db = $mysql->connect();
    }

    public function insert($data)
    {
        try {
            $statement = $this->db->prepare(
                "INSERT INTO roles (name,email,phone,address,password, created_at)
                VALUES (:name, :email, :phone, :address, :password, NOW())"
            );
            $statement->execute($data);

            return $this->db->lastInsertID();
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
