<?php
namespace modules\db;
use modules\db\connect;
class update extends connect{

    public static function update_data($id,  $key, $values)
    {
       mysqli_query(self::$db, "UPDATE `users` SET `$key` = '$values' WHERE `users`.`id` = $id;");
    }
}