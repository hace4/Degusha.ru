<?php 
// list of rotes, 
use App\services\Router;
// Router::page($uri, $page_name);
Router::page('/login', "login");

Router::enable();