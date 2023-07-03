<?php 
// list of rotes, 
use App\services\Router;
/** Router::page($uri, $page_name);*/
Router::page('/register', "register");
Router::page('/login', "login");
Router::page('/', "home");


Router::enable();