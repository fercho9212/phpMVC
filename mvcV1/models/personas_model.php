<?php

    class personasModel
    {
        private $db;
        private $personas;

        public function __construct()
        {
            $this->db=Conectar::conexion();
            $this->personas=array();
        }
        public function getPersonas(){
            $query=$this->db->query("select * from person");

            while($row = $query->fetch(PDO::FETCH_ASSOC))
            {
                $this->personas[]=$row;    
            }
           return  $this->personas;
        }

    }

?>