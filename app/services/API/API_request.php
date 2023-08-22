<?php
namespace App\services\API;
session_start();
class API_request{
    public static function len(){
            $_SESSION["len"] = $_POST['length'];
        }
       
    }

API_request::len();