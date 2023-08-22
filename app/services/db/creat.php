<?php
namespace modules\db;

use modules\db\connect;


class creat extends connect{
    /**
    *@hace4
    *method for sql insert request
    *@param string $password
    *@param string $full_name

    */
    public static function add_data($full_name, $password){
        mysqli_query(self::$db, "INSERT INTO `users` (`id`, `full_name`, `password`) VALUES (NULL, '$full_name', '$password' )");
    }
}