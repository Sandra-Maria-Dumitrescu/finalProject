<?php

class Model
{
    public $db;

    function __construct()
    {
        $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    }

    public function load($model)
    {
        $model_name = 'Model_' . $model;
        $model_file = strtolower($model_name) . '.php';
        $model_path = "models/" . $model_file;

        if (file_exists($model_path)) {
            // ToDo: change include to include $model_path
            include "models/" . $model_file;
            return new $model_name;

        } else {
            Application::ErrorPage404('no model found');
        }

    }

}
