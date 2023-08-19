<?php
namespace App\services\API;

class API_request{
    public static function GET($id = ''){
        echo file_get_contents("http://Degusha.API.local/api/v1/Degusha/$id");
    }

}