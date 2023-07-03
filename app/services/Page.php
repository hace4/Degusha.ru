<?php
namespace App\services;
// class for using static part of psge
class Page{
    public static function part($part_name){
        require_once "views/components/$part_name.php";
    }
}