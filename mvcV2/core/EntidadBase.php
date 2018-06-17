<?php
class EntidadBase{
    private $table,$db,$conectar;

    public function __construct($table)
    {
        $this->$table=(string) $table;
        require_once 'Conect.php';
        $this->conectar=new Conect();
        $this->db=$this->conectar->conexion();

    }
    public function getConectar(){
        return $this->conectar;
    }
    public function db(){
        return $this->db;
    }
    public function getAll(){
        $query=$this->db->query("SELECT * FROM ".$this->table." ORDER BY id DESC");
        while($row=$query->fetch(PDO::FETCH_ASSOC)){
            $result[]=$row;
        }
        return $result;
    }
    public function getById($id){
        $query=$this->db->query("SELECT * FROM ".$this->table." WHERE id =".$id." ORDER BY DESC");
        if($row=$query->fetch(PDO::FETCH_OBJ)){
            $result=$row;
        }
        return $result;
    }
    public function getBy($column,$value){
        $query=$this->db->query("SELECT * FROM ".$this->table." WHERE ".$column." = ".$value);
        while($row=$query->fetch(PDO::FETCH_ASSOC)){
            $result[]=$row;
        }
        return $result;
    }
    public function deleteById($id){
        $query=$this->db->query("DELETE FROM ".$this->table." WHERE id=".$id);
        return $query;
    }
    public function deleteBy($column,$vue){
        $query=$this->db->query("DELETE FROM ".$this->table." WHERE ".$column." = ".$vue);
        return $query;
    }
}