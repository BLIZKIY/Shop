<?php


class Router {

	private $routes;

	public function __construct() {
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}


	//Returns request string

	private function getUri() {
		if (!empty($_SERVER['REQUEST_URI'])) {
			return trim($_SERVER['REQUEST_URI'],'/');
		}
	}


	public function run() { //анализ запроса и передача управления		
		// Получить строку запроса
		$uri = $this->getUri();	


		//Проверка наличия запроса в routes.php

		foreach ($this->routes as $uriPattern => $path) {
							
			if (preg_match("~$uriPattern~", $uri)) {
				//Получаем внутренний путь из внешнего согласно правилу
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
			
				//Определяем контроллер , action и параметры

				$segments = explode('/', $internalRoute);

				$controllerName = array_shift($segments).'Controller';				
				$controllerName = ucfirst($controllerName);
				
				$actionName = 'action'.ucfirst(array_shift($segments));
				
				$parameters = $segments;
								
				//Подключаем файл контроллера
				$controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}

				// Создаем обьект, вызвать метод (action)
				$controllerObject = new $controllerName;


				$result = call_user_func_array(
					array($controllerObject, $actionName), $parameters);

				if ($result != null) {
					break;
				}
			}
		}
	}
}

?>