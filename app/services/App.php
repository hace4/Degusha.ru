<?php 
namespace App\services;

class App{
    public static function start() {
        self::libs();
        self::db();
    }

    public static function libs(){
        $config = require_once "config/app.php";
        foreach ($congig["libs"] as $lib) {
            require_once  "libs/$lib.php"  ;
        }
    }

    public static function db(){
        $config = require_once "config/db.php";

        if($config['enable']){
            \R::setup( "mysql:host=$config[host];port=$config[port];dbname=$config[name_db]",
            "$config[username]", "$config[password]" ); //for both mysql or mariaDB
            if(!\R::testConnection()){
                die('Db not connect');
            }
        }
    }
}