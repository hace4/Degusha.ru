<?php
namespace App\services\API;

class API_request{
    public static function GET($id = ''){
        return file_get_contents("http://Degusha.API.local/notebook/api/v1/Degusha/$id");
    }

}