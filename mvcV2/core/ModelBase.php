<?php

class ModelBase extends EntidadBase{

    private $table;

    public function __construct($table)
    {
        $this->table=(string) $table;
        parent::__construct($table);
    }
    public function executeSql($query){
        $query=$this->db()->query($query);
        if($query){
            if($query->num_rows>1){
                while($row=$query->fetch(PDO::FETCH_ASSOC)){
                    $result[]=$row;
                }
            }elseif($query->num_rows==1){
                if($row=$query->fetch(PDO::FETCH_OBJ)){
                    $result=$row;
                }
            }else{
                $result=true;
            }
        }else{
            $result=false;
        }
        return $result;

    }
}