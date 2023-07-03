<?php

require_once __DIR__ . "/config/config.php";
require_once __DIR__ . "/modules/database.php";
//include composer autoload
require_once __DIR__ . "/vendor/autoload.php";
//connect to db
// include main file which taken alls views
require_once __DIR__ . "/router/routes.php";

if ($_GET['q'] === 'sosi')
{
    $db = new database();
    $db->set_users('2', 1, '1');
    unset($db);
}