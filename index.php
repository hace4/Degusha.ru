<?php
use App\services\App;
require_once __DIR__ . "/config/config.php";
//include composer autoload
require_once __DIR__ . "/vendor/autoload.php";
//conect to db
// include main file which taken alls views
require_once __DIR__ . "/router/routes.php";
App::connect();


