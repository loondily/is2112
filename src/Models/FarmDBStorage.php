<?php
namespace Models;

use PDO;

class FarmDBStorage extends DBStorage
{
    public function getAll() {
        $sql = "SELECT * FROM farm";
        $result = $this->connection->query($sql);
        $rows = $result->fetchAll();
        return $rows;
    }

    public function add($row) {
        $sql = "INSERT INTO `farm`(`name`, `quantity`, `created_at`) 
        VALUES ('".$row['name']."','".$row['quantity']."','".$row['created_at']."')";
        $result = $this->connection->query($sql);
        return $result;
    }
}
