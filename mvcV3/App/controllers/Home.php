<?php
namespace App\Controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use   \App\Models\User;
use    \App\Models\Test as UserTest;

class Home
{
    public function saludo($nombre)
    {
        View::set("name", $nombre);
        View::set("title", "Custom MVC");
        View::render("home");
    }

    public function users()
    {
        $users = UserTest::getAll();
        View::set("users", $users);
        View::set("title", "Custom MVC");
        View::render("users");
    }
    public function index(){
        View::set("title", "Custom MVC");
        View::render("index");
    }
    public function register(){
        $name=$_POST['name'];
        $last=$_POST['last'];
        $register=UserTest::insert($name);
        if($register){
            header('Location: users');
        }
    }

}