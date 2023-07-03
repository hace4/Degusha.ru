<?php

namespace App\services;

class Router
/**
*@hace4
*method for add new rout
*@param $uri
*@param $page_name
*/
{
    private static $list = [];
    public static function page($uri, $page_name)
    {
        self::$list[] = [
            "uri" => $uri,
            "page" => $page_name
        ];
    }

    public static function enable()
    {
        // requriens a page with name from  Super Global $_GET[q]
            $query = $_GET['q'];

            foreach (self::$list as $route) {
                if ($route["uri"] === '/' . $query) {
                    require_once  "views/pages/$route[page].php";
                    die();
                }
            }       
            self::not_found();
    }

    private static function not_found(){
        //show 404 errors
        require_once  "views/errors/404.php";
    }
}
