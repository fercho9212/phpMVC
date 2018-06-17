<?php

class Conect{
    private $driver,$host,$user,$pass,$database,$charset;

    public function __construc(){
        $vue_arr= require_once 'config/database.php';
        $this->$driver=$vue_arr["driver"];
        $this->$host=$vue_arr["host"];
        $this->$user=$vue_arr["user"];
        $this->$pass=$vue_arr["password"];
        $this->$database=$vue_arr["database"];
        $this->$driver=$vue_arr["vue"];
    }
}