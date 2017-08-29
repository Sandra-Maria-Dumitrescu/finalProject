<?php

class Application
{
    public $load;

    static function start()
    {
        $controller_name = 'Main';
        $action_name     = 'index';

        include "core/route.php";

        $controller_name = 'Controller_' . $controller_name;
        $action_name     = 'action_'     . $action_name;

        $controller_file = strtolower($controller_name) . '.php';
        $controller_path = "controllers/" . $controller_file;

        if(file_exists($controller_path)){
            include "controllers/" . $controller_file;
        } else {
            Application::ErrorPage404('Controller does not exist!');
        }

        $controller = new $controller_name;
        $action   = $action_name;

        if(method_exists($controller, $action)){
            $controller -> $action();
        } else {
            Application::ErrorPage404('Function does not exist!');
        }

    }

    static function ErrorPage404($message)
    {
        $view = new View();
        $view -> generate('template_view.php', '404_view.php', array('message' => $message));

        die();
        
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');

    }
}