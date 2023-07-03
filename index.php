<?php
//use db
use App\services\App;

// include config
require_once __DIR__ . "/config/config.php";
//include composer autoload
require_once __DIR__ . "/vendor/autoload.php";
App::start();
// include main file which taken alls views
require_once __DIR__ . "/router/routes.php";


