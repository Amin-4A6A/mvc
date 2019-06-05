<?php

// router
class Router {
  
    /**
     * runs the router
     *
     * @return void
     */
    public function run() {

        $uri = $_SERVER['REQUEST_URI']; // /dinges/HomeController/home
        $uri = str_replace(HTTP_DIR, '', $uri); // /HomeController/home
        $uri = trim($uri, '/'); // HomeController/home
        $parts = explode('/', $uri); // ['HomeController', 'home']

        $controller = $parts[0]; // HomeController
        $method = $parts[1] ?? 'home'; // home
        if(empty($controller)) {
            $controller = 'HomeController';
        }
        // if(empty($method)) {
        //     $method = 'home';
        // }
        $params = array_slice($parts, 2); // get params from parts remove first 2 from parts

        $file = ROOT . '/controller/' . $controller . '.php'; // /controller/HomeController.php

        include_once $file; // include the controller file

        $cont = new $controller(); // create new controller

        if(!method_exists($cont, $method)) {
            $method = 'home';
        }

        call_user_func_array([$cont, $method], $params); // call the $method on the controller with the params

    }

}