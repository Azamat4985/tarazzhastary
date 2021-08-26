<?php 

    class Router
    {
        private $routes;

        public function __construct()
        {
            $routesPath = ROOT.'/config/routes.php';
            $this->routes = include($routesPath);   
        }

        /**
        * Возвращает строку
        */
        private function getURI(){
            // Получить строку запроса
            if(!empty($_SERVER['REQUEST_URI'])){
                return trim($_SERVER['REQUEST_URI'], '/');
            }
        }

        public function run(){
            $uri = $this->getURI();

            foreach($this->routes as $uriPattern => $path){
                // Сравнивем uri и uriPattern
                if(preg_match("~$uriPattern~", $uri)){
                    $iternalRoute = preg_replace("~$uriPattern~", $path, $uri);

                    // Определение контроллера и action
                    $segments = explode('/', $iternalRoute);

                    $controllerName = array_shift($segments).'Controller';
                    $controllerName= ucfirst($controllerName);
                    
                    $actionName = 'action'.ucfirst(array_shift($segments));

                    $parameters = $segments;
                    // print_r($parameters);

                    // Подключение файла класса-контроллера
                    $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                    if(file_exists($controllerFile)){
                        include_once($controllerFile);
                    }

                    // Создание объекта и вызова метода
                    $controllerObject = new $controllerName;
                    $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                    if($result != null){
                        break;
                    }

                }
            }
        }
    }

?>