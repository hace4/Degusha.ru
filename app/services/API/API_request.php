<?php
namespace App\services\API;


class api_request{
    private static $curl;
    public static $response;
    private static $mehod;
    private static $params;
    private static $id;

    public static function api_conn(){
        self::$curl = curl_init() ;
    }

    private static function setup($mehod, $params, $id) : void{curl_setopt_array(self::$curl, array(
        CURLOPT_URL => "http://Degusha.API.local/notebook/api/v1/Degusha/". $id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $mehod,
        CURLOPT_POSTFIELDS => $params,
        CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
            ),
        ));
        
    }
    /**
    *@param string $mehod GET, POST, DELETE, PUTCH
    *@param array $params  [Title, Header, video as file, preview as file]
     */

    public static function request(string $mehod, array|string  $params = [], int | string $id = '' ) 
    {
        self::setup($mehod,  $params , $id);
         
        self::$response = curl_exec(self::$curl);
    }
    }
