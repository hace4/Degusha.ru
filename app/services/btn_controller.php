<?php
require_once "../../vendor/autoload.php";

use App\services\API\api_request;

class btn_controller{
    public static function delete($id){
        api_request::api_conn();
        api_request::request("DELETE", [], $id);
        echo api_request::$response;

}
}

$id = explode('/', $_POST['params'])[0];
btn_controller::delete(intval($id));