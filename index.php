<?php
// namespace App;

define('DEBUG', true);
define('APP_PATH', 'app/');
define('VIEW_PATH', 'views/');


function dd($var) {
	echo '<pre style="background: #1a1a1a;
    color: #0f0;font-size: 14px;
    font-family: consolas;
    padding: 20px;">';
	print_r($var);
	echo '</pre>';
}


if(DEBUG) {
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
}


spl_autoload_register(function ($class) {
	include_once(APP_PATH . $class . '.php');
});


App::route('GET',  '/',     'EventController', 'index_show');
App::route('GET',  '/add',  'EventController', 'add_show');
App::route('POST', '/add',  'EventController', 'add_save');
App::route('GET',  '/edit', 'EventController', 'edit_show');
App::route('POST', '/edit', 'EventController', 'edit_save');
App::route('GET',  '/del',  'EventController', 'del');

App::run();