<?php
namespace App\Models;
defined("APPPATH") OR die("Access denied");

use \Core\Database;
use \App\Interfaces\Crud;

class Test implements Crud
{
    public static function getAll()
    {
        try {
			$connection = Database::instance();
			$sql = "SELECT * from usuarios";
			$query = $connection->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}
        catch(\PDOException $e)
        {
			print "Error!: " . $e->getMessage();
		}
    }

    public static function getById($id)
    {
        try {
            $connection = Database::instance();
            $sql = "SELECT * from usuarios WHERE id = ?";
            $query = $connection->prepare($sql);
            $query->bindParam(1, $id, \PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
        }
        catch(\PDOException $e)
        {
            print "Error!: " . $e->getMessage();
        }
    }

    public static function insert($name)
    {
        try {
            $connection = Database::instance();
            $sql = "INSERT INTO usuarios (nombre) VALUES (:name)";
            $query = $connection->prepare($sql);
            $query->bindParam(':name', $name);
            
            $query->execute();
            return true;
        }
        catch(\PDOException $e)
        {
            print "Error!: " . $e->getMessage();
        }
    }

    public static function update($user)
    {

    }

    public static function delete($id)
    {

    }
}