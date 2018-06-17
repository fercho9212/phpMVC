<?php
namespace App\Interfaces;
defined("APPPATH") OR die("Access denied");

interface Crud
{
    public static function getAll();
    public static function getById($id);
    public static function delete($id);
}