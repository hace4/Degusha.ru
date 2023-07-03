<?php
namespace App\services;
require_once "modules/database.php";


class App{
    static $db;
    static public function connect(){     
        self::$db = new \database();
    }
    
    static public function add_user($login, $password, $name){
        self::$db->set_users( $login, $password, $name );
    }
    static public function get_login_pass($login){
        return self::$db->get_logi_pass( $login );

    }
}
