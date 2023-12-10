<?php 
require_once "../../vendor/autoload.php";

use App\services\API\api_request;

class addVideo{
    public static function add($file){
            api_request::api_conn();
            api_request::request("POST", ['Header' => '1','Title' => '2', 'video'=> new CURLFILE($file),'preview'=> new CURLFILE($file)]);
            echo api_request::$response;
    }
}
var_dump( $_FILES );