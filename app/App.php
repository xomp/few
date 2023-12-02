<?php

// namespace App;

class App {

	static private $routes = [];

	static public function route($method, $path, $class, $action) {
		self::$routes[$method][$path] = ["class" => $class, "action" => $action];
	}

	static public function router() {
		$method = $_SERVER['REQUEST_METHOD'];
		$path   = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		// parse_str(parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY), $query);

		$params['GET']  = $_GET;
		$params['POST'] = $_POST;

		$class  = self::$routes[$method][$path]['class'];
		$action = self::$routes[$method][$path]['action'];

		$controller = new $class();
		$controller->$action($params);

	}

	static public function redirect($url) {
		header('Location: ' . $url);
	}

	static public function run() {

		self::router();

	}
}